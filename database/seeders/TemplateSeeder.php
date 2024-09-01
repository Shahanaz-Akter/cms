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
       
        $temp1 = Template::where('title', '=', 'template1')->first();
        if ($temp1 == null) {
            $temp1 = new Template();
            $temp1->title = "template1";
            $temp1->save();
        }

        $temp2 = Template::where('title', '=', 'template2')->first();
        if ($temp2 == null) {

            $temp2 = new Template();
            $temp2->title = "template2";
            $temp2->save();
        }

        $temp3 = Template::where('title', '=', 'template3')->first();
        if ($temp3 == null) {

            $temp3 = new Template();
            $temp3->title = "template3";
            $temp3->save();
        }

    }
}
