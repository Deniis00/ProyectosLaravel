<div class="flex">
    <div x-data="{ openSide: false }" class="bg-gray-300 h-screen p-5 pt-1 sm:pt-8 duration-300 relative -left-16 sm:left-0"
        :class="openSide ? 'w-72' : 'w-20'">
        <img src="{{ asset('img/flecha-correcta.png') }}" @click="openSide = ! openSide"
            class="bg-white rounded-full p-2 text-sm -right-7 sm:-right-3.5 absolute border border-gray-300 cursor-pointer duration-100 h-8 w-8"
            :class="openSide && 'rotate-180'" />

        <div class="flex items-center rounded-md bg-gray-100 mt-8 py-2"
            :class="! openSide ? 'px-2.5' : 'px-4'">
            <img src="{{ asset('img/search.png') }}"
                class="text-white text-lg float-left rounded cursor-pointer block"
                :class=" openSide  && 'mr-2'">
            <input type="search" placeholder="Búsqueda"
            class="bg-transparent text-base text-gray-600 w-full focus:ring-0 border-none"
            :class="! openSide && 'hidden'" autofocus>
        </div>
    </div>


</div>
