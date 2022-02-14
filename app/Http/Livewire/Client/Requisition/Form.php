<?php

namespace App\Http\Livewire\Client\Requisition;

use App\Models\Requisition;
use App\Rules\CheckSubject;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Form extends Component
{
    public $fullName;
    public $mobile;
    public $subject;
    public $message;
    public $trackingCode;
    public $captcha;
    public $trackingCodeInput;
    public $request;

    public function trackingCode()
    {
        $this->validate(
            [
                'trackingCodeInput' => 'required|min:13|max:13|exists:requisitions,trackingCode'
            ]
        );

        $request = Requisition::query()
            ->where('trackingCode', $this->trackingCodeInput)->first();

        $this->request = $request;
//        dd($request->status);
    }

    public function submit()
    {

        $validatedData = $this->validate(
            [
                'fullName' => 'required|min:6',
                'mobile' => 'required|max:11|min:11',
                'subject' => ['required', new CheckSubject],
                'captcha' => 'required|captcha'
            ]
        );

        $isRequestSubmittedIn24PastQuery = Requisition::query()
            ->where('mobile',$this->mobile)
            ->whereIn('status',[0,1])
            ->where('created_at', '>',Carbon::parse('-24 hours'))
            ->orderBy('created_at', 'desc');
        if($isRequestSubmittedIn24PastQuery->exists()){
            $RequestSubmittedIn24Past = $isRequestSubmittedIn24PastQuery->first();
            $this->trackingCode = $RequestSubmittedIn24Past->trackingCode;
            $this->message = trans('requisition.form_submitted_in_24_hour_past');

        }else{
            $normalUserRole = Role::query()->where('name', 'کاربر عادی')->first();

            $getUserByMobile = User::query()->where('mobile', $validatedData['mobile'])->exists();

            if(!$getUserByMobile){

                $userNameInput = split_name($validatedData['fullName']);

                $data = [
                    'name' => $userNameInput[0],
                    'lastname' => $userNameInput[1],
                    'mobile' => $validatedData['mobile'],
                    'password' => bcrypt($validatedData['mobile']),
                    'is_admin' => false,
                ];

                $user = User::query()->create($data);

                $user->assignRole($normalUserRole->name);

            }

            $requisition = Requisition::query()->create([
                'fullName' => $validatedData['fullName'],
                'mobile' => $validatedData['mobile'],
                'subject' => $validatedData['subject'],
                'status' => 0,
                'trackingCode' => uniqid()
            ]);
            $this->trackingCode = $requisition->trackingCode;
            $this->message = trans('requisition.form_submitted_successfully');


        }
    }


    public function render()
    {
        return view('livewire.client.requisition.form');
    }



}
