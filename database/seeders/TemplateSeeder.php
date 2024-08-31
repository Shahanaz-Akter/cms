<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $temp1 = Template::where('title', '=', 'temp1.view')->first();
        if ($temp1 == null) {
            $temp1 = new Template();
            $temp1->title = "temp1.view";
            $temp1->save();
        }

        $temp2 = Template::where('title', '=', 'temp2.view')->first();
        if ($temp2 == null) {

            $temp2 = new Template();
            $temp2->title = "temp2.view";
            $temp2->save();
        }

        $temp3 = Template::where('title', '=', 'temp3.view')->first();
        if ($temp3 == null) {

            $temp3 = new Template();
            $temp3->title = "temp3.view";
            $temp3->save();
        }

    }
}
