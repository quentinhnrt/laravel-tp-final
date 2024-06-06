<form action="" method="post" class="mx-[-8px] my-6 flex flex-wrap gap-y-4">
    @csrf
    @isset($client)
        @method("PUT")
    @endif

    <x-molecules.inputs.text
        label="Nom:"
        name="name"
        class="w-full px-2 md:w-1/2"
        :value="isset($client) ? $client->name : old('name')"
        required="true"
    />

    <x-molecules.inputs.text
        label="Address:"
        name="address"
        class="w-full px-2 md:w-1/2"
        :value="isset($client) ? $client->address : old('address')"
        required="true"
    />

    <x-molecules.inputs.text
        label="Website:"
        name="website"
        class="w-full px-2"
        :value="isset($client) ? $client->website : old('website')"
        required="true"
    />

    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($client))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
