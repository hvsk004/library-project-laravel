<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class SelfHelpBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $selfHelpCategory = Category::firstOrCreate(
            ['name' => 'Self Help'],
            [
                'description' => 'Books focused on personal development, motivation, and self-improvement.'
            ]
        );

        $selfHelpBooks = [
            [
                'title' => 'The 7 Habits of Highly Effective People',
                'author' => 'Stephen Covey',
                'isbn' => '9780743269513',
                'published_at' => '1989-08-15'
            ],
            [
                'title' => 'Think and Grow Rich',
                'author' => 'Napoleon Hill',
                'isbn' => '9781585424337',
                'published_at' => '1937-03-26'
            ],
            [
                'title' => 'How to Win Friends and Influence People',
                'author' => 'Dale Carnegie',
                'isbn' => '9780671027032',
                'published_at' => '1936-10-01'
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'isbn' => '9781847941831',
                'published_at' => '2018-10-16'
            ],
            [
                'title' => 'The Power of Now',
                'author' => 'Eckhart Tolle',
                'isbn' => '9781577314806',
                'published_at' => '1997-01-01'
            ],
            [
                'title' => 'Mindset: The New Psychology of Success',
                'author' => 'Carol S. Dweck',
                'isbn' => '9780345472328',
                'published_at' => '2006-02-28'
            ],
            [
                'title' => 'The Four Agreements',
                'author' => 'Don Miguel Ruiz',
                'isbn' => '9781878424310',
                'published_at' => '1997-07-07'
            ],
            [
                'title' => 'You Are a Badass',
                'author' => 'Jen Sincero',
                'isbn' => '9780762447695',
                'published_at' => '2013-04-23'
            ],
            [
                'title' => 'The Subtle Art of Not Giving a F*ck',
                'author' => 'Mark Manson',
                'isbn' => '9780062457714',
                'published_at' => '2016-09-13'
            ],
            [
                'title' => 'Rich Dad Poor Dad',
                'author' => 'Robert T. Kiyosaki',
                'isbn' => '9781612680194',
                'published_at' => '1997-04-01'
            ],
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'isbn' => '9780062315007',
                'published_at' => '1988-01-01'
            ],
            [
                'title' => 'Daring Greatly',
                'author' => 'Brené Brown',
                'isbn' => '9781592407330',
                'published_at' => '2012-09-11'
            ],
            [
                'title' => 'The Road Less Traveled',
                'author' => 'M. Scott Peck',
                'isbn' => '9780743243155',
                'published_at' => '1978-03-07'
            ],
            [
                'title' => 'Man\'s Search for Meaning',
                'author' => 'Viktor E. Frankl',
                'isbn' => '9780807014271',
                'published_at' => '1946-01-01'
            ],
            [
                'title' => 'The Happiness of Pursuit',
                'author' => 'Chris Guillebeau',
                'isbn' => '9780385348867',
                'published_at' => '2014-09-09'
            ],
            [
                'title' => 'Quiet: The Power of Introverts',
                'author' => 'Susan Cain',
                'isbn' => '9780307352149',
                'published_at' => '2012-01-24'
            ],
            [
                'title' => 'The Magic of Thinking Big',
                'author' => 'David J. Schwartz',
                'isbn' => '9780671646783',
                'published_at' => '1959-01-01'
            ],
            [
                'title' => 'The Compound Effect',
                'author' => 'Darren Hardy',
                'isbn' => '9781593157241',
                'published_at' => '2010-10-02'
            ],
            [
                'title' => 'Grit: The Power of Passion and Perseverance',
                'author' => 'Angela Duckworth',
                'isbn' => '9781501111112',
                'published_at' => '2016-05-03'
            ],
            [
                'title' => 'Awaken the Giant Within',
                'author' => 'Tony Robbins',
                'isbn' => '9780671791544',
                'published_at' => '1991-11-01'
            ]
        ];

        foreach ($selfHelpBooks as $book) {
            Resource::firstOrCreate(
                ['isbn' => $book['isbn']],
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                    'description' => "A transformative self-help book by {$book['author']}, published in "
                        . date('Y', strtotime($book['published_at']))
                        . ". This book provides valuable insights for personal growth and development.",
                    'category_id' => $selfHelpCategory->id,
                    'published_at' => $book['published_at'],
                ]
            );
        }
    }
}