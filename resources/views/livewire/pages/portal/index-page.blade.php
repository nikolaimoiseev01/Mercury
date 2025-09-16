<main class="flex-1">
    <section class="w-full h-screen relative flex items-center justify-center">
        <div class="absolute  w-full h-full welcomeSlider swiper z-10">
            <div class="swiper-wrapper">
                <img src="/fixed/welcome-bg.png" class="swiper-slide w-full h-full object-cover" alt="">
                <img src="/fixed/welcome-bg2.png" class="swiper-slide w-full h-full object-cover" alt="">
                <img src="/fixed/welcome-bg3.png" class="swiper-slide w-full h-full object-cover" alt="">
            </div>
        </div>

        @push('page-js')
            <script type="module">
                var swiper = new Swiper(".welcomeSlider", {
                    centeredSlides: true,
                    slidesPerView: 1,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                });
            </script>
        @endpush
        <div class="absolute content top-40 flex flex-col uppercase text-dark-300 z-20">
            <h1 class="bg-white px-8 py-2">проектные решения</h1>
            <h1 class="bg-white px-8 py-2">для жилой и коммерческой</h1>
            <h1 class="bg-white px-8 py-2">недвижимости</h1>
        </div>
        <div class="absolute content bottom-20 flex text-dark-300 z-20">
            <x-ui.link class="ml-auto md:mx-auto" @click="$dispatch('open-modal', 'app-modal')">ОСТАВИТЬ ЗАЯВКУ
            </x-ui.link>
        </div>

    </section>
    @php
        $icons = [
            '/fixed/icon-gazprom.png',
            '/fixed/icon-km.jpg',
            '/fixed/icon-afimol.jpg',
            '/fixed/icon-sts.png',
            '/fixed/icon-sodamoda.jpg',
            '/fixed/icon-h.png',
    ]
    @endphp

    <section class="flex gap-10 py-8 items-center justify-center md:flex-col content">
        <p class="text-xl">Клиенты</p>
        <div class="flex gap-10 flex-wrap items-center justify-center">
            @foreach($icons as $icon)
                <img src="{{$icon}}" class="h-10 w-auto" alt="">
            @endforeach
        </div>
    </section>

        <section class="bg-dark-400 py-28" id="services">
            @php
                $blocks = [
                    [
                    'title' => 'Дизайн',
                    'subtitle' => 'Строительство, отделочные работы и технадзор',
                    'text' => "<ul>
                        <li>Организация всех работ по проекту</li>
                        <li>Соблюдение графика работ и сроков</li>
                        <li>Гарантия на строительные работы</li>
                        <li>Фиксированная сметная стоимость</li>
                        <li>Своя команда инженеров и строителей</li>
                        </ul>"
                    ],
                    [
                    'title' => 'Ремонт',
                    'subtitle' => 'Строительство, отделочные работы и технадзор',
                    'text' => "<ul>
                        <li>Организация всех работ по проекту</li>
                        <li>Соблюдение графика работ и сроков</li>
                        <li>Гарантия на строительные работы</li>
                        <li>Фиксированная сметная стоимость</li>
                        <li>Своя команда инженеров и строителей</li>
                        </ul>"
                    ],
                    [
                    'title' => 'Генподряд',
                    'subtitle' => 'Строительство, отделочные работы и технадзор',
                    'text' => "<ul>
                        <li>Организация всех работ по проекту</li>
                        <li>Соблюдение графика работ и сроков</li>
                        <li>Гарантия на строительные работы</li>
                        <li>Фиксированная сметная стоимость</li>
                        <li>Своя команда инженеров и строителей</li>
                        </ul>"
                    ]
                ];

            @endphp
            <div class="content flex flex-col">
                <div
                    x-data="{ open: null }"
                    class="flex gap-28 mb-16 md:flex-col"
                >
                    <h2 class="text-bright-300">Услуги</h2>
                    <div class="flex flex-col flex-1">
                        @foreach($blocks as $key=>$block)
                            <div class="w-full border-b border-white py-11 first:pt-0 last:border-none">
                                <!-- Заголовок услуги -->
                                <div
                                    class="flex text-bright-300 cursor-pointer items-center group"
                                    @click="open === {{ $key }} ? open = null : open = {{ $key }}"
                                >
                                    <h2 class="text-4xl mr-52 md:mr-16">0{{$key+1}}</h2>
                                    <h2 class="text-4xl mr-16 after:content-[''] relative after:absolute after:w-full after:h-px after:bg-white after:bottom-0 after:left-0">{{$block['title']}}</h2>
                                    <div
                                        x-transition.opacity
                                        class="group-hover:rotate-90 transition-transform duration-300"
                                        x-show="open === {{ $key }}"
                                    >
                                        <x-bi-x-lg
                                            class="w-8 h-auto text-white"
                                        />
                                    </div>

                                </div>

                                <!-- Открывающийся блок -->
                                <div
                                    x-show="open === {{ $key }}"
                                    x-collapse
                                    class="bg-black text-bright-300 px-10 py-6 md:px-0"
                                >
                                    <h3 class="text-3xl mb-4">{{$block['subtitle'] ?? 'Подробнее'}}</h3>
                                    {!! $block['text'] !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <x-ui.link class="ml-auto md:mx-auto" @click="$dispatch('open-modal', 'app-modal')">ОСТАВИТЬ ЗАЯВКУ</x-ui.link>
            </div>
        </section>

        <livewire:components.project-blocks/>

        <section class="bg-dark-200 py-28 md:py-12">
            <div class="flex flex-col gap-10 content">
                <div class="flex gap-5">
                    <div class="flex flex-col w-1/2 md:w-full">
                        <div class="border-b border-white pb-12">
                            <a href=""
                               class="text-white text-3xl after:content-[''] relative after:absolute after:w-full after:h-px after:bg-white after:bottom-0 after:left-0">Агентство</a>
                        </div>
                        <div class="border-b border-white py-12">
                            <a href="{{route('portal.about')}}" wire:navigate
                               class="text-white text-3xl after:content-[''] relative after:absolute after:w-full after:h-px after:bg-white after:bottom-0 after:left-0">Почему мы</a>
                        </div>
                    </div>
                    <img src="/fixed/office-bg.png" class="md:hidden" alt="">
                </div>
                <x-ui.link class="ml-auto" @click="$dispatch('open-modal', 'app-modal')" class="md:hidden">ОСТАВИТЬ ЗАЯВКУ</x-ui.link>
            </div>

        </section>
</main>
