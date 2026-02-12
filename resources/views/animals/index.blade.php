<x-layout title="Animals list" header="Animals">

    <h1>Lista de Animals</h1>

    <a href="{{ route('animals.create') }}">add</a>

    @if($animalslist->isEmpty())
        <p>No animal...</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Breed</th>
                <th>B-date</th>
                <th>Weight</th>
                <th>Gender</th>
                <th>Owner</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animalslist as $animal)
                <tr>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->breed }}</td>
                    <td>{{ $animal->b_date }}</td>
                    <td>{{ $animal->weight }} kg </td>
                    <td>{{ $animal->gender }}</td>
                    <td>{{ $animal->client->name ?? '---'}}</td>
                    <td>
                        <a href="{{ route('animals.show', $animal->id) }}">Show</a>
                        <a href="{{ route('animals.edit', $animal->id) }}">Edit</a>
                        <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
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