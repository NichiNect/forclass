@extends('layouts.admin')

@section('content')
<div class="section-header">
    <h1>Data Students</h1>
    <div class="section-header-breadcrumb">
        {{-- <nav aria-label="breadcrumb"> --}}
            {{-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div> --}}
            <ol class="breadcrumb bg-primary text-white-all my-1">
              <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}"><i class="fas fa-users"></i> Students</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data Students</li>
            </ol>
        {{-- </nav> --}}
    </div>
</div>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4></h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.students.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> Add Data Student</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                            <tr>
                                <td>
                                    {{ $students->count() * ($students->currentPage() - 1) + $loop->iteration }}
                                </td>
                                <td>
                                    <img src="{{ $student->getImageStudent() }}" alt="{{ $student->picture }}" class="img-thumbnail img-fluid" style="max-width: 15rem;">
                                </td>
                                <td>{{ $student->name }}</td>
                                <td>{!! Str::limit($student->description, 100) !!}</td>
                                <td>
                                    <div class="d-inline">
                                        <a href="{{ route('admin.students.show', $student->id) }}" class="btn btn-primary mx-2 my-2"><i class="fas fa-search"></i></a>
                                        <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-success mx-2 my-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.students.destroy', $student->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger mx-2 my-2" onclick="return confirm('Are you sure want to delete this?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">
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
</div>
@endsection