@extends('layouts.admin')

@section('content')
<div class="section-header">
    <h1>Add Data Student</h1>
    <div class="section-header-breadcrumb">
        {{-- <nav aria-label="breadcrumb"> --}}
            {{-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div> --}}
            <ol class="breadcrumb bg-primary text-white-all my-1">
              <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}"><i class="fas fa-users"></i> Students</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus"></i> Add Data Student</li>
            </ol>
        {{-- </nav> --}}
    </div>
</div>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Create New Student</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse" style>
                    <div class="card-body table-responsive">
                        <form action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.students._form')
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Create New Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

