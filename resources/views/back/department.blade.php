@extends('layouts.app')
@section('content')


    <style type="text/css">
      .space-bet{
        display: flex;
        justify-content: space-between;
      }
      .space-center{
        display: flex;
      }
      .pime-grid-button{
        float:left;

      }
      .pime-grid-filter{float:left;margin-left:10px}
    </style>
    <!-- BEGIN: Content-->
    <div class="app-content content">

        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                              <div class="card-header space-bet">
                                <h3 class="card-title" id="emailCompose">Department List</h3>
                                @if(auth()->user()->type !='staff')
                                <a href="{{route('department.create')}}" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="feather icon-plus"></i>&nbspCreate</a>
                                @endif
                            </div>
                                <div class="card-body">
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table center-table">
                                            <thead>

                                                <tr>
                                                    @if(auth()->user()->type !='staff')
                                                    <th class="text-center"><input type="checkbox" id="selectAll" data-size="sm" ></th>
                                                    @endif
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Publish date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($departments as $key => $department)
                                                <tr>
                                                    @if(auth()->user()->type !='staff')
                                                    <td class="text-center">
                                                        <input type="checkbox" class="check_item" unikey="{{$department->id}}" id="test-{{$key}}" name="test-{{$key}}" data-size="sm">
                                                    </td>
                                                    @endif
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$department->name}}</td>
                                                    <td>
                                                        @if($department->status == "published")
                                                            <span class="badge badge-primary">Published</span>
                                                        @else
                                                        <span class="badge badge-danger">Unpublished</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{date('j F, Y', strtotime($department->status_date))}}
                                                    </td>
                                                    @if(auth()->user()->type !='staff')
                                                    <td class="text-center">
                                                        <a href="{{route('department.edit', $department->id )}}" class="primary edit mr-1">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="{{route('home')}}" onclick="event.preventDefault();confirm_delete({{$department->id}});"
                                                         class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
                                                        <form id="delete-form{{$department->id}}" action="{{route('department.destroy',  $department->id  )}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </td>
                                                    @else
                                                    <td>Not available</td>
                                                    @endif
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- delete multi -->
    <form id="multi-delete" action="{{route('depart.multi_delete')}}" method="post">
        @csrf
        <input type="hidden" name="sel_ids" id="del_ids">
    </form>
    <!-- END: Content-->

    <!-- status multi -->
    <form id="multi-status" action="{{route('depart.multi_status')}}" method="post">
        @csrf
        <input type="hidden" name="sel_ids" id="status_ids">
        <input type="hidden" name="status" id="status">
    </form>
    <!-- end form -->
    <!-- END: Content-->
    @if(session('action'))
    <script type="text/javascript">
     $(function(){
      var action = "<?php echo session('action') ?>";
      var msg = "<?php echo session('msg') ?>";
      console.log("msg", action);
      // $("#civil_id").css("border-color", '#d3167f');
      // $("#civil_id").focus();
      if (action == "Create" || action == 'Update' || action == 'published' || action == 'unpublished' || action == 'Delete') {
        toastr.success(msg, action, {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 1500});
      } else {
        toastr.error(msg, action, {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 1500});
      }
     })
    </script>
    @endif

    <script type="text/javascript">
        function multi_delete(){
            var items=$(".check_item:checked");
            sel_ids=[];
            for (var i = items.length - 1; i >= 0; i--) {
                del_id=$(items[i]).attr('unikey');
                sel_ids.push(del_id);
            }
            $("#del_ids").val(sel_ids);

            Swal.fire({
              title: "Delete",
              text: "Are you sure that you want to delete these records?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Yes",
              confirmButtonClass: "btn btn-primary",
              cancelButtonClass: "btn btn-danger ml-1",
              buttonsStyling: false
            }).then(function(result) {
              if (result.value) {
                $("#multi-delete").submit();
              }
            });
        }
        function confirm_delete(id){
            Swal.fire({

              title: "Delete",
              text: "Are you sure that you want to delete this record?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",

              confirmButtonText: "Yes",
              confirmButtonClass: "btn btn-primary",
              cancelButtonClass: "btn btn-danger ml-1",
              buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    $("#delete-form" + id).submit();
                  }
                });
            }
        function multi_status(){
            var items=$(".check_item:checked");
            var msg = '';
            status=$("#status_sel").val();
            if (status == 'Publish')
              msg = 'Are you sure you want to publish these records?';
            else msg = 'Are you sure you want to unpublish these records?';
            if(status != ""){
                if(items.length == 0){
                    Swal.fire({
                      title: "warning",
                      text: "Please select record(s).",
                      type: "error",
                      confirmButtonClass: "btn btn-danger",
                      buttonsStyling: false
                    });
                    $("#status_sel").val("");
                }else{
                    sel_ids=[];
                    for (var i = items.length - 1; i >= 0; i--) {
                        sel_id=$(items[i]).attr('unikey');
                        sel_ids.push(sel_id);
                    }
                    $("#status_ids").val(sel_ids);
                      var title = '';
                      if (status === 'published'){
                        title = 'Publish';
                      } else {
                        title = 'UnPublish';
                      }
                        Swal.fire({
                          title: title,
                          text: msg,
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonColor: "#3085d6",
                          cancelButtonColor: "#d33",
                          confirmButtonText: "Yes",
                          confirmButtonClass: "btn btn-primary",
                          cancelButtonClass: "btn btn-danger ml-1",
                          buttonsStyling: false
                        }).then(function(result) {
                        if (result.value) {
                          $("#status").val(status);
                          $("#multi-status").submit();
                        }
                      });

                }
            }
        }

        function del_btn(){
            sel_item=$("input[type=checkbox]:checked");
            sel_count=sel_item.length;

            if(sel_count > 0){

                $("#multi-del").css('visibility', 'visible');
            }else{

                $("#multi-del").css('visibility', 'hidden');
            }

            total_count=$(".check_item").length;
            if(total_count == sel_count){
                $("#selectAll").prop("checked", true);
            }
        }
        $(function(){
            $("#selectAll").click(function() {
                console.log($(this).prop("checked"))
                $(".check_item").prop("checked", $(this).prop("checked"));
            });

            $("input[type=checkbox]").click(function() {
                if (!$(this).prop("checked")) {
                    $("#selectAll").prop("checked", false);
                }
                del_btn();
            });

        })
    </script>
@endsection
