<footer class="bg-dark-400 py-28 md:py-12" id="footer">
    <div class="content flex flex-col gap-8 flex-wrap">
        <div class="flex content flex-wrap gap-16">
            <x-logo-white class="w-[320px] md:w-[258px] md:mb-16"/>
            <div class="flex !text-white text-lg mx-auto gap-20 flex-wrap md:gap-12">
                <div class="flex flex-col gap-6">
                    <p class="mb-2">Навигация</p>
                    <x-ui.link-simple>Услуги</x-ui.link-simple>
                    <x-ui.link-simple>Проекты</x-ui.link-simple>
                    <x-ui.link-simple>О нас</x-ui.link-simple>
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
        <x-Ui.link @click="$dispatch('open-modal', 'app-modal')" class="ml-auto md:hidden">ОСТАВИТЬ ЗАЯВКУ</x-Ui.link>
    </div>


</footer>
