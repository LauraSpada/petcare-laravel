<x-layout title="Animals list" header="Animals">

    <h1>Update Animal '{{ $animal->name }}'</h1>

        <form action="{{ route('animals.update', $animal) }}"  method="POST">
            @csrf
            @method('PUT')
        <div>

          <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" value="{{ old('name', $animal->name) }}" readonly>
          </div>

          <div>
            <label for="breed">Breed</label><br>
            <input type="text" name="breed" value="{{ old('breed', $animal->breed) }}" readonly>
          </div>

          <div>
            <label for="b_date">B-date</label><br>
            <input type="date" name="b_date" value="{{ old('b_date', $animal->b_date) }}" readonly>
          </div>

          <div>
            <label for="weight">Weight</label><br>
            <input type="number" name="weight" step="0.001" min="0" value="{{ old('weight', $animal->weight) }}">
          </div>

          <div>
            <label for="gender">Gender</label><br>
            <input type="text" name="gender"value="{{ old('gender', $animal->gender) }}" readonly>
          </div>

            <div>
                <label for="owner">Owner</label>
                    <select name="id_client" id="id_client" required>
                        <option value="">Selecione...</option>
                        @foreach($clients as $c)
                            <option value="{{ $c->id }}"
                                {{ $animal->id_client == $c->id ? 'selected' : '' }}>
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div>
          <button type="submit" data-name="{{'animal'}}">Update</button>
          <a href="{{ route('animals.index') }}">Back</a>
        </div>
      </form>
</x-layout>