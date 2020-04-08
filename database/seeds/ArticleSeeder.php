<?php

use App\Article;
use App\User;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = User::all('id');
        factory(Article::class, 5)->create();
    }
}
