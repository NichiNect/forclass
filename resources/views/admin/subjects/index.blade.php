@extends('layouts.admin')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endpush

@section('content')
<div class="section-header">
    <h1>List Data Subjects</h1>
    <div class="section-header-breadcrumb">
        <ol class="breadcrumb bg-primary text-white-all my-1">
            <li class="breadcrumb-item"><a href="{{ route('admin.subjects.index') }}"><i class="fas fa-book"></i> Subjects</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data Subjects</li>
        </ol>
    </div>
</div>
<x-flash_message></x-flash_message>
<div class="section-content">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4>All Data of Subjects</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.subjects.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> Add Data Subjects</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table clauserss="table table-hover table-striped" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse ($subjects as $subject)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>
                                    <div class="d-inline">
                                        {{-- <a href="" class="btn btn-primary mx-2 my-2"><i class="fas fa-search"></i></a> --}}
                                        <a href="{{ route('admin.subjects.edit', $subject->id) }}" class="btn btn-success mx-2 my-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger mx-2 my-2" onclick="return confirm('Are you sure want to delete this?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
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
</div>
@endsection

@push('script')
<script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>
<script>
    $('#table').DataTable();
</script>
@endpush