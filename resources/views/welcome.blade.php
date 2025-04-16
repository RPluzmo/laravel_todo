<x-layout>
    <x-slot:title>
        {{ "Sākumlapa" }}
    </x-slot:title>
  @auth
	  <p>Sveiks, {{  Auth::user()->first_name . ' ' . Auth::user()->last_name}}!</p>
	@endauth


	@guest
		<h2>Sveiks, viesi!</h2>
    <p>Šajā lapā jūs varat [kā pieteicies lietotājs :D] izveidot <i>darāmo darbu sarakstu</i> un <i>dienasgrāmatas ierakstu</i>.</p>
    <p>Kā arī rediģēt iepriekšējos sarakstus/ierakstus un, protams, neatgriezeniski tos IZDZĒSTttt  :]</p>
		<h3><a href="{{ route('login') }}">ierkastīties</a></h3>
    <h3><a href="{{ route('register') }}">Reģistrēties</a></h3>
	@endguest
</x-layout>
