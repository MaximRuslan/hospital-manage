@extends('layouts.app')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- App invoice wrapper -->
            <section class="app-invoice-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-8 col-12 printable-content">
                        <!-- using a bootstrap card -->
                        <div class="card" id="print_section">
                            <!-- card body -->
                            <div class="card-body p-2">
                                <!-- card-header -->
                                <div class="card-header px-0">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                            <span class="invoice-id font-weight-bold">Invoice# </span>
                                            <span>{{$invoice->invoice_id}}</span>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-xl-8">
                                            <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                <div class="issue-date pr-2">
                                                    <span class="font-weight-bold no-wrap">Issue Date: </span>
                                                    <span>{{date('d/m/Y', strtotime($invoice->created_at))}}</span>
                                                </div>
                                                <div class="due-date">
                                                    <span class="font-weight-bold no-wrap">DueDate: </span>
                                                    <span>{{$invoice->due_date}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- invoice logo and title -->
                                <div class="invoice-logo-title row py-2">
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                                        <h2 class="text-primary">Invoice</h2>
                                        <!-- <span>Software Development</span> -->
                                    </div>
                                    <!-- <div class="col-6 d-flex justify-content-end invoice-logo">
                                        <img src="../../../app-assets/images/logo/pixinvent-logo.png" alt="company-logo" height="46" width="164">
                                    </div> -->
                                </div>
                                <hr>

                                <!-- invoice address and contacts -->
                                <div class="row invoice-adress-info py-2">
                                    <div class="col-1"></div>
                                    <div class="col-5 mt-1 from-info">
                                        <div class="info-title mb-1">
                                            <span>Bill From</span>
                                        </div>
                                        <div class="company-name mb-1">
                                            <span class="text-muted">Pixinvent PVT.LTD</span>
                                        </div>
                                        <div class="company-address mb-1">
                                            <span class="text-muted">9205 Whitemarsh Street New York, NY 10002</span>
                                        </div>
                                        <div class="company-email mb-1">
                                            <span class="text-muted">hello@clevision.net</span>
                                        </div>
                                        <div class="company-phone  mb-1">
                                            <span class="text-muted">601-678-8022</span>
                                        </div>
                                    </div>
                                    <div class="col-5 mt-1 to-info">
                                        <div class="info-title mb-1">
                                            <span>Bill To</span>
                                        </div>
                                        <div class="company-address mb-1">
                                            <span class="text-muted">{{$patient->address}}</span>
                                        </div>
                                        <div class="company-email  mb-1 mb-1">
                                            <span class="text-muted">{{$patient->email}}</span>
                                        </div>
                                        <div class="company-phone  mb-1">
                                            <span class="text-muted">{{$patient->phone}}</span>
                                        </div>
                                    </div>
                                </div>

                                <!--product details table -->
                                <div class="product-details-table py-2 table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Name</th>
                                                <th scope="col">Doctor Name</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Price</th>
                                                <!-- <th scope="col">PRICE</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>{{$service->name}}</td>
                                                <td>{{$service->getDoctor->name}}</td>
                                                <td>{{$service->getDepartment->name}}</td>
                                                <td class="font-weight-bold">KWD {{$service->price}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <hr>

                                <!-- invoice total -->
                                <div class="invoice-total py-2">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mt-75">
                                            @if($invoice->show_payment_terms == 1)
                                            <p id="payment_terms" style="padding-left: 15px">Payment terms: {{$invoice->payment_terms}}</p>
                                            @endif
                                            @if($invoice->show_client_notes == 1)
                                            <p id="client_terms" style="padding-left: 15px">Client notes: {{$invoice->client_notes}}</p>
                                            @endif
                                        </div>
                                        <div class="col-12 col-sm-6 d-flex justify-content-end mt-75">
                                            <ul class="list-group cost-list">
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Subtotal </span>
                                                    <span class="cost-value">KWD {{$invoice->sub_total}}</span>
                                                </li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Discount </span>
                                                    <span class="cost-value">-KWD {{$invoice->total_discount}}</span>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Invoice Total </span>
                                                    <span class="cost-value">KWD {{$invoice->invoice_total}}</span>
                                                </li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Total Paid </span>
                                                    <span class="cost-value">-KWD {{$invoice->total_paid}}</span>
                                                </li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Total Due </span>
                                                    <span class="cost-value">KWD {{$invoice->total_due}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- buttons section -->
                    <div class="col-xl-3 col-md-4 col-12 action-btns">
                        <div class="card">
                            <div class="card-body p-2">
                                <button class="btn btn-primary btn-block mb-1" id="send_btn" onclick="sendInvoice({{$invoice->id}})"><i class="fa fa-circle-o-notch fa-spin fa-fw" id="spinner_icon" style="display: none;"></i>Send Invoice</button>
                                <a href="#" class="btn btn-info btn-block mb-1 print-invoice"> <i class="feather icon-printer mr-25 common-size"></i> Print</a>
                                <a href="{{route('invoice.edit', $invoice->id )}}" class="btn btn-info btn-block mb-1"><i class="feather icon-edit-2 mr-25 common-size"></i> Edit Invoice</a>
                                <!-- <a href="{{route('invoi.download_pdf', $invoice->id)}}" class="btn btn-primary btn-block mb-1" onclick="downloadPdf({{$invoice->id}})"> <i class="feather icon-download"></i> Download PDF</a> -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
<!-- END: Content-->
<script type="text/javascript">
    function sendInvoice(id) {
        event.preventDefault();
        if ($("#send_btn").hasClass("disabled")) {
            console.log("Disabled....");
            return;
        }
        Swal.fire({
          title: "Send Invoice",
          text: "Are you sure that you want to send this invoice?",
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
            $('#send_btn').addClass("disabled");
            $("#spinner_icon").show();
            $.post("{{route('invoi.send_invoice')}}", {id: id, _token:"{{csrf_token()}}"}, function(data) {
                console.log(data)
                var object = JSON.parse(data);
                if (object.status=='success') {
                    $('#send_btn').removeClass("disabled");
                    $("#spinner_icon").hide();
                    toastr.success(object.status, object.msg, {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 1500});
                  // $(obj).children().first().removeClass('icon-navigation').addClass('icon-check-circle');;
                }
            })
          }
        });
    }
    $('.print-invoice').on('click', function () {
        var printContents = document.getElementById("print_section").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body>";
        window.print();
        document.body.innerHTML = originalContents;
    })
</script>
@endsection