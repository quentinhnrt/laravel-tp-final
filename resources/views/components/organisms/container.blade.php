@props(['class' => ''])

<section
    @class(['section flex bg-white md:items-center dark:bg-background-900', $class])
>
    <div class="container mx-auto h-fit px-6 py-12 text-center">
        {{ $slot }}
    </div>
</section>
