<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;

class ShieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[
            {
                "name":"super_admin",
                "guard_name":"web",
                "permissions":[
                    "view_category",
                    "view_any_category",
                    "create_category",
                    "update_category",
                    "restore_category",
                    "restore_any_category",
                    "replicate_category",
                    "reorder_category",
                    "delete_category",
                    "delete_any_category",
                    "force_delete_category",
                    "force_delete_any_category",
                    "view_country",
                    "view_any_country",
                    "create_country",
                    "update_country",
                    "restore_country",
                    "restore_any_country",
                    "replicate_country",
                    "reorder_country",
                    "delete_country",
                    "delete_any_country",
                    "force_delete_country",
                    "force_delete_any_country",
                    "view_language",
                    "view_any_language",
                    "create_language",
                    "update_language",
                    "restore_language",
                    "restore_any_language",
                    "replicate_language",
                    "reorder_language",
                    "delete_language",
                    "delete_any_language",
                    "force_delete_language",
                    "force_delete_any_language",
                    "view_nationality",
                    "view_any_nationality",
                    "create_nationality",
                    "update_nationality",
                    "restore_nationality",
                    "restore_any_nationality",
                    "replicate_nationality",
                    "reorder_nationality",
                    "delete_nationality",
                    "delete_any_nationality",
                    "force_delete_nationality",
                    "force_delete_any_nationality",
                    "view_qualification",
                    "view_any_qualification",
                    "create_qualification",
                    "update_qualification",
                    "restore_qualification",
                    "restore_any_qualification",
                    "replicate_qualification",
                    "reorder_qualification",
                    "delete_qualification",
                    "delete_any_qualification",
                    "force_delete_qualification",
                    "force_delete_any_qualification",
                    "view_shield::role",
                    "view_any_shield::role",
                    "create_shield::role",
                    "update_shield::role",
                    "delete_shield::role",
                    "delete_any_shield::role",
                    "view_user",
                    "view_any_user",
                    "create_user",
                    "update_user",
                    "restore_user",
                    "restore_any_user",
                    "replicate_user",
                    "reorder_user",
                    "delete_user",
                    "delete_any_user",
                    "force_delete_user",
                    "force_delete_any_user",
                    "view_working::condition",
                    "view_any_working::condition",
                    "create_working::condition",
                    "update_working::condition",
                    "restore_working::condition",
                    "restore_any_working::condition",
                    "replicate_working::condition",
                    "reorder_working::condition",
                    "delete_working::condition",
                    "delete_any_working::condition",
                    "force_delete_working::condition",
                    "force_delete_any_working::condition",
                    "view_candidate",
                    "view_any_candidate",
                    "create_candidate",
                    "update_candidate",
                    "restore_candidate",
                    "restore_any_candidate",
                    "replicate_candidate",
                    "reorder_candidate",
                    "delete_candidate",
                    "delete_any_candidate",
                    "force_delete_candidate",
                    "force_delete_any_candidate",
                    "view_company",
                    "view_any_company",
                    "create_company",
                    "update_company",
                    "restore_company",
                    "restore_any_company",
                    "replicate_company",
                    "reorder_company",
                    "delete_company",
                    "delete_any_company",
                    "force_delete_company",
                    "force_delete_any_company",
                    "view_job",
                    "view_any_job",
                    "create_job",
                    "update_job",
                    "restore_job",
                    "restore_any_job",
                    "replicate_job",
                    "reorder_job",
                    "delete_job",
                    "delete_any_job",
                    "force_delete_job",
                    "force_delete_any_job"
                ]
            },
            {
                "name":"admin",
                "guard_name":"web",
                "permissions":[]
            },
            {
                "name":"candidate",
                "guard_name":"candidate",
                "permissions":[]
            },
            {
                "name":"company",
                "guard_name":"company",
                "permissions":[]
            },
            {
                "name":"filament_user",
                "guard_name":"web",
                "permissions":[]
            }
        ]';

        $directPermissions = '{
            "36":{
                "name":"view_job::function",
                "guard_name":"web"
            },
            "37":{
                "name":"view_any_job::function",
                "guard_name":"web"
            },
            "38":{
                "name":"create_job::function",
                "guard_name":"web"
            },
            "39":{
                "name":"update_job::function"
                ,"guard_name":"web"
            },
            "40":{
                "name":"restore_job::function"
                ,"guard_name":"web"
            },
            "41":{
                "name":"restore_any_job::function"
                ,"guard_name":"web"
            },
            "42":{
                "name":"replicate_job::function"
                ,"guard_name":"web"
            },
            "43":{
                "name":"reorder_job::function"
                ,"guard_name":"web"
            },
            "44":{
                "name":"delete_job::function"
                ,"guard_name":"web"
            },
            "45":{
                "name":"delete_any_job::function"
                ,"guard_name":"web"
            },
            "46":{
                "name":"force_delete_job::function"
                ,"guard_name":"web"
            },
            "47":{
                "name":"force_delete_any_job::function"
                ,"guard_name":"web"
            }
        }';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = Utils::getRoleModel()::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {

                    $permissionModels = collect();

                    collect($rolePlusPermission['permissions'])
                        ->each(function ($permission) use ($permissionModels) {
                            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                                'name' => $permission,
                                'guard_name' => 'web',
                            ]));
                        });
                    $role->syncPermissions($permissionModels);

                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {

            foreach ($permissions as $permission) {

                if (Utils::getPermissionModel()::whereName($permission)->doesntExist()) {
                    Utils::getPermissionModel()::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
