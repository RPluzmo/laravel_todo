<x-layout>
    <x-slot:title>
       Rediģēt uzdevumu
    </x-slot:title>
    <h1>Rediģēt uzdevumu</h1>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Izpildīts:
            <input name="completed" type="hidden" value="0">
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}}>   
        </label>
        <button>Saglabāt</button>
    </form>
  </x-layout>