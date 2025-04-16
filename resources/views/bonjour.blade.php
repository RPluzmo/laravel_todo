<x-layout>
    <x-slot:title>
        {{ "Sākumlapa" }}
    </x-slot:title>
    @auth
	  <p>Sveiks, {{  Auth::user()->first_name . ' ' . Auth::user()->last_name}}!</p>
      <p>Preiks tevi atkal satikt!!</p>
	@endauth

</x-layout>
