<div class="flex">
    <div x-data="{ openSide: false }" class="bg-dark-purple h-screen p-3 pt-1 sm:pt-8 duration-300 relative -left-16 sm:left-0"
        :class="openSide ? 'w-72' : 'w-16'">
        <img src="{{ asset('img/flecha-correcta.png') }}" @click="openSide = ! openSide"
            class="bg-white rounded-full p-2 text-sm -right-7 sm:-right-3.5 absolute border border-gray-300 cursor-pointer duration-100 h-8 w-8"
            :class="openSide && 'rotate-180'" />

        <div class="flex items-center rounded-md bg-light-white mt-8"
            :class="! openSide ? 'px-2.5 py-2' : 'px-4'">
            <img src="{{ asset('img/search-white.png') }}"
                class="text-white text-lg float-left cursor-pointer block"
                :class=" openSide  && 'mr-2'">
            <input type="search" placeholder="Búsqueda"
            class="bg-transparent text-base text-white w-full focus:ring-0 border-none "
            :class="! openSide && 'hidden'" autofocus>
        </div>
    </div>


</div>
