 <!-- Sidebar Container -->
  <aside class="w-64 h-screen bg-white border-r border-pink-200 p-4 overflow-y-auto sticky top-0" x-data="{ open: null }">
    <h2 class="text-lg font-semibold text-pink-500 mb-6">Escorts Country List :</h2>

    <ul class="space-y-2 text-blue-900">
      <!-- Example Dropdown Item -->
      <li>
        <div @click="open === 1 ? open = null : open = 1" class="flex items-center justify-between cursor-pointer hover:text-pink-700">
          <span class="flex items-center">
            <svg class="w-4 h-4 mr-2 text-purple-700" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.184l3.71-3.954a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
            Agonda Beach Escorts
          </span>
          <svg :class="{'rotate-180': open === 1}" class="w-4 h-4 transition-transform transform text-pink-700" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.184l3.71-3.954a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </div>
        <!-- Dropdown content -->
        <ul x-show="open === 1" x-collapse class="ml-6 mt-2 space-y-1 text-sm text-gray-700">
          <li><a href="#" class="block hover:text-pink-600">VIP Escorts</a></li>
          <li><a href="#" class="block hover:text-pink-600">Independent Escorts</a></li>
          <li><a href="#" class="block hover:text-pink-600">Couple Escorts</a></li>
        </ul>
      </li>

      <!-- Repeat for more dropdown items -->
      <li>
        <div @click="open === 2 ? open = null : open = 2" class="flex items-center justify-between cursor-pointer hover:text-pink-700">
          <span class="flex items-center">
            <svg class="w-4 h-4 mr-2 text-purple-700" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.184l3.71-3.954a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
            Anjuna Beach Escorts
          </span>
          <svg :class="{'rotate-180': open === 2}" class="w-4 h-4 transition-transform transform text-pink-700" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.184l3.71-3.954a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </div>
        <ul x-show="open === 2" x-collapse class="ml-6 mt-2 space-y-1 text-sm text-gray-700">
          <li><a href="#" class="block hover:text-pink-600">Russian Escorts</a></li>
          <li><a href="#" class="block hover:text-pink-600">College Girls</a></li>
        </ul>
      </li>


       <!-- Repeat for more dropdown items -->
      <li>
        <div @click="open === 3 ? open = null : open = 3" class="flex items-center justify-between cursor-pointer hover:text-pink-700">
          <span class="flex items-center">
            <svg class="w-4 h-4 mr-2 text-purple-700" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.184l3.71-3.954a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
            Anjuna Beach Escorts
          </span>
          <svg :class="{'rotate-180': open === 3}" class="w-4 h-4 transition-transform transform text-pink-700" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.184l3.71-3.954a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </div>
        <ul x-show="open === 2" x-collapse class="ml-6 mt-2 space-y-1 text-sm text-gray-700">
          <li><a href="#" class="block hover:text-pink-600">Russian Escorts</a></li>
          <li><a href="#" class="block hover:text-pink-600">College Girls</a></li>
        </ul>
      </li>
      <!-- More beach dropdowns as needed... -->

    </ul>
  </aside>
