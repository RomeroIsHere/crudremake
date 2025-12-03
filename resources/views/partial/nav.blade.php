<nav
    class="font-roboto h-25 px-10 bg-secondary flex flex-row justify-between text-black"
>
    <a
        href="{{ route('Homepage') }}"
        class="font-roboto flex flex-row justify-start items-center"
    >
        <img
            src="resources/Logo.svg"
            alt="Logo de Space Shooting Star Burgers"
            class="font-roboto h-1/2"
        />
        <span class="font-roboto"> Space Shooting Star Burgers </span>
    </a>

    <button
        data-drawer-target="sidebar-multi-level-sidebar"
        data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar"
        class="font-roboto flex flex-row justify-end items-center"
        type="button"
        onclick="toggleSideBar()"
    >
        <span class="font-roboto sr-only">Open sidebar</span>
        <img
            src="resources/Fries.svg"
            alt="Fries Menu"
            class="font-roboto max-h-1/2"
        />
    </button>
</nav>