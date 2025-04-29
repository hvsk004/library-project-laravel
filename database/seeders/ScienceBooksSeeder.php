<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class ScienceBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scienceCategory = Category::firstOrCreate(
            ['name' => 'Science'],
            [
                'description' => 'Books covering various scientific disciplines including physics, chemistry, biology, and astronomy.'
            ]
        );

        $scienceBooks = [
            [
                'title' => 'A Brief History of Time',
                'author' => 'Stephen Hawking',
                'isbn' => '9780553380163',
                'published_at' => '1988-04-01'
            ],
            [
                'title' => 'The Selfish Gene',
                'author' => 'Richard Dawkins',
                'isbn' => '9780198788607',
                'published_at' => '1976-05-25'
            ],
            [
                'title' => 'Cosmos',
                'author' => 'Carl Sagan',
                'isbn' => '9780345539434',
                'published_at' => '1980-09-01'
            ],
            [
                'title' => 'The Origin of Species',
                'author' => 'Charles Darwin',
                'isbn' => '9780451529065',
                'published_at' => '1859-11-24'
            ],
            [
                'title' => 'The Feynman Lectures on Physics',
                'author' => 'Richard Feynman',
                'isbn' => '9780465023820',
                'published_at' => '1964-01-01'
            ],
            [
                'title' => 'Silent Spring',
                'author' => 'Rachel Carson',
                'isbn' => '9780618249060',
                'published_at' => '1962-09-27'
            ],
            [
                'title' => 'The Elegant Universe',
                'author' => 'Brian Greene',
                'isbn' => '9780393338102',
                'published_at' => '1999-02-01'
            ],
            [
                'title' => 'The Double Helix',
                'author' => 'James D. Watson',
                'isbn' => '9780743216302',
                'published_at' => '1968-01-01'
            ],
            [
                'title' => 'The Greatest Show on Earth',
                'author' => 'Richard Dawkins',
                'isbn' => '9781416594789',
                'published_at' => '2009-09-10'
            ],
            [
                'title' => 'The Fabric of the Cosmos',
                'author' => 'Brian Greene',
                'isbn' => '9780375727207',
                'published_at' => '2004-02-10'
            ],
            [
                'title' => 'Six Easy Pieces',
                'author' => 'Richard Feynman',
                'isbn' => '9780465025275',
                'published_at' => '1994-03-22'
            ],
            [
                'title' => 'The Blind Watchmaker',
                'author' => 'Richard Dawkins',
                'isbn' => '9780393315707',
                'published_at' => '1986-01-01'
            ],
            [
                'title' => 'The Hidden Life of Trees',
                'author' => 'Peter Wohlleben',
                'isbn' => '9781771642484',
                'published_at' => '2015-05-25'
            ],
            [
                'title' => 'The Emperor of All Maladies',
                'author' => 'Siddhartha Mukherjee',
                'isbn' => '9781439170915',
                'published_at' => '2010-11-16'
            ],
            [
                'title' => 'Astrophysics for People in a Hurry',
                'author' => 'Neil deGrasse Tyson',
                'isbn' => '9780393609394',
                'published_at' => '2017-05-02'
            ],
            [
                'title' => 'The Structure of Scientific Revolutions',
                'author' => 'Thomas S. Kuhn',
                'isbn' => '9780226458120',
                'published_at' => '1962-01-01'
            ],
            [
                'title' => 'Lab Girl',
                'author' => 'Hope Jahren',
                'isbn' => '9781101874936',
                'published_at' => '2016-04-05'
            ],
            [
                'title' => 'The Immortal Life of Henrietta Lacks',
                'author' => 'Rebecca Skloot',
                'isbn' => '9781400052172',
                'published_at' => '2010-02-02'
            ],
            [
                'title' => 'Pale Blue Dot',
                'author' => 'Carl Sagan',
                'isbn' => '9780345376595',
                'published_at' => '1994-11-08'
            ],
            [
                'title' => 'The Gene: An Intimate History',
                'author' => 'Siddhartha Mukherjee',
                'isbn' => '9781476733500',
                'published_at' => '2016-05-17'
            ]
        ];

        foreach ($scienceBooks as $book) {
            Resource::firstOrCreate(
                ['isbn' => $book['isbn']],
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                    'description' => "A groundbreaking science book by {$book['author']}, published in "
                        . date('Y', strtotime($book['published_at']))
                        . ". This book explores fascinating scientific concepts and discoveries.",
                    'category_id' => $scienceCategory->id,
                    'published_at' => $book['published_at'],
                ]
            );
        }
    }
}