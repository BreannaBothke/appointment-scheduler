

    <div class="form-group">
        <label for="client_id">Client</label>
        <select name="client_id" class="form-control">
            @foreach ($clients as $client)
                <option value={{ old('id') ?? $client->id }}>{{ $client->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control date" type="text" placeholder="yyyy-MM-dd" name="date" autocomplete="off" value={{ old('date') ?? $appointment->date }}>
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