@props(['class' => ''])

<section @class(['section flex bg-white dark:bg-background-900', $class])>
    <div class="container mx-auto h-fit px-6 py-12">
        {{ $slot }}
    </div>
</section>
