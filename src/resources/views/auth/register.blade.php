@extends('layouts.app', ['title' => 'Register'])

@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
            </div>
            <form action="{{ route('register') }}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control item @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control item @error('password') is-invalid @enderror" type="password" id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Repeat your Password</label>
                    <input class="form-control item" type="password" id="password-confirm" name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control item @error('email') is-invalid @enderror>" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
            </form>
        </div>
    </section>
@endsection
