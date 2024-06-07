@extends('app')

@section('app_content')
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-75 d-flex align-items-center" style="background: linear-gradient(to right, #667eea, #764ba2);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header text-center">
                                <h3 class="fw-bold text-primary">Welcome to MechanixPro</h3>
                            </div>
                            <div class="card-body">
                                <form role="form" method="post" action="{{ route('login.perform') }}">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                        <label for="username">Username</label>
                                        @if ($errors->has('username'))
                                            <div class="text-danger">{{ $errors->first('username') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                            <div class="text-danger">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-muted">Forgot your password? 
                                    <a href="{{ route('forget.password.get') }}" class="text-primary">Reset Password</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
