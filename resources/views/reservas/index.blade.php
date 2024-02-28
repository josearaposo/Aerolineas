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
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                                {{$reserva->vuelo->codigo }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a class="text-blue-500 blue" href="{{ route('reservas.show', $reserva) }}">
                                {{$reserva->asiento }}
                            </a>
                        </th>


                        <td class="px-6 py-4">
                            <form action="{{ route('reservas.destroy', ['reserva' => $reserva]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="bg-red-500">
                                    Anular
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('vuelos.index') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500 mb-2">Volver a vuelos</x-primary-button>
        </form>
    </div>
</x-app-layout>
