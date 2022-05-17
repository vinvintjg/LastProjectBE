@extends('layouts.layout')
    @section('content')
        <div style="padding-top: 20px"></div>
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">{{ __('BOOK LIST') }}</div>
                        <div class="card-body">
                            <div class="text-center">
                                <form action="{{route('search1')}}" method="GET">
                                    <div class="input-group">
                                        <form class="form-inline" action="">
                                        <label for="category_filter" class="me-5">Filter By Category</label>
                                        <select class="form-control me-5" id="category_filter" name="category">
                                            <option value="">Select Category</option>
                                        </select>
                                        <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            <br>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Of Item</th>
                                    <th scope="col">Price Of Item</th>
                                    <th scope="col">Quantity Of Item</th>
                                    <th scope="col">Image Of Item</th>
                                    <th scope="col">Edit Item</th>
                                    <th scope="col">Delete Item</th>
                                </tr>
                                </thead>
                            </table>
                                <h6>No Item Available</h6>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
