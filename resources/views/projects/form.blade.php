<form action="" method="post" class="vstack gap-2">
    @csrf
    @isset($client)
        @method('PUT')
    @endif
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" value="{{ isset($project) ? $project->name : old('name') }}">
        @error("name")
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" class="form-control" name="description" value="{{ isset($project) ? $project->description : old('description') }}">
        @error("description")
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="client">Client :</label>
        <input type="text" class="form-control" name="client" value="{{ isset($project) ? $project->client : old('client') }}">
        @error("client")
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="project_manager_id">Chef de projet :</label>
        <input type="text" class="form-control" name="project_manager_id" value="{{ isset($project) ? $project->project_manager_id : old('project_manager_id') }}">
        @error("project_manager_id")
            {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if(isset($project))
            Modifier
        @else
            Créer
        @endif
    </button>
</form>
