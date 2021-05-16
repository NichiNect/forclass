@extends('layouts.admin', ['title' => 'Form Edit Data Student'])

@section('content')
<div class="section-header">
    <h1>Edit Data Student</h1>
    <div class="section-header-breadcrumb">
            <ol class="breadcrumb bg-primary text-white-all my-1">
              <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}"><i class="fas fa-users"></i> Students</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus"></i> Add Data Student</li>
            </ol>
    </div>
</div>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Edit Data Student</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse" style>
                    <div class="card-body table-responsive">
                        <form action="{{ route('admin.students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @include('admin.students._form')
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Edit Data Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
