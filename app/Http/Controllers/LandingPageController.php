<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $contentController = new BooksController();
        $posts = $contentController->loadBooks();

        return view('landing-page', compact('posts'));
    }
}