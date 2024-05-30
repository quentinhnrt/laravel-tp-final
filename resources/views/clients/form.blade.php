<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        @error("name")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address :</label>
        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
        @error("address")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="website">Website :</label>
        <input type="website" class="form-control" name="website" value="{{ old('website') }}">
        @error("website")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="projectlist">Project list :</label>
        <textarea name="projectlist" class="form-control">{{ old('projectlist') }}</textarea>
        @error("projectlist")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">Créer</button>
</form>
