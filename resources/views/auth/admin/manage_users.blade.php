@extends('layouts.master')

@section('page_css')
    <!--select2-->
    <link href="{{asset('assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">

    @endsection

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class=" page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-3"> {{ Auth::user()->institution->name }} Users</h4>
        </div>
    </div>



    <!-- Title & Breadcrumbs-->
    @if(Auth::user()->is_admin==1)

    <!-- row -->
    <div class="row">
        @foreach(Auth::user()->institution->user as $user)

        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact-box">

                <div class="contact-img">
                    <img src="{{ asset('uploads//avatars/')}}/{{$user->avatar}}" class="img-circle img-responsive" alt="">
                </div>

                <div class="contact-caption">
                    <h4>   {{ $user->name }}
                        @if($user->is_admin==1)
                        <span class="label label-info">Admin</span>
                        @endif

                    </h4>
                    <span>   {{ $user->email }}</span>
                </div>

                <div class="contact-action row text-center">
                    <div class="col-md-4">
                        <a href="#modal-{{$user->id}}"  data-toggle="modal" data-target="#modal-{{$user->id}}" class="btn waves-effect waves-light btn-rounded btn-primary" title="" data-original-title="Edit">
                            Edit <i class="light-cl fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <form action="{{ route('delete_profile', ['user_id'=>$user->id]) }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @if(Auth::user()->id==$user->id)

                            @else

                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-danger"  data-toggle="tooltip" title="" data-original-title="Delete" >
                                Delete <i class="light-cl fa fa-trash-o" aria-hidden="true"></i>
                            </button>

                                @endif
                        </form>
                    </div>

                    <!-- check if this user is the currently logged in user-->
                    @if(Auth::user()->id==$user->id)

                    @else
                        <!-- check if user is an admin and display remove admin-->
                        @if($user->is_admin)
                            <div class="col-md-4">
                                <form action="{{ route('remove_admin', ['user_id'=>$user->id]) }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary"   >
                                            Remove Admin
                                        </button>

                                </form>
                            </div>
                        @else
                            <!-- check if user is not admin then display make admin-->
                                <div class="col-md-4">
                                <form action="{{ route('make_admin', ['user_id'=>$user->id]) }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary"  >
                                            Make Admin
                                        </button>

                                </form>
                            </div>
                        @endif
                    @endif



                </div>

            </div>
        </div>
            <!-- modal for editing user information-->
            <div class="modal modal-box-1 fade" id="modal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content" id="myModalLabel1">
                        <div class="modal-header theme-bg">
                            <h4 class="text-center">User: {{ $user->name }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    {{--<form enctype="multipart/form-data" action="{{ route('profile_avatar_post') }}" method="post">--}}
                                    {{--<input type="file" name="avatar">--}}
                                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                    {{--<input type="submit" class="pull-right btn btn-info" value="submit">--}}

                                    {{--</form>--}}
                                    <form class="form-horizontal" method="POST" action="{{ route('admin_update_profile', ['user_id'=> $user->id]) }}">
                                        @csrf

                                        <div class="">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ ('Name') }}</label>

                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                        <div class="">
                                            <label for="institution_id" class="col-md-4 col-form-label text-md-right">Facility Name</label>
                                            <select class="form-control {{ $errors->has('institution_id') ? ' is-invalid' : '' }}" name="institution_id" id="institution_id"  required autofocus>
                                                <option value="{{ Auth::user()->institution->id }}" selected>{{ $user->institution->name }}</option>

                                                @if(isset($institutions))
                                                    @foreach($institutions as $institution)
                                                        <option value="{{$institution->id}}">{{$institution->name}}</option>
                                                    @endforeach
                                                @else
                                                    <option value="none" >You must be associated with a Registered institution</option>
                                                @endif
                                            </select>
                                            {{--<input id="facility_name" type="text" class="form-control{{ $errors->has('facility_name') ? ' is-invalid' : '' }}" name="facility_name" value="{{ old('facility_name') }}" required autofocus>--}}

                                            @if ($errors->has('institution_id'))
                                                <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('institution_id') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                        <div class="">
                                            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                                            <select class="form-control " name="role" id="role"  required autofocus>
                                                <option value="{{ $user->roles->id }}" selected>{{ $user->roles->role_name }}</option>
                                                @if(isset($roles))
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                                                    @endforeach
                                                @else
                                                    <option value="none" >You must select a role</option>
                                                @endif
                                            </select>

                                        </div>

                                        <div class="">
                                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ ('Telephone') }}</label>

                                            <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{$user->telephone }}" required autofocus>

                                            @if ($errors->has('telephone'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('telephone') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ ('E-Mail Address') }}</label>

                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                            @endif
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <div class="flexbox align-items-center">
                                                <input type="submit" class="btn gredient-bg" value="Save">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach



    </div>

    @else
        <h3 class="offset-4">Your are not allowed to access this page</h3>
    @endif
    <!-- /row -->
@endsection

@section('page_scripts')


    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/dist/js/custom/form-wizard.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.multipleselect').select2();
        });

    </script>
@endsection

