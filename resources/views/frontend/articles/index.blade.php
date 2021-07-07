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
</style>
@endpush

@section('content')
<div class="container">
    <section id="article" class="py-5">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1>Latest Articles</h1>
                <hr class="bg-primary devideer">
            </div>
        </div>
        <div class="row my-4">
            @forelse ($articles as $article)
                <div class="col-lg-4 my-4">
                    <div class="card">
                        <img src="{{ $article->getImageArticle() }}" class="card-img-top">
                        <div class="card-body">
                            <a href="{{ route('frontend.articles.show', $article->slug) }}" class="text-decoration-none article-title">
                                <h4 class="card-title">{{ $article->title }}</h4>
                            </a>
                            <small class="card-description article-description text-muted">
                                {!! Str::limit($article->content, 100) !!} <a href="">read more</a>
                            </small>
                        </div>
                        <div class="card-footer d-flex justify-content-between content-center">
                            <div>
                                <i class="fas fa-user mr-1"></i> {{ $article->author->name }}
                            </div>
                            <small>{{ $article->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 my-4">
                    <h1 class="text-center">Data Empty</h1>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection