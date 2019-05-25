<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numTag = 100;
        factory(App\Tag::class,$numTag)->create();
    }
}
