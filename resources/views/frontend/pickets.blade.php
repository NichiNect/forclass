@extends('layouts.app')

@push('style')
<style>
    .devideer {
        max-width: 60%;
        border: 1px solid #6777ef;
    }
</style>
@endpush

@section('content')
<div class="container">
    <section id="student" class="py-5">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1>Pickets<h1>
                <hr class="bg-primary devideer">
            </div>
        </div>
        <div class="row my-4 justify-content-center">
            <div class="col-lg-10 my-4">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h3>Senin</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name of Student</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Yoni Widhi</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saitama</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4 justify-content-center">
            <div class="col-lg-10 my-4">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h3>Selasa</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Subjects</td>
                                    <td>Time</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pemrograman Dasar</td>
                                    <td>07.00 - 09.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pemrograman Web Dasar</td>
                                    <td>10.00 - 11.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
