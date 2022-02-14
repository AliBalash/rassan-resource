<?php

namespace App\Http\Livewire\Admin\Role;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $name;
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

    public function delete(Role $role)
    {
        if(!auth()->user()->hasPermissionTo('delete role')){
            return  abort(403);
        }

        $role->permissions()->detach();
        $role->delete();

        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
    }

    public function render()
    {
        return view('livewire.admin.role.show',[
            'roles' => Role::query()
                ->where('id', $this->search)
                ->orWhere('name', 'like', '%'.$this->search.'%')
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }

}
