<x-layout title="Animals list" header="Animals">

    <h1>Show Animal {{ $animal->name }}</h1>

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
                <tr>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->breed }}</td>
                    <td>{{ $animal->b_date }}</td>
                    <td>{{ $animal->weight }} kg </td>
                    <td>{{ $animal->gender }}</td>
                    <td>{{ $animal->client->name ?? '---'}}</td>
                    <td>
                        <a href="{{ route('animals.edit', $animal->id) }}">Edit</a>
                        <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>

    @if ($animal->consultations->count())
        <ul>
            @foreach ($animal->consultations as $c)
                <li>
                    <p><strong>Date:</strong> {{ $c->date }}</p>
                    <p><strong>Hour:</strong> {{ $c->hour }}</p>
                    <p><strong>Reason:</strong> {{ $c->reason }}</p>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('consultations.show', $animal->id) }}">See c</a>
    @else
        <p>Este animal ainda não possui consultas.</p>
    @endif
</x-layout>