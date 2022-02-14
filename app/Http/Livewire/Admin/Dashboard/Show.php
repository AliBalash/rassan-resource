<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Requisition;
use Livewire\Component;

class Show extends Component
{

    public $user_ended_after_sale_tehran_requisition = 0;
    public $user_ended_provincials_after_sale_requisition = 0;
    public $user_ended_after_sale_agency_requisition = 0;
    public $user_ended_marketing_requisition = 0;

    public $user_active_after_sale_tehran_requisition= 0;
    public $user_active_provincials_after_sale_requisition= 0;
    public $user_active_after_sale_agency_requisition= 0;
    public $user_active_marketing_requisition= 0;

    public $all_after_sale_tehran_requisition_new= 0;
    public $all_provincials_after_sale_requisition_new= 0;
    public $all_after_sale_agency_requisition_new= 0;
    public $all_marketing_requisition_new= 0;

    public $all_ended_after_sale_tehran_requisition= 0;
    public $all_ended_provincials_after_sale_requisition= 0;
    public $all_ended_after_sale_agency_requisition= 0;
    public $all_ended_marketing_requisition= 0;

    public $all_active_after_sale_tehran_requisition= 0;
    public $all_active_provincials_after_sale_requisition= 0;
    public $all_active_after_sale_agency_requisition= 0;
    public $all_active_marketing_requisition= 0;

    public $all_manager_after_sale_tehran_requisition= 0;
    public $all_manager_provincials_after_sale_requisition= 0;
    public $all_manager_after_sale_agency_requisition= 0;
    public $all_manager_marketing_requisition= 0;

    public function render()
    {

        /* user completed Requisition */

        if(auth()->user()->hasPermissionTo('user_ended_after_sale_tehran_requisition dashboard')){
            $this->user_ended_after_sale_tehran_requisition = Requisition::query()
                ->where('subject','after_sale_tehran')
                ->where('user_id',auth()->user()->id)
                ->where('status','4')
                ->count();
        }

        if(auth()->user()->hasPermissionTo('user_ended_provincials_after_sale_requisition dashboard')){
            $this->user_ended_provincials_after_sale_requisition = Requisition::query()
                ->where('subject','provincials_after_sale')
                ->where('user_id',auth()->user()->id)
                ->where('status','4')
                ->count();
        }

        if(auth()->user()->hasPermissionTo('user_ended_after_sale_agency_requisition dashboard')){
            $this->user_ended_after_sale_agency_requisition = Requisition::query()
                ->where('subject','after_sale_agency')
                ->where('user_id',auth()->user()->id)
                ->where('status','4')
                ->count();
        }

        if(auth()->user()->hasPermissionTo('user_ended_marketing_requisition dashboard')){
            $this->user_ended_marketing_requisition = Requisition::query()
                ->where('subject','marketing')
                ->where('user_id',auth()->user()->id)
                ->where('status','4')
                ->count();
        }

        /* End */

        /* user active Requisition */

        if(auth()->user()->hasPermissionTo('user_active_after_sale_tehran_requisition dashboard')){
            $this->user_active_after_sale_tehran_requisition = Requisition::query()
                ->where('subject','after_sale_tehran')
                ->where('user_id',auth()->user()->id)
                ->whereIn('status',[1,2,3])
                ->count();
        }

        if(auth()->user()->hasPermissionTo('user_active_provincials_after_sale_requisition dashboard')){
            $this->user_active_provincials_after_sale_requisition = Requisition::query()
                ->where('subject','provincials_after_sale')
                ->where('user_id',auth()->user()->id)
                ->whereIn('status',[1,2,3])
                ->count();
        }

        if(auth()->user()->hasPermissionTo('user_active_after_sale_agency_requisition dashboard')){
            $this->user_active_after_sale_agency_requisition = Requisition::query()
                ->where('subject','after_sale_agency')
                ->where('user_id',auth()->user()->id)
                ->whereIn('status',[1,2,3])
                ->count();
        }

        if(auth()->user()->hasPermissionTo('user_active_marketing_requisition dashboard')){
            $this->user_active_marketing_requisition = Requisition::query()
                ->where('subject','marketing')
                ->where('user_id',auth()->user()->id)
                ->whereIn('status',[1,2,3])
                ->count();
        }

        /* End */

        /* new Requisition */

        if(auth()->user()->hasPermissionTo('all_after_sale_tehran_requisition_new dashboard')){
            $this->all_after_sale_tehran_requisition_new = Requisition::query()
                ->where('subject','after_sale_tehran')
                ->where('status',0)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_provincials_after_sale_requisition_new dashboard')){
            $this->all_provincials_after_sale_requisition_new = Requisition::query()
                ->where('subject','provincials_after_sale')
                ->where('status',0)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_after_sale_agency_requisition_new dashboard')){
            $this->all_after_sale_agency_requisition_new = Requisition::query()
                ->where('subject','after_sale_agency')
                ->where('status',0)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_marketing_requisition_new dashboard')){
            $this->all_marketing_requisition_new = Requisition::query()
                ->where('subject','marketing')
                ->where('status',0)
                ->count();
        }

        /* End */

        /* All Ended Requisition */

        if(auth()->user()->hasPermissionTo('all_ended_after_sale_tehran_requisition dashboard')){
            $this->all_ended_after_sale_tehran_requisition = Requisition::query()
                ->where('subject','after_sale_tehran')
                ->where('status',4)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_ended_provincials_after_sale_requisition dashboard')){
            $this->all_ended_provincials_after_sale_requisition = Requisition::query()
                ->where('subject','provincials_after_sale')
                ->where('status',4)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_ended_after_sale_agency_requisition dashboard')){
            $this->all_ended_after_sale_agency_requisition = Requisition::query()
                ->where('subject','after_sale_agency')
                ->where('status',4)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_ended_marketing_requisition dashboard')){
            $this->all_ended_marketing_requisition = Requisition::query()
                ->where('subject','marketing')
                ->where('status',4)
                ->count();
        }

        /* End */


        /* All active Requisition */

        if(auth()->user()->hasPermissionTo('all_active_after_sale_tehran_requisition dashboard')){
            $this->all_active_after_sale_tehran_requisition = Requisition::query()
                ->where('subject','after_sale_tehran')
                ->whereIn('status',[1,2,3])
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_active_provincials_after_sale_requisition dashboard')){
            $this->all_active_provincials_after_sale_requisition = Requisition::query()
                ->where('subject','provincials_after_sale')
                ->whereIn('status',[1,2,3])
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_active_after_sale_agency_requisition dashboard')){
            $this->all_active_after_sale_agency_requisition = Requisition::query()
                ->where('subject','after_sale_agency')
                ->whereIn('status',[1,2,3])
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_active_marketing_requisition dashboard')){
            $this->all_active_marketing_requisition = Requisition::query()
                ->where('subject','marketing')
                ->whereIn('status',[1,2,3])
                ->count();
        }

        /* End */

        /* All Manager Requisition */

        if(auth()->user()->hasPermissionTo('all_manager_after_sale_tehran_requisition dashboard')){
            $this->all_manager_after_sale_tehran_requisition = Requisition::query()
                ->where('subject','after_sale_tehran')
                ->where('status',3)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_manager_provincials_after_sale_requisition dashboard')){
            $this->all_manager_provincials_after_sale_requisition = Requisition::query()
                ->where('subject','provincials_after_sale')
                ->where('status',3)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_manager_after_sale_agency_requisition dashboard')){
            $this->all_manager_after_sale_agency_requisition = Requisition::query()
                ->where('subject','after_sale_agency')
                ->where('status',3)
                ->count();
        }

        if(auth()->user()->hasPermissionTo('all_manager_marketing_requisition dashboard')){
            $this->all_manager_marketing_requisition = Requisition::query()
                ->where('subject','marketing')
                ->where('status',3)
                ->count();
        }

        /* End */

        return view('livewire.admin.dashboard.show');


    }
}
