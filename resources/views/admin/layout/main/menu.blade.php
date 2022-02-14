<nav class="vz_navbar">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <div class="vz_navigation">

                <ul class="sidebar nav flex-column">
                    <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : '' }}"><a class="nav-link text-center" href="javascript:void(0);" data-nav="dashboard"><i class="feather ft-home"></i><span>داشبورد</span></a></li>

                    @can('provincials_after_sale_list requisition',
                         'after_sale_tehran_list requisition',
                         'after_sale_agency_list requisition',
                         'marketing_list requisition'
                         )
                        <li class="{{ (request()->is('admin/requisitions*')) ? 'active' : '' }}" ><a class="nav-link text-center" href="javascript:void(0);" data-nav="requisitions"><i class="feather ft-users"></i><span>درخواست ها</span></a></li>
                    @endcan
                    @can('view user')
                        <li class="{{ (request()->is('admin/users*')) ? 'active' : '' }}" ><a class="nav-link text-center" href="javascript:void(0);" data-nav="users"><i class="feather ft-users"></i><span>کاربران</span></a></li>
                    @endcan
                    @can('view role')
                        <li class="{{ (request()->is('admin/roles*')) ? 'active' : '' }}" ><a class="nav-link text-center" href="javascript:void(0);" data-nav="roles"><i class="feather ft-user-check"></i><span>نقش ها</span></a></li>
                    @endcan

                </ul>
                <div class="sidebar_content">
                    <div class="vz_sidebar_link dashboard {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                        <ul class="nav vz_inner_nav">
                            <li class="nav-item menu_title">
                                <label>دسترسی سریع</label>
                            </li>
                            <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                                <a href="{{route('admin.dashboard')}}" class="nav-link">
                                    <i class="feather ft-bar-chart  ml-2"></i>نمای کلی درخواست ها</a>
                            </li>
                        </ul>
                    </div>

                    @can('provincials_after_sale_list requisition',
                         'after_sale_tehran_list requisition',
                         'after_sale_agency_list requisition',
                         'marketing_list requisition'
                         )
                        <div class="vz_sidebar_link requisitions {{ (request()->is('admin/requisitions*')) ? 'active' : '' }}">
                            <ul class="nav vz_inner_nav">
                                <li class="nav-item menu_title">
                                    <label>مدیریت درخواست ها</label>
                                </li>
                                <li class="nav-item {{ (request()->is('admin/requisitions')) ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.requisitions.index')}}">
                                        <i class="menu_icon ti-alert"></i><span>لیست درخواست ها</span></a></li>
                            </ul>
                        </div>
                    @endcan

                    @can('view user')
                        <div class="vz_sidebar_link users {{ (request()->is('admin/users*')) ? 'active' : '' }}">
                            <ul class="nav vz_inner_nav">
                                <li class="nav-item menu_title">
                                    <label>مدیریت کاربران</label>
                                </li>
                                <li class="nav-item {{ (request()->is('admin/users')) ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.users.index')}}">
                                        <i class="menu_icon ti-alert"></i><span>لیست کاربران</span></a></li>
                                <li class="nav-item {{ (request()->is('admin/users/create')) ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.users.create')}}">
                                        <i class="menu_icon ti-layout-accordion-separated"></i><span>افزودن کاربر جدید</span></a>
                                </li>
                            </ul>
                        </div>
                    @endcan

                    @can('view role')

                        <div class="vz_sidebar_link roles {{ (request()->is('admin/roles*')) ? 'active' : '' }}">
                            <ul class="nav vz_inner_nav">
                                <li class="nav-item menu_title">
                                    <label>مدیریت نقش ها</label>
                                </li>
                                <li class="nav-item {{ (request()->is('admin/roles')) ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.roles.index')}}">
                                        <i class="menu_icon ti-alert"></i><span>لیست نقش ها</span></a>
                                </li>
                                <li class="nav-item {{ (request()->is('admin/roles/create')) ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.roles.create')}}">
                                        <i class="menu_icon ti-layout-accordion-separated"></i><span>افزودن نقش جدید</span></a>
                                </li>
                            </ul>
                        </div>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</nav>
