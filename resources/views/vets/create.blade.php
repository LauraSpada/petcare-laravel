<x-layout title="Vets list" header="Vets">

    <h1>Add Vets</h1>

        <form action="{{ route('vets.store') }}" method="POST">
            @csrf
        <div>
          <div>
            <label for="crmv">CRMV</label><br>
            <input type="text" name="crmv" value="" placeholder="Type CRMV" required >
          </div>

          <div>
          <label for="name">Name</label><br>
          <input type="text" name="name" value="" placeholder="Type name">
          </div>

          <div>
            <label for="adm_date">Admission Date</label><br>
            <input type="date" name="adm_date" value="" placeholder="Type admission date" >
          </div>

          <div>
            <label for="salary">Salary</label><br>
            <input type="number" step="0.02" min="0" name="salary" value="" placeholder="Type salary" >
          </div>
        </div>

        <div>
          <button type="submit" data-name="{{'Vet'}}">Create</button>
          <a href="{{ route('vets.index') }}">Back</a>
        </div>
      </form>
</x-layout>