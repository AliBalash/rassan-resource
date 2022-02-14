@extends("admin.layout.master")

@section("content")
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <h4 class="card_title">افزدودن کاربر جدید</h4>
                    </div>
                    <div>
                        <a href="{{$back_link}}" class="btn btn-light">بازگشت</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form method="post" action="{{route('admin.users.store')}}">
                        <div class="form-group">
                            <label for="name">نام</label>
                            <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name" placeholder="نام را وارد نمایید">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="lastname">نام خانوادگی</label>
                            <input name="lastname" type="text" value="{{old('lastname')}}" class="form-control" id="lastname" placeholder="نام خانوادگی را وارد نمایید">
                            @error('lastname') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="mobile">موبایل</label>
                            <input name="mobile" type="text" value="{{old('mobile')}}" class="form-control" id="mobile" placeholder="موبایل را وارد نمایید" />
                            @error('mobile') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">ایمیل (اختیاری)</label>
                            <input name="email" type="text" value="{{old('email')}}" class="form-control" id="email" placeholder="ایمیل را وارد نمایید" />
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="password">رمزعبور</label>
                            <input name="password" type="text" value="{{old('password')}}" class="form-control" id="password" placeholder="رمزعبور را وارد نمایید">
                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox dark-checkbox mb-2">
                                <input name="is_admin" @if(old('is_admin') == 1) checked @endif type="checkbox" class="custom-control-input" value="1" id="is_admin">
                                <label class="custom-control-label" for="is_admin">کاربر پنل</label>
                            </div>
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
