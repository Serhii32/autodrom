<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(FeedbackTableSeeder::class);
        $this->call(ProActionTableSeeder::class);
    }
}
