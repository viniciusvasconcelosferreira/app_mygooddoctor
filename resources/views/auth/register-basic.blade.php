@extends('layouts.app-material-dashboard')
@section('content')
    <div class="col-lg-4 col-md-8 mx-auto">
        <div class="card z-index-0">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registre-se com</h4>
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
            <div class="row px-xl-5 px-sm-4 px-3">
                <div class="mt-2 position-relative text-center">
                    <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                        ou
                    </p>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" role="form" action="{{route('register')}}">
                    @csrf
                    <div class="input-group input-group-dynamic @error('name') is-invalid @enderror mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" aria-label="Name" name="name" required
                               autocomplete="name" autofocus value="{{ old('name') }}">
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group input-group-dynamic @error('email') is-invalid @enderror mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" aria-label="Email" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group input-group-dynamic @error('password') is-invalid @enderror mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" aria-label="Password" name="password" required
                               autocomplete="new-password" autofocus>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group input-group-dynamic mb-3">
                        <label for="password-confirm" class="form-label">Confirme a Senha</label>
                        <input id="password-confirm" type="password" class="form-control" aria-label="Password"
                               name="password_confirmation" required autocomplete="new-password" autofocus>
                    </div>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Cadastrar
                        </button>
                    </div>
                    <p class="text-sm mt-3 mb-0">Já tem uma conta? <a href="{{route('login')}}"
                                                                      class="text-dark font-weight-bolder">Entrar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
