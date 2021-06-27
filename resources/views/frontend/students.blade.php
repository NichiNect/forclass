@extends('layouts.app')

@push('style')
<style>
    .devideer {
        max-width: 60%;
        border: 1px solid #6777ef;
    }
    .pagination{
        float: right;
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
            @forelse ($students as $student)
            <div class="col-lg-6 my-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card shadow-sm rounded student">
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
                    </div>
                </a>
            </div>
            @empty
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <h4 class="font-weight-bold">Data not found!</h4>
                    </div>
                </div>
            @endforelse
            
        </div>
        <div class="text-right">
            {{-- <a href="#" class="text-decoration-none">View More.. &rsaquo;&rsaquo;</a> --}}
            {{ $students->links() }}
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
