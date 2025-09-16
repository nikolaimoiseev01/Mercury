<x-ui.modal name="app-modal" :show="false" maxWidth="lg">
    <form wire:submit="save()" class="flex flex-col">
        <h2 class="font-normal mb-8">Получите индивидуальное<br>предложение — расскажите о вашей задаче </h2>
        <div class="flex py-8 gap-10 font-light border-y border-bright-200 md:flex-col">
            <div class="flex flex-col gap-2">
                <p class="text-2xl mb-2">Тип объекта</p>
                <div class="flex gap-2 items-center">
                    <input wire:model="object_type" required value="Ресторан" type="radio" id="Ресторан"
                           name="object_type">
                    <label for="Ресторан">Ресторан</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="object_type" required value="Дом" type="radio" id="Дом" name="object_type">
                    <label for="Дом">Дом</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="object_type" required value="Офис" type="radio" id="Офис" name="object_type">
                    <label for="Офис">Офис</label>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <p class="text-2xl mb-2">Площадь</p>
                <div class="flex gap-2 items-center">
                    <input wire:model="area" required type="radio" id="50" value="50-99 м2" name="area">
                    <label for="50">50-99 м2</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="area" required type="radio" id="100" value="100-199 м2" name="area">
                    <label for="100">100-199 м2</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="area" required type="radio" id="200" value="200-499 м2" name="area">
                    <label for="200">200-499 м2</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="area" required type="radio" id="500" value="больше 500 м2" name="area">
                    <label for="500">больше 500 м2</label>
                </div>
            </div>


            <div class="flex flex-col gap-2 flex-1">
                <p class="text-2xl mb-2">Описание задачи</p>
                <textarea wire:model='description' required name="" id="" cols="30" rows="6"></textarea>
            </div>
        </div>
        <div class="flex py-8 gap-16 font-light md:flex-col">
            <div class="flex flex-col gap-2 ">
                <p class="text-2xl mb-2">Ваши контакты</p>
                <input wire:model="fio" required type="text" placeholder="Фамилия Имя Отчество*">
                <input wire:model="telephone" required type="text" placeholder="Телефон*">
                <input wire:model="email" required type="text" placeholder="Email*">
            </div>
            <div class="flex flex-col gap-2 ">
                <p class="text-2xl mb-2">Как с вами связаться</p>
                <div class="flex gap-2 items-center">
                    <input wire:model="contact_type" required type="radio" id="Позвонить" value="Позвонить"
                           name="contact_type">
                    <label for="Позвонить">Позвонить</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="contact_type" required type="radio" id="mes" value="В мессенджере"
                           name="contact_type">
                    <label for="mes">В мессенджере</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input wire:model="contact_type" required type="radio" id="post" value="По почте"
                           name="contact_type">
                    <label for="post">По почте</label>
                </div>
            </div>
        </div>
        <div class="flex gap-2 items-center py-4 mb-4">
            <input required type="radio" id="confirm" value="confirm" name="confirm">
            <label for="confirm">Я согласен с правилами отработки персональных данных</label>
        </div>
        @if(!$sent)
            <button type="submit"
                    class="py-5 px-16 bg-dark-400 text-white text-lg font-semibold transition hover:bg-white hover:text-dark-400 cursor-pointer w-fit md:mx-auto">
                ОСТАВИТЬ ЗАЯВКУ
            </button>
        @else
            <p class="py-5 px-16 bg-dark-400 text-white text-lg font-semibold w-fit">ОТПРАВЛЕНО!</p>
        @endif
    </form>
</x-ui.modal>
