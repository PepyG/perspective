@extends('layout.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <form method="POST" action="/posts/create">

            {{csrf_field()}}
            <div class="form-group row">
                <label for="inlineFormInput" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" name=text>
                </div>
            </div>
            <div class="form-group row">
                <label for="inlineFormInputGroup" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <input type="file" class="form-control-file" id="image" name=image aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Category</label>
                <select class="form-control" id="category_id" name="category_id" >

                    <option>1</option>

                </select>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
@endsection