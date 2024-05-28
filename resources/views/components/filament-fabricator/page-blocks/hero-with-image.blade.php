@aware(['page'])

<section class="pt-20 md:pt-40">
    <div class="container mx-auto px-8 lg:flex">
        <div class="text-center lg:text-left lg:w-1/2">
            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none">{{ $title }}</h1>
            <p class="text-xl lg:text-2xl mt-6 font-light">{{ $shortDescription }}</p>
            <p class="mt-8 md:mt-12">
                <button type="button" class=" py-4 px-12 bg-teal-500 hover:bg-teal-600 rounded text-white">{{ $buttonText }}</button>
            </p>
            <p class="mt-4 text-gray-600">Sed fermentum felis ut cursu</p>
        </div>

        <div class="lg:w-1/2">
            <img src="{{ asset('storage/' . $image ) }}" alt="{{ $altImage }}" />
        </div>
    </div>
</section>
