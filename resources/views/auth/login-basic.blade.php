@extends('layouts.app-material-dashboard')
@section('content')
    <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Entrar</h4>
                    <div class="row mt-3">
                        <div class="col-2 text-center ms-auto">
                            <a class="btn btn-link px-3" href="#">
                                <i class="fa fa-facebook text-white text-lg"></i>
                            </a>
                        </div>
                        <div class="col-2 text-center px-1">
                            <a class="btn btn-link px-3" href="#">
                                <i class="fa fa-github text-white text-lg"></i>
                            </a>
                        </div>
                        <div class="col-2 text-center me-auto">
                            <a class="btn btn-link px-3" href="#">
                                <i class="fa fa-google text-white text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" role="form" class="text-start" action="{{route('login')}}">
                    @csrf
                    <div
                        class="input-group input-group-outline @error('email') is-invalid @enderror my-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" value="{{ old('email') }}" required
                               autocomplete="email" autofocus name="email">
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group input-group-outline @error('password') is-invalid @enderror mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input id="password" type="password" class="form-control" required
                               autocomplete="current-password" name="password">
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox"
                               id="remember" {{ old('remember') ? 'checked' : '' }} name="remember">
                        <label class="form-check-label mb-0 ms-3" for="remember">Lembrar de mim</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Entrar
                        </button>
                    </div>
                    <p class="mt-4 text-sm text-center">
                        Ainda não é cadastrado?
                        <a href="{{route('register')}}"
                           class="text-primary text-gradient font-weight-bold">Registre-se</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
