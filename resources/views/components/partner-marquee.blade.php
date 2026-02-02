@php
    $icons = [
        '/fixed/icon-gazprom.png',
        '/fixed/icon-km.jpg',
        '/fixed/icon-afimol.jpg',
        '/fixed/icon-sts.png',
        '/fixed/icon-sodamoda.jpg',
        '/fixed/icon-h.png',
    ];
@endphp

<section class="py-8 overflow-hidden bg-white">
    <div class="overflow-hidden relative w-full">
        <div class="flex animate-marquee gap-10">
            {{-- Дублируем, чтобы было «кольцо» --}}
            @foreach(array_merge($icons, $icons, $icons) as $icon)
                <img src="{{ $icon }}" class="h-10 w-auto flex-shrink-0" alt="">
            @endforeach
        </div>
    </div>
</section>

<style>
    @keyframes marquee {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .animate-marquee {
        display: flex;
        width: max-content;
        animation: marquee 25s linear infinite;
    }
</style>
