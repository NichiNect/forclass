@extends('layouts.admin')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endpush

@section('content')
<div class="section-header">
    <h1>Data Users Not Activated</h1>
    <div class="section-header-breadcrumb">
        <ol class="breadcrumb bg-primary text-white-all my-1">
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}"><i class="fas fa-users-cog"></i> Users Management</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}"><i class="fas fa-list"></i> All Data Users</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data Users Not Activated</li>
        </ol>
    </div>
</div>
<x-flash_message></x-flash_message>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="collapse" id="mycard-collapse" style>
                <div class="card card-info">
                    <div class="card-header">
                        <h4>For Your Information!</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            This is all of data user account which have not activated yet. As an Admin you can Accept or Decline that request. <br>
                            If you decline that request, user account are <i>deleted automatically</i>. Please be sure when you take an action!
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sit aliquid, accusamus quaerat, totam voluptates perferendis blanditiis nisi voluptatum reiciendis, dignissimos error a natus? Dolorem voluptatum consectetur et eius culpa.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>List Data of Users are Not Activated Yet</h4>
                    <div class="card-header-action">
                        <a href="#" data-collapse="#mycard-collapse" class="btn btn-info"><i class="fas fa-exclamation fa-fw"></i> Information</a>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> Add Data User</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table clauserss="table table-hover table-striped" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Active Status</th>
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
                                    <div class="badge badge-dark">{{ ucwords($user->role) }}</div>
                                </td>
                                <td>
                                    @if ($user->is_active==1)
                                        <div class="badge badge-success">Activated</div>
                                    @else
                                        <div class="badge badge-warning">Not Activated</div>
                                    @endif
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="d-inline">
                                        <a href="{{ route('admin.users.accuserconfirmation', $user->id) }}" class="btn btn-success mx-2 my-2" onclick="return confirm('Are you sure want to ACC this account?')"><i class="fas fa-check"></i></a>
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary mx-2 my-2 detail"><i class="fas fa-search"></i></a>
                                        <form action="" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger mx-2 my-2" onclick="return confirm('Are you sure want to delete this?')"><i class="fas fa-times"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">
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
$(document).ready(function() {
    // For DataTable
    $('#table').DataTable();
    // Modal
    $('.detail').on('click', function(e) {
        e.preventDefault();  
        let url = $(this).attr('href');
        console.log(url);

        $.ajax({
            url: url,
            method: 'get',
            type: 'json',
            success: function(res) {
                console.log(res);
                $('.modal-title').html(`<h4>Detail User : ${res.data.username}</h4>`);
                $('.modal-dialog').addClass('modal-dialog-centered');
                $('.modal-body').html(`
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>:</td>
                                <td>${res.data.name}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td>${res.data.username}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td>${res.data.email}</td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>:</td>
                                <td>${res.data.role}</td>
                            </tr>
                            <tr>
                                <th>Active Status</th>
                                <td>:</td>
                                <td>${(res.data.is_active==1) ? '<span class="badge badge-success">Activated</span>' : '<span class="badge badge-warning">Not Activated</span>'}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>:</td>
                                <td>${res.data.createdAt}</td>
                            </tr>
                        </tbody>
                    </table>
                `);
            }
        });

    });

    $('.detail').fireModal({
        created: function() {
        },
        title: 'My Modal',
        body: `
            
        `,
    });

    // Collapse Information Card
    // Collapsable
  $("[data-collapse]").each(function() {
    var me = $(this),
        target = me.data('collapse');

    me.click(function() {
      $(target).collapse('toggle');
      $(target).on('shown.bs.collapse', function(e) {
        e.stopPropagation();
        me.html('<i class="fas fa-minus"></i>');
      });
      $(target).on('hidden.bs.collapse', function(e) {
        e.stopPropagation();
        me.html(`<a href="#" data-collapse="#mycard-collapse" class="btn btn-info p-0 px-0"><i class="fas fa-exclamation fa-fw"></i> Information</a>`);
      });
      return false;
    });
  });
});
</script>
@endpush