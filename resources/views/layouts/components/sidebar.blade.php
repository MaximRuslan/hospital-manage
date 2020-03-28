    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip"
                        data-placement="right" data-original-title="General"></i>
                </li>
                <li class=" nav-item dashboard">
                    <a href="{{route('home')}}">
                        <i class="feather icon-home"></i>
                        <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>


                <!-- <li class=" nav-item invoice">
                    <a href="{{route('invoice.index')}}">
                        <i class="feather icon-file-text"></i>
                        <span class="menu-title" data-i18n="Invoice">Invoice</span>
                    </a>
                </li> -->
                <!-- <li class=" nav-item"><a href=""><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="invoice-list.html" data-i18n="Invoice List">Invoice List</a>
                        </li>
                        <li><a class="menu-item" href="invoice-view.html" data-i18n="Invoice View">Invoice View</a>
                        </li>
                        <li><a class="menu-item" href="invoice-edit.html" data-i18n="Invoice Edit">invoice Edit</a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{route('invoice.create')}}" data-i18n="Invoice Add">invoice Add</a>
                        </li>
                    </ul>
                </li> -->
                <li class=" nav-item patient">
                    <a href="{{route('invoice.index')}}">
                        <i class="feather icon-user-x"></i>
                        <span class="menu-title" data-i18n="Patients">Invoice</span>
                    </a>
                </li>
                <li class=" nav-item patient">
                    <a href="{{route('patients.index')}}">
                        <i class="feather file-text"></i>
                        <span class="menu-title" data-i18n="Patients">Patients</span>
                    </a>
                </li>
                @if(auth()->user()->type !='staff')
                <li class=" nav-item staff">
                    <a href="{{route('staff.index')}}">
                        <i class="feather icon-user"></i>
                        <span class="menu-title" data-i18n="Staff">Staff</span>
                    </a>
                </li>
                @endif
                <li class=" nav-item department">
                    <a href="{{route('department.index')}}">
                        <i class="feather icon-layers"></i>
                        <span class="menu-title" data-i18n="Department">Department</span>
                    </a>
                </li>
                <li class=" nav-item doctor">
                    <a href="{{route('doctors.index')}}">
                        <i class="feather icon-user-check"></i>
                        <span class="menu-title" data-i18n="Doctors">Doctors</span>
                    </a>
                </li>
                <li class=" nav-item service">
                    <a href="{{route('services.index')}}">
                        <i class="feather icon-phone"></i>
                        <span class="menu-title" data-i18n="Services">Services</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
