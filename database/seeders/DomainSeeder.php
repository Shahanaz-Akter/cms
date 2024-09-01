<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $DomainSeeder = Domain::where('name', '=', '/admin.com')->first();
        // dd($super_admin_role_seed);

        if ($DomainSeeder == null) {

            $domain = new Domain();
            $domain->name = "admin.com";
            $domain->user_id = 1;
            $domain->template_id = 1;
            $domain->save();
        }
    }
}
