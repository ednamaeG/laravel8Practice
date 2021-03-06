@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('status') }}
        </div>
    @endif
    <div class="text-right">
        <a href="/posts/create"><button class="btn btn-secondary mb-4">Create Post</button></a>
    </div>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    <h3>
                        {{ $post->user->name }}
                    </h3>
                    <h4>{{ $post->title }}</h4>
                    <small>{{ $post->created_at->diffForHumans() }}</small>
                </div>

                <div class="card-body">
                    {{ $post->content }}
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">

                            @if (count($post->likes) > 1)
                                {{ count($post->likes) }} Likes
                            @else
                                Like
                            @endif

                            &nbsp;

                            <i class="fas fa-adjust"></i>
                            @if (count($post->comments) > 1)
                                {{ count($post->comments) }} Comments
                            @else
                                Comment
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                            @if (count($post->comments) > 0)
                                <hr />
                                <strong>Comments</strong>

                                @foreach ($post->comments as $comment)
                                    <hr />
                                    <div class="row">
                                        <div class="col">
                                            <strong class="text-info">
                                                {{ $comment->user->name }}
                                            </strong>
                                            {{ $comment->comment }}

                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-warning">
            No Posts Found
        </div>
    @endif
@endsection
