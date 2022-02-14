<?php

namespace App\Http\Livewire\Admin\Message;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class Chat extends Component
{
    use WithPagination;

    public $requisition;
    public $body;
    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'body' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Message::query()->create([
            'user_id' => auth()->user()->id,
            'requisition_id' => $this->requisition->id,
            'body' => $this->body,
        ]);

        $this->body = '';
    }

    public function render()
    {

        $query = Message::query();
        $query = $query->Where('requisition_id', $this->requisition->id);

        $query = $query->orderBy('created_at', 'desc');
        $messages = $query->paginate($this->perPage);

        return view('livewire.admin.message.chat',[
            'messages' => $messages,
            'requisition' => $this->requisition,
            'back_link' => route('admin.requisitions.index'),

        ]);
    }
}
