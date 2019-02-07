<?php

use Illuminate\Database\Seeder;
use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'user_id' => 1,
            'title' => 'harry potter 1',
            'description' => 'harry potter',
        ]);

        Book::create([
            'user_id' => 1,
            'title' => 'harry potter 2',
            'description' => 'harry potter',
        ]);

        Book::create([
            'user_id' => 1,
            'title' => 'harry potter 3',
            'description' => 'harry potter',
        ]);

        Book::create([
            'user_id' => 1,
            'title' => 'harry potter 4',
            'description' => 'harry potter',
        ]);
    }
}
