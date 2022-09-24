<div class="flex">
    <div x-data="{ openSide: false }" class="bg-gray-300 h-screen p-5 pt-1 sm:pt-8 duration-300 relative -left-16 sm:left-0"
        :class="openSide ? 'w-72' : 'w-16'">
        <img src="{{ asset('img/flecha-correcta.png') }}" @click="openSide = ! openSide"
            class="bg-white rounded-full p-2 text-sm -right-7 sm:-right-3.5 absolute border border-gray-300 cursor-pointer duration-100 h-8 w-8"
            :class="openSide && 'rotate-180'" />

        <div class="flex items-center rounded-md bg-gray-100 mt-6 py-2 "
            :class="!openSide ? 'px-4' : 'px-2.5'">
            <img src="{{ asset('img/search.png') }}"
                class="text-white text-lg float-left rounded cursor-pointer mr-2 block">
        </div>
    </div>


</div>
