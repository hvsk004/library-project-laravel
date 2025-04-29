<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class FantasyBooksSeeder extends Seeder
{
    public function run(): void
    {
        $fantasyCategory = Category::firstOrCreate(
            ['name' => 'Fantasy'],
            ['description' => 'Fantasy literature encompasses fictional stories featuring magic, supernatural elements, or otherworldly settings.']
        );

        $fantasyBooks = [
            // Classic Fantasy
            ['title' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'isbn' => '9780618640157', 'published_at' => '1954-07-29'],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'isbn' => '9780547928227', 'published_at' => '1937-09-21'],
            ['title' => 'The Silmarillion', 'author' => 'J.R.R. Tolkien', 'isbn' => '9780261102736', 'published_at' => '1977-09-15'],
            ['title' => 'The Chronicles of Narnia', 'author' => 'C.S. Lewis', 'isbn' => '9780066238500', 'published_at' => '1950-10-16'],
            ['title' => 'A Wizard of Earthsea', 'author' => 'Ursula K. Le Guin', 'isbn' => '9780547773742', 'published_at' => '1968-01-01'],

            // Modern Epic Fantasy
            ['title' => 'A Game of Thrones', 'author' => 'George R.R. Martin', 'isbn' => '9780553103540', 'published_at' => '1996-08-01'],
            ['title' => 'A Clash of Kings', 'author' => 'George R.R. Martin', 'isbn' => '9780553108033', 'published_at' => '1998-11-16'],
            ['title' => 'A Storm of Swords', 'author' => 'George R.R. Martin', 'isbn' => '9780553106633', 'published_at' => '2000-08-08'],
            ['title' => 'A Feast for Crows', 'author' => 'George R.R. Martin', 'isbn' => '9780553801507', 'published_at' => '2005-10-17'],
            ['title' => 'A Dance with Dragons', 'author' => 'George R.R. Martin', 'isbn' => '9780553801477', 'published_at' => '2011-07-12'],

            // Harry Potter Series
            ['title' => 'Harry Potter and the Philosopher\'s Stone', 'author' => 'J.K. Rowling', 'isbn' => '9780747532699', 'published_at' => '1997-06-26'],
            ['title' => 'Harry Potter and the Chamber of Secrets', 'author' => 'J.K. Rowling', 'isbn' => '9780439064873', 'published_at' => '1998-07-02'],
            ['title' => 'Harry Potter and the Prisoner of Azkaban', 'author' => 'J.K. Rowling', 'isbn' => '9780439136358', 'published_at' => '1999-07-08'],
            ['title' => 'Harry Potter and the Goblet of Fire', 'author' => 'J.K. Rowling', 'isbn' => '9780439139595', 'published_at' => '2000-07-08'],
            ['title' => 'Harry Potter and the Order of the Phoenix', 'author' => 'J.K. Rowling', 'isbn' => '9780439358071', 'published_at' => '2003-06-21'],

            // The Wheel of Time Series
            ['title' => 'The Eye of the World', 'author' => 'Robert Jordan', 'isbn' => '9780812511819', 'published_at' => '1990-01-15'],
            ['title' => 'The Great Hunt', 'author' => 'Robert Jordan', 'isbn' => '9780812517722', 'published_at' => '1990-11-15'],
            ['title' => 'The Dragon Reborn', 'author' => 'Robert Jordan', 'isbn' => '9780812513714', 'published_at' => '1991-10-15'],
            ['title' => 'The Shadow Rising', 'author' => 'Robert Jordan', 'isbn' => '9780812513738', 'published_at' => '1992-09-15'],
            ['title' => 'The Fires of Heaven', 'author' => 'Robert Jordan', 'isbn' => '9780812550306', 'published_at' => '1993-10-15'],

            // Mistborn Series
            ['title' => 'The Final Empire', 'author' => 'Brandon Sanderson', 'isbn' => '9780765311788', 'published_at' => '2006-07-17'],
            ['title' => 'The Well of Ascension', 'author' => 'Brandon Sanderson', 'isbn' => '9780765316882', 'published_at' => '2007-08-21'],
            ['title' => 'The Hero of Ages', 'author' => 'Brandon Sanderson', 'isbn' => '9780765316899', 'published_at' => '2008-10-14'],
            ['title' => 'The Alloy of Law', 'author' => 'Brandon Sanderson', 'isbn' => '9780765330420', 'published_at' => '2011-11-08'],
            ['title' => 'Shadows of Self', 'author' => 'Brandon Sanderson', 'isbn' => '9780765378552', 'published_at' => '2015-10-06'],

            // The Stormlight Archive
            ['title' => 'The Way of Kings', 'author' => 'Brandon Sanderson', 'isbn' => '9780765326355', 'published_at' => '2010-08-31'],
            ['title' => 'Words of Radiance', 'author' => 'Brandon Sanderson', 'isbn' => '9780765326362', 'published_at' => '2014-03-04'],
            ['title' => 'Oathbringer', 'author' => 'Brandon Sanderson', 'isbn' => '9780765326379', 'published_at' => '2017-11-14'],
            ['title' => 'Rhythm of War', 'author' => 'Brandon Sanderson', 'isbn' => '9780765326386', 'published_at' => '2020-11-17'],

            // Kingkiller Chronicle
            ['title' => 'The Name of the Wind', 'author' => 'Patrick Rothfuss', 'isbn' => '9780756404741', 'published_at' => '2007-03-27'],
            ['title' => 'The Wise Man\'s Fear', 'author' => 'Patrick Rothfuss', 'isbn' => '9780756404734', 'published_at' => '2011-03-01'],

            // Malazan Book of the Fallen
            ['title' => 'Gardens of the Moon', 'author' => 'Steven Erikson', 'isbn' => '9780553819571', 'published_at' => '1999-04-01'],
            ['title' => 'Deadhouse Gates', 'author' => 'Steven Erikson', 'isbn' => '9780553813111', 'published_at' => '2000-09-01'],
            ['title' => 'Memories of Ice', 'author' => 'Steven Erikson', 'isbn' => '9780553813129', 'published_at' => '2001-12-01'],
            ['title' => 'House of Chains', 'author' => 'Steven Erikson', 'isbn' => '9780553813135', 'published_at' => '2002-12-01'],
            ['title' => 'Midnight Tides', 'author' => 'Steven Erikson', 'isbn' => '9780553813142', 'published_at' => '2004-03-01'],

            // Discworld Series
            ['title' => 'The Color of Magic', 'author' => 'Terry Pratchett', 'isbn' => '9780062225672', 'published_at' => '1983-11-24'],
            ['title' => 'The Light Fantastic', 'author' => 'Terry Pratchett', 'isbn' => '9780062225689', 'published_at' => '1986-06-02'],
            ['title' => 'Equal Rites', 'author' => 'Terry Pratchett', 'isbn' => '9780062225696', 'published_at' => '1987-09-15'],
            ['title' => 'Mort', 'author' => 'Terry Pratchett', 'isbn' => '9780062225719', 'published_at' => '1987-11-12'],
            ['title' => 'Sourcery', 'author' => 'Terry Pratchett', 'isbn' => '9780062225726', 'published_at' => '1988-05-02'],

            // The First Law Trilogy
            ['title' => 'The Blade Itself', 'author' => 'Joe Abercrombie', 'isbn' => '9781591025948', 'published_at' => '2006-05-04'],
            ['title' => 'Before They Are Hanged', 'author' => 'Joe Abercrombie', 'isbn' => '9781591026419', 'published_at' => '2007-03-15'],
            ['title' => 'Last Argument of Kings', 'author' => 'Joe Abercrombie', 'isbn' => '9781591026907', 'published_at' => '2008-03-20'],

            // The Broken Empire Trilogy
            ['title' => 'Prince of Thorns', 'author' => 'Mark Lawrence', 'isbn' => '9781937007683', 'published_at' => '2011-08-02'],
            ['title' => 'King of Thorns', 'author' => 'Mark Lawrence', 'isbn' => '9781937007690', 'published_at' => '2012-08-07'],
            ['title' => 'Emperor of Thorns', 'author' => 'Mark Lawrence', 'isbn' => '9781937007706', 'published_at' => '2013-08-06'],

            // The Black Company Series
            ['title' => 'The Black Company', 'author' => 'Glen Cook', 'isbn' => '9780812521390', 'published_at' => '1984-05-01'],
            ['title' => 'Shadows Linger', 'author' => 'Glen Cook', 'isbn' => '9780812521399', 'published_at' => '1984-10-01'],
            ['title' => 'The White Rose', 'author' => 'Glen Cook', 'isbn' => '9780812521405', 'published_at' => '1985-04-01'],

            // Farseer Trilogy
            ['title' => 'Assassin\'s Apprentice', 'author' => 'Robin Hobb', 'isbn' => '9780553573398', 'published_at' => '1995-03-01'],
            ['title' => 'Royal Assassin', 'author' => 'Robin Hobb', 'isbn' => '9780553573411', 'published_at' => '1996-03-01'],
            ['title' => 'Assassin\'s Quest', 'author' => 'Robin Hobb', 'isbn' => '9780553565690', 'published_at' => '1997-03-01'],

            // Earthsea Cycle
            ['title' => 'The Tombs of Atuan', 'author' => 'Ursula K. Le Guin', 'isbn' => '9780689845369', 'published_at' => '1971-01-01'],
            ['title' => 'The Farthest Shore', 'author' => 'Ursula K. Le Guin', 'isbn' => '9780689845376', 'published_at' => '1972-09-01'],
            ['title' => 'Tehanu', 'author' => 'Ursula K. Le Guin', 'isbn' => '9780689845383', 'published_at' => '1990-02-01'],

            // The Dresden Files
            ['title' => 'Storm Front', 'author' => 'Jim Butcher', 'isbn' => '9780451457813', 'published_at' => '2000-04-01'],
            ['title' => 'Fool Moon', 'author' => 'Jim Butcher', 'isbn' => '9780451458124', 'published_at' => '2001-01-01'],
            ['title' => 'Grave Peril', 'author' => 'Jim Butcher', 'isbn' => '9780451458445', 'published_at' => '2001-09-01'],

            // Memory, Sorrow, and Thorn
            ['title' => 'The Dragonbone Chair', 'author' => 'Tad Williams', 'isbn' => '9780886773847', 'published_at' => '1988-10-01'],
            ['title' => 'Stone of Farewell', 'author' => 'Tad Williams', 'isbn' => '9780886774806', 'published_at' => '1990-08-01'],
            ['title' => 'To Green Angel Tower', 'author' => 'Tad Williams', 'isbn' => '9780886775735', 'published_at' => '1993-03-01'],

            // Other Notable Fantasy Books
            ['title' => 'The Sword of Shannara', 'author' => 'Terry Brooks', 'isbn' => '9780345314253', 'published_at' => '1977-04-01'],
            ['title' => 'Good Omens', 'author' => 'Terry Pratchett & Neil Gaiman', 'isbn' => '9780060853976', 'published_at' => '1990-05-01'],
            ['title' => 'American Gods', 'author' => 'Neil Gaiman', 'isbn' => '9780380973651', 'published_at' => '2001-06-19'],
            ['title' => 'Jonathan Strange & Mr Norrell', 'author' => 'Susanna Clarke', 'isbn' => '9780765356154', 'published_at' => '2004-09-08'],
            ['title' => 'The Night Circus', 'author' => 'Erin Morgenstern', 'isbn' => '9780385534635', 'published_at' => '2011-09-13'],
            ['title' => 'The Lies of Locke Lamora', 'author' => 'Scott Lynch', 'isbn' => '9780553804676', 'published_at' => '2006-06-27'],
            ['title' => 'The Priory of the Orange Tree', 'author' => 'Samantha Shannon', 'isbn' => '9781635570298', 'published_at' => '2019-02-26'],
            ['title' => 'Uprooted', 'author' => 'Naomi Novik', 'isbn' => '9780804179034', 'published_at' => '2015-05-19'],
            ['title' => 'The Hundred Thousand Kingdoms', 'author' => 'N.K. Jemisin', 'isbn' => '9780316043915', 'published_at' => '2010-02-25'],
            ['title' => 'Gardens of the Moon', 'author' => 'Steven Erikson', 'isbn' => '9780553819571', 'published_at' => '1999-04-01']
        ];

        foreach ($fantasyBooks as $book) {
            Resource::firstOrCreate(
                ['isbn' => $book['isbn']],
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                    'description' => "A renowned fantasy novel by {$book['author']}, published in " . date('Y', strtotime($book['published_at'])) . ". This book is considered one of the greatest works in the fantasy genre.",
                    'category_id' => $fantasyCategory->id,
                    'published_at' => $book['published_at'],
                ]
            );
        }
    }
}