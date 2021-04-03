@extends('layouts.app', ['title' => 'Reset password'])

@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Reset Password</h2>
            </div>
            <form action="{{ route('password.request') }}" method="post" novalidate>
                @csrf
                @if (session('status'))
                    <div class="form-group">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @else
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control item @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
                @endif
            </form>
        </div>
    </section>
@endsection
