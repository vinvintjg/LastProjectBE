<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Book2;
use App\Models\Genre;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function getCreatePage() {
        $genres = Genre::all();
        return view('create',['genres'=> $genres]);
    }

    public function createBook(BookRequest $request){

        $extension = $request->file('Image')->getClientOriginalExtension();
        $fileName = $request->Name.'_'.$request->Price.'.'.$extension;//rename image
        $request->file('Image')->storeAs('public/Image/', $fileName);//save image

        $book = Book::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'Image'=> $fileName,
            'user_id' => Auth::user()->id,
        ]);
        $book->category()->attach($request->category);

        return redirect(route('getBooks'));
    }

    public function searchBook(Request $request){
        $cari = $request->cari;
        $books = Book::where('Name', 'like', '%'.$cari.'%')
            ->orWhere('Price', 'like', '%'.$cari.'%')
            ->orWhere('Quantity', 'like', '%'.$cari.'%')
            ->paginate(5);
        $books->withPath('');
        $books->appends($request->all());
        return view('view', compact('books', 'request'));
    }

    public function searchBook2(Request $request){
        $cari = $request->cari;
        $books = Book::where('Name', 'like', '%'.$cari.'%')
            ->orWhere('Price', 'like', '%'.$cari.'%')
            ->orWhere('Quantity', 'like', '%'.$cari.'%')
            ->paginate(5);
        $books->withPath('');
        $books->appends($request->all());
        return view('viewmy', compact('books', 'request'));
    }

    public function getBooks(){
        $books = Book::paginate(5);
        return view('view', ['books' => $books]);
    }

    public function getBooks2(){
        $books = Book::paginate(5);
        return view('invoice', ['books' => $books]);
    }

    public function getBookById($id) {
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    public function InvoiceById($id) {
        $book = Book::find($id);
        return view('invoice', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id) {
        $book = Book::find($id);

        $extension = $request->file('Image')->getClientOriginalExtension();
        $fileName = $request->Name.'_'.$request->Price.'.'.$extension;//rename image
        $request->file('Image')->storeAs('public/Image/', $fileName);//save image

        $book -> update([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'Image'=> $fileName,
            'category' => $request->category,
        ]);
        $book->category()->attach($request->category);

        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }

    public function ViewMyBooks(){
        $books = Book::paginate(5);
        return view('viewmy', ['books' => $books]);
    }

    public function getInvoice(){
        $books = Book::paginate(5);
        return view('invoice', ['books' => $books]);
    }

}
