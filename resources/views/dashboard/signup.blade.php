@extends('layouts.dashboard_layout')

@section('title', 'Inscription')

@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <img src="/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">DarkServices</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Creer Un Compte DarkServices</h5>
                                        <p class="text-center small">Entrez Vos Informations Personnelles Pour créer Un Compte</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="post" action="{{ route('register') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Votre Nom</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="yourName" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Votre Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  autocomplete="email" id="yourEmail" required>
                                            @error('email')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"  value="{{ old('username') }}"  autocomplete="username" id="yourUsername" required>
                                                @error('username')
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Mot de Passe</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            @error('password')
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Confirmer le Mot de Passe</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="password-confirmation"  required>
                                            @error('password')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">Je suis d'accord et j'accepte les <a href="#">termes et conditions</a></label>
                                                @error('terms')
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Créer Compte</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Compte Existant? <a href="{{ route('login') }}">Se Connecter</a></p>
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
