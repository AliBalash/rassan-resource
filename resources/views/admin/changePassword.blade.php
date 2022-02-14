@extends("admin.layout.master")

@section("content")
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <h4 class="card_title">تغییر رمز عبور</h4>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form method="post" action="{{route('admin.change.password',auth()->user())}}">
                        <div class="form-group">
                            <label for="currentPassword">رمز عبور فعلی</label>
                            <input name="currentPassword" type="text" class="form-control" autocomplete="off" id="currentPassword" placeholder="رمز عبور قبلی را وارد نمایید">
                            @error('currentPassword') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword">رمز عبور جدید</label>
                            <input name="newPassword" value="" type="text" class="form-control" autocomplete="off" id="newPassword" placeholder="رمز عبور جدید را وارد نمایید">
                            @error('newPassword') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword_confirmation">تکرار رمز عبور جدید</label>
                            <input name="newPassword_confirmation" value="" type="text" class="form-control" autocomplete="off" id="newPassword_confirmation" placeholder="رمز عبور جدید خود را مجدد وارد نمایید">
                            @error('newPassword_confirmation') <span class="text-danger error">{{ $message }}</span>@enderror
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
@endsection
