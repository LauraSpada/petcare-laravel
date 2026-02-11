<x-layout title="Clients list" header="Clients">

    <h1>Show Client {{ $client->name}}</h1>

    <a href="{{ route('clients.create') }}">add</a>

    <table>
        <thead>
            <tr>
                <th>CPF</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $client->cpf }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
</x-layout>