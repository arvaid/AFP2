@extends('layouts.app')

@section('title')
    Reset password - Brand
@endsection

@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Reset Password</h2>
            </div>
            <form action="{{ route('password.update') }}" method="post">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input class="form-control item @error('password') is-invalid @enderror" type="password" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm New Password</label>
                    <input class="form-control item @error('password') is-invalid @enderror" type="password" id="password-confirm" name="password-confirm" required>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            </form>
        </div>
    </section>
@endsection
