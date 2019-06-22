<?php

use Illuminate\Database\Seeder;

class ArticleStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $numArticles = 100;
      factory(App\ArticleState::class,$numArticles)->create();
    }
}
