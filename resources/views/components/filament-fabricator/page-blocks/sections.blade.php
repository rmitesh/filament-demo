@aware(['page'])

<section id="services" class="py-20">

    <div @class([
        'container mx-auto px-16 items-center flex flex-col',
        'lg:flex-row' => $align == \App\Enums\Align::Left->value,
        'lg:flex-row-reverse' => $align == \App\Enums\Align::Right->value,
    ])>
        <div class="lg:w-1/2">
            <div @class([
                'lg:pr-32 xl:pr-48' => $align == \App\Enums\Align::Left->value,
                'lg:pl-32 xl:pl-48' => $align == \App\Enums\Align::Right->value,
            ])>
                <h3 class="text-3xl font-semibold leading-tight">{{ $heading }}</h3>
                <p class="mt-8 text-xl font-light leading-relaxed">{{ $content }}</p>
            </div>
        </div>

        <div class="mt-10 lg:mt-0 w-full lg:w-1/2 undefined">
            <img src="{{ asset('storage/' . $image ) }}" alt="{{ $altImage }}" />
        </div>
    </div>
</section>
