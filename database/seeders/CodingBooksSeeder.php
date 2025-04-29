<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class CodingBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codingCategory = Category::firstOrCreate(
            ['name' => 'Programming'],
            [
                'description' => 'Books covering programming languages, software development, and computer science concepts.'
            ]
        );

        $codingBooks = [
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'isbn' => '9780132350884',
                'published_at' => '2008-08-11'
            ],
            [
                'title' => 'Design Patterns',
                'author' => 'Erich Gamma',
                'isbn' => '9780201633610',
                'published_at' => '1994-10-21'
            ],
            [
                'title' => 'Code Complete',
                'author' => 'Steve McConnell',
                'isbn' => '9780735619678',
                'published_at' => '2004-06-09'
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen',
                'isbn' => '9780262033848',
                'published_at' => '2009-07-31'
            ],
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt',
                'isbn' => '9780201616224',
                'published_at' => '1999-10-20'
            ],
            [
                'title' => 'Head First Design Patterns',
                'author' => 'Eric Freeman',
                'isbn' => '9780596007126',
                'published_at' => '2004-10-01'
            ],
            [
                'title' => 'JavaScript: The Good Parts',
                'author' => 'Douglas Crockford',
                'isbn' => '9780596517748',
                'published_at' => '2008-05-01'
            ],
            [
                'title' => 'Refactoring',
                'author' => 'Martin Fowler',
                'isbn' => '9780134757599',
                'published_at' => '2018-11-19'
            ],
            [
                'title' => 'The Clean Coder',
                'author' => 'Robert C. Martin',
                'isbn' => '9780137081073',
                'published_at' => '2011-05-13'
            ],
            [
                'title' => 'Effective Java',
                'author' => 'Joshua Bloch',
                'isbn' => '9780134685991',
                'published_at' => '2017-12-27'
            ],
            [
                'title' => 'Python Crash Course',
                'author' => 'Eric Matthes',
                'isbn' => '9781593279288',
                'published_at' => '2019-05-03'
            ],
            [
                'title' => 'Learning Python',
                'author' => 'Mark Lutz',
                'isbn' => '9781449355739',
                'published_at' => '2013-07-06'
            ],
            [
                'title' => 'Eloquent JavaScript',
                'author' => 'Marijn Haverbeke',
                'isbn' => '9781593279509',
                'published_at' => '2018-12-04'
            ],
            [
                'title' => 'You Don\'t Know JS',
                'author' => 'Kyle Simpson',
                'isbn' => '9781491924464',
                'published_at' => '2015-01-01'
            ],
            [
                'title' => 'Programming in Scala',
                'author' => 'Martin Odersky',
                'isbn' => '9780981531687',
                'published_at' => '2016-12-06'
            ],
            [
                'title' => 'Domain-Driven Design',
                'author' => 'Eric Evans',
                'isbn' => '9780321125217',
                'published_at' => '2003-08-30'
            ],
            [
                'title' => 'Test Driven Development',
                'author' => 'Kent Beck',
                'isbn' => '9780321146533',
                'published_at' => '2002-11-18'
            ],
            [
                'title' => 'Working Effectively with Legacy Code',
                'author' => 'Michael Feathers',
                'isbn' => '9780131177055',
                'published_at' => '2004-09-22'
            ],
            [
                'title' => 'Programming Pearls',
                'author' => 'Jon Bentley',
                'isbn' => '9780201657883',
                'published_at' => '1999-10-07'
            ],
            [
                'title' => 'Structure and Interpretation of Computer Programs',
                'author' => 'Harold Abelson',
                'isbn' => '9780262510875',
                'published_at' => '1996-07-25'
            ]
        ];

        foreach ($codingBooks as $book) {
            Resource::firstOrCreate(
                ['isbn' => $book['isbn']],
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                    'description' => "An essential programming book by {$book['author']}, published in "
                        . date('Y', strtotime($book['published_at']))
                        . ". This book provides fundamental knowledge and best practices in software development.",
                    'category_id' => $codingCategory->id,
                    'published_at' => $book['published_at'],
                ]
            );
        }
    }
}