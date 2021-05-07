@extends('layouts.app')

@push('style')
<style>
    .jumbotron {
        min-height: 500px;
    }
    .jumbotron > .text-sm {
        font-size: 15px;
    }
    .btn-outline-light:hover {
        background: rgb(103,119,239);
        background: linear-gradient(90deg, rgba(103,119,239,1) 51%, rgba(189,73,227,1) 100%);
        color: aliceblue;
    }
    .devideer {
        max-width: 60%;
        border: 1px solid #6777ef;
    }

    body {
        background-color: #eaeaea;
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
            <div class="col-lg-6 my-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card shadow-sm rounded student">
                        {{-- <div class="card-body "> --}}
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('storage/images/students/ahmad-saugi.png') }}" alt="" class="img-fluid student-img">
                                </div>
                                <div class="col-7 px-3 py-3">
                                    <h4 class="text-dark student-name">Yoni Widhi Cahyadi</h4>
                                    <small class="text-muted student-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et nibh facilisis, accumsan tellus id, imperdiet nisl. Q...
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
            <div class="col-lg-6 my-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card shadow-sm rounded student">
                        {{-- <div class="card-body "> --}}
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('storage/images/students/ahmad-saugi.png') }}" alt="" class="img-fluid student-img">
                                </div>
                                <div class="col-7 px-3 py-3">
                                    <h4 class="text-dark student-name">Yoni Widhi Cahyadi</h4>
                                    <small class="text-muted student-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et nibh facilisis, accumsan tellus id, imperdiet nisl. Q...
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
            <div class="col-lg-6 my-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card shadow-sm rounded student">
                        {{-- <div class="card-body "> --}}
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('storage/images/students/ahmad-saugi.png') }}" alt="" class="img-fluid student-img">
                                </div>
                                <div class="col-7 px-3 py-3">
                                    <h4 class="text-dark student-name">Yoni Widhi Cahyadi</h4>
                                    <small class="text-muted student-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et nibh facilisis, accumsan tellus id, imperdiet nisl. Q...
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
            <div class="col-lg-6 my-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card shadow-sm rounded student">
                        {{-- <div class="card-body "> --}}
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('storage/images/students/ahmad-saugi.png') }}" alt="" class="img-fluid student-img">
                                </div>
                                <div class="col-7 px-3 py-3">
                                    <h4 class="text-dark student-name">Yoni Widhi Cahyadi</h4>
                                    <small class="text-muted student-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et nibh facilisis, accumsan tellus id, imperdiet nisl. Q...
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
            
        </div>
        <div class="text-right">
            <a href="#" class="text-decoration-none">View More..</a>
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
        <div class="text-right">
            <a href="#" class="text-decoration-none">View More..</a>
        </div>
    </section>
</div>

<footer>
    <hr>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <p class="text-left">Presented by Yoni Widhi &copy; {{ date('Y', time()) }}</p>
            </div>
            <div class="col-md-6">
                <p class="text-right">Made with <i class="fas fa-heart"></i> by Open Source Developer</p>
            </div>
        </div>
    </div>
</footer>
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