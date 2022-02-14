<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div>
        @include("admin.layout.flushMessages")
    </div>
    <div class="row">
        <!-- basic table start -->
        <div class="col-lg-12 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <h4 class="card_title">مدیریت درخواست ها</h4>
                        </div>
                        <div class="col-lg-8 mb-3">
                            <label class="d-block">
                                <input class="form-control" placeholder="جستجو بر اساس شناسه، شماره موبایل، نام و نام خانوادگی و کد پیگری..." type="text" wire:model="search" />
                            </label>
                            <div class="d-flex align-items-center">
                                <label class="ml-3 w-50" style="font-size: 14px">بر اساس وضعیت درخواست</label>
                                <select class="form-control w-75" id="status" wire:model="status">
                                    <option selected> انتخاب کنید </option>
                                    <option value="0">بدون کارشناس</option>
                                    <option value="1">ارجاع به کارشناس</option>
                                    <option value="2">ارجاع به تکنسین</option>
                                    <option value="3">در انتظار تایید مدیر</option>
                                    <option value="4">بسته شده</option>
                                    <option value="-1">لغو شده</option>
                                </select>
                            </div>
                            <div class="custom-control custom-checkbox dark-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" value="1" id="myself" wire:model="myself">
                                <label class="custom-control-label small pt-1" for="myself">فقط درخواست هایی که خودم قبول کردم</label>
                            </div>

                        </div>
                    </div>
                    <div class="single-table" wire-:poll.keep-alive>
                        <div class="table-responsive">
                            <table class="table text-center table-striped">
                                <thead class="text-uppercase">
                                <tr>
                                    <th style="width: 100px">
                                        <button wire:click.prevent="sortBy('id')" role="button">
                                            شناسه
                                            @if($sortField == 'id' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th style="width: 100px">
                                        <button wire:click.prevent="sortBy('trackingCode')" role="button">
                                            کد پیگری
                                            @if($sortField == 'trackingCode' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('fullName')" role="button">
                                            نام و نام خانوادگی
                                            @if($sortField == 'fullName' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>


                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('mobile')" role="button">
                                            شماره تماس
                                            @if($sortField == 'mobile' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('subject')" role="button">
                                            موضوع
                                            @if($sortField == 'subject' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('subject')" role="button">
                                            نام کارشناس
                                            @if($sortField == 'subject' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col" style="width: 300px">
                                        <button wire:click.prevent="sortBy('status')" role="button">
                                            روند درخواست
                                            @if($sortField == 'status' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th style="width: 120px">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requisitions as $requisition)
                                    <tr>
                                        <td>{{$requisition->id}}</td>
                                        <td><span style="font-family: Tahoma;letter-spacing: 1px">{{mb_strtoupper($requisition->trackingCode)}}</span></td>
                                        <td>{{$requisition->fullName}}</td>
                                        <td>{{$requisition->mobile}}</td>
                                        <td>{{showRequisitionSubject($requisition->subject)}}</td>
                                        <td>
                                            @if(!empty($requisition->user->name))
                                                {{$requisition->user->name . ' ' . $requisition->user->lastname}}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($updating === $requisition->id and $updating !== null)
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    @can('refer_to_expert_status requisition')
                                                        <button wire:click.prevent="updateStatus({{ $requisition->id }},1)"
                                                                class="btn btn-info  small-text">ارجاع به کارشناس</button>
                                                    @endcan
                                                    @can('set_technician_status requisition')

                                                        <button wire:click.prevent="updateStatus({{ $requisition->id }},2)"
                                                                class="btn btn-warning  small-text">ارجاع به تکنسین</button>
                                                    @endcan
                                                    @can('send_to_manager_status requisition')

                                                        <button wire:click.prevent="updateStatus({{ $requisition->id }},3)" style="color: #212529"
                                                                class="btn btn-success small-text">ارسال به مدیر</button>
                                                    @endcan
                                                    @can('close_status requisition')

                                                        <button wire:click.prevent="updateStatus({{ $requisition->id }},4)" style="font-size: 10px"
                                                                class="btn btn-primary  small-text">بستن درخواست</button>
                                                    @endcan
                                                    @can('cancel_status requisition')

                                                        <button wire:click.prevent="updateStatus({{ $requisition->id }},-1)" style="font-size: 10px"
                                                                class="btn btn-dark">لغو درخواست</button>
                                                    @endcan

                                                    <button wire:click.prevent="cancelUpdate({{ $requisition->id }})"
                                                            class="btn btn-danger"><i class="fa fa-close"></i></button>
                                                </div>
                                            @else
                                                {!! showRequisitionStatus($requisition->status) !!}
                                                @if($requisition->status == 2)
                                                    @can('create technician')
                                                        <br/>
                                                        <br/>
                                                        <a class="btn btn-outline-dark" href="{{route('admin.requisitions.technicians.create' , $requisition)}}">
                                                            <i class="fa fa-clock-o"></i> تکنسین</a>
                                                    @endcan
                                                    @if(isset($requisition->technician->name))
                                                        <table class="table mt-2 mx-auto table-bordered" style="width: 260px">
                                                            <thead>
                                                            <tr>
                                                                <th>نام تکنسین</th>
                                                                <th>زمان تعیین شده</th>
                                                                <th>وضعیت کار تکنسین </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td> {{$requisition->technician->name}}</td>
                                                                <td dir="ltr"> {{technician_date_to_jalali($requisition->technician->reference_date)}}</td>
                                                                <td> {!!showTechnicianStatus($requisition->technician->status)!!}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                @endif
                                            @endif

                                        </td>
                                        <td class="text-left">
                                            @if(is_null($requisition->user_id))
                                                @can('accept requisition')
                                                    <button class="call-false btn btn-outline-dark small-text" wire:click.prevent="assignUser({{ $requisition->id }},{{auth()->user()->id}})">
                                                        <i class="fa fa-check"></i> قبول درخواست
                                                    </button>
                                                @endcan
                                            @else
                                                <div class="mb-2">
                                                    <button wire:click.prevent="confirmUpdate({{ $requisition->id }})"
                                                            class="btn btn-outline-dark btn-block small-text"><i class="fa fa-edit"></i> تغییر وضعیت</button>
                                                </div>

                                                <div class="mb-2">
                                                    @can('create message')
                                                        <a class="btn btn-outline-dark btn-block small-text" href="{{route('admin.requisitions.messages.create' , $requisition)}}">
                                                            <i class="fa fa-commenting-o"></i> پیام ها</a>
                                                    @endcan
                                                </div>

                                                <div class="d-flex">
                                                    @if($requisition->is_call)
                                                        <button class="call-true btn btn-success btn-block btn-sm" title="به صورت تلفنی صحبت کردم" wire:click.prevent="updateCall({{ $requisition->id }},false)">
                                                            <i class="fa fa-phone"></i>
                                                        </button>
                                                    @else
                                                        <button class="call-false btn btn-outline-dark btn-block btn-sm" title="هنوز تلفنی صحبت نکردم" wire:click.prevent="updateCall({{ $requisition->id }},true)">
                                                            <i class="fa fa-phone"></i>
                                                        </button>
                                                    @endif
                                                    @if($confirming === $requisition->id and $confirming !== null)
                                                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                            <button wire:click.prevent="delete({{ $requisition->id }})"
                                                                    class="btn btn-danger"><i class="fa fa-check"></i></button>
                                                            <button wire:click.prevent="cancelDelete({{ $requisition->id }})"
                                                                    class="btn btn-success"><i class="fa fa-close"></i></button>
                                                        </div>
                                                    @else
                                                        @can('delete requisition')
                                                            <button class="btn btn-outline-danger btn-block mt-0 mr-2 btn-sm" title="حذف درخواست"   wire:click.prevent="confirmDelete({{ $requisition->id }})">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        @endcan
                                                    @endif
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table end -->
    </div>
    <div class="my-3 d-flex justify-content-center">
        {{ $requisitions->links() }}
    </div>
</div>

@section("script")
    <script type="text/javascript">

        window.addEventListener('contentChanged', event => {

        });
    </script>
@endsection
