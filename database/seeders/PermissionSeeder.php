<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Role Permissions
        $rolePermissionsArray = [
            [
                'name' => 'edit role',
                'label' => 'ویرایش نقش'
            ],
            [
                'name' => 'delete role',
                'label' => 'حذف نقش'
            ],
            [
                'name' => 'create role',
                'label' => 'افزودن نقش'
            ],
            [
                'name' => 'view role',
                'label' => 'مشاهده لیست نقش ها'
            ]
        ];

        foreach ($rolePermissionsArray as $rolePermission){
            Permission::create($rolePermission);
        }

        // User Permissions
        $userPermissionsArray = [
            [
                'name' => 'edit user',
                'label' => 'ویرایش کاربر'
            ],
            [
                'name' => 'delete user',
                'label' => 'حذف کاربر'
            ],
            [
                'name' => 'create user',
                'label' => 'افزودن کاربر'
            ],
            [
                'name' => 'view user',
                'label' => 'مشاهده لیست کاربران'
            ]
        ];

        foreach ($userPermissionsArray as $userPermission){
            Permission::create($userPermission);
        }

        // Requisition Permissions
        $requisitionPermissionsArray = [
            [
                'name' => 'call_status requisition',
                'label' => 'تغییر وضعیت تماس درخواست'
            ],
            [
                'name' => 'delete requisition',
                'label' => 'حذف درخواست'
            ],
            [
                'name' => 'provincials_after_sale_list requisition',
                'label' => 'مشاهده لیست درخواست های خدمات پس از فروش شهرستان'
            ],
            [
                'name' => 'after_sale_tehran_list requisition',
                'label' => 'مشاهده لیست درخواست های خدمات پس از فروش تهران'
            ],
            [
                'name' => 'after_sale_agency_list requisition',
                'label' => 'مشاهده لیست درخواست های خدمات پس از فروش امور نمایندگان'
            ],
            [
                'name' => 'marketing_list requisition',
                'label' => 'مشاهده لیست درخواست های نمایندگی فروش'
            ],
            [
                'name' => 'refer_to_expert_status requisition',
                'label' => 'ارجاع درخواست به کارشناس'
            ],
            [
                'name' => 'set_technician_status requisition',
                'label' => 'تعیین تکنسین'
            ],
            [
                'name' => 'send_to_manager_status requisition',
                'label' => 'ارسال درخواست به مدیر بخش'
            ],
            [
                'name' => 'cancel_status requisition',
                'label' => 'لغو درخواست'
            ],
            [
                'name' => 'close_status requisition',
                'label' => 'بستن درخواست'
            ],
            [
                'name' => 'accept requisition',
                'label' => 'قبول درخواست'
            ],
        ];

        foreach ($requisitionPermissionsArray as $requisitionPermission){
            Permission::create($requisitionPermission);
        }


        // Technician Permissions
        $technicianPermissionsArray = [
            [
                'name' => 'edit technician',
                'label' => 'ویرایش تکنسین'
            ],
            [
                'name' => 'create technician',
                'label' => 'افزودن تکنسین'
            ]
        ];

        foreach ($technicianPermissionsArray as $technicianPermission){
            Permission::create($technicianPermission);
        }

        // Message Permissions
        $messagePermissionsArray = [
            [
                'name' => 'create message',
                'label' => 'ارسال پیام'
            ]
        ];

        foreach ($messagePermissionsArray as $messagePermission){
            Permission::create($messagePermission);
        }

        // Dashboard Permissions
        $dashboardPermissionsArray = [
            [
                'name' => 'all_after_sale_tehran_requisition_new dashboard',
                'label' => 'مشاهده کل درخواست های جدید خدمات پس از فروش تهران'
            ],
            [
                'name' => 'all_provincials_after_sale_requisition_new dashboard',
                'label' => 'مشاهده کل درخواست های جدید خدمات پس از فروش شهرستان'
            ],
            [
                'name' => 'all_after_sale_agency_requisition_new dashboard',
                'label' => 'مشاهده کل درخواست های جدید خدمات پس از فروش امور نمایندگان'
            ],
            [
                'name' => 'all_marketing_requisition_new dashboard',
                'label' => 'مشاهده کل درخواست های جدید نمایندگی فروش'
            ],
            [
                'name' => 'all_ended_after_sale_tehran_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های پایان یافته خدمات پس از فروش تهران'
            ],
            [
                'name' => 'all_ended_provincials_after_sale_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های پایان یافته خدمات پس از فروش شهرستان'
            ],
            [
                'name' => 'all_ended_after_sale_agency_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های پایان یافته خدمات پس از فروش امور نمایندگان'
            ],
            [
                'name' => 'all_ended_marketing_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های پایان یافته نمایندگی فروش'
            ],
            [
                'name' => 'all_active_after_sale_tehran_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های فعال خدمات پس از فروش تهران'
            ],
            [
                'name' => 'all_active_provincials_after_sale_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های فعال خدمات پس از فروش شهرستان'
            ],
            [
                'name' => 'all_active_after_sale_agency_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های فعال خدمات پس از فروش امور نمایندگان'
            ],
            [
                'name' => 'all_active_marketing_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های فعال نمایندگی فروش'
            ],
            [
                'name' => 'all_manager_after_sale_tehran_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های نیازمند تایید مدیر خدمات پس از فروش تهران'
            ],
            [
                'name' => 'all_manager_provincials_after_sale_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های نیازمند تایید مدیر خدمات پس از فروش شهرستان'
            ],
            [
                'name' => 'all_manager_after_sale_agency_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های نیازمند تایید مدیر خدمات پس از فروش امور نمایندگان'
            ],
            [
                'name' => 'all_manager_marketing_requisition dashboard',
                'label' => 'مشاهده تعداد کل درخواست های نیازمند تایید مدیر نمایندگی فروش'
            ],
            [
                'name' => 'user_ended_after_sale_tehran_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های پایان یافته خدمات پس از فروش تهران (مختص کارشناس)'
            ],
            [
                'name' => 'user_ended_provincials_after_sale_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های پایان یافته خدمات پس از فروش شهرستان (مختص کارشناس)'
            ],
            [
                'name' => 'user_ended_after_sale_agency_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های پایان یافته خدمات پس از فروش امور نمایندگان (مختص کارشناس)'
            ],
            [
                'name' => 'user_ended_marketing_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های پایان یافته نمایندگی فروش (مختص کارشناس)'
            ],
            [
                'name' => 'user_active_after_sale_tehran_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های فعال خدمات پس از فروش تهران (مختص کارشناس)'
            ],
            [
                'name' => 'user_active_provincials_after_sale_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های فعال خدمات پس از فروش شهرستان (مختص کارشناس)'
            ],
            [
                'name' => 'user_active_after_sale_agency_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های فعال خدمات پس از فروش امور نمایندگان (مختص کارشناس)'
            ],
            [
                'name' => 'user_active_marketing_requisition dashboard',
                'label' => 'مشاهده تعداد درخواست های فعال نمایندگی فروش (مختص کارشناس)'
            ],
            [
                'name' => 'chart_after_sale_tehran dashboard',
                'label' => 'مشاهده آمار عملکرد خدمات پس از فروش تهران'
            ],
            [
                'name' => 'chart_provincials_after_sale dashboard',
                'label' => 'مشاهده آمار عملکرد خدمات پس از فروش شهرستان'
            ],
            [
                'name' => 'chart_after_sale_agency dashboard',
                'label' => 'مشاهده آمار عملکرد خدمات پس از فروش امور نمایندگان '
            ],
            [
                'name' => 'chart_marketing dashboard',
                'label' => 'مشاهده آمار عملکرد نمایندگی فروش'
            ],
        ];

        foreach ($dashboardPermissionsArray as $dashboardPermission){
            Permission::create($dashboardPermission);
        }

    }
}
