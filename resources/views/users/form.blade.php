
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" autocomplete="off" value={{ old('name') ?? $user->name }}>
        @error('name') <p style="color: red">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" autocomplete="off" value={{ old('email') ?? $user->email }}>
        @error('email') <p style="color: red">{{ $message }}</p> @enderror
    </div>


@csrf