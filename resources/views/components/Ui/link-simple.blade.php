<a href="/"
   wire:navigate
    {{ $attributes->merge(['class' =>
     'relative inline-block w-fit
      after:content-[\'\'] after:absolute after:left-0 after:bottom-0 after:right-0
      after:h-[1px] after:bg-current after:scale-x-0 after:origin-left
      after:transition-transform after:duration-300 hover:after:scale-x-100'
    ]) }}>
    {{ $slot }}
</a>
