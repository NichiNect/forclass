@if (isset($user))
    <div class="form-group">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Fill the username.." readonly value="{{ $user->username }}">
        @error('username')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label">Role</label>
        <div class="selectgroup w-100">
            <label class="selectgroup-item">
                <input type="radio" name="role" value="admin" class="selectgroup-input" @if($user->role == 'admin') ? checked : '' @endif>
                <span class="selectgroup-button">Admin</span>
            </label>
            <label class="selectgroup-item">
                <input type="radio" name="role" value="operator" class="selectgroup-input" @if($user->role == 'operator') ? checked : '' @endif>
                <span class="selectgroup-button">Operator</span>
            </label>
            <label class="selectgroup-item">
                <input type="radio" name="role" value="student" class="selectgroup-input" @if($user->role == 'student') ? checked : '' @endif>
                <span class="selectgroup-button">Student</span>
            </label>
        </div>
        @error('role')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Fill the name.." value="{{ $user->name }}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Fill the email.." value="{{ $user->email }}">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Fill the password..">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="form-label">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Fill the password confirmation..">
        @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@else
    <div class="form-group">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Fill the username..">
        @error('username')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Fill the name..">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Fill the email..">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Fill the password..">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="form-label">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Fill the password confirmation..">
        @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif