

    <div class="form-group">
        <label for="client_id">Client Id</label>
        <input class="form-control" type="text" name="client_id" autocomplete="off" value={{ old('client_id') ?? $appointment->client_id }}>
        @error('client_id') <p style="color: red">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" type="text" name="date" autocomplete="off" value={{ old('date') ?? $appointment->date }}>
        @error('date') <p style="color: red">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
        <label for="userName">User</label>
        <select name="user_id" class="form-control">
            @foreach ($users as $user)
                <option value={{ old('id') ?? $user->id }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>


@csrf