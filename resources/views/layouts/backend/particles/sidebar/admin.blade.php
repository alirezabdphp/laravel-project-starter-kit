<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-1">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link text-center">
        <span class="brand-text font-weight-light">{{get_settings('app_name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <li class="nav-item">
                        <a href="{{url('/home')}}" class="nav-link">
                            <i class="nav-icon fa fa-th mr-2 text-primary"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                </div>

                <li class="nav-item has-treeview {{menu_open_if_match('admin/course')}}">
                    <a href="javascript:void(0)" class="nav-link {{active_if_match('admin/course')}}">
                        <i class="nav-icon fas fa-th text-warning"></i>
                        <p>
                            {{__('app.user_management')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{active_if_match('admin/course/type')}} {{active_if_match('admin/course/delete-type')}}">
                                <i class="far fa-circle nav-icon {{active_if_match('admin/course/type') == 'active' ? 'text-danger' : ''}} {{active_if_match('admin/course/delete-type') == 'active' ? 'text-danger' : ''}}"></i>
                                <p>{{__('app.create_user')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link {{active_if_match('admin/course/waiting-for-publish')}}">
                                <i class="far fa-circle nav-icon text-warning {{active_if_match('admin/vendor/waiting-for-publish') == 'active' ? 'text-danger' : ''}}"></i>
                                <p>Pending <span class="badge badge-warning right">0</span></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link {{active_if_match('admin/course/active')}}">
                                <i class="far fa-circle nav-icon text-success {{active_if_match('admin/course/active') == 'active' ? 'text-danger' : ''}}"></i>
                                <p>Active <span class="badge badge-success right">0</span></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link {{active_if_match('admin/course/de-active')}}">
                                <i class="far fa-circle nav-icon text-danger {{active_if_match('admin/course/de-active') == 'active' ? 'text-danger' : ''}}"></i>
                                <p>De Active <span class="badge badge-danger right">0</span></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link {{active_if_match('admin/course/suspend')}}">
                                <i class="far fa-circle nav-icon text-danger {{active_if_match('admin/course/suspend') == 'active' ? 'text-danger' : ''}}"></i>
                                <p>suspend <span class="badge badge-danger right">5</span></p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview {{menu_open_if_match('admin/message')}}">
                    <a href="#" class="nav-link {{active_if_match('admin/message')}}">
                        <i class="nav-icon fas fa-envelope-open text-secondary"></i>
                        <p>
                            Example Menu
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>


                <li class="nav-header">{{__('app.media')}}</li>
                <li class="nav-item has-treeview {{menu_open_if_match('admin/file-manager')}}">
                    <a href="#" class="nav-link {{active_if_match('admin/file-manager')}}">
                        <i class="nav-icon fas fa-folder-open text-secondary"></i>
                        <p>
                            Example Menu
                        </p>
                    </a>
                </li>


                <li class="nav-header">Promotions</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt mr-2"></i>
                        <p>
                            Example Menu
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-braille mr-2"></i>
                        <p>
                            Example Menu
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-braille mr-2"></i>
                        <p>
                            Example Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-braille mr-2"></i>
                        <p>
                            Example Menu
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-braille mr-2"></i>
                        <p>
                            Example Menu
                        </p>
                    </a>
                </li>



                <li class="nav-header">SETTINGS</li>
                <li class="nav-item has-treeview {{ menu_open_if_full_match('admin/settings/*') }}">
                    <a href="javascript:void(0)" class="nav-link {{active_if_match('admin/settings/*') }}">
                        <i class="nav-icon fas fa-cogs text-danger"></i>
                        <p>
                            {{__('app.application_settings')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('app.settings')}}" class="nav-link {{active_if_match('admin/settings/general') }}">
                                <i class="far fa-circle text-danger nav-icon"></i>
                                <p>{{__('app.general_settings')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('email.settings')}}" class="nav-link {{active_if_match('admin/settings/email') }}">
                                <i class="far fa-circle nav-icon text-warning"></i>
                                <p>{{__('app.email_settings')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>{{__('app.payment_settings')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview {{ menu_open_if_match('settings/user') }}">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-users-cog text-warning"></i>
                        <p>
                            {{__('app.account_settings')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('profile')}}" class="nav-link {{active_if_match('settings/user/profile') }}">
                                <i class="far fa-circle text-danger nav-icon"></i>
                                <p>{{__('app.profile')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('change-password')}}" class="nav-link {{active_if_match('settings/user/change-password') }}">
                                <i class="far fa-circle text-danger nav-icon"></i>
                                <p>{{__('app.change_password')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('change-email')}}" class="nav-link {{active_if_match('settings/user/change-email') }}">
                                <i class="far fa-circle nav-icon text-warning"></i>
                                <p>{{__('app.change_email')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <div class="h-50 pb-4"></div>
                </li>
            </ul>
        </nav>
        <!-- /.admin-menu -->
    </div>
    <!-- /.admin -->
</aside>
