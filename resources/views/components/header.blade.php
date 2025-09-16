<header
    x-data="{ isHome: window.location.pathname === '/' }"
    :class="isHome ?
        'absolute top-0 left-0'
        :'relative'"
    class="bg-white py-6 fixed w-full z-40 flex items-center">
    <div  x-data="{ open: false }" class="content flex justify-between items-center">
        <x-logo class="w-[211px] md:w-[180px]"/>
        @php
            $links = [
                [
                    'text' => 'УСЛУГИ',
                    'link' => '/#services'
                 ],
                                    [
                    'text' => 'ПРОЕКТЫ',
                    'link' => '/#projects'
                 ],
                                    [
                    'text' => 'О НАС',
                    'link' => route('portal.about')
                 ],
                                    [
                    'text' => 'КОНТАКТЫ',
                    'link' => '/#footer'
                 ]
             ]
        @endphp
        <div class="flex gap-16 font-light md:hidden">
            @foreach($links as $link)
                <a href="{{$link['link']}}" class="relative inline-block w-fit
          after:content-[''] after:block after:absolute after:left-0 after:bottom-0
          after:h-[1px] after:w-full after:bg-current after:scale-x-0 after:origin-left
          after:transition-transform after:duration-300 hover:after:scale-x-100">{{$link['text']}}</a>
            @endforeach
        </div>
        <p class="md:hidden">8 495 666 66 66</p>
        <x-heroicon-o-bars-3 @click="open = true" class="hidden md:block w-8"/>
        <!-- Само меню -->
        <div
            x-show="open"
            x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="fixed inset-y-0 left-0 w-full bg-white z-50 flex flex-col p-6"
        >
            <!-- Кнопка закрытия -->
            <button @click="open = false" class="self-end mb-4 text-gray-600 hover:text-black">
                ✕
            </button>

            <!-- Пункты меню -->
            <nav class="flex flex-col gap-6 text-2xl font-semibold items-center justify-center my-auto">
                @foreach($links as $link)
                    <a href="{{$link['link']}}" @click="open = false">{{$link['text']}}</a>
                @endforeach
            </nav>
        </div>
    </div>
</header>
