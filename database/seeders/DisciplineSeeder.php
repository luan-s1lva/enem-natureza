<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Discipline;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('disciplines')->insert([
            'name' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);*/

        $discipline = Discipline::create([
            'name' => 'Matemática',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $discipline->temas()->create([
            'theme' => Str::random(200),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
