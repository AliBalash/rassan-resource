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
                            <h4 class="card_title">مدیریت کاربران</h4>
                        </div>
                        <div class="col-lg-7 mb-3">
                            <label class="d-block">
                                <input class="form-control" placeholder="جستجو..." type="text" wire:model="search" />
                                <div class="custom-control custom-checkbox dark-checkbox mb-2">
                                    <input name="is_admin" type="checkbox" class="custom-control-input" value="1" id="is_admin" wire:model="is_admin">
                                    <label class="custom-control-label small pt-1" for="is_admin">بر اساس کاربران پنل</label>
                                </div>
                            </label>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <a href="{{route('admin.users.create')}}" class="btn btn-dark btn-block">
                                افزودن کاربر
                            </a>
                        </div>
                    </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
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
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('name')" role="button">
                                            نام
                                            @if($sortField == 'name' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('lastname')" role="button">
                                            نام خانوادگی
                                            @if($sortField == 'lastname' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('mobile')" role="button">
                                            موبایل
                                            @if($sortField == 'mobile' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th scope="col">
                                        <button wire:click.prevent="sortBy('is_admin')" role="button">
                                            پنل
                                            @if($sortField == 'is_admin' and $sortAsc)
                                                <i class="fa fa-sort-asc"></i>
                                            @else
                                                <i class="fa fa-sort-desc"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th style="width: 200px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td>
                                            @if($user->is_admin == 1) <span class="badge badge-success">پنل</span>
                                            @else
                                                <span class="badge badge-secondary">عادی</span>
                                            @endif
                                        </td>
                                        <td class="text-left">
                                            <a href="{{route('admin.users.edit',$user)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                            @if($confirming === $user->id and $confirming !== null)
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button wire:click.prevent="cancelDelete({{ $user->id }})"
                                                            class="btn btn-success"><i class="fa fa-close"></i></button>
                                                    <button wire:click.prevent="delete({{ $user->id }})"
                                                            class="btn btn-danger"><i class="fa fa-check"></i></button>
                                                </div>
                                            @else
                                                <button class="btn btn-danger"  wire:click.prevent="confirmDelete({{ $user->id }})"><i class="fa fa-trash-o"></i></button>
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
        {{ $users->links() }}
    </div>
</div>

@section("script")
    <script>
    </script>
@endsection
