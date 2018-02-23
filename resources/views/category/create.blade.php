@extends('layout.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <form method="POST" action="/category/create">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Category title</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required/>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
@endsection