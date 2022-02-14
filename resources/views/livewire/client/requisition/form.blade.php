<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="uk-flex uk-flex-wrap" uk-height-match=".col">
        <div class="uk-width-1-2@l col" style="background: linear-gradient(35deg, rgb(186, 186, 186) 0%, rgb(1, 1, 1) 100%);">
            <div class="" >
                <div class="uk-container" style="padding-top: 200px">
                    <div class=" uk-flex uk-flex-top uk-animation-fade">
                        <div class="uk-width-1-1">
                            <div class="uk-container">
                                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-1-1@m">
                                        @if(!isset($trackingCode))
                                            <h3 class="uk-text-white uk-text-center">{{ trans('requisition.submit_form_title')}}</h3>
                                            <form id="sumbit_form" class="uk-padding" wire:submit.prevent="submit">
                                                <div class="uk-margin">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <label>
                                                        <span class="uk-form-icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg>
                                                        </span>

                                                            <input value="{{$fullName}}" name="fullName" class="uk-input uk-form-large" type="text" placeholder="{{ trans('requisition.fullName')}}" wire:model="fullName">
                                                        </label>
                                                    </div>
                                                    @error('fullName') <div class="uk-text-danger p-3" style="background-color: #efefef">{{ $message }}</div> @enderror

                                                </div>
                                                <div class="uk-margin">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,3 C5.5,2.2 6.2,1.5 7,1.5 L14,1.5 C14.8,1.5 15.5,2.2 15.5,3 L15.5,17 L15.5,17 L15.5,17 Z"></path><circle cx="10.5" cy="16.5" r=".8"></circle></svg></span>
                                                        <input name="mobile" class="uk-input uk-form-large" type="text" placeholder="{{ trans('requisition.mobile')}}" wire:model="mobile">
                                                    </div>
                                                    @error('mobile') <div class="uk-text-danger p-3" style="background-color: #efefef">{{ $message }}</div> @enderror

                                                </div>
                                                <div class="uk-margin">
                                                    <div class="uk-inline uk-width-1-1 uk-padding" style="background-color: white">
                                                        <div class="uk-margin-bottom" style="font-size: 1.2rem">{{trans('requisition.subject_desc')}}</div>

                                                        <div class="uk-margin-small-bottom">
                                                            <label style=";cursor: pointer">
                                                                <input class="uk-radio" type="radio" value="after_sale_tehran"  wire:model="subject"> {{trans('requisition.subject_a')}} </label>
                                                        </div>
                                                        <div class="uk-margin-small-bottom">
                                                            <label style=";cursor: pointer"><input class="uk-radio" value="provincials_after_sale" type="radio"  wire:model="subject"> {{trans('requisition.subject_b')}}</label>
                                                        </div>
                                                        <div class="uk-margin-small-bottom">
                                                            <label style=";cursor: pointer"><input class="uk-radio" value="after_sale_agency" type="radio"  wire:model="subject"> {{trans('requisition.subject_c')}}</label>
                                                        </div>
                                                        <div class="uk-margin-small-bottom">
                                                            <label style=";cursor: pointer"><input class="uk-radio" value="marketing_list" type="radio"  wire:model="subject"> {{trans('requisition.subject_d')}}</label>
                                                        </div>
                                                    </div>
                                                    @error('subject') <div class="uk-text-danger p-3" style="background-color: #efefef">{{ $message }}</div> @enderror

                                                </div>
                                                <div class="uk-margin"  wire:ignore>
                                                    <div class="uk-flex-around" uk-grid>
                                                        <div class="uk-width-expand@l uk-width-1-1@s">
                                                            <input maxlength="4" id="captcha" type="text" class="uk-input uk-form-large uk-text-center uk-text-uppercase" placeholder="{{trans('requisition.captcha')}}" name="captcha" wire:model="captcha">
                                                        </div>
                                                        <div class="captcha uk-width-auto@l uk-width-1-1@s uk-flex uk-flex-between">
                                                            <span style="width: 200px;">{!! captcha_img() !!}</span>
                                                            <div class="">
                                                                <button type="button" class="uk-button uk-button-danger" id="reload" style="height: 55px">
                                                                    &#x21bb;
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('captcha') <div class="uk-text-danger p-3" style="background-color: #efefef">{{ $message }}</div> @enderror

                                                <div class="uk-margin">
                                                    <button type="submit" class="uk-button uk-button-secondary uk-button-large uk-width-1-1">{{trans('requisition.submit')}}</button>
                                                </div>
                                                @csrf
                                            </form>
                                        @else
                                            <div class="uk-animation-slide-bottom-medium">
                                                <div class="uk-padding bg-light">
                                                    {{$message}}
                                                    <h2 class="uk-text-center uk-margin-top"> {{trans('requisition.request_code')}}</h2>
                                                    <h3 class="uk-text-center  uk-text-success">
                                                        <span class="uk-padding-small uk-margin-top" style="border: 2px dashed #bcbcbc;padding: 10px 40px;">{{$trackingCode}}</span>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2@l col" style="background-color: #131729;">
            <div>
                <div class="uk-container" style="padding-top: 200px">
                    <div class="uk-flex uk-flex-top uk-animation-fade ">
                        <div class="uk-width-1-1">
                            <div class="uk-container">
                                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-1-1@m">
                                        <h3 class="uk-text-center uk-text-white">{{trans('requisition.tracking_form_title')}}</h3>
                                        <form class="uk-padding" wire:submit.prevent="trackingCode">
                                            <div class="uk-margin">
                                                <div class="uk-inline uk-width-1-1">
                                                    <span class="uk-form-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="#000" points="1 2 2 2 2 6 6 6 6 7 1 7 1 2"></polyline><path fill="none" stroke="#000" stroke-width="1.1" d="M2.1,6.548 C3.391,3.29 6.746,1 10.5,1 C15.5,1 19.5,5 19.5,10 C19.5,15 15.5,19 10.5,19 C5.5,19 1.5,15 1.5,10"></path><rect x="9" y="4" width="1" height="7"></rect><path fill="none" stroke="#000" stroke-width="1.1" d="M13.018,14.197 L9.445,10.625"></path></svg></span>
                                                    <input name="trackingCodeInput" class="uk-input uk-form-large" type="text" placeholder="{{trans('requisition.request_code')}}" wire:model="trackingCodeInput">
                                                </div>
                                                @error('trackingCodeInput') <div class="uk-text-danger p-3" style="background-color: #efefef">{{ $message }}</div> @enderror
                                            </div>
                                            <div class="uk-margin">
                                                <button class="uk-button uk-button-secondary uk-button-large uk-width-1-1">{{trans('requisition.submit')}}</button>
                                            </div>
                                        </form>
                                        @if(!isset($request))
                                            <h3 class="uk-text-white uk-text-center">{{trans('requisition.tracking_form_heading')}}</h3>
                                            <div class="uk-text-white uk-text-center">
                                                <p>{{trans('requisition.tracking_form_desc')}}</p>
                                            </div>
                                            <div class="uk-margin-large uk-padding">
                                                <img src="/assets/client/images/steps.png" />
                                            </div>
                                        @else
                                            <div class="uk-animation-slide-bottom-medium">
                                                <div class="uk-width-1-1 uk-text-center uk-padding uk-padding-remove-top">
                                                    <h2 class="uk-heading-line uk-text-center uk-text-white uk-margin-large-bottom"><span>{{trans('requisition.tracking_form_result_title')}}</span></h2>

                                                    <div class="">
                                                        <ul class="progress @if(__('global.direction') == 'rtl') rtl @endif">
                                                            <li class="progress__item
                                                            @if($request->status == 1) progress__item--active @endif
                                                            @if($request->status > 1) progress__item--completed @endif ">
                                                                <p class="progress__title">{{trans('requisition.tracking_form_result_step1')}}</p>
                                                                @if($request->status == 1)
                                                                    <p class="progress__info">{{trans('requisition.current')}}</p>
                                                                @else
                                                                    <p class="progress__info">{{trans('requisition.completed')}}</p>
                                                                @endif

                                                            </li>
                                                            <li class="progress__item
                                                            @if($request->status == 2) progress__item--active @endif
                                                            @if($request->status > 2) progress__item--completed @endif ">
                                                                <p class="progress__title">{{trans('requisition.tracking_form_result_step2')}}</p>
                                                                @if($request->status == 1)
                                                                    <p class="progress__info">{{trans('requisition.next_step')}}</p>
                                                                @elseif($request->status == 2)
                                                                    <p class="progress__info">{{trans('requisition.current')}}</p>
                                                                @else
                                                                    <p class="progress__info">{{trans('requisition.completed')}}</p>
                                                                @endif
                                                            </li>
                                                            <li class="progress__item @if($request->status == 3) progress__item--active @endif">
                                                                <p class="progress__title">{{trans('requisition.tracking_form_result_step3')}}</p>
                                                                @if($request->status == 1)
                                                                @elseif($request->status == 2)
                                                                    <p class="progress__info">{{trans('requisition.next_step')}}</p>
                                                                @else
                                                                    <p class="progress__info">{{trans('requisition.completed')}}</p>
                                                                @endif
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section("script")
    <script>
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

        $('#sumbit_form').submit(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endsection
