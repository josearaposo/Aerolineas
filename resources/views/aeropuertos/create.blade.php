<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('aeropuertos.store') }}">
            @csrf

            <!-- codigo -->
            <div>
                <x-input-label for="codigo" :value="'codigo de la compañia'" />
                <x-text-input id="codigo" class="block mt-1 w-full"
                    type="text" name="codigo" :value="old('codigo')" required
                    autofocus autocomplete="codigo" pattern="[A-Z]{3}"
                    title="El código de vuelo debe tener el formato 'XXX'"/>
                <x-input-error :messages="$errors->get('codigo')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('aeropuertos.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Insertar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
