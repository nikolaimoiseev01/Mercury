<a wire:navigate {{ $attributes->merge(['class' =>
     'py-5 px-16 bg-dark-400 text-white text-lg text-center font-semibold transition hover:bg-white hover:text-dark-400 cursor-pointer w-fit'
    ]) }}>
    {{$slot}}
</a>
