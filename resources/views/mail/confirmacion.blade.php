<p>Se ha confirmado el siguiente vuelo:</p>

<p>Fecha de Vuelo {{ $vuelo->fecha_salida }} </p>

<table>
    <thead>
        <th>Origen</th>
        <th>Destino</th>
        <th>Precio</th>
        <th>Compañia</th>
    </thead>
    <tbody>
            <tr>
                <td>{{ $vuelo->auro_origen }}</td>
                <td>{{ $vuelo->aero_destino }}</td>
                <td>{{ $vuelo->precio }}</td>
                <td>{{ $vuelo->companya_id }}</td>
            </tr>

    </tbody>
</table>
