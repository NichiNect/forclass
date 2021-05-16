@extends('layouts.auth', ['title' => 'Register Page'])

@section('content')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <img src="{{ asset('assets/stisla/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4>Register</h4></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="name">Your Name</label>
                                    <input name="name" id="name" type="text" class="form-control" autofocus>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="username">Username</label>
                                    <input name="username" id="username" type="text" class="form-control">
                                    @error('username')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" id="email" type="email" class="form-control">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label for="password_confirmation" class="d-block">Password Confirmation</label>
                                    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control">
                                </div>
                            </div>

                            {{-- <div class="form-divider">
                            Your Home
                            </div>
                            <div class="row">
                            <div class="form-group col-6">
                                <label>Country</label>
                                <select class="form-control selectric">
                                    <option>Indonesia</option>
                                    <option>Palestine</option>
                                    <option>Syria</option>
                                    <option>Malaysia</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Province</label>
                                <select class="form-control selectric">
                                <option>West Java</option>
                                <option>East Java</option>
                                </select>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-6">
                                <label>City</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label>Postal Code</label>
                                <input type="text" class="form-control">
                            </div>
                            </div> --}}

                            <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                                <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                            </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    <a href="{{ route('login') }}">Already have an account?? </a>
                </div>
                <div class="simple-footer">
                    Presented by &copy; Yoni Widhi {{ date('Y', time()) }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
