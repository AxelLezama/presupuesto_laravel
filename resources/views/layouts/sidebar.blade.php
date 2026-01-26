<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'" class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0" @click.outside="sidebarToggle = false">
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="/" class="text-2xl font-bold text-white">
            H. MORALES
        </a>
        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            X
        </button>
    </div>

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
            <div>
                <h3 class="mb-4 ml-4 text-sm font-semibold text-bodydark2">MENU</h3>
                <ul class="mb-6 flex flex-col gap-1.5">
                    
                    <li>
                        <a href="/" class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4">
                            Nueva Cotización
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</aside>