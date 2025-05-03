<x-filament::widget>
    <x-filament::card class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white shadow-xl">


        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <x-filament::avatar src="{{ asset('images/logo.svg') }}" alt="Avatar" :circular="false" />
                <div>
                    <h2 class="text-xl font-semibold">Hi, {{ $userName }}</h2>
                    <p style="margin-top: 3px">Welcome to <span class="font-semibold">{{ $appName }}</span> for
                        connecting every
                        feature you need in super duper your application.</p>
                </div>
            </div>

            <form method="POST" action="{{ filament()->getLogoutUrl() }}">
                @csrf
                <x-filament::button color="danger" outlined="true" type="submit"
                    icon="heroicon-o-arrow-right-on-rectangle">
                    Sign Out
                </x-filament::button>
            </form>

        </div>
    </x-filament::card>
</x-filament::widget>
