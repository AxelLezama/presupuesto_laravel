<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacienda Morales | Reservaciones</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', value))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
>
    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
    </div>

    <div class="flex h-screen overflow-hidden bg-gray-2 dark:bg-boxdark-2 dark:text-bodydark">
        
        @include('layouts.sidebar')
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            
            <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
                <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
                    <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
                        <button class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                            <span class="relative block h-5.5 w-5.5 cursor-pointer">
                                <span class="du-block absolute right-0 h-full w-full">
                                    <span class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-300': !sidebarToggle, 'top-2.5 rotate-45': sidebarToggle }"></span>
                                    <span class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white" :class="{ 'delay-400 !w-0': sidebarToggle }"></span>
                                    <span class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-500': !sidebarToggle, '-top-2.5 -rotate-45': sidebarToggle }"></span>
                                </span>
                            </span>
                        </button>
                    </div>

                    <div class="hidden sm:block">
                        <form action="https://formbold.com/s/unique_form_id" method="POST">
                            <div class="relative">
                                <input type="text" placeholder="Buscar cotización..." class="w-full bg-transparent pl-9 pr-4 font-medium focus:outline-none xl:w-125" />
                            </div>
                        </form>
                    </div>

                    <div class="flex items-center gap-3 2xsm:gap-7">
                        <a href="#" class="flex items-center gap-4">
                            <span class="hidden text-right lg:block">
                                <span class="block text-sm font-medium text-black dark:text-white">Admin</span>
                                <span class="block text-xs">Hacienda Morales</span>
                            </span>
                            <span class="h-12 w-12 rounded-full">
                                <img src="{{ asset('images/user/user-01.png') }}" alt="User" />
                            </span>
                        </a>
                    </div>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                    @yield('content')
                </div>
            </main>
            </div>
    </div>
</body>
</html>