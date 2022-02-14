<div>
    <div class="row" wire-:poll.keep-alive>

        @can('all_manager_after_sale_tehran_requisition dashboard')
            <div class="col-lg-4 mb-4 ">
                <div class="card card-icon rt_icon_card mb-0 text-center bg-card-light">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check-square"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های نیازمند تایید مدیر</p>
                            <div class="text-muted small-text">
                                <b class="bg-success p-1 text-white dashboard-badge">خدمات پس از فروش تهران</b>
                            </div>
                            <span>{{$all_manager_after_sale_tehran_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
        @can('all_manager_provincials_after_sale_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center bg-card-light">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check-square"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های نیازمند تایید مدیر</p>
                            <div class="text-muted small-text">
                                <b class="bg-info p-1 text-white dashboard-badge">خدمات پس از فروش شهرستان</b>
                            </div>
                            <span>{{$all_manager_provincials_after_sale_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
        @can('all_manager_after_sale_agency_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center bg-card-light">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check-square"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های نیازمند تایید مدیر</p>
                            <div class="text-muted small-text">
                                <b class="bg-danger p-1 text-white dashboard-badge">خدمات پس از فروش امور نمایندگان</b>
                            </div>
                            <span>{{$all_manager_after_sale_agency_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
        @can('all_manager_marketing_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center bg-card-light">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check-square"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های نیازمند تایید مدیر</p>
                            <div class="text-muted small-text">
                                <b class="bg-primary p-1 text-white dashboard-badge">نمایندگی فروش</b>
                            </div>
                            <span>{{$all_manager_marketing_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_after_sale_tehran_requisition_new dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card d-flex mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-plus"></i>
                            </span>
                        <div class="icon_specs">
                            <p>تعداد کل درخواست های جدید</p>
                            <div class="text-muted small-text">
                                <b class="bg-success p-1 text-white dashboard-badge">خدمات پس از فروش تهران</b>
                            </div>
                            <span>{{$all_after_sale_tehran_requisition_new}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @if(!auth()->user()->hasRole('مدیر کل'))
            @can('user_ended_after_sale_tehran_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                            <div class="icon_specs">
                                <p class="small-text">درخواست های پایان یافته کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-success p-1 text-white dashboard-badge">خدمات پس از فروش تهران</b>
                                </div>
                                <span>{{$user_ended_after_sale_tehran_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan

            @can('user_active_after_sale_tehran_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-0 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های فعال کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-success p-1 text-white dashboard-badge">خدمات پس از فروش تهران</b>
                                </div>
                                <span>{{$user_active_after_sale_tehran_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
        @endif

        @can('all_ended_after_sale_tehran_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های پایان یافته</p>
                            <div class="text-muted small-text">
                                <b class="bg-success p-1 text-white dashboard-badge">خدمات پس از فروش تهران</b>
                            </div>
                            <span>{{$all_ended_after_sale_tehran_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_active_after_sale_tehran_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های فعال</p>
                            <div class="text-muted small-text">
                                <b class="bg-success p-1 text-white dashboard-badge">خدمات پس از فروش تهران</b>
                            </div>
                            <span>{{$all_active_after_sale_tehran_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_provincials_after_sale_requisition_new dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card d-flex mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-plus"></i>
                            </span>
                        <div class="icon_specs">
                            <p>تعداد کل درخواست های جدید</p>
                            <div class="text-muted small-text">
                                <b class="bg-info p-1 text-white dashboard-badge">خدمات پس از فروش شهرستان</b>
                            </div>
                            <span>{{$all_provincials_after_sale_requisition_new}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @if(!auth()->user()->hasRole('مدیر کل'))

            @can('user_ended_provincials_after_sale_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های پایان یافته کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-info p-1 text-white dashboard-badge">خدمات پس از فروش شهرستان</b>
                                </div>
                                <span>{{$user_ended_provincials_after_sale_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan

            @can('user_active_provincials_after_sale_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-0 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های فعال کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-info p-1 text-white dashboard-badge">خدمات پس از فروش شهرستان</b>
                                </div>
                                <span>{{$user_active_provincials_after_sale_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan

        @endif

        @can('all_ended_provincials_after_sale_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های پایان یافته</p>
                            <div class="text-muted small-text">
                                <b class="bg-info p-1 text-white dashboard-badge">خدمات پس از فروش شهرستان</b>
                            </div>
                            <span>{{$all_ended_provincials_after_sale_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_active_provincials_after_sale_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های فعال</p>
                            <div class="text-muted small-text">
                                <b class="bg-info p-1 text-white dashboard-badge">خدمات پس از فروش شهرستان</b>
                            </div>
                            <span>{{$all_active_provincials_after_sale_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_after_sale_agency_requisition_new dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card d-flex mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-plus"></i>
                            </span>
                        <div class="icon_specs">
                            <p>تعداد کل درخواست های جدید</p>
                            <div class="text-muted small-text">
                                <b class="bg-danger p-1 text-white dashboard-badge">خدمات پس از فروش امور نمایندگان</b>
                            </div>
                            <span>{{$all_after_sale_agency_requisition_new}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @if(!auth()->user()->hasRole('مدیر کل'))

            @can('user_ended_after_sale_agency_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های پایان یافته کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-danger p-1 text-white dashboard-badge">خدمات پس از فروش امور نمایندگان</b>
                                </div>
                                <span>{{$user_ended_after_sale_agency_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('user_active_after_sale_agency_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-0 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های فعال کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-danger p-1 text-white dashboard-badge">خدمات پس از فروش امور نمایندگان</b>
                                </div>
                                <span>{{$user_active_after_sale_agency_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
        @endif

        @can('all_ended_after_sale_agency_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های پایان یافته</p>
                            <div class="text-muted small-text">
                                <b class="bg-danger p-1 text-white dashboard-badge">خدمات پس از فروش امور نمایندگان</b>
                            </div>
                            <span>{{$all_ended_after_sale_agency_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_active_after_sale_agency_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های فعال</p>
                            <div class="text-muted small-text">
                                <b class="bg-danger p-1 text-white dashboard-badge">خدمات پس از فروش امور نمایندگان</b>
                            </div>
                            <span>{{$all_active_after_sale_agency_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_marketing_requisition_new dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card d-flex mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-plus"></i>
                            </span>
                        <div class="icon_specs">
                            <p>تعداد کل درخواست های جدید</p>
                            <div class="text-muted small-text">
                                <b class="bg-primary p-1 text-white dashboard-badge">نمایندگی فروش</b>
                            </div>
                            <span>{{$all_marketing_requisition_new}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @if(!auth()->user()->hasRole('مدیر کل'))
            @can('user_ended_marketing_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های پایان یافته کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-primary p-1 text-white dashboard-badge">نمایندگی فروش</b>
                                </div>
                                <span>{{$user_ended_marketing_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('user_active_marketing_requisition dashboard')
                <div class="col-lg-4 mb-4">
                    <div class="card card-icon rt_icon_card mb-0 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                            <div class="icon_specs">
                                <p>درخواست های فعال کارشناس</p>
                                <div class="text-muted small-text">
                                    <b class="bg-primary p-1 text-white dashboard-badge">نمایندگی فروش</b>
                                </div>
                                <span>{{$user_active_marketing_requisition}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
        @endif

        @can('all_ended_marketing_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-check"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های پایان یافته</p>
                            <div class="text-muted small-text">
                                <b class="bg-primary p-1 text-white dashboard-badge">نمایندگی فروش</b>
                            </div>
                            <span>{{$all_ended_marketing_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('all_active_marketing_requisition dashboard')
            <div class="col-lg-4 mb-4">
                <div class="card card-icon rt_icon_card mb-0 text-center">
                    <div class="card-body">
                            <span class="heading_icon">
                                <img src="/assets/admin/images/icon-bg.png" alt="Rassan">
                                <i class="feather ft-briefcase"></i>
                            </span>
                        <div class="icon_specs">
                            <p>درخواست های فعال</p>
                            <div class="text-muted small-text">
                                <b class="bg-primary p-1 text-white dashboard-badge">نمایندگی فروش</b>
                            </div>
                            <span>{{$all_active_marketing_requisition}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

    </div>
    @canany([
        'chart_after_sale_tehran dashboard' ,
        'chart_provincials_after_sale dashboard',
        'chart_after_sale_agency dashboard',
        'chart_marketing dashboard',
      ])
        <livewire:admin.dashboard.chart />
    @endcanany
</div>


