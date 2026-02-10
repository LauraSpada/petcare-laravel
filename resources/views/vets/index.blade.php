<x-layout title="Vets list" header="Vets">

    <h1>Lista de vets</h1>

    <a href="{{ route('vets.create') }}">add</a>

    @if($vetslist->isEmpty())
        <p>No Vet...</p>
    @else
    <table>
        <thead>
            <tr>
                <th>CRMV</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Admdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vetslist as $vet)
                <tr>
                    <td>{{ $vet->crmv }}</td>
                    <td>{{ $vet->name }}</td>
                    <td>{{ $vet->salary }}</td>
                    <td>{{ $vet->adm_date }}</td>
                    <td>
                        <a href="{{ route('vets.show', $vet->id) }}">Show</a>
                        <a href="{{ route('vets.edit', $vet->id) }}">Edit</a>
                        <form action="{{ route('vets.destroy', $vet->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja realmente excluir?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</x-layout>