@extends("admin.layout.master")

@section("content")

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <h4 class="card_title">
                            تعیین تکنسین برای درخواست -  {{$requisition->fullName}}
                        </h4>
                    </div>
                    <div>
                        <a href="{{$back_link}}" class="btn btn-light">بازگشت</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form method="post" action="{{route('admin.requisitions.technicians.store',$requisition)}}">
                        <div class="form-group">
                            <label for="title">نام و نام خانوادگی تکنسین</label>
                            <input name="name" value="{{@$requisition->technician->name}}" type="text" class="form-control" id="title" placeholder="عنوان را وارد نمایید">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="title">تاریخ و زمان مراجعه تکنسین</label>
                            <div>
                                <input value="{{@technician_date_to_jalali($requisition->technician->reference_date)}}" name="reference_date" id="reference_dateAlt" placeholder="تاریخ و زمان مراجعه را تعیین کنید" style="direction: ltr;border: 2px dashed #17a2b8;width: 100%;padding: 8px;margin-bottom: 20px;text-align: center;font-size: 1.6rem;" autocomplete="off" />
                            </div>
                            <div style="direction: ltr" class="reference_date_calendar  mb-4" ></div>

                            @error('reference_date') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="status">وضعیت کار تکنسین</label>
                            <select id="status" name="status" class="custom-select">
                                <option value="0" @if(@$requisition->technician->status == 0) selected @endif>کار تکنسین انجام نشده</option>
                                <option value="1" @if(@$requisition->technician->status == 1) selected @endif>کار تکنسین انجام شده</option>
                            </select>
                            @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">تایید</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <script type="text/javascript">
        $(document).ready(function() {

            $(".reference_date_calendar").persianDatepicker(
                {
                    "inline": true,
                    "altField": "#reference_dateAlt",
                    "initialValue": false,
                    "format": "YYYY-MM-DD HH:mm",
                    "altFormat": "YYYY-MM-DD HH:mm",
                    "viewMode": "day",
                    "minDate": new persianDate().subtract('days',7),
                    "maxDate": new persianDate().add('days', 14),
                    "autoClose": false,
                    "position": "auto",
                    "onlyTimePicker": false,
                    "onlySelectOnDate": false,
                    "calendarType": "persian",
                    "inputDelay": 800,
                    "observer": true,
                    "calendar": {
                        "persian": {
                            "locale": "fa",
                            "showHint": true,
                            "leapYearMode": "algorithmic"
                        },
                        "gregorian": {
                            "locale": "en",
                            "showHint": true
                        }
                    },
                    "navigator": {
                        "enabled": true,
                        "scroll": {
                            "enabled": false
                        },
                        "text": {
                            "btnNextText": "<",
                            "btnPrevText": ">"
                        }
                    },
                    "toolbox": {
                        "enabled": true,
                        "calendarSwitch": {
                            "enabled": false,
                            "format": "MMMM"
                        },
                        "todayButton": {
                            "enabled": true,
                            "text": {
                                "fa": "امروز",
                                "en": "Today"
                            }
                        },
                        "submitButton": {
                            "enabled": true,
                            "text": {
                                "fa": "تایید",
                                "en": "Submit"
                            }
                        },
                        "text": {
                            "btnToday": "امروز"
                        }
                    },
                    "timePicker": {
                        "enabled": true,
                        "step": 1,
                        "hour": {
                            "enabled": true,
                            "step": null
                        },
                        "minute": {
                            "enabled": true,
                            "step": null
                        },
                        "second": {
                            "enabled": false,
                            "step": null
                        },
                        "meridian": {
                            "enabled": false
                        }
                    },
                    "dayPicker": {
                        "enabled": true,
                        "titleFormat": "YYYY MMMM"
                    },
                    "monthPicker": {
                        "enabled": false,
                        "titleFormat": "YYYY"
                    },
                    "yearPicker": {
                        "enabled": false,
                        "titleFormat": "YYYY"
                    }
                }
            );
        });
    </script>
@endsection
