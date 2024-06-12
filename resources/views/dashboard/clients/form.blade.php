<form action="" method="post" class="mx-[-8px] my-6 flex flex-wrap gap-y-4">
    @csrf
    @isset($client)
        @method('PUT')
    @endif

    <x-molecules.inputs.text
        label="Nom:"
        name="name"
        class="w-full px-2 md:w-1/2"
        :value="isset($client) ? $client->name : old('name')"
        required="true"
        placeholder="Nom du client"
    />

    <x-molecules.inputs.text
        label="Adresse:"
        name="address"
        class="w-full px-2 md:w-1/2"
        :value="isset($client) ? $client->address : old('address')"
        required="true"
        placeholder="Adresse"
    />

    <x-molecules.inputs.text
        label="Site web:"
        name="website"
        class="w-full px-2"
        :value="isset($client) ? $client->website : old('website')"
        required="true"
        placeholder="https://"
    />

    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($client))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
