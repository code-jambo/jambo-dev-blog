<div>
    {{-- @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">


            @if ($paginator->onFirstPage())
                <a class="nav-link-prev nav-item nav-link rounded-left" href="#">Previous<i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            @else
                <a class="nav-link-prev nav-item nav-link rounded-left" href="#">Previous<i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            @endif




            @if ($paginator->hasMorePages())
                <a class="nav-link-next nav-item nav-link rounded-right" wire:click="nextPage">Next<i
                        class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            @else
                <a class="nav-link-next nav-item nav-link rounded-right disabled" wire:click="nextPage">Next<i
                        class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            @endif

        </nav>
    @endif --}}

    @if ($paginator->hasPages())
        <nav class="blog-nav nav nav-justified my-5 pt-4">
            @if ($paginator->onFirstPage())
                {{-- <a class="nav-link-prev nav-item nav-link rounded-left" disabled href="#"> <i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i>Previous</a> --}}
            @else
                <a class="nav-link-prev nav-item nav-link rounded-left" disabled wire:click="previousPage"> <i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i>Previous</a>
            @endif
            <br>

            @if ($paginator->hasMorePages())
                <a class="nav-link-next nav-item nav-link rounded-right" wire:click="nextPage">next<i
                        class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            @endif
        </nav>
    @endif

</div>
