<?php

namespace App\Models;

use App\Http\Requests\AdminTechnicianRequest;
use Hekmatinasser\Verta\Verta;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Morilog\Jalali\Jalalian;

class Requisition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function technician(){
        return $this->hasOne(Technician::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function addTechnician(AdminTechnicianRequest  $request)
    {

        if (!$this->technician()->exists()){
            $this->technician()->create([
                'name' => $request->get('name'),
                'reference_date' => technician_date_to_gregorian($request->get('reference_date')),
                'status' => $request->get('status'),
            ]);
        }else{
            $this->technician->update([
                'name' => $request->get('name'),
                'reference_date' => technician_date_to_gregorian($request->get('reference_date')),
                'status' => $request->get('status'),
            ]);
        }
    }
}
