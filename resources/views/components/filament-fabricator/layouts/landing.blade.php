@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    {{-- Header Here --}}
    <header class="sticky top-0 bg-white shadow">
        <div class="container flex flex-col sm:flex-row justify-between items-center mx-auto py-4 px-8">
            <div class="flex items-center text-2xl">
                <div class="w-12 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#BEE3F8" d="M44,7L4,23l40,16l-7-16L44,7z M36,23H17l18-7l1,6V23z"></path>
                        <path fill="#3182CE"
                            d="M40.212,10.669l-5.044,11.529L34.817,23l0.351,0.802l5.044,11.529L9.385,23L40.212,10.669 M44,7L4,23 l40,16l-7-16L44,7L44,7z">
                        </path>
                        <path fill="#3182CE"
                            d="M36,22l-1-6l-18,7l17,7l-2-5l-8-2h12V22z M27.661,21l5.771-2.244L33.806,21H27.661z">
                        </path>
                    </svg>
                </div>Lander
            </div>
            <div class="flex mt-4 sm:mt-0">
                <a class="px-4" href="#features">Features</a>
                <a class="px-4" href="#services">Services</a>
                <a class="px-4" href="#stats">Stats</a>
                <a class="px-4" href="#testimonials">Testimonials</a>
            </div>
            <div class="hidden md:block">
                <button type="button"
                    class=" py-3 px-8 text-sm bg-teal-500 hover:bg-teal-600 rounded text-white ">Start Free
                    Trial
                </button>
            </div>
        </div>
    </header>

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

    {{-- Footer Here --}}
    <footer class="container mx-auto py-16 px-3 mt-48 mb-8 text-gray-800">
        <div class="flex -mx-3">
            <div class="flex-1 px-3">
                <h2 class="text-lg font-semibold">About Us</h2>
                <p class="mt-5">Ridiculus mus mauris vitae ultricies leo integer malesuada nunc.
                </p>
            </div>
            <div class="flex-1 px-3">
                <h2 class="text-lg font-semibold">Important Links</h2>
                <ul class="mt-4 leading-loose">
                    <li><a href="https://codebushi.com">Terms &amp; Conditions</a></li>
                    <li><a href="https://codebushi.com">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="flex-1 px-3">
                <h2 class="text-lg font-semibold">Social Media</h2>
                <ul class="mt-4 leading-loose">
                    <li><a href="https://dev.to/changoman">Dev.to</a></li>
                    <li><a href="https://twitter.com/HuntaroSan">Twitter</a></li>
                    <li><a href="https://github.com/codebushi/gatsby-starter-lander">GitHub</a></li>
                </ul>
            </div>
        </div>
    </footer>
</x-filament-fabricator::layouts.base>
