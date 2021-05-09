@extends('layouts.app')

@push('style')
<style>
    .devideer {
        max-width: 60%;
        border: 1px solid #6777ef;
    }
</style>
@endpush

@section('content')
<div class="container">
    <section id="student" class="py-5">
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
            <a href="#" class="text-decoration-none">View More.. &rsaquo;&rsaquo;</a>
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
