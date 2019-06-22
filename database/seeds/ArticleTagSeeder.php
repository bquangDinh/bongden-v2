<?php

use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $numArticles = 100;
      $numTagOnceArticle = 2;
      factory(App\ArticleTag::class,$numArticles * $numTagOnceArticle)->create();
    }
}
