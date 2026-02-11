<x-layout title="clients list" header="clients">

    <h1>Lista de clients</h1>

    <a href="{{ route('clients.create') }}">add</a>

    @if($clientslist->isEmpty())
        <p>No Client...</p>
    @else
    <table>
        <thead>
            <tr>
                <th>CPF</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientslist as $client)
                <tr>
                    <td>{{ $client->cpf }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}">Show</a>
                        <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</x-layout>