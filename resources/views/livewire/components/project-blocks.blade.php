<section class="py-28 content flex gap-28 md:flex-col md:gap-12 md:py-12" id="projects">
    <div class="flex flex-col">
        <h2 class="mb-14 md:mb-8">Проекты</h2>
        <div class="flex flex-col gap-2 text-lg">
            <a @if($place != 'Рестораны')class="text-gray-400"@endif wire:click="makePlace('Рестораны')">Рестораны</a>
            <a @if($place != 'Дом')class="text-gray-400"@endif wire:click="makePlace('Дом')">Дом</a>
            <a @if($place != 'Офис')class="text-gray-400"@endif wire:click="makePlace('Офис')">Офис</a>
        </div>

    </div>
    <div class="flex flex-col gap-10 flex-1">
        <div class="grid grid-cols-2 gap-5 md:grid-cols-1">
            @foreach($projects as $project)
                <a wire:navigate href="{{route('portal.project', $project['slug'])}}" class="min-h-80 relative span-col-1 flex items-center justify-center group overflow-hidden">
                    <img src="{{$project->getFirstMediaUrl('cover')}}"
                         class="absolute top-0 left-0 w-full h-full object-cover transition group-hover:scale-110" alt="">
                    <h3 class="text-bright-400 text-xl font-medium uppercase relative">{{$project['type']}}</h3>
                </a>
            @endforeach
        </div>
        @if(count($projects) < $cnt_total)
            <a wire:click="loadMore" class="md:text-center">Показать больше</a>
        @endif
    </div>
</section>
