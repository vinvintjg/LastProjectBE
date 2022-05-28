<?php

namespace App\Http\Controllers;
use App\Models\books2;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
// use App\Http\Requests\BookRequest;

class BookController2 extends Controller
{
    public function getCreatePage2() {
        return view('create');
    }

    public function createBook2(Request $request){

        books2::create([
            "Pasolo" =>$request->Pasolo,
            "Pooklo" =>$request->Pooklo,
        ]);

        return redirect(route('getCreatePage2'));
    }

    public function getDataLeaderById($id){
        $user = User::find($id);
        return view('updateuser' ,['user' => $user]);
    }

    public function updateuser(UserRequest $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->notlp = $request->notlp;
        $user->addres = $request->addres;
        $user->poscode = $request->poscode;
        $user->qty = $request->qty;

        $user -> save();

        $user -> update([
            'name' => $request->name,
            'notlp' => $request->notlp,
            'addres' => $request->addres,
            'poscode' => $request->poscode,
            'qty' => $request->qty,
        ]);
        return redirect(route('ViewMyBooks'));
    }

}
