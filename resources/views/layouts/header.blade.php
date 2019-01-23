<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Healthpool EHR</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/plugins/themify/css/themify.css')}}" rel="stylesheet" type="text/css">

    <!-- Angular Tooltip Css -->
    <link href="{{asset('assets/plugins/angular-tooltip/angular-tooltips.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{asset('assets/dist/css/animate.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/dist/css/glovia.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dist/css/glovia-responsive.css')}}" rel="stylesheet">

    <!-- Custom styles for Color -->
    <link id="jssDefault" rel="stylesheet" href="{{asset('assets/dist/css/skins/default.css')}}">
    <link href="{{asset('assets/dist/css/custom_styles.css')}}" rel="stylesheet">



    {{--<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap4.min.css">
    @yield('page_css')

    <style>
        .dropdown-item{
            border-bottom: 1px solid #eaeff5;
            padding: 1.25rem 1.5rem;
        }
    </style>

</head>