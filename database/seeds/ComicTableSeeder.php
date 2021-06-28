<?php

use App\Comic;
use Illuminate\Database\Seeder;
/* SLUG */
use Illuminate\Support\Str;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $array_comic = config('comic');
      foreach ($array_comic as $comic_item){
        $new_comic= new Comic();
        $new_comic->title = $comic_item['title'];
        /* SLUG */
        $new_comic->slug=Str::slug($new_comic->title, '-');
        $new_comic->description = $comic_item['description'];
        $new_comic->image = $comic_item['thumb'];
        $new_comic->price = $comic_item['price'];
        $new_comic->series = $comic_item['series'];
        $new_comic->sale_date = $comic_item['sale_date'];
        $new_comic->type = $comic_item['type'];
        $new_comic->save();
      }
      
    }

}
