<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckAdminPermission;
use App\Http\Requests\AdminTechnicianRequest;
use App\Models\Requisition;
use App\Models\Technician;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class TechnicianController extends Controller
{
    public $back_link;


    public function __construct()
    {
        $this->back_link = route('admin.requisitions.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Requisition $requisition
     * @return Response
     */
    public function index(Requisition $requisition)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Requisition $requisition
     * @return Application|Factory|View
     */
    public function create(Requisition $requisition)
    {
        if(!auth()->user()->hasPermissionTo('create technician')){
            return  abort(403);
        }

        return view("admin.technicians.create" , [
            'requisition' => $requisition,
            'back_link' => $this->back_link
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requisition $requisition
     * @param AdminTechnicianRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Requisition $requisition , AdminTechnicianRequest $request)
    {
        $requisition->addTechnician($request);
        return redirect(route('admin.requisitions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technician  $technician
     * @return Response
     */
    public function show(Technician $technician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technician  $technician
     * @return Response
     */
    public function edit(Technician $technician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technician  $technician
     * @return Response
     */
    public function update(Request $request, Technician $technician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technician  $technician
     * @return Response
     */
    public function destroy(Technician $technician)
    {
        //
    }
}
