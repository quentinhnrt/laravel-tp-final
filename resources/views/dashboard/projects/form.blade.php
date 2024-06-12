<form action="" method="post" class="mx-[-8px] my-6 flex flex-wrap gap-y-4">
    @csrf
    @isset($project)
        @method('PUT')
    @endif

    <x-molecules.inputs.text
        label="Nom:"
        name="name"
        class="w-full px-2 md:w-1/2"
        :value="isset($project) ? $project->name : old('name')"
        required="true"
        placeholder="Nom du projet"
    />

    <x-molecules.inputs.text
        label="Description:"
        name="description"
        class="w-full px-2 md:w-1/2"
        :value="isset($project) ? $project->description : old('description')"
        required="true"
        placeholder="Description du projet"
    />

    <x-molecules.inputs.select
        label="Client:"
        name="client_id"
        class="w-full px-2 md:w-1/2"
    >
        <option value="">Choisir un client</option>
        @foreach ($clients as $client)
            <option
                value="{{ $client->id }}"
                @if (isset($project) && $project->client_id == $client->id) selected @endif
            >
                {{ $client->name }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-molecules.inputs.select
        label="Chef de projet:"
        name="project_manager_id"
        class="w-full px-2 md:w-1/2"
    >
        <option value="">Choisir un chef de projet</option>
        @foreach ($projectManagers as $projectManager)
            <option
                value="{{ $projectManager->id }}"
                @if (isset($project) && $project->project_manager_id == $projectManager->id) selected @endif
            >
                {{ $projectManager->firstname }}
                {{ $projectManager->lastname }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($project))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
