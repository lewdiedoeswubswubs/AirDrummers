<nav id="navbar" class="p-4 fixed w-full z-50 transition-all duration-300 bg-gradient-to-b from-[#100d39] to-transparent">
    <div class="mx-auto px-4 max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <img class="h-14" src="{{ asset('storage/assets/AirDrumming_Logo-03.png') }}" alt="Your Icon">
            </div>
            <button
                class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md sm:hidden hover:text-white hover:bg-gray-700 focus:ring-2 focus:ring-white"
                aria-expanded="false"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden sm:flex sm:space-x-4">
                <a href="#" class="px-3 py-2 font-medium text-white rounded-md text-md">Home</a>
                <a href="#" class="px-3 py-2 font-medium text-white rounded-md text-md">About</a>
                <div class="relative group">
                    <button
                        class="flex items-center px-3 py-2 font-medium text-white rounded-md text-md"
                        onclick="toggleDropdown()" id="toggle-dropdown"
                    >
                        Services
                        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div
                        class="absolute z-10 hidden w-48 overflow-hidden mt-2 text-[#48c6ef] bg-[#07061c] rounded-md shadow-lg transition-all duration-300 max-h-0"
                        id="dropdown"
                    >
                        <a href="#" class="block px-4 py-2">Schools</a>
                        <a href="#" class="block px-4 py-2">Corporate</a>
                        <a href="#" class="block px-4 py-2">AIR+ Community</a>
                        <a href="#" class="block px-4 py-2">Events</a>
                    </div>
                </div>
                <a href="#" class="px-3 py-2 font-medium text-white rounded-md text-md">Collaboration</a>
                <a href="#" class="px-3 py-2 font-medium text-white rounded-md text-md">Contact Us</a>
            </div>
        </div>
    </div>
</nav>


<script>
    let lastScrollY = window.scrollY;
    let navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > lastScrollY) {
            navbar.classList.add('transform', '-translate-y-full');
        } else {
            navbar.classList.remove('transform', '-translate-y-full');
        }
        lastScrollY = window.scrollY;
    });

    function toggleDropdown() {
        let dropdown = document.getElementById('dropdown');
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
        } else {
            dropdown.style.maxHeight = '0';
            setTimeout(() => {
                dropdown.classList.add('hidden');
            }, 300);
        }
    }

    document.addEventListener('click', function (event) {
        let dropdown = document.getElementById('dropdown');
        let button = document.getElementById('toggle-dropdown');
        if (!dropdown.contains(event.target) && !button.contains(event.target)) {
            if (!dropdown.classList.contains('hidden')) {
                dropdown.style.maxHeight = '0';
                setTimeout(() => dropdown.classList.add('hidden'), 300);
            }
        }
    });
</script>
