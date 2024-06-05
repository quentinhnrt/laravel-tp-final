<form action="" method="POST" class="mx-[-8px] my-6 flex flex-wrap gap-y-4">
    @csrf

    @if (isset($client))
        @method('PUT')
    @endif

    @php
        $name = isset($client) ? $client->name : old('name');
        $website = isset($client) ? $client->website : old('website');
        $address = isset($client) ? $client->address : old('address');
        $projectlist = isset($client) ? $client->projectlist : old('projectlist');
    @endphp

    <x-molecules.inputs.text
        label="Nom:"
        name="name"
        class="w-full px-2 md:w-1/2"
        :value="$name"
        required="true"
    />
    <x-molecules.inputs.text
        label="Site web:"
        name="website"
        class="w-full px-2 md:w-1/2"
        :value="$website"
        required="true"
    />
    <x-molecules.inputs.textarea
        label="Adresse:"
        name="description"
        class="w-full px-2"
        :value="$address"
        required="true"
    />
    <x-molecules.inputs.text
        label="liste de projets:"
        name="projectlist"
        class="w-full px-2"
        :value="$projectlist"
        required="true"
    />
    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($project))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
