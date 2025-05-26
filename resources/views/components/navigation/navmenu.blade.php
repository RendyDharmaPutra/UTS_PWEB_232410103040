<ul class="{{ $style ?? '' }}">
    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a></li>
    <li><a href="{{ route('pengelolaan.index') }}">Pengelolaan</a></li>
</ul>
