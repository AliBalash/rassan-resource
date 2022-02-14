@extends("admin.layout.master")

@section("content")

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <h4 class="card_title">
                            ویرایش نقش {{$role->name}}
                        </h4>
                    </div>
                    <div>
                        <a href="{{$back_link}}" class="btn btn-light">بازگشت</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form method="post" action="{{route('admin.roles.update',$role)}}">
                        <div class="form-group">
                            <label for="name">عنوان</label>
                            <input name="name" value="{{$role->name}}" type="text" class="form-control" id="name" placeholder="عنوان را وارد نمایید">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            @foreach($permissions as $permission)
                                <div class="custom-control custom-checkbox dark-checkbox mb-2">
                                    <input name="permissionList[]"
                                           @if($role->hasPermissionTo($permission)) checked @endif
                                           type="checkbox" class="custom-control-input" value="{{$permission->id}}" id="{{$permission->id}}">
                                    <label class="custom-control-label" for="{{$permission->id}}">{{$permission->label}}</label>
                                </div>
                            @endforeach
                            @error('permissionList') <span class="text-danger error">{{ $message }}</span>@enderror

                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">تایید</button>
                            </div>
                        </div>
                        @csrf
                        @method('PATCH')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
