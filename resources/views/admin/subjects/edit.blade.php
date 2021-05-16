@extends('layouts.admin')

@section('content')
<div class="section-header">
    <h1>Edit Data Subject</h1>
    <div class="section-header-breadcrumb">
        <ol class="breadcrumb bg-primary text-white-all my-1">
            <li class="breadcrumb-item"><a href="{{ route('admin.subjects.index') }}"><i class="fas fa-book"></i> Subjects</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-edit"></i> Edit Data Subject</li>
        </ol>
    </div>
</div>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Edit Data Subject</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse" style>
                    <div class="card-body table-responsive">
                        <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST">
                            @csrf
                            @method('put')
                            @include('admin.subjects._form')
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Edit Data Subject</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

