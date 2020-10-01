@extends('layouts.postsLayout')
@section('content')
        <div class="container">
        <!-- Title -->
        <form enctype="application/x-www-form-urlencoded | multipart/form-data | text/plain" action="{{ route('posts.create') }}" method="GET">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea type="text" name="text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
@endsection