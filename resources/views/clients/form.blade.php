

  
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" autocomplete="off" value={{ old('name') ?? $client->name }}>
        @error('name') <p style="color: red">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" autocomplete="off" value={{ old('email') ?? $client->email }}>
        @error('email') <p style="color: red">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
        <label for="birthdate">DOB</label>
        <input class="form-control" type="text" name="birthdate" autocomplete="off" value={{ old('birthdate') ?? $client->birthdate }}>
        @error('birthdate') <p style="color: red">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input class="form-control" type="text" name="phoneNumber" autocomplete="off" value={{ old('phoneNumber') ?? $client->phoneNumber }}>
        @error('phoneNumber') <p style="color: red">{{ $message }}</p> @enderror
    </div>


@csrf