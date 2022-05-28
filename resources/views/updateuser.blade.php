@extends('layouts.layout')
    @section('content')


    <div style="padding-top: 20px"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header text-center">{{ __('INPUT NEW ITEM') }} </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('updateuser', ['id' => $user -> id])}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name of Item</label>
                                                <input name="name" type="numeric" class="form-control" id="formGroupExampleInput" value="{{ $user->name }}" required autocomplete="name" placeholder="Input Name of Item">
                                                @error('name')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="poscode" class="form-label">Postal Code</label>
                                                <input name="poscode" type="text" class="form-control" id="formGroupExampleInput" value="{{ $user->poscode }}" required autocomplete="poscode" placeholder="Input Postal Code">
                                                @error('poscode')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="addres" class="form-label">Addres</label>
                                                <input name="addres" type="text" class="form-control" id="formGroupExampleInput" value="{{ $user->addres }}" required autocomplete="addres" placeholder="Input Addres">
                                                @error('addres')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="notlp" class="form-label">Phone Number</label>
                                                <input name="notlp" type="text" class="form-control" id="formGroupExampleInput" value="{{ $user->notlp }}" required autocomplete="notlp" placeholder="Input Phone Number">
                                                @error('notlp')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="qty" class="form-label">Quantity of Item</label>
                                                <input name="qty" type="text" class="form-control" id="formGroupExampleInput" value="{{ $user->qty }}" required autocomplete="qty" placeholder="Input Quantity Item">
                                                @error('qty')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn btn-outline-success col-md-3">SAVE</button>
                                            </div>
                                    </form>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

