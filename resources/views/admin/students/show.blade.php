@extends('layouts.admin', ['title' => 'Detail Data Student'])

@section('content')
<div class="section-header">
    <h1>Data Students</h1>
    <div class="section-header-breadcrumb">
        {{-- <nav aria-label="breadcrumb"> --}}
            {{-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div> --}}
            <ol class="breadcrumb bg-primary text-white-all my-1">
              <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}"><i class="fas fa-users"></i> Students</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> Detail Data Student</li>
            </ol>
        {{-- </nav> --}}
    </div>
</div>
<div class="section-content">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Student : {{ $student->name }}</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse" style>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>Absent Number</th>
                                    <td>:</td>
                                    <td>{{ $student->no_absen }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>:</td>
                                    <td>{{ $student->name }}</td>
                                </tr>
                                <tr>
                                    <th>Student Role</th>
                                    <td>:</td>
                                    <td>{{ $student->student_role }}</td>
                                </tr>
                                <tr>
                                    <th>Picture</th>
                                    <td>:</td>
                                    <td>
                                        <img src="{{ $student->getImageStudent() }}" alt="" class="img-thumbnail" style="max-width: 18rem;">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>:</td>
                                    <td>{!! $student->description !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection