<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookController extends Controller
{
    public static function getBooks()
    {
        $books = DB::table('books')->get();
        return view('index', ['books' => $books]);
    }
    public static function addBook(Request $request) {
        $name = $request->input('name');
        $title = $request->input('title');
        $price = $request->input('price');
        $date = $request->input('date');
        DB::table('books')->insert([
            'name' => $name,
            'title' => $title,
            'price' => $price,
            'date' => $date
        ]);
        return redirect('/');
    }
}
