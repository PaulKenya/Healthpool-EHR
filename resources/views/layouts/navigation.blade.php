
<nav class="navbar navbar-expand-lg bb-1 navbar-light bg-white fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-white bb-1 br-1">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="{{route('home')}}">Healthpool EHR</a>
    </header>

    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <!-- Start Finance-->
                @if(str_contains(Request::url(),'patient_profile'))
                                         @else
                <li class="nav-item {{ str_contains(Request::url(),route('home')) ==true? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link " href="{{ route('home') }}">
                        <i class="i-cl-2 fa fa-fw fa-home"></i>
                        <span class="nav-link-text">Home</span>
                    </a>
                </li>
                @endif
                <!--start patient profile-->

                @if(Auth::user()->is_admin == 1)

                    {{--<li class="nav-item {{ str_contains(Request::url(),route('home')) ==true? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">--}}
                    {{--<a class="nav-link " href="{{ route('home') }}">--}}
                    {{--<i class="i-cl-2 fa fa-fw fa-home"></i>--}}
                    {{--<span class="nav-link-text">Home</span>--}}
                    {{--</a>--}}
                    {{--</li>    --}}

                    <li class="nav-item {{ str_contains(Request::url(),route('us_home')) ==true? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="User Roles">
                        <a class="nav-link " href="{{route('us_home')}}">
                            <i class="i-cl-2 fa fa-fw fa-cogs"></i>
                            <span class="nav-link-text">User Settings</span>
                        </a>
                    </li>

                @endif

                @if(str_contains(Request::url(),route('home')))

                    <li class="nav-item {!! str_contains(Request::url(),route('administration_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('administration_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-shield i-cl-8"></i>
                            <span class="nav-link-text">Patient file</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('clinicalservices_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('wards_bed')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-h-square i-cl-3"></i>
                            <span class="nav-link-text">WARD MANAGEMENT</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('clinicalservices_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('clinicalservices_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-h-square i-cl-3"></i>
                            <span class="nav-link-text">Clinical Services</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('diagnosticservices')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('diagnosticservices')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-stethoscope i-cl-5"></i>
                            <span class="nav-link-text">Diagnostic Services</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('public_health_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('public_health_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-hospital-o i-cl-4"></i>
                            <span class="nav-link-text">Public Health</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('pharmaceuticalservices')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('pharmaceuticalservices')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-medkit i-cl-7"></i>
                            <span class="nav-link-text">Pharmaceutical Services</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('stores_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('stores_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa  fa-bars i-cl-7"></i>
                            <span class="nav-link-text">Stores</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('finance_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Finance</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('farewellparlour')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('farewellparlour')}}" data-parent="#exampleAccordion" >

                            <i class="fa fa-fw fa-bed i-cl-6"></i>
                            <span class="nav-link-text">Farewell Pallor</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('analytics')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('analytics')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-shield i-cl-8"></i>
                            <span class="nav-link-text">Analytics</span>
                        </a>
                    </li>

                @endif

                @if(str_contains(Request::url(),'finance'))
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_accounting')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_accounting')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Accounting</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_banking')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_banking')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Banking</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_sales')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_sales')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-dollar i-cl-3"></i>
                            <span class="nav-link-text">Sales</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_employees')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_employees')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-user i-cl-4"></i>
                            <span class="nav-link-text">Employees</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_invoice')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_invoice')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-print i-cl-5"></i>
                            <span class="nav-link-text">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_payment')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('patient_payment')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-print i-cl-5"></i>
                            <span class="nav-link-text">Patient Payment</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_insurance')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_insurance')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-money i-cl-6"></i>
                            <span class="nav-link-text">Insurance</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_billing')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_billing')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-dollar i-cl-7"></i>
                            <span class="nav-link-text">Billing</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_expenses')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_expenses')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-dollar i-cl-8"></i>
                            <span class="nav-link-text">Expenses</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_budgets')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_budgets')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-money i-cl-8"></i>
                            <span class="nav-link-text">Budgets</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_taxes')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_taxes')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Taxes</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('orders')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('orders')}}" data-parent="#exampleAccordion">
                            <i class="fas fa-cart-plus"></i>
                            <span class="nav-link-text">orders</span>
                        </a>
                    </li>
                @endif
                <!-- End Finance -->
                <!-- Start Public Health-->



                <!-- End Public Health -->

                <!-- Start Diagnostic Services-->
                @if(str_contains(Request::url(),'farewellparlour'))

                @endif
                <!--Start Pharmaceutical Services-->
                @if(str_contains(Request::url(),route('pharmaceuticalservices')))
                    <li class="nav-item {!! str_contains(Request::url(),route('pharmacy_purchases')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('pharmacy_purchases')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-money i-cl-1"></i>
                            <span class="nav-link-text">Purchases</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('pharmacy_inventory')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('pharmacy_inventory')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-bars i-cl-1"></i>
                            <span class="nav-link-text">Inventory</span>
                        </a>
                    </li>
                    {{--<li class="nav-item {!! str_contains(Request::url(),route('pharmacy_withdrawal_form')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">--}}
                        {{--<a class="nav-link" href="{{route('pharmacy_withdrawal_form')}}" data-parent="#exampleAccordion">--}}
                            {{--<i class="fa fa-money i-cl-1"></i>--}}
                            {{--<span class="nav-link-text">Pharmacy Withdrawal Form</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="nav-item {!! str_contains(Request::url(),route('orders')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('orders')}}" data-parent="#exampleAccordion">
                            <i class="fas fa-cart-plus"></i>
                            <span class="nav-link-text">orders</span>
                        </a>
                    </li>
                @endif
                <!-- End Pharmaceutical Services -->
                <!--Start administration-->

                @if(Request::url()===route('administration_home'))
                    <li class="nav-item {!! str_contains(Request::url(),route('attendances')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('attendances')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-hospital-o i-cl-1"></i>
                            <span class="nav-link-text">Attendances</span>
                        </a>
                    </li>
                    {{--<li class="nav-item {!! str_contains(Request::url(),route('billing')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">--}}
                        {{--<a class="nav-link" href="{{route('billing')}}" data-parent="#exampleAccordion">--}}
                            {{--<i class="fa fa-hospital-o i-cl-1"></i>--}}
                            {{--<span class="nav-link-text">Billing</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item {!! str_contains(Request::url(),route('official_use')) == true?'active':'' !!}">--}}
                        {{--<a class="nav-link" href="{{route('official_use')}}" data-parent="#exampleAccordion" >--}}
                            {{--<i class="fa fa-plus-square i-cl-2"></i>--}}
                            {{--<span class="nav-link-text">Official Use</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_information')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('patient_information')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-heart i-cl-3"></i>
                            <span class="nav-link-text">Patient Information</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('employees')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('employees')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-user-md i-cl-3"></i>
                            <span class="nav-link-text">Employees</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('recruitment')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('recruitment')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-user-md i-cl-3"></i>
                            <span class="nav-link-text">Recruitment</span>
                        </a>
                    </li>



                @endif
                <!--end administration-->
                @if(str_contains(Request::url(),'patient_profile'))

                    <li class="nav-item {!! str_contains(Request::url(),route('patient_home')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="home">
                        <a class="nav-link" href="{{route('patient_home')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-home i-cl-1"></i>
                            <span class="nav-link-text">home</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_appointments')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Appointments">
                        <a class="nav-link" href="{{route('patient_appointments')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-calendar  i-cl-1"></i>
                            <span class="nav-link-text">appointments</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_cards')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="cards">
                        <a class="nav-link" href="{{route('patient_cards')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-hospital-o i-cl-1"></i>
                            <span class="nav-link-text">cards</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_booklets')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="booklets">
                        <a class="nav-link" href="{{route('patient_booklets')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-address-book i-cl-1"></i>
                            <span class="nav-link-text">booklets</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_forms')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="forms">
                        <a class="nav-link" href="{{route('patient_forms')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-wpforms i-cl-1"></i>
                            <span class="nav-link-text">forms</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('emergency_services')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="emergeency services">
                        <a class="nav-link" href="{{route('emergency_services')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-ambulance i-cl-1"></i>
                            <span class="nav-link-text">emergency services</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_homebased')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="home based">
                        <a class="nav-link" href="{{route('patient_homebased')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-h-square i-cl-1"></i>
                            <span class="nav-link-text">home based care</span>
                        </a>
                    </li>

                @endif
                <!--end patient profile-->
                <!--start stores-->


                @if(str_contains(Request::url(),'stores'))
                    <li class="nav-item {!! str_contains(Request::url(),route('stores_purchases')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('stores_purchases')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-money i-cl-1"></i>
                            <span class="nav-link-text">Purchases</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('stores_inventory')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('stores_inventory')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-bars i-cl-1"></i>
                            <span class="nav-link-text">Inventory</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('orders')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('orders')}}" data-parent="#exampleAccordion">
                            <i class="fas fa-cart-plus"></i>
                            <span class="nav-link-text">orders</span>
                        </a>
                    </li>
                @endif



                @if(str_contains(Request::url(),'clinical'))


                    {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href=".">--}}
                            {{--<i class="ti i-cl-3 fa fa-arrow-left"></i>--}}
                            {{--<span class="nav-link-text">Go back</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    @if(Request::url()===route('clinicalservices_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_inpatient_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_inpatient_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Inpatient</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Outpatient</span>
                            </a>
                        </li>
                    @endif








                @endif

            </ul>
        </div>

        <!-- =============== End Side Menu ============== -->

        <!-- =============== Search Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="Type In TO Search">
                    </div>
                </form>
            </li>
        </ul>
        <div class="" style="margin-left: 20%;">
            <a class=" navbar-brand" href="{{route('home')}}" style="color: #0080ff">{{ Auth::user()->institution->name }}</a>
            <img src="{{ asset('uploads/logos/')}}/{{Auth::user()->institution->avatar }}" alt="user-img" height="50" class="img-circle">

        </div>
        <!-- =============== End Search Bar ============== -->

        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">

            {{--<!-- Messages -->--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--<i class="gredient-cl ti-email"></i>--}}
                    {{--<span class="a-nav__link-badge a-badge a-badge--pink">3</span>--}}
                    {{--<span class="hidden-lg hidden-md mrg-l-10">New Notification</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu animated flipInX" aria-labelledby="messagesDropdown">--}}
                    {{--<div class="dropdown-header text-center pink-bg">--}}
                        {{--<span class="a-dropdown__header-title">3 New</span>--}}
                        {{--<span class="a-dropdown__header-subtitle">User Messages</span>--}}
                    {{--</div>--}}
                    {{--<div class="ground-list ground-list-hove" id="message-box">--}}
                        {{--<div class="ground ground-single-list">--}}
                            {{--<a href="#">--}}
                                {{--<img class="ground-avatar" src="{{asset('assets/dist/img/user-1.jpg')}}" alt="...">--}}
                                {{--<span class="profile-status bg-online pull-right"></span>--}}
                            {{--</a>--}}

                            {{--<div class="ground-content">--}}
                                {{--<h6><a href="#">Maryam Amiri</a></h6>--}}
                                {{--<small class="text-fade">Co-Founder</small>--}}
                            {{--</div>--}}

                            {{--<div class="ground-right">--}}
                                {{--<span class="small">Online</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="ground ground-single-list">--}}
                            {{--<a href="#">--}}
                                {{--<img class="ground-avatar" src="{{asset('assets/dist/img/user-2.jpg')}}" alt="...">--}}
                                {{--<span class="profile-status bg-offline pull-right"></span>--}}
                            {{--</a>--}}

                            {{--<div class="ground-content">--}}
                                {{--<h6><a href="#">Maryam Amiri</a></h6>--}}
                                {{--<small class="text-fade">Co-Founder</small>--}}
                            {{--</div>--}}

                            {{--<div class="ground-right">--}}
                                {{--<span class="small">10 Min Ago</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="ground ground-single-list">--}}
                            {{--<a href="#">--}}
                                {{--<img class="ground-avatar" src="{{asset('assets/dist/img/user-3.jpg')}}" alt="...">--}}
                                {{--<span class="profile-status bg-working pull-right"></span>--}}
                            {{--</a>--}}

                            {{--<div class="ground-content">--}}
                                {{--<h6><a href="#">Maryam Amiri</a></h6>--}}
                                {{--<small class="text-fade">Co-Founder</small>--}}
                            {{--</div>--}}

                            {{--<div class="ground-right">--}}
                                {{--<span class="small">20 Min Ago</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="ground ground-single-list">--}}
                            {{--<a href="#">--}}
                                {{--<img class="ground-avatar" src="{{asset('assets/dist/img/user-4.jpg')}}" alt="...">--}}
                                {{--<span class="profile-status bg-busy pull-right"></span>--}}
                            {{--</a>--}}

                            {{--<div class="ground-content">--}}
                                {{--<h6><a href="#">Maryam Amiri</a></h6>--}}
                                {{--<small class="text-fade">Co-Founder</small>--}}
                            {{--</div>--}}

                            {{--<div class="ground-right">--}}
                                {{--<span class="small">18 Min Ago</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="ground ground-single-list">--}}
                            {{--<a href="#">--}}
                                {{--<img class="ground-avatar" src="{{asset('assets/dist/img/user-5.jpg')}}" alt="...">--}}
                                {{--<span class="profile-status bg-online pull-right"></span>--}}
                            {{--</a>--}}

                            {{--<div class="ground-content">--}}
                                {{--<h6><a href="#">Maryam Amiri</a></h6>--}}
                                {{--<small class="text-fade">Co-Founder</small>--}}
                            {{--</div>--}}

                            {{--<div class="ground-right">--}}
                                {{--<span class="small">Online</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<a class="dropdown-item view-all" href="#">View all Messages</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<!-- End Messages -->--}}
            @php
                $links_for_dept=\App\department::find(Auth::user()->roles->departments->id)->send_to_dept_links->where('is_paid',1)->where('institution_id',Auth::user()->institution_id);
                $links_for_dept_count=\App\department::find(Auth::user()->roles->departments->id)->send_to_dept_links->where('is_paid',1)->where('institution_id',Auth::user()->institution_id)->count();
            @endphp
            <!-- Notification -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-bell"></i>
                    <span class="a-nav__link-badge a-badge a-badge--accent a-animate-blink">
                        {{ $links_for_dept_count }}
                    </span>
                    <span class="hidden-lg hidden-md mrg-l-10">New Notification</span>
                </a>

                <div class="dropdown-menu animated flipInX" aria-labelledby="alertsDropdown">

                    <div class="dropdown-header text-center accent-bg">
                        <span class="a-dropdown__header-title">{{ $links_for_dept_count }} New</span>
                        <span class="a-dropdown__header-subtitle">Patients sent </span>
                    </div>

                    <div class="ground-list ground-list-hove" id="notification-box">


                        @if(isset($links_for_dept))
                            @foreach($links_for_dept as $link)
                                <a href="{{ route($link->links,$link->administration_patient_informations_id) }}">
                                <div class="ground ground-single-list">

                                        <div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>

                                    <div class="ground-content">
                                        @php
                                            $patient_id=$link->administration_patient_informations_id;
                                            $for_patient=\App\administration_patient_information::find($patient_id);
                                            $name=$link->administration_patient_informations_id;
                                        @endphp
                                        <h6>{{ $for_patient->name }}</h6>
                                        <small class="text-fade">{{ $link->links }}</small><br>
                                        <span class="small">Just Now</span>
                                    </div>
                                </div> </a>
                            @endforeach
                        @endif


                    </div>
                    <a class="dropdown-item view-all" href="#">View all Notifications</a>
                </div>
            </li>
            <!-- End Notification -->


            <li class="nav-item dropdown">
                @guest
                    <!--show this if user is not loggd in-->
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b class="f-size-17">Account</b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                </ul>
                @else


                    <!--if user is logged in-->
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('uploads//avatars/')}}/{{Auth::user()->avatar}}" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">{{ Auth::user()->name }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">

                    <li class="dropdown-header">
                        <div class="header-user-pic">
                            <img src="{{ asset('uploads//avatars/')}}/{{Auth::user()->avatar}}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">{{ Auth::user()->name }}</span>
                            <span class="a-dropdown__header-subtitle"><span style="font-weight: 400"> <b>Role : </b>  </sp> {{ Auth::user()->roles->role_name }}</span><br>
                            <span class="a-dropdown__header-subtitle"><span style="font-weight: 400"><b>Department :</b>  </sp>{{ Auth::user()->roles->departments->department_name }}</span>
                        </div>
                    </li>
                    @if(Auth::user()->is_admin==1)
                        <li><a class="dropdown-item" href="{{ route('hospital_profile') }}"><i class="ti-settings"></i> Hospital Settings</a></li>
                    @endif
                    <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="ti-user"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                    @endguest
                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->
<div class="content-wrapper">