@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/edit-profile.js') }}"></script>
@endpush
@section('content')
    <?php
        use App\Models\User;
        /** @var User $user */
    ?>
    <section class="page container-fluid">
        <div class="d-block" id="profile-static">
            Username: {{ $user->username }}
            Email: {{ $user->email }}
            Score: {{ $user->score }}
            Rank: {{ $user->rank }}
            Questions count: {{ $user->questions()->count() }}
            Answer count: {{ $user->answers()->count() }}
        </div>
        <div>
            <button class="btn btn-warning" id="edit_profile_btn" onclick="editProfile()">Edit Profile</button>
            <button class="btn btn-danger d-none" id="cancel_edit_profile_btn" onclick="cancelEditProfile()">Cancel Edit</button>
        </div>
        <div class="d-none" id="profile-edit">
            <form method="post" action="{{ route('user.update', [$user]) }}">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" />
                </div>

                <div class="form-group">
                    <label for="new_password">New Password:</label>
                    <input type="password" class="form-control" name="new_password" id="new_password" />
                    <label for="new_password_confirmation">New Password Confirmation:</label>
                    <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" />
                </div>

                <div class="form-group">
                    <label for="current_password">Current Password:</label>
                    <input type="password" class="form-control" name="current_password" id="current_password" required />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </section>
@endsection
