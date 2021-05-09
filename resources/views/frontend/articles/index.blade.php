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
            <div class="col-lg-4 my-4">
                <div class="card">
                    <img src="{{ asset('storage/images/articles/article1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none article-title">
                            <h4 class="card-title">Website ForClass Untuk Kelas XII RPL C</h4>
                        </a>
                        <p class="card-description article-description text-muted">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, vitae repudiandae. Suscipit temporibus saepe a quos aliquid, incidunt quo labore quam obcaecati rem pariatur neque accusantium tempora autem delectus nihil?
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between content-center">
                        <div>
                            <i class="fas fa-user mr-1"></i> Administrator
                        </div>
                        <small>5 minutes ago</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-4">
                <div class="card">
                    <img src="{{ asset('storage/images/articles/article1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none article-title">
                            <h4 class="card-title">Website ForClass Untuk Kelas XII RPL C</h4>
                        </a>
                        <p class="card-description article-description text-muted">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, vitae repudiandae. Suscipit temporibus saepe a quos aliquid, incidunt quo labore quam obcaecati rem pariatur neque accusantium tempora autem delectus nihil?
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between content-center">
                        <div>
                            <i class="fas fa-user mr-1"></i> Administrator
                        </div>
                        <small>5 minutes ago</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-4">
                <div class="card">
                    <img src="{{ asset('storage/images/articles/article1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none article-title">
                            <h4 class="card-title">Informasi UNBK Terbaru</h4>
                        </a>
                        <p class="card-description article-description text-muted">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, vitae repudiandae. Suscipit temporibus saepe a quos aliquid, incidunt quo labore quam obcaecati rem pariatur neque accusantium tempora autem delectus nihil?
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between content-center">
                        <div>
                            <i class="fas fa-user mr-1"></i> Administrator
                        </div>
                        <small>5 minutes ago</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection