<x-layout title="Vets list" header="Vets">

    <h1>Update Vet {{ $vet->name}}</h1>

        <form action="{{ route('vets.update', $vet) }}" method="POST">
            @csrf
            @method('PUT')
        <div>
          <div>
            <label for="crmv">CRMV</label><br>
            <input type="text" name="crmv" value="{{ old('crmv', $vet->crmv) }}" readonly>
          </div>

          <div>
          <label for="name">Name</label><br>
          <input type="text" name="name" value="{{ old('name', $vet->name) }}" readonly>
          </div>

          <div>
            <label for="adm_date">Admission Date</label><br>
            <input type="date" name="adm_date" value="{{ old('adm_date', $vet->adm_date) }}" readonly>
          </div>

          <div>
            <label for="salary">Salary</label><br>
            <input type="number" name="salary" value="{{ old('salary', $vet->salary) }}" required>
          </div>
        </div>

        <div>
            <button type="submit" data-name="{{'Vet'}}">Update</button>
            <a href="{{ route('vets.index') }}">Back</a>
        </div>
      </form>
</x-layout>