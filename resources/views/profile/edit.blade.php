<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
    </div>

    <div>
        <label for="password">New Password</label>
        <input id="new_password" type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Update Profile</button>
    </div>
</form>
