    <div
            id="sidebar-multi-level-sidebar"
            class="font-roboto fixed hidden h-screen w-screen bg-primary/70 z-45"
            onclick="closeSideBar()"
    >
        <aside
            class="font-roboto fixed top-0 left-0 z-50 h-screen transition-transform"
            aria-label="Sidebar"
            onclick="toggleSideBar()"
        >
            <div
                class="font-roboto h-full px-3 py-4 overflow-y-auto bg-primary"
            >
                <ul class="font-roboto space-y-2 font-medium">
                    <li>
                        <a
                            href="{{ route('Menu') }}"
                            class="font-roboto flex items-center p-2 rounded-lg text-black hover:bg-accent hover:text-white group transition-all duration-300 ease-in-out"
                        >
                            <span class="font-roboto ms-3">
                                Platillos
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('Create') }}"
                            class="font-roboto flex items-center p-2 rounded-lg text-black hover:bg-accent hover:text-white group transition-all duration-300 ease-in-out"
                        >
                            <span class="font-roboto ms-3">
                                Crear platillo nuevo
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>