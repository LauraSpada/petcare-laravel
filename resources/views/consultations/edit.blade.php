<x-layout title="Consultations list" header="Consultations">

    <h1>Update Consultation '{{ $consultation->id }}'/ Animal '{{ $consultation->animal->name}}'</h1>

        <form action="{{ route('consultations.update', $consultation)}}" method="POST">
            @csrf
            @method('PUT')
        <div>

          <div>
                <label for="vet">Vet</label>
                    <select name="vet_id" id="vet_id" required>
                        <option value="">Selecione...</option>
                        @foreach($vets as $v)
                            <option value="{{ $v->id }}"
                                {{ $consultation->vet_id == $v->id ? 'selected' : '' }}>
                                {{ $v->name }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div>
                <label for="animal">Animal</label>
                    <select name="animal_id" id="animal_id" required>
                        <option value="">Selecione...</option>
                        @foreach($animals as $a)
                            <option value="{{ $a->id }}"
                                {{ $consultation->animal_id == $a->id ? 'selected' : '' }}>
                                {{ $a->name }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div>
            <label for="date">Date</label><br>
            <input type="date" name=date" value="{{ old('date', $consultation->date) }}" >
          </div>

          <div>
          <label for="hour">Hour</label><br>
          <input type="time" name="hour" value="{{ old('hour', $consultation->hour) }}" >
          </div>

          <div>
            <label for="reason">Reason</label><br>
            <input type="text" name="reason" value="{{ old('reason', $consultation->reason) }}" >
          </div>

        </div>

        <div>
          <button type="submit" data-name="{{'consultation'}}">Update</button>
          <a href="{{ route('consultations.index') }}">Back</a>
        </div>
      </form>
</x-layout>