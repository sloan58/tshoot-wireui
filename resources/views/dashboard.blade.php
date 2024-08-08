<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex-col space-y-5">
                <div class="">
                    <x-button href="{{ route('dashboard-2') }}" label="Dashboard 2" teal />
                    <x-button wire:navigate href="{{ route('dashboard-2') }}" label="Dashboard 2 (wire:navigate)" teal />
                </div>


                <h1 class="text-xl">Breaks on initial layout load and with wire:navigate:</h1>

                <x-select
                    label="Select Status"
                    placeholder="Select one status"
                    :options="['Active', 'Pending', 'Stuck', 'Done']"
                />

                <x-time-picker
                    id="am-pm-time"
                    wire:model.live="model1"
                    label="AM/PM"
                    placeholder="12:00 AM"
                />
            </div>

        </div>
    </div>
</x-app-layout>
