<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function getCreatePage() {
        $genres = Genre::all();
        return view('create',['genres'=> $genres]);
    }

    public function createBook(BookRequest $request){

        $extension = $request->file('Image')->getClientOriginalExtension();
        $fileName = $request->Category.'_'.$request->Name.'.'.$extension;//rename image
        $request->file('Image')->storeAs('public/Image/', $fileName);//save image

        Book::create([
            'Category' => $request->Category,
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'Image'=> $fileName
        ]);

        return redirect(route('getBooks'));
    }

    public function searchBook(Request $request){
        $cari = $request->cari;
        $books = Book::where('Category', 'like', '%'.$cari.'%')
            ->orWhere('Name', 'like', '%'.$cari.'%')
            ->orWhere('Price', 'like', '%'.$cari.'%')
            ->orWhere('Quantity', 'like', '%'.$cari.'%')
            ->paginate(5);
        $books->withPath('');
        $books->appends($request->all());
        return view('view', compact('books', 'request'));
    }

    public function getBooks(){
        $books = Book::paginate(5);
        return view('view', ['books' => $books]);
    }

    public function getBookById($id) {
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id) {
        $book = Book::find($id);

        $book -> update([
            'Category' => $request->Category,
            'Name' => $request->Name,
            'Quantity' => $request->Quantity,
            'Price' => $request->Price,
            'Image' => $request->Image,
        ]);

        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }

}
