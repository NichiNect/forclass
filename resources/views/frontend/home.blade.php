@extends('layouts.app')

@push('style')
<style>
    nav, .jumbotron {
        background: rgb(103,119,239) !important;
        background: linear-gradient(90deg, rgba(103,119,239,1) 51%, rgba(189,73,227,1) 100%) !important;
    }
    nav ul .nav-link:hover {
        color: #333 !important;
    }

    .jumbotron {
        min-height: 500px;
    }
    .jumbotron > .text-sm {
        font-size: 15px;
    }
    .btn-outline-light:hover {
        transition-duration: 300ms;
        background: rgb(103,119,239);
        background: linear-gradient(90deg, rgba(103,119,239,1) 51%, rgba(189,73,227,1) 100%);
        color: aliceblue;
    }
    .devideer {
        max-width: 60%;
        border: 1px solid #6777ef;
    }

    #student .student-name {
        font-size: 1.2rem !important;
        letter-spacing: 1px;
    }
    #student .student-description {
        font-size: 0.75rem !important;
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
<div class="jumbotron text-center">
    <h1 class="display-5 text-white">Welcome to ForClass Website!</h1>
    <br>
    <p class="lead text-white py-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4 bg-white" style="width: 60%;">
    <p class="text-sm text-white py-4">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, sequi commodi repudiandae enim et voluptatem nemo officia soluta, quo qui culpa! Suscipit amet nulla consequatur cupiditate repellendus modi quod accusantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ad sed ab non, neque reiciendis.
    </p>
    <a class="btn btn-outline-light" href="#" role="button">Learn more..</a>
</div>

<div class="container py-5">
    <section id="student" class="py-4">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1>List of Students</h1>
                <hr class="bg-primary devideer">
            </div>
        </div>
        <div class="row my-4">
            @foreach ($students as $student)
            <div class="col-lg-6 my-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card shadow-sm rounded student">
                        {{-- <div class="card-body "> --}}
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ $student->getImageStudent() }}" alt="" class="img-fluid student-img">
                                </div>
                                <div class="col-7 px-3 py-3">
                                    <h4 class="text-dark student-name">{{ $student->name }}</h4>
                                    <small class="text-muted student-description">
                                        {!! Str::limit($student->description, 200) !!}
                                    </small>
                                    <br>
                                    <small>
                                        <span class="text-primary">More information..</span>
                                    </small>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-right">
            <a href="{{ route('home.students') }}" class="text-decoration-none">View More.. &rsaquo;&rsaquo;</a>
        </div>
    </section>

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
                                {!! Str::limit($article->content, 100) !!} <a href="{{ route('frontend.articles.show', $article->slug) }}">read more</a>
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
                <div class="col-lg-12">
                    <h4 class="text-center">Data Empty</h4>
                </div>
            @endforelse
        </div>
        <div class="text-right">
            <a href="{{ route('frontend.articles.index') }}" class="text-decoration-none">View More.. &rsaquo;&rsaquo;</a>
        </div>
    </section>
</div>

@endsection

@push('script')
<script>
$('.student').mouseover(function() {
    $(this).addClass('shadow-lg');
}).mouseleave(function() {
    $(this).removeClass('shadow-lg');
});
</script>
@endpush