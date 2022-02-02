<x-app-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>

    <div class="row">
        <div class="col-md-9">
            @livewire('image-tables', ['link' => 'client/images/bg'])
        </div>
    </div>
</x-app-layout>
