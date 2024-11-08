<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use Database\Seeders\BookSeeder;

class BookController extends Controller
{
    //

    public function bookList($genre_id=0){

        // $books = Book::paginate(3);

        //  ini buat nampilin semua kra ada tanda tanya dan = 0

        if($genre_id == 0 ) $books = Book::paginate(3);
        else $books  = Book::where('genre_id', $genre_id)->paginate(3);
        // ini buat ngambil sesuai dgn genre
        $genres = Genre::all();

        $datas =  [
            'books' => $books,
            'genres' => $genres
        ];

        return view('book-list', $datas);
    }

    public function bookDetail(){
        return view('book-details');
    }
}
