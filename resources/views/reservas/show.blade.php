<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Vuelo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Asiento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aeropuerto Salida
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Compañia
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Hora
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                            {{ $reserva->vuelo->codigo }}
                        </a>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                            {{ $reserva->asiento }}
                        </a>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                            {{ $reserva->vuelo->origen->codigo }}
                        </a>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                            {{ $reserva->vuelo->companya->nombre }}
                        </a>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                            {{ $reserva->vuelo->hora_salida}}
                        </a>
                    </th>

                </tr>

            </tbody>
        </table>
        <form action="{{ route('vuelos.index') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500 mb-2">Volver a vuelos</x-primary-button>
        </form>
    </div>
</x-app-layout>
