

    <div class="form-group">
        <label for="client_id">Client</label>
        <select name="client_id" class="form-control">
            @foreach ($clients as $client)
                @if ($client->id == $appointment->client_id)
                <option selected value={{ old('id') ?? $client->id }}>{{ $client->name }}</option>
                @else
                <option value={{ old('id') ?? $client->id }}>{{ $client->name }}</option>
                @endif
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
                @if ($user->id == $appointment->user_id)
                <option selected value={{ old('id') ?? $user->id }}>{{ $user->name }}</option>
                @else
                <option value={{ old('id') ?? $user->id }}>{{ $user->name }}</option>
                @endif
            @endforeach
        </select>
    </div>


@csrf