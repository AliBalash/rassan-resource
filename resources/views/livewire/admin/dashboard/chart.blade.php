<div>
    <div class="row mb-5">
        <div class="col-lg-12 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title d-flex flex-wrap justify-content-between align-items-start">
                        <div>
                            <h4 class="card_title mb-0">آمار و عملکرد درخواست ها</h4>
                            <form wire:submit.prevent="submit">
                                <br/>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-5 my-1">
                                        <label for="subject">بخش</label>
                                        <select class="form-control" id="subject" wire:model="subject">
                                            <option selected> انتخاب کنید </option>
                                            @can('chart_after_sale_tehran dashboard')
                                                <option value="after_sale_tehran">خدمات پس از فروش تهران</option>
                                            @endcan
                                            @can('chart_provincials_after_sale dashboard')
                                                <option value="provincials_after_sale">خدمات پس از فروش شهرستان</option>
                                            @endcan
                                            @can('chart_after_sale_agency dashboard')
                                                <option value="after_sale_agency">خدمات پس از فروش امور نمایندگان</option>
                                            @endcan
                                            @can('chart_marketing dashboard')
                                                <option value="marketing_list">نمایندگی فروش</option>
                                            @endcan
                                        </select>
                                    </div>
                                    <div class="col-sm-5 my-1">
                                        <label for="status">وضعیت درخواست</label>
                                        <select class="form-control" id="status" wire:model="status">
                                            <option selected> انتخاب کنید </option>
                                            <option value="0">بدون کارشناس</option>
                                            <option value="1">ارجاع به کارشناس</option>
                                            <option value="2">ارجاع به تکنسین</option>
                                            <option value="3">در انتظار تایید مدیر</option>
                                            <option value="4">بسته شده</option>
                                            <option value="-1">لغو شده</option>
                                        </select>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="mr-2 d-none d-md-block tab_links">
                                    7 روز اخیر
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <table class="table highchart" style="display: none"
                               data-graph-datalabels-align="center"
                               data-graph-container-before="1"
                               data-graph-type="column"
                        >
                            <thead>
                            <tr>
                                <th>تاریخ</th>
                                <th>درخواست</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($output as $r)
                                <tr>
                                    <td>{{$r['period']}}</td>
                                    <td>{{$r['item']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('table.highchart').highchartTable();
        });

        window.addEventListener('contentChanged', event => {
            $(document).ready(function() {
                $('table.highchart').highchartTable();
            });
        });



    </script>

</div>





@push("scripts")
    {{--    <script src="/assets/admin/js/chart.js"></script>--}}
    <script src="/assets/admin/js/highcharts.js" type="text/javascript"></script>
    <script src="/assets/admin/js/jquery.highchartTable-min.js" type="text/javascript"></script>
@endpush



