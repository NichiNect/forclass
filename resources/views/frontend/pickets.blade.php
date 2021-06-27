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
                <h1>Pickets<h1>
                <hr class="bg-primary devideer">
            </div>
        </div>
        
        @foreach ($days as $day)
            
        <div class="row my-4 justify-content-center">
            <div class="col-lg-10 my-4">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h3>{{ $day->day }}</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Absent of Student</th>
                                    <th>Name of Student</th>
                                    <th>Picture of Student</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @forelse ($day->pickets as $picket)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $picket->student->no_absen }}</td>
                                    <td>{{ $picket->student->name }}</td>
                                    <td>
                                    <img src="{{ $picket->student->getImageStudent() }}" alt="{{ $picket->student->name }}" class="img-thumbnail img-fluid" style="max-width: 10rem;">
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <h5>Data Empty</h5>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </section>
</div>
@endsection
