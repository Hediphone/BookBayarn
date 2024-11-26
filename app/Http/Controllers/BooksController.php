<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function loadBooks()
    {
        $posts = [
            [
                'book_id' => 1,
                'title' => "Omniscient Reader's Viewpoint",
                'author' => 'Sing Shong',
                'rating' => 4,
                'cover' => 'asset/images/orv.jpg',
                'genre' => 'Fantasy',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'An incredible read! So many twists and unforgettable moments!', 
                    'time' => '1 day ago']
                ]
            ],
            [
                'book_id' => 2,
                'title' => 'Lord of the Mysteries',
                'author' => 'Yuan Ye',
                'rating' => 4,
                'cover' => 'asset/images/lotm.jpg',
                'genre' => 'Mystery',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A thrilling mystery that keeps you on the edge of your seat. Highly recommend!', 
                    'time' => '2 days ago']
                ]
            ],
            [
                'book_id' => 3,
                'title' => 'A Gentle Reminder',
                'author' => 'Bianca Sparacino',
                'rating' => 2,
                'cover' => 'asset/images/gentle-reminder.jpg',
                'genre' => 'Self-help',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'It\'s a beautiful book with gentle life lessons. Very thought-provoking.', 
                    'time' => '2 days ago']
                ]
            ],
            [
                'book_id' => 4,
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'rating' => 3,
                'cover' => 'asset/images/pride-prejudice.jpg',
                'genre' => 'Romance',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A classic with timeless romance and witty characters. A must-read!', 
                    'time' => '3 days ago']
                ]
            ],
            [
                'book_id' => 5,
                'title' => 'First Lie Wins',
                'author' => 'Ashley Elston',
                'rating' => 4,
                'cover' => 'asset/images/first-lie-wins.jpg',
                'genre' => 'Thriller',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A fast-paced, exciting thriller. Great book!', 
                    'time' => '5 days ago']
                ]
            ],
            [
                'book_id' => 6,
                'title' => 'Funny Story',
                'author' => 'Emily Henry',
                'rating' => 4,
                'cover' => 'asset/images/funny-story.jpg',
                'genre' => 'Comedy',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'Great book! It\'s light and fun.', 
                    'time' => '5 days ago']
                ]
            ],
            [
                'book_id' => 7,
                'title' => 'The Women',
                'author' => 'Kristin Hannah',
                'rating' => 2,
                'cover' => 'asset/images/the-women.jpg',
                'genre' => 'Drama',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A heartfelt drama. The story really stays with you after finishing it', 
                    'time' => '7 days ago']
                ]
            ],
            [
                'book_id' => 8,
                'title' => 'The Teacher',
                'author' => 'Freida McFadden',
                'rating' => 5,
                'cover' => 'asset/images/the-teacher.jpg',
                'genre' => 'Mystery',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'I loved this mystery! It\'s suspenseful and keeps you guessing.', 
                    'time' => '7 days ago']
                ]
            ],
            [
                'book_id' => 9,
                'title' => 'The Cruel Prince',
                'author' => 'Holly Black',
                'rating' => 3,
                'cover' => 'asset/images/dashboard/cruel_prince.png',
                'genre' => 'Fantasy',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A captivating fantasy! The world-building is amazing.', 
                    'time' => '2 weeks ago']
                ]
            ],
            [
                'book_id' => 10,
                'title' => 'Storm and Silence',
                'author' => 'Robert Thier',
                'rating' => 3,
                'cover' => 'asset/images/dashboard/storm_and_silence.png',
                'genre' => 'Historical Fiction',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A charming historical fiction with a strong heroine. Loved every moment.', 
                    'time' => '1 month ago']
                ]
            ],
            [
                'book_id' => 11,
                'title' => 'Waves of Memories',
                'author' => 'Jonaxx',
                'rating' => 3,
                'cover' => 'asset/images/dashboard/waves_of_memories.png',
                'genre' => 'Romance',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A beautiful romance! It\'ll pull at your heartstrings.', 
                    'time' => '1 month ago']
                ]
            ],
            [
                'book_id' => 12,
                'title' => 'The Invisible Girl',
                'author' => 'Alexisse Rose',
                'rating' => 3,
                'cover' => 'asset/images/dashboard/invisible_girl.png',
                'genre' => 'Romance',
                'comments' => [
                    ['reader' => 'Renato Jr.', 
                    'text' => 'A sweet romance with an intriguing plot. Loved it!', 
                    'time' => '2 months ago']
                ]
            ],
        ];

        return $posts;
    }
}

