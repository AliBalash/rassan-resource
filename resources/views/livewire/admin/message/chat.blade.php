<div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between border-bottom mb-3">
                    <div>
                        <h4 class="card_title mb-1">
                            پیام های درخواست -  {{$requisition->fullName}}
                        </h4>
                        <div class="text-muted mb-3">
                            این درخواست در {{technician_date_to_jalali($requisition->created_at)}} در سامانه ثبت شده است.
                        </div>
                    </div>
                    <div>
                        <a href="{{$back_link}}" class="btn btn-light">بازگشت</a>
                    </div>
                </div>
                <div class="col-lg-12 comment-panel">
                    <div class="" id="chat" wire:poll.keep-alive>
                        @foreach($messages as $message)
                            <div class="card post mb-3 @if($message->user_id == auth()->user()->id) bg-card-light- @endif">
                                <div class="post-heading">
                                    <div class="meta">
                                        <div class="title">
                                            <b>{{$message->user->name . ' ' . $message->user->lastname}} | {{technician_date_to_jalali($message->created_at)}}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-description">
                                    <p>{{$message->body}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="my-3 d-flex justify-content-center">
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form id="send-comment" wire:submit.prevent="submit">
                <div class="input-group">
                    <input wire:model="body" type="text" class="form-control" placeholder="پیام خود را وارد نمایید">
                    <span class="input-group-btn"><button class="btn btn-primary" type="submit">ارسال</button></span>
                </div>
                @error('body') <span class="text-danger error">{{ $message }}</span>@enderror

                @csrf
            </form>
        </div>
    </div>





</div>

@section("script")
    <script type="text/javascript">
        $( '#send-comment' ).submit(function(){
            this.reset();
        });
    </script>
@endsection


