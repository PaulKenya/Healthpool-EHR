@extends('layouts.master')


@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Profile Page</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <!-- row -->
    <div class="row">
        @if( isset( Auth::user()->facility_type))

        <div class="col-md-4">
        @else
        <div class="col-md-4 offset-4">
        @endif
                <div class="card">
                <div class="card-img-overlap">
                    <a href="#modal-1"  data-toggle="modal" data-target="#modal-1" class="user-icon user-card-phone"><i class="fa fa-fw fa-pencil"></i></a>
                    <img class="card-img-top" src="{{ asset('uploads/covers/')}}/{{Auth::user()->cover }}" alt="Card image cap" />
                </div>
                <div class="card-block padd-0 translateY-50 text-center">
                    <div class="card-avatar style-2">
                        <img src="{{ asset('uploads/avatars/')}}/{{Auth::user()->avatar}}" class="img-circle img-responsive" alt="" />

                    </div>
                    <i class="fa fa-fw fa-pencil" href="#modal-2"  data-toggle="modal" data-target="#modal-2"></i>
                    <h5 class="font-normal mrg-bot-0 font-18 card-title">{{Auth::user()->name }}</h5>
                    <p class="card-small-text">{{Auth::user()->email }}</p>
                    <p class="card-small-text">Role:{{ Auth::user()->roles->role_name }}</p>
                    <p class="card-small-text">Facility:{{ Auth::user()->institution->name }}</p>
                </div>
                <div class="bottom">
                    <ul class="social-detail">
                        <li>140<span>Article</span></li>
                        <li>5782<span>Followers</span></li>
                        <li>172<span>Following</span></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="modal modal-box-1 fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="myModalLabel1">
                    <div class="modal-header theme-bg">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form enctype="multipart/form-data" action="{{ route('profile_cover_post') }}" method="post">
                                        <input type="file" name="cover">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="pull-right btn btn-info" value="update">
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal modal-box-1 fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="myModalLabel1">
                    <div class="modal-header theme-bg">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form enctype="multipart/form-data" action="{{ route('profile_avatar_post') }}" method="post">
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="pull-right btn btn-info" value="submit">

                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


            @if( isset( Auth::user()->facility_type))


            <!-- About Me Box -->
            <div class="card ">
                <div class="card-header">
                    <h4 class="box-title">About Me</h4>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    @if( isset( Auth::user()->facility_type))

                    <strong><i class="fa fa-book margin-r-5"></i> Keph level</strong>
                    <p class="text-muted">
                        {{ Auth::user()->keph_level }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Facility Type</strong>
                    <p class="text-muted">
                        {{ Auth::user()->facility_type }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Owner</strong>
                    <p class="text-muted">
                        {{ Auth::user()->owner }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Regulatory body</strong>
                    <p class="text-muted">
                        {{ Auth::user()->regulatory_body }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Bed capacity</strong>
                    <p class="text-muted">
                        {{ Auth::user()->bed_capacity }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Branches</strong>
                    <p class="text-muted">
                        {{ Auth::user()->branches }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Brief Description Of Services</strong>
                    <p class="text-muted">
                        {{ Auth::user()->brief_description_of_services }}
                    </p>
                    <strong><i class="fa fa-book margin-r-5"></i> Insurance</strong>
                    <p class="text-muted">
                        {{ Auth::user()->insurance }}
                    </p>
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Street Address</strong>
                    <p class="text-muted">
                        {{ Auth::user()->city }} City,{{ Auth::user()->street_address }} , {{ Auth::user()->county }} County
                    </p>

                    @else

                    @endif


                </div>
                @else

                @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-md-4 -->
    </div>
    {{--<div class="row text-center">--}}

        {{--<div class="col-md-8 offset-2">--}}
            {{--<div class="nav-tabs-custom bg-white">--}}
                {{--<ul class="nav nav-tabs">--}}
                    {{--<li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>--}}
                    {{--<li><a href="#timeline" data-toggle="tab">Timeline</a></li>--}}
                    {{--<li><a href="#settings" data-toggle="tab">Settings</a></li>--}}
                {{--</ul>--}}
                {{--<div class="tab-content">--}}
                    {{--<div class="active tab-pane" id="activity">--}}
                        {{--<!-- Post -->--}}
                        {{--<div class="post">--}}
                            {{--<div class="user-block">--}}
                                {{--<img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user-6.jpg')}}" alt="user image">--}}
                                {{--<span class="username">--}}
									  {{--<a href="#">Jonathan Burke Jr.</a>--}}
									  {{--<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>--}}
									{{--</span>--}}
                                {{--<span class="description">Shared publicly - 7:30 PM today</span>--}}
                            {{--</div>--}}
                            {{--<!-- /.user-block -->--}}
                            {{--<p>--}}
                                {{--Lorem ipsum represents a long-held tradition for designers,--}}
                                {{--typographers and the like. Some people hate it and argue for--}}
                                {{--its demise, but others ignore the hate as they create awesome--}}
                                {{--tools to help create filler text for everyone from bacon lovers--}}
                                {{--to Charlie Sheen fans.--}}
                            {{--</p>--}}
                            {{--<ul class="list-inline">--}}
                                {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>--}}
                                {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>--}}
                                {{--</li>--}}
                                {{--<li class="pull-right">--}}
                                    {{--<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments--}}
                                        {{--(5)</a></li>--}}
                            {{--</ul>--}}

                            {{--<input class="form-control input-sm" type="text" placeholder="Type a comment">--}}
                        {{--</div>--}}
                        {{--<!-- /.post -->--}}

                        {{--<!-- Post -->--}}
                        {{--<div class="post clearfix">--}}
                            {{--<div class="user-block">--}}
                                {{--<img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user-7.jpg')}}" alt="User Image">--}}
                                {{--<span class="username">--}}
									  {{--<a href="#">Sarah Ross</a>--}}
									  {{--<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>--}}
									{{--</span>--}}
                                {{--<span class="description">Sent you a message - 3 days ago</span>--}}
                            {{--</div>--}}
                            {{--<!-- /.user-block -->--}}
                            {{--<p>--}}
                                {{--Lorem ipsum represents a long-held tradition for designers,--}}
                                {{--typographers and the like. Some people hate it and argue for--}}
                                {{--its demise, but others ignore the hate as they create awesome--}}
                                {{--tools to help create filler text for everyone from bacon lovers--}}
                                {{--to Charlie Sheen fans.--}}
                            {{--</p>--}}

                            {{--<form class="form-horizontal">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input class="form-control input-sm" placeholder="Response">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-3">--}}
                                        {{--<button type="submit" class="btn mrg-0 btn-danger btn-block btn-sm">Send</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<!-- /.post -->--}}

                        {{--<!-- Post -->--}}
                        {{--<div class="post">--}}
                            {{--<div class="user-block">--}}
                                {{--<img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user-7.jpg')}}" alt="User Image">--}}
                                {{--<span class="username">--}}
									  {{--<a href="#">Adam Jones</a>--}}
									  {{--<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>--}}
									{{--</span>--}}
                                {{--<span class="description">Posted 5 photos - 5 days ago</span>--}}
                            {{--</div>--}}
                            {{--<!-- /.user-block -->--}}
                            {{--<div class="row margin-bottom">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<img class="img-responsive" src="{{asset('assets/dist/img/gallery/thumb-md-1.jpg')}}" alt="Photo">--}}
                                {{--</div>--}}
                                {{--<!-- /.col -->--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--<img class="img-responsive" src="{{asset('assets/dist/img/gallery/thumb-md-2.jpg')}}" alt="Photo">--}}
                                            {{--<br>--}}
                                            {{--<img class="img-responsive" src="{{asset('assets/dist/img/gallery/thumb-md-3.jpg')}}" alt="Photo">--}}
                                        {{--</div>--}}
                                        {{--<!-- /.col -->--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--<img class="img-responsive" src="{{asset('assets/dist/img/gallery/thumb-md-4.jpg')}}" alt="Photo">--}}
                                            {{--<br>--}}
                                            {{--<img class="img-responsive" src="{{asset('assets/dist/img/gallery/thumb-md-1.jpg')}}" alt="Photo">--}}
                                        {{--</div>--}}
                                        {{--<!-- /.col -->--}}
                                    {{--</div>--}}
                                    {{--<!-- /.row -->--}}
                                {{--</div>--}}
                                {{--<!-- /.col -->--}}
                            {{--</div>--}}
                            {{--<!-- /.row -->--}}

                            {{--<ul class="list-inline">--}}
                                {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>--}}
                                {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>--}}
                                {{--</li>--}}
                                {{--<li class="pull-right">--}}
                                    {{--<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments--}}
                                        {{--(5)</a></li>--}}
                            {{--</ul>--}}

                            {{--<input class="form-control input-sm" type="text" placeholder="Type a comment">--}}
                        {{--</div>--}}
                        {{--<!-- /.post -->--}}
                    {{--</div>--}}
                    {{--<!-- /.tab-pane -->--}}
                    {{--<div class="tab-pane" id="timeline">--}}
                        {{--<!-- The timeline -->--}}
                        {{--<ul class="timeline timeline-inverse">--}}
                            {{--<!-- timeline time label -->--}}
                            {{--<li class="time-label">--}}
									{{--<span class="bg-red">--}}
									  {{--10 Feb. 2014--}}
									{{--</span>--}}
                            {{--</li>--}}
                            {{--<!-- /.timeline-label -->--}}
                            {{--<!-- timeline item -->--}}
                            {{--<li>--}}
                                {{--<i class="fa fa-envelope bg-blue"></i>--}}

                                {{--<div class="timeline-item">--}}
                                    {{--<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>--}}

                                    {{--<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>--}}

                                    {{--<div class="timeline-body">--}}
                                        {{--Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,--}}
                                        {{--weebly ning heekya handango imeem plugg dopplr jibjab, movity--}}
                                        {{--jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle--}}
                                        {{--quora plaxo ideeli hulu weebly balihoo...--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-footer">--}}
                                        {{--<button type="button" class="btn btn-primary btn-xs">Read more</button>--}}
                                        {{--<button type="button" class="btn btn-danger btn-xs">Delete</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<!-- END timeline item -->--}}
                            {{--<!-- timeline item -->--}}
                            {{--<li>--}}
                                {{--<i class="fa fa-user bg-aqua"></i>--}}

                                {{--<div class="timeline-item">--}}
                                    {{--<span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>--}}

                                    {{--<h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request--}}
                                    {{--</h3>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<!-- END timeline item -->--}}
                            {{--<!-- timeline item -->--}}
                            {{--<li>--}}
                                {{--<i class="fa fa-comments bg-yellow"></i>--}}

                                {{--<div class="timeline-item">--}}
                                    {{--<span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>--}}

                                    {{--<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>--}}

                                    {{--<div class="timeline-body">--}}
                                        {{--Take me to your leader!--}}
                                        {{--Switzerland is small and neutral!--}}
                                        {{--We are more like Germany, ambitious and misunderstood!--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-footer">--}}
                                        {{--<button type="button" class="btn btn-warning btn-flat btn-xs">View comment</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<!-- END timeline item -->--}}

                            {{--<!-- timeline time label -->--}}
                            {{--<li class="time-label">--}}
								{{--<span class="bg-green">--}}
								  {{--3 Jan. 2014--}}
								{{--</span>--}}
                            {{--</li>--}}
                            {{--<!-- /.timeline-label -->--}}

                            {{--<!-- timeline item -->--}}
                            {{--<li>--}}
                                {{--<i class="fa fa-camera bg-purple"></i>--}}

                                {{--<div class="timeline-item">--}}
                                    {{--<span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>--}}

                                    {{--<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>--}}

                                    {{--<div class="timeline-body">--}}
                                        {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                        {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                        {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                        {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<!-- END timeline item -->--}}

                            {{--<li>--}}
                                {{--<i class="fa fa-clock-o bg-gray"></i>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<!-- /.tab-pane -->--}}

                    {{--<div class="tab-pane" id="settings">--}}
                        {{--<!-- form -->--}}
                        {{--<form class="form-horizontal">--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}

                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="email" class="form-control" placeholder="Name">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="inputEmail" class="col-sm-2 control-label">Email</label>--}}

                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="email" class="form-control" id="inputEmail" placeholder="Email">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}

                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="text" class="form-control" placeholder="Name">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="inputExperience" class="col-sm-2 control-label">Experience</label>--}}

                                {{--<div class="col-sm-10">--}}
                                    {{--<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="inputSkills" class="col-sm-2 control-label">Skills</label>--}}

                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="text" class="form-control" id="inputSkills" placeholder="Skills">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                                    {{--<button type="submit" class="btn btn-danger">Submit</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</form>--}}
                        {{--<!-- /form -->--}}
                    {{--</div>--}}
                    {{--<!-- /.tab-pane -->--}}
                {{--</div>--}}
                {{--<!-- /.tab-content -->--}}
            {{--</div>--}}
            {{--<!-- /.nav-tabs-custom -->--}}
        {{--</div>--}}
        {{--<!-- /.col-md-8 -->--}}
    {{--</div>--}}
    <!-- /row -->
@endsection