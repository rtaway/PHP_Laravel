<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder {

  public function run()
  {
    DB::table('articles')->delete();

    for ($i=0; $i < 10; $i++) {
      Article::create([
        'title'   => 'Article '.$i,
        'slug'    => 'first-article',
        'body'    => 'Blog Content '.$i,
        'user_id' => 1,
      ]);
    }
  }

}
