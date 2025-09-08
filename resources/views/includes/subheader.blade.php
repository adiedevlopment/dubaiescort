<!-- includes/topbar.blade.php -->

{{--
<form method="GET" action="#"
      class="bg-[#1a1a1a] shadow-inner px-4 py-3 md:px-6 md:py-4 flex flex-wrap items-center gap-3">


--}}

    {{-- Category Filter

    <select name="category"
        class="w-full px-3 py-2 text-sm text-black bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 sm:w-auto">
        <option value="">Select Escorts</option>
        @foreach ($categories ?? [] as $cat)
            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                {{ ucfirst($cat) }}
            </option>
        @endforeach
    </select> --}}


    {{-- Location Filter

<div class="relative w-full sm:w-auto">
        <i class="absolute text-gray-500 -translate-y-1/2 bi bi-geo-alt-fill left-3 top-1/2"></i>
        <select name="location"
            class="w-full py-2 pr-3 text-sm border border-gray-300 rounded-md pl-9 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            <option value="">Select Location</option>
            @foreach ($locations ?? [] as $loc)
                <option value="{{ $loc }}" {{ request('location') == $loc ? 'selected' : '' }}>
                    {{ ucfirst($loc) }}
                </option>
            @endforeach
        </select>
    </div>



    --}}


    {{-- Static Currency (Optional)


     <select class="w-full px-3 py-2 text-sm text-black bg-white rounded-md sm:w-auto">
        <option>INR</option>
        <option>USD</option>
    </select>

    <input type="text" placeholder="Price"
        class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md sm:w-auto" />

    <select class="w-full px-3 py-2 text-sm text-black bg-white rounded-md sm:w-auto">
        <option>All Services</option>
        <option>Massage</option>
        <option>Escort</option>
    </select>

    <button type="submit"
        class="flex items-center w-full gap-2 px-5 py-2 text-sm text-black transition bg-pink-400 rounded-md hover:bg-yellow-500 sm:w-auto">
        <i class="bi bi-search"></i> <span>Search</span>
    </button>
</form>
--}}
