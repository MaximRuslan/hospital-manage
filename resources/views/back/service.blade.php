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
    </style>
    <!-- BEGIN: Content-->
    <div class="app-content content">

    	<!-- alert section -->

    	@if(session('status'))
    	<div class="alert alert-success alert-dismissible mb-2" role="alert">
            {{session('status')}}
        </div>
        @endif
        <!-- alert section end -->
        
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
                                <h3 class="card-title" id="emailCompose">Service List</h3>
                                <a href="{{route('services.create')}}" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="feather icon-user-plus"></i>&nbspCreate</a>
                            </div>
                                <div class="card-body">
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                            	  
                                                <tr>
                                                    <th>No</th>
                                                    <th>name</th>
                                                    <th>Price</th>
                                                    <th>Department</th>
                                                    <th>Doctor</th>
                                                    <th>Status</th>
                                                    <th>Publish Date</th>
                                                    <th style="width: 20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($services as $key => $service)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td> {{$service->name}} </td>
                                                    <td> {{$service->price}} </td>
                                                    <td> {{$service->getDepartment->name}} </td>
                                                    <td> {{$service->getDoctor->name}} </td>
                                                    <td> {{$service->status}} </td>
                                                    <td> {{$service->publish_date}} </td>
                                                    <td class="space-center"> 
                                                      <a href="{{route('services.edit', $service->id )}}"
                                                     class="btn btn-warning btn-min-width mr-1 mb-1">Edit
                                                    </a> 
                                                      <form action="{{route('services.destroy',  $service->id  )}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"  class="btn btn-danger btn-min-width mr-1 mb-1">Delete</button>
                                                      </form>
                                                    </td>
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
    <!-- END: Content-->

@endsection