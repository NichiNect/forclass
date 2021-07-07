@extends('layouts.app')

@push('style')
<style>
    .devideer {
        max-width: 60%;
        border: 1px solid #6777ef;
    }
    #article .card-title {
        letter-spacing: 1px;
        margin: 0.75rem 0;
    }
    #article .article-description {
        letter-spacing: 1px;
        font-size: 0.75rem;
    }
    #article .card-footer {
        background-color: #fff;
    }
    #article .article-title {
        color: #545454;
        transition-duration: 300ms;
    }
    #article .article-title:hover {
        color: #3490dc;
    }
    #article .suggest a {
        text-decoration: none;
        color: #545454;
    }
    #article .suggest a:hover {
        transition-duration: 300ms;
        color: blue;
    }
</style>
@endpush

@section('content')
<div class="container">
    <section id="article" class="my-5 px-4">
        <div class="row">
            <div class="col-lg-9 bg-white p-3">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <img src="{{ $article->getImageArticle() }}" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 my-4">
                        <div class="d-inline justify-content-between my-3 mr-5">
                            <i class="fas fa-user mr-1"></i> {{ $article->author->name }}
                        </div>
                        <small>{{ $article->created_at->diffForHumans() . ', ' . $article->created_at }}</small>
                        <h1 class="my-3">
                            {{ $article->title }}
                        </h1>
                        <p style="text-indent: 30px;">
                            {!! $article->content !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 suggest">
                <h4 class="text-center p-2">More latest article</h4>
                @forelse ($articles as $ar)
                    <div class="card my-4 shadow">
                        <div class="card-header">
                            <a href="{{ route('frontend.articles.show', $ar->slug) }}">{{ Str::limit($ar->title, 35) }}</a>
                        </div>
                        <div class="card-body">
                            <img src="{{ $ar->getImageArticle() }}" alt="{{ $article->slug }}" class="img-fluid">
                            <small>{!! Str::limit($ar->content, 90) !!} <a href="{{ route('frontend.articles.show', $ar->slug) }}">read more..</a></small>
                            <br>
                            <small class="mt-2"><i>{{ $ar->created_at->diffForHumans() }}</i></small>
                        </div>
                    </div>
                @empty
                    <p class="mx-4">Data Empty.</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
@endsection