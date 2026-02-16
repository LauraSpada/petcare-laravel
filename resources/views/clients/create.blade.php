<x-layout title="Clients list" header="Clients">

    <h1>Add Clients</h1>

        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
        <div>
          <div>
            <label for="cpf">CPF</label><br>
            <input type="text" name="cpf" value="" placeholder="Type CPF" required >
          </div>

          <div>
          <label for="name">Name</label><br>
          <input type="text" name="name" value="" placeholder="Type name">
          </div>

          <div>
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" value="" placeholder="Type phone" >
          </div>
        </div>

        <div>
          <button type="submit" data-name="{{'Client'}}">Create</button>
          <a href="{{ route('clients.index') }}">Back</a>
        </div>
      </form>
</x-layout>