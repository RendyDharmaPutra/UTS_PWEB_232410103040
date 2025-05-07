<ul class="{{ $style ?? '' }}">
    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a></li>
    <li><a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">Pengelolaan</a></li>
</ul>
