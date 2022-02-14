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
                            <h4 class="card_title">مدیریت نقش ها</h4>
                        </div>
                        <div class="col-lg-7 mb-3">
                            <label class="d-block">
                                <input class="form-control" placeholder="جستجو..." type="text" wire:model="search" />
                            </label>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <a href="{{route('admin.roles.create')}}" class="btn btn-dark btn-block">
                                افزودن نقش
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
                                            عنوان
                                            @if($sortField == 'name' and $sortAsc)
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
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td class="text-left">
                                            <a href="{{route('admin.roles.edit',$role)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                            @if($confirming === $role->id and $confirming !== null)
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button wire:click.prevent="cancelDelete({{ $role->id }})"
                                                            class="btn btn-success"><i class="fa fa-close"></i></button>
                                                    <button wire:click.prevent="delete({{ $role->id }})"
                                                            class="btn btn-danger"><i class="fa fa-check"></i></button>
                                                </div>
                                            @else
                                                <button class="btn btn-danger" wire:click.prevent="confirmDelete({{ $role->id }})"><i class="fa fa-trash-o"></i></button>
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
        {{ $roles->links() }}
    </div>
</div>

@section("script")
    <script>
    </script>
@endsection
