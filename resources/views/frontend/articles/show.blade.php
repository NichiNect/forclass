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
    <section id="article" class="my-5 bg-white px-4">
        <div class="row text-center">
            <div class="col-lg-12">
                <img src="{{ asset('storage/images/articles/article1.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-inline justify-content-between my-3 mr-5">
                    <i class="fas fa-user mr-1"></i> Administrator
                </div>
                <small>5 minutes ago, 09 May 2021 14:23:22</small>
                <h1 class="my-3">
                    Website ForClass Untuk Kelas XII RPL C
                </h1>
                <p style="text-indent: 30px;">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, accusantium ea. Eligendi odit rem, architecto voluptate assumenda placeat commodi molestiae magni ipsum cupiditate quibusdam at, officiis quos accusantium quaerat temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quasi culpa. Quidem iure delectus velit facere dolorem illum fugiat tenetur, illo ex eaque dolorum voluptate est vero magnam perspiciatis. Ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore perspiciatis ipsa in ex exercitationem eos quaerat quam optio nihil laboriosam nemo quos ullam alias earum, unde consequuntur sunt iure numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rem, iusto magni omnis repellat consequuntur veritatis. Iure molestias libero est unde odio soluta? Alias vero ullam molestiae? A, temporibus ex?
                </p>
            </div>
        </div>
    </section>
</div>
@endsection