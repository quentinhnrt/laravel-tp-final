<form
    action="{{ isset($employee) ? route('administration.developers.update', $employee) : route('administration.developers.store') }}"
    method="POST"
>
    @csrf

    @if (isset($employee))
        @method('PUT')
    @endif

    <div>
        <label for="firstname">Nom:</label>
        <input
            type="text"
            name="firstname"
            id="firstname"
            value="{{ isset($employee) ? $employee->firstname : old('firstname') }}"
        />
        @error('firstname')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="lastname">Prénom:</label>
        <input
            type="text"
            name="lastname"
            id="lastname"
            value="{{ isset($employee) ? $employee->lastname : old('lastname') }}"
        />
        @error('lastname')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="function">Fonction:</label>
        <input
            type="text"
            name="function"
            id="function"
            value="{{ isset($employee) ? $employee->function : old('function') }}"
        />
        @error('function')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <input type="hidden" name="role" value="{{ App\Models\Employee::DEVELOPER_ROLE }}" />
    <button type="submit">Save</button>
</form>
