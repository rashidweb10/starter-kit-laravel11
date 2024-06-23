<?php

namespace Modules\Dummy\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Dummy\Models\Dummy;

class DummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Dummies Seed
         * ------------------
         */

        // DB::table('dummies')->truncate();
        // echo "Truncate: dummies \n";

        Dummy::factory()->count(20)->create();
        $rows = Dummy::all();
        echo " Insert: dummies \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
