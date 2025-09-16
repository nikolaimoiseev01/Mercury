<footer class="bg-dark-400 py-28 md:py-12" id="footer">
    <div class="content flex flex-col gap-8 flex-wrap">
        <div class="flex content flex-wrap gap-16">
            <x-logo-white class="w-[320px] md:w-[258px] md:mb-16"/>
            <div class="flex !text-white text-lg mx-auto gap-20 flex-wrap md:gap-12">
                <div class="flex flex-col gap-6">
                    <p class="mb-2">Навигация</p>
                    @php
                        $links = [
                            [
                                'text' => 'Услуги',
                                'link' => '/#services'
                             ],
                                                [
                                'text' => 'Проекты',
                                'link' => '/#projects'
                             ],
                                                [
                                'text' => 'О нас',
                                'link' => route('portal.about')
                             ]
                         ]
                    @endphp
                    @foreach($links as $link)
                        <a href="{{$link['link']}}" class="relative inline-block w-fit
          after:content-[''] after:block after:absolute after:left-0 after:bottom-0
          after:h-[1px] after:w-full after:bg-current after:scale-x-0 after:origin-left
          after:transition-transform after:duration-300 hover:after:scale-x-100">{{$link['text']}}</a>
                    @endforeach
                </div>
                <div class="flex flex-col gap-6">
                    <p class="mb-2">Контакты</p>
                    <x-ui.link-simple>+7 495 666 66 66</x-ui.link-simple>
                    <x-ui.link-simple>mail@mercury.ru</x-ui.link-simple>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="mb-2">Соцсети</p>
                    <x-ui.link-simple>VK</x-ui.link-simple>
                    <x-ui.link-simple>Telegram</x-ui.link-simple>
                </div>
            </div>
        </div>
        <x-ui.link @click="$dispatch('open-modal', 'app-modal')" class="ml-auto md:hidden">ОСТАВИТЬ ЗАЯВКУ</x-ui.link>
    </div>


</footer>
