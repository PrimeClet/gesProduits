@extends('layouts.dashboard_layout')

@section('title', 'Connexion')

@section('content')
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <img src="/img/logo.png" alt="" class="rounded-circle">
                                    <span class="d-none d-lg-block">DarkServices</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Connectez-vous à votre Compte</h5>
                                        <p class="text-center small">Entrez Votre Username et le Password</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="yourUsername" placeholder="test@test.com" required>
                                                @error('email')
                                                    <div class="invalid-feedback">Please enter your username.</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Mot de Passe</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                                            @error('password')
                                                <div class="invalid-feedback">Please enter your password!</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rememberMe">Se Rappeller de Moi</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Se Connecter</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Pas de Compte? <a href="{{ route('register') }}">Créer Un Compte</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
