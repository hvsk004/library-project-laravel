<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class MathBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mathCategory = Category::firstOrCreate(
            ['name' => 'Mathematics'],
            [
                'description' => 'Books covering various mathematical concepts, from basic arithmetic to advanced theoretical mathematics.'
            ]
        );

        $mathBooks = [
            [
                'title' => 'A Mathematician\'s Apology',
                'author' => 'G.H. Hardy',
                'isbn' => '9781107295599',
                'published_at' => '1940-01-01'
            ],
            [
                'title' => 'Fermat\'s Last Theorem',
                'author' => 'Simon Singh',
                'isbn' => '9781841157917',
                'published_at' => '1997-09-15'
            ],
            [
                'title' => 'The Princeton Companion to Mathematics',
                'author' => 'Timothy Gowers',
                'isbn' => '9780691118802',
                'published_at' => '2008-09-28'
            ],
            [
                'title' => 'What Is Mathematics?',
                'author' => 'Richard Courant',
                'isbn' => '9780195105193',
                'published_at' => '1941-01-01'
            ],
            [
                'title' => 'Calculus Made Easy',
                'author' => 'Silvanus P. Thompson',
                'isbn' => '9780312185480',
                'published_at' => '1910-01-01'
            ],
            [
                'title' => 'The Joy of x',
                'author' => 'Steven Strogatz',
                'isbn' => '9780547517650',
                'published_at' => '2012-10-02'
            ],
            [
                'title' => 'Zero: The Biography of a Dangerous Idea',
                'author' => 'Charles Seife',
                'isbn' => '9780140296471',
                'published_at' => '2000-09-01'
            ],
            [
                'title' => 'Mathematics: Its Content, Methods and Meaning',
                'author' => 'A.D. Aleksandrov',
                'isbn' => '9780486409160',
                'published_at' => '1999-06-03'
            ],
            [
                'title' => 'The Man Who Knew Infinity',
                'author' => 'Robert Kanigel',
                'isbn' => '9781476763490',
                'published_at' => '1991-01-01'
            ],
            [
                'title' => 'Prime Obsession',
                'author' => 'John Derbyshire',
                'isbn' => '9780452285255',
                'published_at' => '2003-05-01'
            ],
            [
                'title' => 'Linear Algebra and Its Applications',
                'author' => 'Gilbert Strang',
                'isbn' => '9780030105678',
                'published_at' => '2006-02-01'
            ],
            [
                'title' => 'Introduction to Mathematical Thinking',
                'author' => 'Keith Devlin',
                'isbn' => '9780615653631',
                'published_at' => '2012-07-18'
            ],
            [
                'title' => 'The Art of Problem Solving, Vol. 1',
                'author' => 'Sandor Lehoczky',
                'isbn' => '9780977304561',
                'published_at' => '2006-01-01'
            ],
            [
                'title' => 'How to Solve It',
                'author' => 'George Polya',
                'isbn' => '9780691119663',
                'published_at' => '1945-01-01'
            ],
            [
                'title' => 'The Princeton Companion to Applied Mathematics',
                'author' => 'Nicholas J. Higham',
                'isbn' => '9780691150390',
                'published_at' => '2015-09-09'
            ],
            [
                'title' => 'Proofs from THE BOOK',
                'author' => 'Martin Aigner',
                'isbn' => '9783662572641',
                'published_at' => '2018-08-18'
            ],
            [
                'title' => 'Mathematics: From the Birth of Numbers',
                'author' => 'Jan Gullberg',
                'isbn' => '9780393040029',
                'published_at' => '1997-10-17'
            ],
            [
                'title' => 'A Tour of the Calculus',
                'author' => 'David Berlinski',
                'isbn' => '9780679747888',
                'published_at' => '1997-01-28'
            ],
            [
                'title' => 'Algebra: Chapter 0',
                'author' => 'Paolo Aluffi',
                'isbn' => '9780821847817',
                'published_at' => '2009-01-01'
            ],
            [
                'title' => 'The Road to Reality',
                'author' => 'Roger Penrose',
                'isbn' => '9780679776314',
                'published_at' => '2004-02-09'
            ]
        ];

        foreach ($mathBooks as $book) {
            Resource::firstOrCreate(
                ['isbn' => $book['isbn']],
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                    'description' => "A comprehensive mathematics book by {$book['author']}, published in "
                        . date('Y', strtotime($book['published_at']))
                        . ". This book explores fundamental mathematical concepts and their applications.",
                    'category_id' => $mathCategory->id,
                    'published_at' => $book['published_at'],
                ]
            );
        }
    }
}