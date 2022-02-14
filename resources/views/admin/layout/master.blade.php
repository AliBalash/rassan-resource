@include("admin.layout.main.header")

<div class="vz_main_sec">

    <!--=========================*
           Right Menu Section
    *===========================-->

    @include("admin.layout.main.menu");

    <!--=========================*
               End Right Menu
   *===========================-->

    <!--=========================*
       Header Section
    *===========================-->
    <header class="vz_main_header flex-grow-1 top_nav">
        <div class="container-fluid d-flex flex-row h-100 align-items-center">
            <!--=========================*
                              Logo
                *===========================-->
            <div class="text-center rt_nav_wrapper d-flex align-items-center">
                <a class="nav_logo rt_logo" href="/"><img src="/assets/admin/images/rassan-logo.png" alt="logo"/></a>
                <a class="nav_logo nav_logo_mob" href=/"><img src="/assets/admin/images/rassan-logo.png" alt="logo"/></a>

            </div>
            <!--=========================*
                       End Logo
           *===========================-->
            <div class="nav_wrapper_main d-flex align-items-center justify-content-between flex-grow-1">
                <a class="vz_mobile_menu_icon mr-3 d-md-flex d_none_sm" id="vz_mobileCollapseIcon" href="javascript:void(0)"><span></span></a>
                <ul class="navbar-nav navbar-nav-right">
                    <!--==================================*
                             Notification Section
                    *====================================-->
                {{--                    <li class="nav-item dropdown">--}}
                {{--                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"--}}
                {{--                           data-toggle="dropdown">--}}
                {{--                            <i class="fa fa-bell"></i>--}}
                {{--                            <span class="count"></span>--}}
                {{--                        </a>--}}
                {{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown rt-notification-list"--}}
                {{--                             aria-labelledby="notificationDropdown">--}}
                {{--                            <div class="dropdown-item">--}}
                {{--                                <p class="mb-0 font-weight-normal float-left">شما 3 اعلان جدید دارید</p>--}}
                {{--                                <a href="#" class="view_btn">مشاهده همه</a>--}}
                {{--                            </div>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <div class="rt-notification-icon">--}}
                {{--                                        <i class="ti-map-alt text-info mx-0"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content">--}}
                {{--                                    <h6 class="rt-notification-subject text-info font-weight-normal mb-1">موقعیت مکانی خود را اضافه کرده اید</h6>--}}
                {{--                                    <p class="font-weight-light small-text mb-0">--}}
                {{--                                        همین حالا--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <div class="rt-notification-icon">--}}
                {{--                                        <i class="ti-bolt-alt text-primary mx-0"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content">--}}
                {{--                                    <h6 class="rt-notification-subject font-weight-normal text-primary mb-1">اشتراک شما منقضی شده است</h6>--}}
                {{--                                    <p class="font-weight-light small-text mb-0">--}}
                {{--                                        30 ثانیه پیش--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <div class="rt-notification-icon">--}}
                {{--                                        <i class="ti-heart text-secondary mx-0"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content">--}}
                {{--                                    <h6 class="rt-notification-subject text-secondary font-weight-normal mb-1">برخی اشخاص مانند شما</h6>--}}
                {{--                                    <p class="font-weight-light small-text mb-0">--}}
                {{--                                        همین حالا--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <div class="rt-notification-icon">--}}
                {{--                                        <i class="ti-comments text-danger mx-0"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content">--}}
                {{--                                    <h6 class="rt-notification-subject text-danger font-weight-normal mb-1">نظرات جدید در پست</h6>--}}
                {{--                                    <p class="font-weight-light small-text mb-0">--}}
                {{--                                        همین حالا--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <div class="rt-notification-icon">--}}
                {{--                                        <i class="ti-settings text-success mx-0"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content">--}}
                {{--                                    <h6 class="rt-notification-subject text-success font-weight-normal mb-1">تنظیمات خود را تغییر دادید</h6>--}}
                {{--                                    <p class="font-weight-light small-text mb-0">--}}
                {{--                                        همین حالا--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                <!--==================================*
                             End Notification Section
                    *====================================-->
                    <!--==================================*
                             Message Section
                    *====================================-->
                {{--                    <li class="nav-item dropdown">--}}
                {{--                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"--}}
                {{--                           data-toggle="dropdown" aria-expanded="false">--}}
                {{--                            <i class="fa fa-envelope mx-0"></i>--}}
                {{--                            <span class="count"></span>--}}
                {{--                        </a>--}}
                {{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown rt-notification-list"--}}
                {{--                             aria-labelledby="messageDropdown">--}}
                {{--                            <div class="dropdown-item">--}}
                {{--                                <p class="mb-0 font-weight-normal float-left">شما 3 پیام جدید دارید</p>--}}
                {{--                                <a href="#" class="view_btn">مشاهده همه</a>--}}
                {{--                            </div>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <img src="/assets/admin/images/author-img1.jpg" class="profile-pic" alt="image">--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content flex-grow">--}}
                {{--                                    <h6 class="rt-notification-subject ellipsis font-weight-medium">آرش خادملو--}}
                {{--                                        <span class="float-right font-weight-light small-text">3:15 غروب</span>--}}
                {{--                                    </h6>--}}
                {{--                                    <p class="font-weight-light small-text">--}}
                {{--                                        سلام شما اینجا هستید؟--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <img src="/assets/admin/images/author-img1.jpg" class="profile-pic" alt="image">--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content flex-grow">--}}
                {{--                                    <h6 class="rt-notification-subject ellipsis font-weight-medium">آرش خادملو--}}
                {{--                                        <span class="float-right font-weight-light small-text">3:15 غروب</span>--}}
                {{--                                    </h6>--}}
                {{--                                    <p class="font-weight-light small-text">--}}
                {{--                                        منتظر پاسخ شما هستیم...--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                            <div class="dropdown-divider"></div>--}}
                {{--                            <a class="dropdown-item rt-notification-item">--}}
                {{--                                <div class="rt-notification-thumbnail">--}}
                {{--                                    <img src="/assets/admin/images/user.jpg" class="profile-pic" alt="image">--}}
                {{--                                </div>--}}
                {{--                                <div class="rt-notification-item-content flex-grow">--}}
                {{--                                    <h6 class="rt-notification-subject ellipsis font-weight-medium"> آرش خادملو--}}
                {{--                                        <span class="float-right font-weight-light small-text">3:15 غروب</span>--}}
                {{--                                    </h6>--}}
                {{--                                    <p class="font-weight-light small-text">--}}
                {{--                                        سلام، امیدوارم که خوب باشی--}}
                {{--                                    </p>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                <!--==================================*
                             End Message Section
                    *====================================-->
                    <!--==================================*
                             Profile Menu
                    *====================================-->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <div class="profile_sec">
                                <span class="profile_name">
                                    <span class="hi_name">{{auth()->user()->name .' '. auth()->user()->lastname }}</span>
                                     <i class="feather ft-chevron-down"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="text-muted small-text my-3 ml-3">{!! auth()->user()->getRoleNames()[0] !!}</span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-2"
                             aria-labelledby="profileDropdown">
                            <a href="{{route('admin.change.password')}}" class="dropdown-item">
                                <i class="feather ft-lock text-dark ml-3"></i>
                                تغییر رمز عبور ورود به پنل
                            </a>
                        </div>
                    </li>
                    <!--==================================*
                             End Profile Menu
                    *====================================-->
                    <li class="nav-item d_none_sm">
                        <form method="post" action="/admin/logout">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-link text-dark" type="submit">
                                خروج <i class="feather ft-power"></i>
                            </button>
                        </form>
                    </li>
                </ul>
                <!--=========================*
                           Mobile Menu
               *===========================-->
                <span class="d-lg-none">
                    <a class="vz_mobile_menu_icon ml-3" id="vz_mobileCollapseIconMobile" href="javascript:"><span></span></a>
                </span>
                <!--=========================*
                       End Mobile Menu
               *===========================-->
            </div>
        </div>
    </header>
    <!--=========================*
               End Header
   *===========================-->

    <!--=========================*
           Main Section
   *===========================-->
    <div class="vz_main_container">
        <div class="vz_main_content">
            @yield("content")
        </div>
    </div>
    <!--=========================*
            End Main Section
   *===========================-->

</div>

@include("admin.layout.main.footer")
