@props([
    'project'
])
<style>
    .swiper-pagination {
        display: flex;
        width: 90% !important;
        max-width: 1200px !important;
        background: rgba(255, 255, 255, 0.71);
        left: 50% !important;
        transform: translateX(-50%);
        bottom: 5% !important;
        border-radius: 10px !important;
    }
    .swiper-pagination-bullet {
        flex: 1;
        border-radius: 10px !important;
        background: white !important;
    }
    .swiper-button-disabled {
        opacity: 0.3;
    }
</style>
<section class="py-28 content md:py-12">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper  h-[90vh] max-h-[90vh]">
            <!-- Slides -->
            <img class="swiper-slide max-h-full" src="{{$project->getFirstMediaUrl('img_3')}}" alt="">
            <img class="swiper-slide max-h-full" src="{{$project->getFirstMediaUrl('img_3')}}" alt="">
            <img class="swiper-slide max-h-full" src="{{$project->getFirstMediaUrl('img_3')}}" alt="">
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <x-heroicon-o-chevron-left class="button-prev w-16 absolute top-1/2 left-0 -translate-y-1/2 transition hover:scale-110 z-20 cursor-pointer"/>
        <x-heroicon-o-chevron-right class="button-next w-16 absolute top-1/2 right-0 -translate-y-1/2 transition hover:scale-110 z-20 cursor-pointer"/>
{{--        <!-- If we need navigation buttons -->--}}
{{--        <div class="swiper-button-prev"></div>--}}
{{--        <div class="swiper-button-next"></div>--}}

    </div>
    @push('page-js')
        <script type="module">
            const swiper = new Swiper('.swiper', {
                slidesPerView: 1,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.button-next',
                    prevEl: '.button-prev',
                },
            });
        </script>
    @endpush
</section>
