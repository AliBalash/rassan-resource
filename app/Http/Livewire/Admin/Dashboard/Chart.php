<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Requisition;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Chart extends Component
{
    public $subject;
    public $status = 0;
    public $output;

    public function __construct()
    {
        if(auth()->user()->hasPermissionTo('chart_after_sale_tehran dashboard')){
            $this->subject = 'after_sale_tehran';
        }else if(auth()->user()->hasPermissionTo('chart_provincials_after_sale dashboard')){
            $this->subject = 'provincials_after_sale';
        } else if(auth()->user()->hasPermissionTo('chart_after_sale_agency dashboard')){
            $this->subject = 'after_sale_agency';
        } else if(auth()->user()->hasPermissionTo('chart_marketing dashboard')){
            $this->subject = 'marketing';
        }else{
            $this->subject = null;
        }
    }

    public function render()
    {
        $date1 = Carbon::parse('-7 day');
        $date2 = Carbon::parse('-6 day');
        $date3 = Carbon::parse('-5 day');
        $date4 = Carbon::parse('-4 day');
        $date5 = Carbon::parse('-3 day');
        $date6 = Carbon::parse('-2 day');
        $date7 = Carbon::parse('-1 day');
        $date8 = Carbon::now();

        $day1 = Carbon::createFromFormat('Y-m-d H:i:s', $date1)->format('d');
        $day2 = Carbon::createFromFormat('Y-m-d H:i:s', $date2)->format('d');
        $day3 = Carbon::createFromFormat('Y-m-d H:i:s', $date3)->format('d');
        $day4 = Carbon::createFromFormat('Y-m-d H:i:s', $date4)->format('d');
        $day5 = Carbon::createFromFormat('Y-m-d H:i:s', $date5)->format('d');
        $day6 = Carbon::createFromFormat('Y-m-d H:i:s', $date6)->format('d');
        $day7 = Carbon::createFromFormat('Y-m-d H:i:s', $date7)->format('d');
        $day8 = Carbon::createFromFormat('Y-m-d H:i:s', $date8)->format('d');

//        $jDate1 =  verta($date1);
//        $jDate1 = $jDate1->formatJalaliDate();
//
//        $item1 = Requisition::query()
//            ->where('status', $this->status)
//            ->where('subject', $this->subject)
//            ->whereDay('created_at', $day1)
//            ->count();

        $jDate2 =  verta($date2);
        $jDate2 = $jDate2->formatJalaliDate();

        $item2 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day2)
            ->count();

        $jDate3 =  verta($date3);
        $jDate3 = $jDate3->formatJalaliDate();

        $item3 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day3)
            ->count();

        $jDate4 =  verta($date4);
        $jDate4 = $jDate4->formatJalaliDate();

        $item4 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day4)
            ->count();


        $jDate5 =  verta($date5);
        $jDate5 = $jDate5->formatJalaliDate();

        $item5 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day5)
            ->count();

        $jDate6 =  verta($date6);
        $jDate6 = $jDate6->formatJalaliDate();

        $item6 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day6)
            ->count();


        $jDate7 =  verta($date7);
        $jDate7 = $jDate7->formatJalaliDate();

        $item7 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day7)
            ->count();

        $jDate8 =  verta($date8);
        $jDate8 = $jDate8->formatJalaliDate();

        $item8 = Requisition::query()
            ->where('status', $this->status)
            ->where('subject', $this->subject)
            ->whereDay('created_at', $day8)
            ->count();


        $this->output = [
//            [
//                'period' => $jDate1,
//                'item' => $item1,
//            ],
            [
                'period' => $jDate2,
                'item' => $item2,
            ],
            [
                'period' => $jDate3,
                'item' => $item3,
            ],
            [
                'period' => $jDate4,
                'item' => $item4,
            ],
            [
                'period' => $jDate5,
                'item' => $item5,
            ],
            [
                'period' => $jDate6,
                'item' => $item6,
            ],
            [
                'period' => $jDate7,
                'item' => $item7,
            ],
            [
                'period' => $jDate8,
                'item' => $item8,
            ],
        ];

        $this->dispatchBrowserEvent('contentChanged');

        return view('livewire.admin.dashboard.chart',[
            'output' => $this->output
        ]);
    }
}
