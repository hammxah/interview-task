<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('search');
        if ($query != '') {

            $data = Book::query()
                ->where('title', 'LIKE', "%{$query}%")
                ->orWhere('author', 'LIKE', "%{$query}%")
                ->orWhere('iban', 'LIKE', "%{$query}%")
                ->get();

            if (count($data) > 0) {
                return [
                    'status' => 200,
                    'data' => $data
                ];
            } else {
//                if (strlen($query) > 5){
//                    Book::create([
//                        'title' => $query,
//                        'author' => 'Not Defined',
//                        'iban' => '0000000',
//                    ]);
//                }
                return [
                    'status' => 404,
                    'data' => 'No Details found. Try to search again!'
                ];
            }
        } else {
            return;
        }
    }

}
