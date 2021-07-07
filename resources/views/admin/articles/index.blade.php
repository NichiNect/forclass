@extends('layouts.admin')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
@endpush

@section('content')
<div class="section-header">
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
        <ol class="breadcrumb bg-primary text-white-all my-1">
            <li class="breadcrumb-item"><a href="{{ route('admin.articles.index') }}"><i class="fas fa-calendar-alt"></i> Articles</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data Articles</li>
        </ol>
    </div>
</div>
<x-flash_message></x-flash_message>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $title }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> Add Data Article</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="collapse show mb-3" id="mycard-collapse" style>
                        {{-- <div class="row">
                            <div class="col-lg-4"> --}}
                                <form action="" method="get">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <select name="filter" id="filter" class="form-control select2">
                                                <option selected disabled>Filter by the published status..</option>
                                                <option value="published">Published</option>
                                                <option value="pending">Pending</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 px-0">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            {{-- </div>
                        </div> --}}
                    </div>
                    <table class="table table-hover table-striped" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Picture</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse ($articles as $article)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @if ($article->status == 'pending')
                                        <span class="badge badge-warning">{{ ucwords($article->status) }}</span>
                                    @elseif($article->status == 'published')
                                        <span class="badge badge-success">{{ ucwords($article->status) }}</span>
                                    @endif
                                </td>
                                <td>
                                    <img src="{{ $article->getImageArticle() }}" alt="{{ $article->slug }}" class="img-thumbnail">
                                </td>
                                <td>{!! Str::limit($article->content, 100) !!}</td>
                                <td>{{ $article->author->name }}</td>
                                <td>{{ $article->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="d-inline">
                                        @if ($article->status == 'pending')
                                            <form action="{{ route('admin.articles.acc', $article->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-primary mx-2 my-2" onclick="return confirm('Are you sure want to ACC this article?')"><i class="fas fa-check"></i></button>
                                            </form>
                                        @endif
                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-success mx-2 my-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger mx-2 my-2" onclick="return confirm('Are you sure want to delete this?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">
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
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script>
    $('#table').DataTable();
    $('#filter').select2();
</script>
@endpush