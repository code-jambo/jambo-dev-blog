<div class="item mb-5">
    <div class="row g-3 g-xl-0">
        <div class="col-2 col-xl-3">
            <img class="img-fluid post-thumb" src="{{ $pimage }}" alt="image">
        </div>
        <div class="col">
            <h3 class="title mb-1"><a wire:navigate class="text-link" href="{{ $plink }}">{{ $ptitle }}</a>
            </h3>
            <div class="meta mb-1"><span class="date">Published {{ $pdate }}</span>

            </div>
            <div class="intro">{{ $pcontent }}</div>
            <a class="text-link" wire:navigate href="{{ $plink }}">Read more &rarr;</a>
        </div><!--//col-->
    </div><!--//row-->
</div><!--//item-->
