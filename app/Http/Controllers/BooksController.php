<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
  public function index()
  {
    return Book::all();
  }
  public function show($id)
  {
    try {
      $book = Book::findOrFail($id);

      if ($book) {
        return $book;
      }
    } catch (\throwable $th) {

      return response([
        'message' => 'Book not found'
      ], 404);
    }
  }
}
