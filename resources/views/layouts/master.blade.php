@include('layouts.header')
@include('layouts.navigation')
<body class="fixed-nav sticky-footer" id="page-top">
    <div class="wrapper">
        <div class="container-fluid">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('message') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>




@include('layouts.footer')

