<x-layout title="Consultations list" header="Consultations">

    <h1>Add Consultations</h1>

        <form action="{{ route('consultations.store') }}" method="POST">
            @csrf
        <div>

          <div>
                <label for="vet">Vet</label>
                    <select name="vet_id" id="vet_id" required>
                        <option value="">Selecione...</option>
                        @foreach($vets as $v)
                            <option value="{{ $v->id }}">
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
                            <option value="{{ $a->id }}">
                                {{ $a->name }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div>
            <label for="date">Date</label><br>
            <input type="date" name="date" value="" placeholder="Type Date" >
          </div>

          <div>
          <label for="hour">Hour</label><br>
          <input type="time" name="hour" value="" placeholder="Type Hour" >
          </div>

          <div>
            <label for="reason">Reason</label><br>
            <input type="text" name="reason" value="" placeholder="Type Reason" >
          </div>

        </div>

        <div>
          <button type="submit" data-name="{{'Consultation'}}">Create</button>
          <a href="{{ route('consultations.index') }}">Back</a>
        </div>
      </form>
</x-layout>