@extends('layouts.admin')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
@endpush

@section('content')
<div class="section-header">
    <h1>List of Subjects Schedules</h1>
    <div class="section-header-breadcrumb">
        <ol class="breadcrumb bg-primary text-white-all my-1">
            <li class="breadcrumb-item"><a href="{{ route('admin.schedules.index') }}"><i class="fas fa-calendar-alt"></i> Subjects Schedules</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data Subjects Schedules</li>
        </ol>
    </div>
</div>
<x-flash_message></x-flash_message>
<div class="section-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Data of Subjects Schedules</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> Add Data Schedule</a>
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
                                                <option selected disabled>Filter by the day..</option>
                                                @foreach ($days as $day)
                                                    <option value="{{ $day->id }}" class="py-3">{{ $day->id . ' - ' . $day->day }}</option>
                                                @endforeach
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
                    <table clauserss="table table-hover table-striped" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Day</th>
                                <th>Subject</th>
                                <th>Start Time</th>
                                <th>Finish Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse ($schedules as $schedule)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $schedule->day->day }}</td>
                                <td>{{ $schedule->subject->name }}</td>
                                <td>{{ $schedule->start_time }}</td>
                                <td>{{ $schedule->end_time }}</td>
                                <td>
                                    <div class="d-inline">
                                        {{-- <a href="" class="btn btn-primary mx-2 my-2"><i class="fas fa-search"></i></a> --}}
                                        <a href="{{ route('admin.schedules.edit', $schedule->id) }}" class="btn btn-success mx-2 my-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.schedules.destroy', $schedule->id) }}" method="post" class="d-inline">
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
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    // DataTables
    $('#table').DataTable();
    // Select2
    $('.select2').select2({
        placeholder: 'Filter by the day..'
    });
})
</script>
@endpush