@extends('layout.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <a class="btn btn-primary btn-lg" href="category/create" role="button">Create New Category</a>
    <div class="blog-post">
        @foreach ($category as $cat)
            <ul>
                <li>{{$cat->title}}</li>
                <li><a href="#" class="btn btn-primary">Edit Category</a></li>
            </ul>
        @endforeach
    </div>
    </div>
@endsection
