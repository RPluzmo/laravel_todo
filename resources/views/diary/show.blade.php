<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <h2>Dienasgrāmatas saturs:</h2>
    <h3>{{ $diary->body }}</h3>
  <h2>Datums:</h2>
    <h3>{{ $diary->date }}</h3>
  <a href="/diaries/{{$diary->id}}/edit">Redidždžēt dienas gr.</a>
  <form action="/diaries/{{ $diary->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Dzēst</button>
  </form>
</x-layout>
