<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class EducationBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educationCategory = Category::firstOrCreate(
            ['name' => 'Education'],
            [
                'description' => 'Books focused on teaching methods, learning strategies, and educational theory.'
            ]
        );

        $educationBooks = [
            [
                'title' => 'Make It Stick',
                'author' => 'Peter C. Brown',
                'isbn' => '9780674729018',
                'published_at' => '2014-04-14'
            ],
            [
                'title' => 'Visible Learning',
                'author' => 'John Hattie',
                'isbn' => '9780415476188',
                'published_at' => '2008-11-19'
            ],
            [
                'title' => 'Mindset Mathematics',
                'author' => 'Jo Boaler',
                'isbn' => '9781119358800',
                'published_at' => '2017-08-28'
            ],
            [
                'title' => 'Understanding by Design',
                'author' => 'Grant Wiggins',
                'isbn' => '9781416600350',
                'published_at' => '2005-01-01'
            ],
            [
                'title' => 'Teaching to Transgress',
                'author' => 'bell hooks',
                'isbn' => '9780415908085',
                'published_at' => '1994-09-14'
            ],
            [
                'title' => 'Why Don\'t Students Like School?',
                'author' => 'Daniel T. Willingham',
                'isbn' => '9780470279304',
                'published_at' => '2009-03-16'
            ],
            [
                'title' => 'The First Days of School',
                'author' => 'Harry K. Wong',
                'isbn' => '9780976423386',
                'published_at' => '2018-05-01'
            ],
            [
                'title' => 'Teaching with Poverty in Mind',
                'author' => 'Eric Jensen',
                'isbn' => '9781416608844',
                'published_at' => '2009-11-30'
            ],
            [
                'title' => 'Educated',
                'author' => 'Tara Westover',
                'isbn' => '9780399590504',
                'published_at' => '2018-02-20'
            ],
            [
                'title' => 'The Differentiated Classroom',
                'author' => 'Carol Ann Tomlinson',
                'isbn' => '9781416618638',
                'published_at' => '2014-05-25'
            ],
            [
                'title' => 'Teach Like a Champion 2.0',
                'author' => 'Doug Lemov',
                'isbn' => '9781118901854',
                'published_at' => '2015-01-07'
            ],
            [
                'title' => 'How Children Succeed',
                'author' => 'Paul Tough',
                'isbn' => '9780544104402',
                'published_at' => '2012-09-04'
            ],
            [
                'title' => 'Creative Schools',
                'author' => 'Ken Robinson',
                'isbn' => '9780670016716',
                'published_at' => '2015-04-21'
            ],
            [
                'title' => 'The Reading Strategies Book',
                'author' => 'Jennifer Serravallo',
                'isbn' => '9780325074337',
                'published_at' => '2015-05-20'
            ],
            [
                'title' => 'Mathematical Mindsets',
                'author' => 'Jo Boaler',
                'isbn' => '9780470894521',
                'published_at' => '2015-11-02'
            ],
            [
                'title' => 'Drive',
                'author' => 'Daniel H. Pink',
                'isbn' => '9781594488849',
                'published_at' => '2009-12-29'
            ],
            [
                'title' => 'The Essential 55',
                'author' => 'Ron Clark',
                'isbn' => '9780786888160',
                'published_at' => '2003-04-01'
            ],
            [
                'title' => 'Culturally Responsive Teaching',
                'author' => 'Geneva Gay',
                'isbn' => '9780807750780',
                'published_at' => '2010-01-01'
            ],
            [
                'title' => 'The Growth Mindset Coach',
                'author' => 'Annie Brock',
                'isbn' => '9781612436012',
                'published_at' => '2016-09-13'
            ],
            [
                'title' => 'Tools for Teaching',
                'author' => 'Barbara Gross Davis',
                'isbn' => '9780787965679',
                'published_at' => '2009-07-17'
            ]
        ];

        foreach ($educationBooks as $book) {
            Resource::firstOrCreate(
                ['isbn' => $book['isbn']],
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                    'description' => "An essential education book by {$book['author']}, published in "
                        . date('Y', strtotime($book['published_at']))
                        . ". This book provides valuable insights into teaching and learning practices.",
                    'category_id' => $educationCategory->id,
                    'published_at' => $book['published_at'],
                ]
            );
        }
    }
}