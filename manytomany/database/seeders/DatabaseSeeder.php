<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\RoleUser::factory(10)->create();
        // \App\Models\Role::factory(10)->create();
        // RoleUser::class->create(10)->each(function ($role, $user) {
        //     $company->contacts()->save(factory(App\Contact::class)->make());
        // });
    }
}
