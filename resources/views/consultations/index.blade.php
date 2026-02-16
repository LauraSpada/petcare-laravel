<x-layout title="Consultations list" header="Consultations">

    <h1>Lista de Consultations</h1>

    <a href="{{ route('consultations.create') }}">add</a>

    @if($consultationslist->isEmpty())
        <p>No Consultation...</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Animal</th>
                <th>Vet</th>
                <th>Date</th>
                <th>Hour</th>
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consultationslist as $consultation)
                <tr>
                    <td>{{ $consultation->animal->name ?? '---' }}</td>
                    <td>{{ $consultation->vet->name ?? '---' }}</td>
                    <td>{{ $consultation->date }}</td>
                    <td>{{ $consultation->hour }}</td>
                    <td>{{ $consultation->reason }}</td>
                    <td>
                        <a href="{{ route('consultations.show', $consultation->id) }}">Show</a>
                        <a href="{{ route('consultations.edit', $consultation->id) }}">Edit</a>
                        <form action="{{ route('consultations.destroy', $consultation->id) }}" method="POST" style="display:inline;">
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