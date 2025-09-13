<main class="flex-1">
    <section class="w-full h-screen relative flex items-center justify-center">
        <img src="/fixed/welcome-bg.png" class="absolute w-full h-full object-cover" alt="">
        <div class="absolute content top-40 flex flex-col uppercase text-dark-300">
            <h1 class="bg-white px-8 py-2">проектные решения</h1>
            <h1 class="bg-white px-8 py-2">для жилой и коммерческой</h1>
            <h1 class="bg-white px-8 py-2">недвижимости</h1>
        </div>
        <div class="absolute content bottom-40 flex text-dark-300">
            <x-Ui.link class="ml-auto">ОСТАВИТЬ ЗАЯВКУ</x-Ui.link>
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
    <section class="flex gap-10 py-8 items-center justify-center">
        <p class="text-xl">Клиенты</p>
        @foreach($icons as $icon)
            <img src="{{$icon}}" class="h-10 w-auto" alt="">
        @endforeach
    </section>
    <section class="bg-dark-400 py-28">
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
                class="flex gap-28 mb-16"
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
                                <h2 class="text-4xl mr-52">0{{$key+1}}</h2>
                                <h2 class="text-4xl mr-16">{{$block['title']}}</h2>
                                <div
                                    x-transition.opacity
                                    class="group-hover:rotate-90 transition-transform duration-300"
                                    x-show="open === {{ $key }}"
                                    @click="open = null"
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
                                class="bg-black text-bright-300 px-10 py-6"
                            >
                                <h3 class="text-3xl mb-4">{{$block['subtitle'] ?? 'Подробнее'}}</h3>
                                {!! $block['text'] !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <x-Ui.link class="ml-auto">ОСТАВИТЬ ЗАЯВКУ</x-Ui.link>
        </div>
    </section>

<livewire:components.project-blocks/>
</main>
