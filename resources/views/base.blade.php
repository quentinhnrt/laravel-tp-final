<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <x-templates.head
        title="{{ $title ?? 'No Title' }}"
        description="{{ $description ?? 'No description' }}"
        image="{{ $image ?? 'No image' }}"
    />
    <x-templates.body />
</html>
