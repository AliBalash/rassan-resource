<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $name;
    public $lastname;
    public $mobile;
    public $is_admin = 1;
    public $perPage = 10;
    public $sortField ='id';
    public $sortAsc = false;
    public $readyToLoad = false;
    public $confirming;


    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function sortBy($field)
    {
        if($this->sortField === $field)
        {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function cancelDelete()
    {
        $this->confirming = null;
    }

    public function delete(User $user)
    {
        if(!auth()->user()->hasPermissionTo('delete user')){
            return  abort(403);
        }


        $user->delete();
        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
    }

    public function render()
    {

        return view('livewire.admin.user.show',[

            'users' => User::query()
                ->where('is_admin', $this->is_admin)
                ->where(function($query) {
                    $query->where('id',$this->search)
                        ->orWhere('mobile',$this->search)
                        ->orWhere('name', 'like', '%'.$this->search.'%')
                        ->orWhere('lastname', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%');
                })->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }

}
