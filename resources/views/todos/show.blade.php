<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    <a href="{{ route('todos.edit', $todo->id) }}">Rediģēt ierakstu</a>
    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Dzēst</button>
  </form>
</x-layout>