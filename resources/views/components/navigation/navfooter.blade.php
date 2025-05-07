<div class="p-2 dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <img alt="Avatar Profile"
                src="https://st4.depositphotos.com/11634452/21365/v/450/depositphotos_213659488-stock-illustration-picture-profile-icon-human-people.jpg" />
        </div>
    </div>
    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li>
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="">
                Profile
            </a>
        </li>
        <li class="text-error"><a href="{{ route('login') }}">Logout</a></li>
    </ul>
</div>
