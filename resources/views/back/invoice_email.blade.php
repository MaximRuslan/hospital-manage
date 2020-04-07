<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->			   
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-invoice.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
</head>
<body>
	<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- App invoice wrapper -->
                <section class="app-invoice-wrapper">
                    <div class="row">
                        <div class="col-xl-9 col-md-8 col-12 printable-content" style="margin: auto;">
                            <!-- using a bootstrap card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body p-2">
                                    <!-- card-header -->
                                    <div class="card-header px-0">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                                <span class="invoice-id font-weight-bold">Invoice# </span>
                                                <span>948372</span>
                                            </div>
                                            <div class="col-md-12 col-lg-5 col-xl-8">
                                                <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                    <div class="issue-date pr-2">
                                                        <span class="font-weight-bold no-wrap">Issue Date: </span>
                                                        <span>07/02/2019</span>
                                                    </div>
                                                    <div class="due-date">
                                                        <span class="font-weight-bold no-wrap">DueDate: </span>
                                                        <span>06/04/2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- invoice logo and title -->
                                    <div class="invoice-logo-title row py-2">
                                        <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                                            <h2 class="text-primary">Invoice</h2>
                                            <span>Software Development</span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end invoice-logo">
                                            <img src="../../../app-assets/images/logo/pixinvent-logo.png" alt="company-logo" height="46" width="164">
                                        </div>
                                    </div>
                                    <hr>

                                    <!-- invoice address and contacts -->
                                    <div class="row invoice-adress-info py-2">
                                        <div class="col-6 mt-1 from-info">
                                            <div class="info-title mb-1">
                                                <span>Bill From</span>
                                            </div>
                                            <div class="company-name mb-1">
                                                <span class="text-muted">Clevision PVT.LTD</span>
                                            </div>
                                            <div class="company-address mb-1">
                                                <span class="text-muted">9205 Whitemarsh Street New York, NY 10002</span>
                                            </div>
                                            <div class="company-email  mb-1 mb-1">
                                                <span class="text-muted">hello@clevision.net</span>
                                            </div>
                                            <div class="company-phone  mb-1">
                                                <span class="text-muted">601-678-8022</span>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-1 to-info">
                                            <div class="info-title mb-1">
                                                <span>Bill To</span>
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
                                    </div>

                                    <!--product details table -->
                                    <div class="product-details-table py-2 table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ITEM</th>
                                                    <th scope="col">DESCRIPTION</th>
                                                    <th scope="col">COST</th>
                                                    <th scope="col">QTY</th>
                                                    <th scope="col">PRICE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Frest Admin</td>
                                                    <td>HTML Admin Template</td>
                                                    <td>28</td>
                                                    <td>1</td>
                                                    <td class="font-weight-bold">$28.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Apex Admin</td>
                                                    <td>Angular Admin Template</td>
                                                    <td>24</td>
                                                    <td>1</td>
                                                    <td class="font-weight-bold">$24.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Stack Admin</td>
                                                    <td>HTML Admin Template</td>
                                                    <td>24</td>
                                                    <td>1</td>
                                                    <td class="font-weight-bold">$24.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>

                                    <!-- invoice total -->
                                    <div class="invoice-total py-2">
                                        <div class="row">
                                            <div class="col-4 col-sm-6 mt-75">
                                                <p>Thanks for your business.</p>
                                            </div>
                                            <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                                <ul class="list-group cost-list">
                                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                        <span class="cost-title mr-2">Subtotal </span>
                                                        <span class="cost-value">$ 72.00</span>
                                                    </li>
                                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                        <span class="cost-title mr-2">Discount </span>
                                                        <span class="cost-value">-$ 09.60</span>
                                                    </li>
                                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                        <span class="cost-title mr-2">Tax </span>
                                                        <span class="cost-value">21%</span>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                        <span class="cost-title mr-2">Invoice Total </span>
                                                        <span class="cost-value">$ 61.40</span>
                                                    </li>
                                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                        <span class="cost-title mr-2">Paid To Date </span>
                                                        <span class="cost-value">-$ 00.00</span>
                                                    </li>
                                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                        <span class="cost-title mr-2">Balance (USD) </span>
                                                        <span class="cost-value">$ 10,953</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
	
</body>
</html>