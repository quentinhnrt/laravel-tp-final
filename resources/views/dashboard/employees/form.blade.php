<form
    action="{{ $action }}"
    method="POST"
    class="mx-[-8px] my-6 flex flex-wrap gap-y-4"
>
    @csrf

    @if (isset($employee))
        @method('PUT')
    @endif

    @php
        $firstname = isset($employee) ? $employee->firstname : old('firstname');
        $lastname = isset($employee) ? $employee->lastname : old('lastname');
        $function = isset($employee) ? $employee->function : old('function');
    @endphp

    <x-molecules.inputs.text
        label="Prénom:"
        name="firstname"
        class="w-full px-2 md:w-1/2"
        :value="$firstname"
        required="true"
    />
    <x-molecules.inputs.text
        label="Nom:"
        name="lastname"
        class="w-full px-2 md:w-1/2"
        :value="$lastname"
        required="true"
    />
    <x-molecules.inputs.text
        label="Fonction:"
        name="function"
        class="w-full px-2"
        :value="$function"
        required="true"
    />
    <input
        type="hidden"
        name="role"
        value="{{ isset($employee) ? $employee->role : $role ?? App\Models\Employee::DEVELOPER_ROLE }}"
    />
    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($employee))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
