@extends('layouts.postsLayout')
@section('content')
        <div class="container">
        <!-- Title -->
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" name="text" class="form-control" value="{{ $post->text }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ $post->slug }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
@endsection