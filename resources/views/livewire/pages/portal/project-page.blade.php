<main class="flex-1">
    <section class="py-24 bg-bright-300 md:py-12">
        <div class="content flex gap-32 md:gap-16 md:flex-col">
            <div class="w-1/3 lg:w-auto flex md:w-[90%]">
                <img src="{{$project->getFirstMediaUrl('img_1')}}" class="max-w-md h-full mx-auto object-none md:w-full" alt="">
            </div>

            <div class="flex flex-col gap-10 flex-1 py-6 sm:text-center">
                <h1 class="text-4xl font-normal uppercase leading-relaxed md:text-center md:mx-auto">Название<br>проекта<br>{{$project['name']}}
                </h1>
                <div class="flex gap-52 flex-wrap md:gap-8 md:justify-center">
                    <div class="flex flex-col">
                        <p class="text-3xl mb-6">Проделанные<br></b> работы</p>
                        <p class="text-dark-200">{!! $project['works'] !!}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-3xl mb-6">Стиль</p>
                        <p class="text-dark-200">{!! $project['style'] !!}</p>
                    </div>
                </div>
                <div class="w-full h-px bg-dark-400"></div>
                <div class="flex gap-52 flex-wrap md:gap-8 md:justify-center">
                    <div class="flex flex-col">
                        <p class="text-3xl mb-6">Уникальность</p>
                        <p class="text-dark-200">{!! $project['unique'] !!}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-3xl mb-6">Площадь</p>
                        <p class="text-dark-200">{!! $project['area'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 md:py-12">
        <div class="content flex gap-8 md:flex-col">
            <div class="flex flex-col">
                <h3 class="text-3xl mb-6">{!! $project['subtitle'] !!}</h3>
                <p class="text-dark-200 max-w-[780px]">{!! $project['desc'] !!}</p>
            </div>
            <div class="ml-auto flex md:mx-auto md:w-[90%]">
                <img src="{{$project->getFirstMediaUrl('img_2')}}" class="max-w-md h-full mx-auto object-none md:w-full" alt="">
            </div>
        </div>
    </section>

    <x-project-slider :project="$project"/>

    <section class="flex items-center mb-24 content">
        <x-ui.link class="ml-auto text-center" @click="$dispatch('open-modal', 'app-modal')">ОСТАВИТЬ ЗАЯВКУ</x-ui.link>
    </section>

</main>
