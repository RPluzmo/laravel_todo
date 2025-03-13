<x-layout>
    <x-slot:title>
        Izveidot uzdevumu
    </x-slot:title>
    <h1>Izveidot uzdevumu</h1>
    <form action="/todos" method="POST">
        @csrf
        <input name="content" value="{{ old('content') }}"/>
            @error("content")
                <p>{{ $message }}</p>
            @enderror
        <button>Saglabāt</button>
    </form>
  </x-layout>