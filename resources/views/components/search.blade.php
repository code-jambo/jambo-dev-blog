<div class="text-end p-2">

    <input type="text" class="form-input" placeholder="{{ $pholder ?? 'Search ....' }}" wire:model.live="searchTerm"
        style="border-style: dotted;">

</div>
<style>
    .form-input:focus {
        border-style: dotted;
        outline: none;
        border-radius: 8px;

    }
</style>
