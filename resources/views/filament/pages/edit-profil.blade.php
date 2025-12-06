<x-filament-panels::page>
    <form wire:submit.prevent="simpan">
        {{ $this->form }}
        <br/>
        <x-filament::button type="submit" class="mt-4">
            Update Data
        </x-filament::button>
    </form>
</x-filament-panels::page>
