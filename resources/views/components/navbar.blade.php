<nav class="sticky inset-0 navbar bg-base-100 shadow-sm">
    <section class="navbar-start">
        <div class="dropdown">
            <button tabindex="0" type="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </button>
            <x-navigation.navmenu
                style="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow" />
        </div>
        <a class="btn btn-ghost text-xl text-black"
            href="{{ route('dashboard', ['username' => request()->query('username')]) }}">SisaGaji</a>
    </section>
    <section class="navbar-end flex flex-row gap-10 ">
        <div class="hidden lg:flex">
            <x-navigation.navmenu style="menu menu-horizontal px-1" />
        </div>
        <x-navigation.navfooter />
    </section>
</nav>
