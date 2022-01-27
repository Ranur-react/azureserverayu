<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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

        // create permissions
        $permissions = [
            'user_management_access',
            'permission_create',
            'permission_edit',
            'permission_show',
            'permission_delete',
            'permission_access',
            'role_create',
            'role_edit',
            'role_show',
            'role_delete',
            'role_access',
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'user_access',
            'loginLog_access',
            'learning_syllabus_access',
            'learning_syllabus_create',
            'learning_syllabus_edit',
            'learning_syllabus_show',
            'learning_syllabus_delete',
            'learning_syllabus_approve',
            'csp_access',
            'csp_create',
            'csp_edit',
            'csp_show',
            'csp_delete',
            'idp_period_access',
            'idp_period_create',
            'idp_period_edit',
            'idp_period_show',
            'idp_period_delete',
            'training_request_access',
            'training_request_edit',
            'curriculum_access',
            'curriculum_create',
            'curriculum_edit',
            'curriculum_show',
            'curriculum_delete',
            'curriculum_approve',
            'master_data_access',
            'master_data_create',
            'master_data_edit',
            'master_data_show',
            'master_data_delete',
            'master_data_syllabus_access',
            'competency_access',
            'competency_create',
            'competency_edit',
            'competency_show',
            'competency_delete',
            'competency_syllabus_access',
            'vendor_access',
            'vendor_create',
            'vendor_edit',
            'vendor_show',
            'vendor_delete',
            'vendor_syllabus_access',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        $superAdminRole = Role::find(1);

        $superAdminPermissions = [
            'user_management_access',
            'permission_create',
            'permission_edit',
            'permission_show',
            'permission_delete',
            'permission_access',
            'role_create',
            'role_edit',
            'role_show',
            'role_delete',
            'role_access',
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'user_access',
            'loginLog_access'
        ];

        foreach ($superAdminPermissions as $permission) {
            $superAdminRole->givePermissionTo($permission);
        }

        $atasanLearningDesignRole = Role::find(2);

        $atasanLearningDesignPermissions = [
            'learning_syllabus_access',
            'learning_syllabus_show',
            'learning_syllabus_approve',
            'curriculum_access',
            'curriculum_approve',
            'master_data_access',
            'master_data_create',
            'master_data_edit',
            'master_data_show',
            'master_data_delete',
            'master_data_syllabus_access',
            'competency_access',
            'competency_create',
            'competency_edit',
            'competency_show',
            'competency_delete',
            'competency_syllabus_access',
            'vendor_access',
            'vendor_create',
            'vendor_edit',
            'vendor_show',
            'vendor_delete',
            'vendor_syllabus_access',
        ];

        foreach ($atasanLearningDesignPermissions as $permission) {
            $atasanLearningDesignRole->givePermissionTo($permission);
        }

        $learningDesignRole = Role::find(3);

        $learningDesignPermissions = [
            'learning_syllabus_access',
            'learning_syllabus_create',
            'learning_syllabus_edit',
            'learning_syllabus_show',
            'learning_syllabus_delete',
            'csp_access',
            'csp_create',
            'csp_edit',
            'csp_show',
            'csp_delete',
            'idp_period_access',
            'idp_period_create',
            'idp_period_edit',
            'idp_period_show',
            'idp_period_delete',
            'training_request_access',
            'training_request_edit',
            'curriculum_access',
            'curriculum_create',
            'curriculum_edit',
            'curriculum_show',
            'curriculum_delete',
            'master_data_access',
            'master_data_create',
            'master_data_edit',
            'master_data_show',
            'master_data_delete',
            'master_data_syllabus_access',
            'competency_access',
            'competency_create',
            'competency_edit',
            'competency_show',
            'competency_delete',
            'competency_syllabus_access',
            'vendor_access',
            'vendor_create',
            'vendor_edit',
            'vendor_show',
            'vendor_delete',
            'vendor_syllabus_access',
        ];

        foreach ($learningDesignPermissions as $permission) {
            $learningDesignRole->givePermissionTo($permission);
        }

        $learningOperationRole = Role::find(4);

        $learningOperationPermissions = [
            'master_data_access',
            'competency_access',
            'competency_show',
            'vendor_access',
            'vendor_show',
            'idp_period_access',
            'training_request_access',
        ];

        foreach ($learningOperationPermissions as $permission) {
            $learningOperationRole->givePermissionTo($permission);
        }
    }
}
