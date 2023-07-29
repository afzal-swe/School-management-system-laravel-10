<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    //
    public function index()
    {
        $book = Book::paginate(10);
        return view('admin.books.index', compact('book'));
    }
}
