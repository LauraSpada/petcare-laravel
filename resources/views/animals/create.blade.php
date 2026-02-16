<x-layout title="Animals list" header="Animals">

    <h1>Add Animals</h1>

        <form action="{{ route('animals.store') }}" method="POST">
            @csrf
        <div>

          <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" value="" placeholder="Type Name">
          </div>

          <div>
            <label for="breed">Breed</label><br>
            <input type="text" name="breed" value="" placeholder="Type Breed" required >
          </div>

          <div>
            <label for="b_date">B-date</label><br>
            <input type="date" name="b_date" value="" placeholder="Type B-date" >
          </div>

          <div>
            <label for="weight">Weight</label><br>
            <input type="number" name="weight" step="0.02" min="0" value="" placeholder="Type Weight" >
          </div>

          <div>
            <label for="gender">Gender</label><br>
            <input type="text" name="gender" value="" placeholder="Type Male/Female" >
          </div>

            <div>
                <label for="owner">Owner</label>
                    <select name="client_id" id="client_id" required>
                        <option value="">Selecione...</option>
                        @foreach($clients as $c)
                            <option value="{{ $c->id }}">
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
          </div>
        </div>

        <div>
          <button type="submit" data-name="{{'animal'}}">Create</button>
          <a href="{{ route('animals.index') }}">Back</a>
        </div>
      </form>
</x-layout>