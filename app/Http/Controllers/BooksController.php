<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    // Simulate loading data (e.g., posts, ratings, genres, etc.)
    public function loadBooks()
    {
        $posts = [
            [
                'title' => "Omniscient Reader's Viewpoint",
                'author' => 'Sing Shong',
                'rating' => 4,
                'cover' => 'asset/images/orv.jpg',
                'reader' => 'Renato Jr.',
                'time' => '5 days ago',
                'genre' => 'Fantasy',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Masterpiece!', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'Lord of the Mysteries',
                'author' => 'Yuan Ye',
                'rating' => 4,
                'cover' => 'asset/images/lotm.jpg',
                'reader' => 'Renato Jr.',
                'time' => '12 days ago',
                'genre' => 'Mystery',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Fave <3', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'A Gentle Reminder',
                'author' => 'Bianca Sparacino',
                'rating' => 2,
                'cover' => 'asset/images/gentle-reminder.jpg',
                'reader' => 'Renato Jr.',
                'time' => '12 days ago',
                'genre' => 'Self-help',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Great book!', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'rating' => 3,
                'cover' => 'asset/images/pride-prejudice.jpg',
                'reader' => 'Renato Jr.',
                'time' => '12 days ago',
                'genre' => 'Romance',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Great book!', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'First Lie Wins',
                'author' => 'Ashley Elston',
                'rating' => 4,
                'cover' => 'asset/images/first-lie-wins.jpg',
                'reader' => 'Renato Jr.',
                'time' => '5 days ago',
                'genre' => 'Thriller',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Great book!', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'Funny Story',
                'author' => 'Emily Henry',
                'rating' => 4,
                'cover' => 'asset/images/funny-story.jpg',
                'reader' => 'Renato Jr.',
                'time' => '12 days ago',
                'genre' => 'Comedy',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Great book!', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'The Women',
                'author' => 'Kristin Hannah',
                'rating' => 2,
                'cover' => 'asset/images/the-women.jpg',
                'reader' => 'Renato Jr.',
                'time' => '12 days ago',
                'genre' => 'Drama',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Great book!', 'time' => '5 days ago']
                ]
            ],
            [
                'title' => 'The Teacher',
                'author' => 'Freida McFadden',
                'rating' => 5,
                'cover' => 'asset/images/the-teacher.jpg',
                'reader' => 'Renato Jr.',
                'time' => '12 days ago',
                'genre' => 'Mystery',
                'comments' => [
                    ['author' => 'Renato Jr.', 'text' => 'Great book!', 'time' => '5 days ago']
                ]
            ],
        ];

        return $posts;
    }
}

