@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    <p>{{ $error }}</p>
                </li>
            @endforeach
        </ul>
        <span class="alert-box__close"></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="fa fa-close"></i>
        </button>
    </div>
@endif
