@extends('layouts.admin')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endpush

@section('content')
<div class="section-header">
    <h1>Data Users Management</h1>
    <div class="section-header-breadcrumb">
        <ol class="breadcrumb bg-primary text-white-all my-1">
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}"><i class="fas fa-users-cog"></i> Users Management</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data Users</li>
        </ol>
    </div>
</div>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Data of Users</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.students.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> Add Data Student</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table clauserss="table table-hover table-striped" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <div class="badge badge-success">{{ ucwords($user->role) }}</div>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="d-inline">
                                        <a href="" class="btn btn-primary mx-2 my-2"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn-success mx-2 my-2"><i class="fas fa-edit"></i></a>
                                        <form action="" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger mx-2 my-2" onclick="return confirm('Are you sure want to delete this?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">
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