<x-layout title="Clients list" header="Clients">

    <h1>Update Client {{ $client->name}}</h1>

        <form action="{{ route('clients.update', $client) }}" method="POST">
            @csrf
            @method('PUT')
        <div>
          <div>
            <label for="cpf">CPF</label><br>
            <input type="text" name="cpf" value="{{ old('cpf', $client->cpf) }}" readonly>
          </div>

          <div>
          <label for="name">Name</label><br>
          <input type="text" name="name" value="{{ old('name', $client->name) }}" required>
          </div>

          <div>
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" value="{{ old('phone', $client->phone) }}" required>
          </div>
        </div>

        <div>
            <button type="submit" data-name="{{'client'}}">Update</button>
            <a href="{{ route('clients.index') }}">Back</a>
        </div>
      </form>
</x-layout>