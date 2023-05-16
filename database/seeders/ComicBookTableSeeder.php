<?php

namespace Database\Seeders;

use App\Models\Comic_Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach($comics as $comic_book){
            $newComic = new Comic_Book();
            $newComic->title = $comic_book['title'];
            $newComic->description = $comic_book['description'];
            $newComic->thumb = $comic_book['thumb'];
            $newComic->price = $comic_book['price'];
            $newComic->tiseriestle = $comic_book['series'];
            $newComic->sale_date = $comic_book['sale_date'];
            $newComic->type = $comic_book['type'];

        }
    }
}
