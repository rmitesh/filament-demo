@aware(['page'])

<section id="features" class="py-20 lg:pb-40 lg:pt-48">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl lg:text-5xl font-semibold">{{ $heading }}</h2>
        
        <div class="flex flex-col sm:flex-row sm:-mx-3 mt-12">
            @foreach ($cards as $card)
                <div class="flex-1 px-3">
                    <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                        style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                        <p class="font-semibold text-xl">{{ $card['title'] }}</p>
                        <p class="mt-4">{{ $card['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
