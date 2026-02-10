<x-layout title="Vets list" header="Vets">

    <h1>Show vet {{ $vet->name}}</h1>

    <a href="{{ route('vets.create') }}">add</a>

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
                <tr>
                    <td>{{ $vet->crmv }}</td>
                    <td>{{ $vet->name }}</td>
                    <td>{{ $vet->salary }}</td>
                    <td>{{ $vet->adm_date }}</td>
                    <td>
                        <a href="{{ route('vets.edit', $vet->id) }}">Edit</a>
                        <form action="{{ route('vets.destroy', $vet) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-name="{{$vet->crmv}}">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
</x-layout>