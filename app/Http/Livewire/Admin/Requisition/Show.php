<?php

namespace App\Http\Livewire\Admin\Requisition;

use App\Http\Middleware\CheckAdminPermission;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use App\Models\Requisition;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $fullName;
    public $is_call;
    public $user_id;
    public $perPage = 10;
    public $sortField ='id';
    public $sortAsc = false;
    public $readyToLoad = false;
    public $confirming;
    public $updating;
    public $myself = false;
    public $status = -2;



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

    public function confirmUpdate($id)
    {
        $this->updating = $id;
    }

    public function cancelUpdate()
    {
        $this->updating = null;
    }

    public function updateCall(Requisition $requisition , $type)
    {
        if (is_bool($type)){
            Requisition::query()->where('id', $requisition->id)->update(['is_call' => $type]);
        }
        $this->dispatchBrowserEvent('contentChanged');

    }

    public function assignUser(Requisition $requisition , User $user)
    {
        if ($user->exists()){
            Requisition::query()->where('id', $requisition->id)->update([
                'user_id' => $user->id,
                'status' => 1,
            ]);
        }
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function delete(Requisition $requisition)
    {

        $requisition->delete();

        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
    }

    public function updateStatus(Requisition $requisition , $type)
    {

        Requisition::query()->where('id', $requisition->id)->update(['status' => $type]);
        $this->updating = null;
        $this->dispatchBrowserEvent('contentChanged');


        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
    }

    public function render()
    {
        $query = Requisition::query();

        $query = $query->where(function ($query) {
            $query
                ->Where('id', 'like', '%' . $this->search . '%')
                ->orWhere('fullName', 'like', '%' . $this->search . '%')
                ->orWhere('mobile', 'like', '%' . $this->search . '%')
                ->orWhere('trackingCode', 'like', '%' . $this->search . '%');

        });

        $query = $query->where(function ($query) {
            if(auth()->user()->hasPermissionTo('after_sale_tehran_list requisition')){
                $query->orWhere('subject', 'after_sale_tehran');
            }

            if(auth()->user()->hasPermissionTo('provincials_after_sale_list requisition')){
                $query->orWhere('subject', 'provincials_after_sale');
            }

            if(auth()->user()->hasPermissionTo('after_sale_agency_list requisition')){
                $query->orWhere('subject', 'after_sale_agency');
            }


            if(auth()->user()->hasPermissionTo('marketing_list requisition')){
                $query->orWhere('subject', 'marketing_list');
            }
        });

        $query = $query->where(function ($query) {

            if($this->myself){
                $query->where('user_id', auth()->user()->id);
            }

        });

        $query = $query->where(function ($query) {

            if($this->status != -2){
                $query->where('status', $this->status);
            }

        });

        $query = $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
        $requisitions = $query->paginate($this->perPage);

        return view('livewire.admin.requisition.show',[
            'requisitions' => $requisitions
        ]);
    }

}
