@include('layouts.header')

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Source --}}
        <div class="form-group">
            <x-input-label class="mb-1" for="source" :value="__('Leaving From')" />
            <div class="input-group mb-3">
                <select class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="source">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <!-- Destination -->
        <div class="form-group">
            <x-input-label class="mb-1" for="destination" :value="__('Travelling To')" />
            <div class="input-group mb-3">
                <select class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="destination">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        {{-- Departure --}}
        <div class="mt-4">
            <x-input-label for="travelling_On" :value="__('Travelling On')" />
            <x-text-input id="travelling_On" class="block mt-1 w-full" type="date" name="travelling_On" :value="old('travelling_On')" required autocomplete="travelling_On" />
            {{-- <x-input-error :messages="$errors->get('phone_number')" class="mt-2" /> --}}
        </div>

        {{-- Return --}}
        <div class="mt-4">
            <x-input-label for="returning_on" :value="__('Returning On')" />
            <x-text-input id="returning_on" class="block mt-1 w-full" type="date" name="returning_on" :value="old('returning_on')" required autocomplete="returning_on" />
            {{-- <x-input-error :messages="$errors->get('phone_number')" class="mt-2" /> --}}
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Search Available Buses') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@include('layouts.footer')