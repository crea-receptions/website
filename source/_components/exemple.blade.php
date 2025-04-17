@props(['title1', 'title2', 'title_image', 'image01', 'image02', 'image03', 'image04', 'image05', 'image06', 'image07', 'image08', 'image09', 'image10', 'image11', 'image12'])

<div class="relative bg-gray-800 py-8 md:py-12 mt-8">
    <div class="container mx-auto px-12">
        <!-- Title Image Section -->
        <div class="relative mx-auto w-full h-244 sm:h-264 md:h-300 lg:h-324 xl:h-349 overflow-hidden mb-8 md:mb-12"> {{-- Added margin-bottom --}}
            <div class="relative z-0 text-anis">
                <div class="w-full overflow-hidden h-698 grid justify-center">
                    <img class="min-h-349 max-w-none lg:min-w-full" src="{{ $title_image }}" alt="">
                </div>
            </div>
        </div>

        <!-- Green Overlapping Square -->
        <div
            class="absolute z-10 green-bloc3 w-200 h-200 left-0 top-95px sm:top-112px md:top-170px lg:top-195px xl:top-222px pt-10px">
            <div class="relative mx-auto text-3xl text-center text-white w-213 h-201 green-title pt-55px">
                <p class="m-0 font-sans">{!! $title1 !!}</p>
                <p class="mt-0 font-script">{!! $title2 !!}</p>
                {{-- Optional line, adjust positioning if needed --}}
                <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -right-30px"></div>
            </div>
        </div>

        <!-- Image Grid Section -->
        <div class="grid grid-cols-1 grid-rows-10 sm:grid-cols-2 sm:grid-rows-5 lg:grid-cols-3 lg:grid-rows-4 xl:grid-cols-4 xl:grid-rows-3 gap-2 md:gap-4">
            @foreach ([$image01, $image02, $image03, $image04, $image05, $image06, $image07, $image08, $image09, $image10, $image11, $image12] as $image)
                @if ($image)
                    <div>
                        <img src="{{ $image }}" alt="Exemple image" class="w-full h-auto object-cover aspect-square">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
