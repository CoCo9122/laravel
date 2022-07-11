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
        $books = [
            [
                'name' => 'リーダブルコード',
                'price' => 2400,
                'author' => 'Dustin Boswell'
            ],
            [
                'name' => 'Pythonではじめるアルゴリズム入門',
                'price' => 2200,
                'author' => '増井 敏克'
            ],
            [
                'name' => 'Docker & Kubernetesのきほんのきほん',
                'price' => 2720,
                'author' => '小笠原 穂高'
            ],
            [
                'name' => '時空の幾何学 特殊および一般相対論の数学的基礎',
                'price' => 4800,
                'author' => 'James J. Callahan'
            ]
        ];

        foreach($books as $book) {
            Book::create($book);
        }
    }
}
