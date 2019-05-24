<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $numSubject = 100;
      factory(App\Subject::class,$numSubject)->create();
    }
}