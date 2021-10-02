<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>


        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">
                <i class="fas fa-cloud-upload-alt mr-2"></i> S Menu 1
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-line mr-2"></i> S Menu 2
            </a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('backend/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">

                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('backend/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('backend/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>

        <li class="nav-item dropdown w-75">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
                <div class="image">
                    @if(auth()->user()->profile_picture != '')
                        <img src="{{asset(auth()->user()->profile_picture)}}" class="img-circle elevation-1 h-28" alt="">
                    @else
                        <img src="{{asset('backend/dist/img/avatar5.png')}}" class="img-circle elevation-1 h-28" alt="">
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right mr-2">
                <div class="d-flex justify-content-center pt-3">
                    @if(auth()->user()->profile_picture != '')
                        <img src="{{asset(auth()->user()->profile_picture)}}" alt="" class="img-size-50 mr-3 img-circle">
                    @else
                        <img src="{{asset('backend/dist/img/avatar5.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    @endif
                </div>
                <span class="dropdown-item dropdown-header">
                    {{auth()->user()->name}}
                </span>
                <div class="dropdown-divider"></div>

                <a href="{{route('profile')}}" class="dropdown-item">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> {{__('app.profile_settings')}}
                </a>

                <div class="dropdown-divider"></div>
                <a href="{{route('change-password')}}" class="dropdown-item">
                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i> {{__('app.change_password')}}
                </a>

                <div class="dropdown-divider"></div>
                <a href="{{route('change-email')}}" class="dropdown-item">
                    <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i> {{__('app.change_email')}}
                </a>

                <div class="dropdown-divider"></div>
{{--                <a href="{{url('logout')}}" class="dropdown-item">--}}
{{--                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{__('app.logout')}}--}}
{{--                </a>--}}


                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{__('app.logout')}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-widget="control-admin" data-slide="true" href="#">--}}
{{--                <i class="fas fa-th-large"></i>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
</nav>
<!-- /.navbar -->
