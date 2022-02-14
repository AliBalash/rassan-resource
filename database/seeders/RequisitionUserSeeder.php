<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RequisitionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // کارشناس خدمات پس از فروش شهرستان

        $provincials_after_sale_role = Role::query()->create([
            'name' => 'کارشناس خدمات پس از فروش شهرستان'
        ]);

        $provincials_after_sale_permissions = [
            'call_status requisition',
            'provincials_after_sale_list requisition',
            'create technician',
            'create message',
            'refer_to_expert_status requisition',
            'set_technician_status requisition',
            'send_to_manager_status requisition',
            'accept requisition',
            'all_provincials_after_sale_requisition_new dashboard',
            'user_ended_provincials_after_sale_requisition dashboard',
            'user_active_provincials_after_sale_requisition dashboard',
        ];

        $provincials_after_sale_permissions_ids = Permission::query()->whereIn('name',$provincials_after_sale_permissions)->pluck('id','id')->all();

        $provincials_after_sale_role->syncPermissions($provincials_after_sale_permissions_ids);

        $provincials_after_sale_user = User::query()->create([
            'name' => 'ناتاشا',
            'lastname' => 'نیک صولت',
            'mobile' => '09912705605',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09912705605'),

        ]);

        $provincials_after_sale_user->assignRole($provincials_after_sale_role->name);

        /******************************/

        // کارشناس خدمات پس از فروش تهران

        $after_sale_tehran_role = Role::query()->create([
            'name' => 'کارشناس خدمات پس از فروش تهران'
        ]);

        $after_sale_tehran_permissions = [
            'call_status requisition',
            'after_sale_tehran_list requisition',
            'create technician',
            'create message',
            'refer_to_expert_status requisition',
            'set_technician_status requisition',
            'send_to_manager_status requisition',
            'accept requisition',
            'all_after_sale_tehran_requisition_new dashboard',
            'user_ended_after_sale_tehran_requisition dashboard',
            'user_active_after_sale_tehran_requisition dashboard',
        ];


        $after_sale_tehran_permissions_ids = Permission::query()->whereIn('name',$after_sale_tehran_permissions)->pluck('id','id')->all();

        $after_sale_tehran_role->syncPermissions($after_sale_tehran_permissions_ids);


        $after_sale_tehran_user = User::query()->create([
            'name' => 'بهاره',
            'lastname' => 'سیری',
            'mobile' => '09912705606',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09912705606'),

        ]);

        $after_sale_tehran_user->assignRole($after_sale_tehran_role->name);

        /******************************/

        // کارشناس خدمات پس از فروش شهرستان و امور نمایندگان

        $provincials_after_sale_and_requisitions_after_sale_agency_role = Role::query()->create([
            'name' => 'کارشناس خدمات پس از فروش شهرستان و امور نمایندگان'
        ]);

        $provincials_after_sale_and_requisitions_after_sale_agency_permissions = [
            'call_status requisition',
            'after_sale_agency_list requisition',
            'provincials_after_sale_list requisition',
            'create technician',
            'create message',
            'refer_to_expert_status requisition',
            'set_technician_status requisition',
            'send_to_manager_status requisition',
            'accept requisition',
            'all_provincials_after_sale_requisition_new dashboard',
            'user_ended_provincials_after_sale_requisition dashboard',
            'user_active_provincials_after_sale_requisition dashboard',
            'all_after_sale_agency_requisition_new dashboard',
            'user_ended_after_sale_agency_requisition dashboard',
            'user_active_after_sale_agency_requisition dashboard',
            ];


        $provincials_after_sale_and_requisitions_after_sale_agency_permissions_ids = Permission::query()->whereIn('name',$provincials_after_sale_and_requisitions_after_sale_agency_permissions)->pluck('id','id')->all();

        $provincials_after_sale_and_requisitions_after_sale_agency_role->syncPermissions($provincials_after_sale_and_requisitions_after_sale_agency_permissions_ids);


        $provincials_after_sale_and_requisitions_after_sale_agency_user = User::query()->create([
            'name' => 'راضیه',
            'lastname' => 'قدسی',
            'mobile' => '09128140669',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09128140669'),

        ]);

        $provincials_after_sale_and_requisitions_after_sale_agency_user->assignRole($provincials_after_sale_and_requisitions_after_sale_agency_role->name);

        /******************************/

        // مدیر خدمات پس از فروش

        $after_sale_manager_role = Role::query()->create([
            'name' => 'مدیر خدمات پس از فروش'
        ]);

        $after_sale_manager_permissions = [
            'provincials_after_sale_list requisition',
            'after_sale_tehran_list requisition',
            'after_sale_agency_list requisition',
            'create message',
            'refer_to_expert_status requisition',
            'cancel_status requisition',
            'close_status requisition',
            'delete requisition',
            'all_after_sale_tehran_requisition_new dashboard',
            'all_provincials_after_sale_requisition_new dashboard',
            'all_after_sale_agency_requisition_new dashboard',
            'all_ended_after_sale_tehran_requisition dashboard',
            'all_ended_provincials_after_sale_requisition dashboard',
            'all_ended_after_sale_agency_requisition dashboard',
            'all_active_after_sale_tehran_requisition dashboard',
            'all_active_provincials_after_sale_requisition dashboard',
            'all_active_after_sale_agency_requisition dashboard',
            'all_manager_after_sale_tehran_requisition dashboard',
            'all_manager_provincials_after_sale_requisition dashboard',
            'all_manager_after_sale_agency_requisition dashboard',
            'chart_after_sale_tehran dashboard',
            'chart_provincials_after_sale dashboard',
            'chart_after_sale_agency dashboard',
        ];

        $after_sale_manager_permissions_ids = Permission::query()->whereIn('name',$after_sale_manager_permissions)->pluck('id','id')->all();

        $after_sale_manager_role->syncPermissions($after_sale_manager_permissions_ids);

        $after_sale_manager_user = User::query()->create([
            'name' => 'علی',
            'lastname' => 'مرجانی',
            'mobile' => '09123445415',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09123445415'),

        ]);

        $after_sale_manager_user->assignRole($after_sale_manager_role->name);

        /******************************/

        // کارشناس بازاریابی و فروش

        $after_sale_manager_role = Role::query()->create([
            'name' => ' کارشناس بازاریابی و فروش'
        ]);

        $after_sale_manager_permissions = [
            'call_status requisition',
            'marketing_list requisition',
            'create message',
            'refer_to_expert_status requisition',
            'send_to_manager_status requisition',
            'accept requisition',
            'all_marketing_requisition_new dashboard',
            'user_ended_marketing_requisition dashboard',
            'user_active_marketing_requisition dashboard',
        ];

        $after_sale_manager_permissions_ids = Permission::query()->whereIn('name',$after_sale_manager_permissions)->pluck('id','id')->all();

        $after_sale_manager_role->syncPermissions($after_sale_manager_permissions_ids);

        $after_sale_manager_user_1 = User::query()->create([
            'name' => 'محمد',
            'lastname' => 'طالبی',
            'mobile' => '09128717422',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09128717422'),
        ]);

        $after_sale_manager_user_1->assignRole($after_sale_manager_role->name);

        $after_sale_manager_user_2 = User::query()->create([
            'name' => 'محمد رضا',
            'lastname' => 'احمدی مجرب',
            'mobile' => '09128140672',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09128140672'),
        ]);

        $after_sale_manager_user_2->assignRole($after_sale_manager_role->name);

        /******************************/

        // مدیر بازاریابی و فروش

        $after_sale_manager_role = Role::query()->create([
            'name' => 'مدیر بازاریابی و فروش'
        ]);

        $after_sale_manager_permissions = [
            'marketing_list requisition',
            'create message',
            'refer_to_expert_status requisition',
            'cancel_status requisition',
            'close_status requisition',
            'delete requisition',
            'all_marketing_requisition_new dashboard',
            'all_ended_marketing_requisition dashboard',
            'all_active_marketing_requisition dashboard',
            'all_manager_marketing_requisition dashboard',
            'chart_marketing dashboard',
        ];

        $after_sale_manager_permissions_ids = Permission::query()->whereIn('name',$after_sale_manager_permissions)->pluck('id','id')->all();

        $after_sale_manager_role->syncPermissions($after_sale_manager_permissions_ids);

        $after_sale_manager_user = User::query()->create([
            'name' => 'پژمان',
            'lastname' => 'کاظمی',
            'mobile' => '09128140663',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09128140663'),

        ]);

        $after_sale_manager_user->assignRole($after_sale_manager_role->name);

        /******************************/

    }
}
