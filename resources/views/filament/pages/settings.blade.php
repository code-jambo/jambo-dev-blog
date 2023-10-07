<x-filament-panels::page>

    <form wire:submit.prevent="save" class="space-y-6">
        <div class="text-right">
            <x-filament::button type="submit" form="submit" class="align-right">
                Save Changes
            </x-filament::button>
        </div>
    </form>
    {{ $this->form }}

</x-filament-panels::page>
