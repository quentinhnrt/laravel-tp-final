<form action="" method="post" class="vstack gap-2">
    @csrf
    @isset($client)
        @method('PUT')
    @endif
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" value="{{ isset($client) ? $client->name : old('name') }}">
        @error("name")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address :</label>
        <input type="text" class="form-control" name="address" value="{{ isset($client) ? $client->address : old('address') }}">
        @error("address")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="website">Website :</label>
        <input type="website" class="form-control" name="website" value="{{ isset($client) ? $client->website : old('website') }}">
        @error("website")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="projectlist">Project list :</label>
        <textarea name="projectlist" class="form-control">{{ isset($client) ? $client->projectlist : old('projectlist') }}</textarea>
        @error("projectlist")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if(isset($client))
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
