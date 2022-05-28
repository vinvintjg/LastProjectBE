@extends('layouts.layout')
@section('content')
<div style="padding-top: 20px"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">{{ __('UPDATE ITEM') }}</div>
                <div class="card-body">
                    <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <div class="text-center">
                                <img src="{{asset('storage/Image/'.$book->Image)}}" alt="error" class="mb-3" style="height: 300px" >
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name of Item</label>
                            <input name="Name" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->Name}}" placeholder="Input Name of Item">
                            @error('Name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Price" class="form-label">Price of Item</label>
                            <input name="Price" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->Price}}" placeholder="Input Price of Item">
                            @error('Price')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Quantity" class="form-label">Quantity of Item</label>
                            <input name="Quantity" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->Quantity}}" placeholder="Input Quantity of Item">
                            @error('Quantity')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Image" class="form-label">Image of Item</label>
                            <input name="Image" type="file" class="form-control" id="formGroupExampleInput" value="{{$book->Image}}" placeholder="Input Image Of Book">
                            @error('Image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="card-body text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="{{route('getBooks')}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
