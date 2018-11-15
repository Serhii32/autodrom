<?php

use Illuminate\Database\Seeder;

class ProActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProAction::class, 10)->create();
    }
}
