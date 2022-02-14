@if (session()->has('message'))
    @if(session('message')['type'] == 'success')
        <div class="alert alert-success alert-dissmissible fade show" role="alert">
            <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <span>{{ session('message')['body'] }}</span>
        </div>
    @endif
    @if(session('message')['type'] == 'error')
        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
            <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <span>{{ session('message')['body'] }}</span>
        </div>
    @endif
@endif


