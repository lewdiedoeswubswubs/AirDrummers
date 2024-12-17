<x-layout>
    <div class="relative p-96">
    <!-- Tabs -->
    <div class="flex justify-center gap-6 z-50 relative">
        <button class="tab relative group" data-tab="1">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2017" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2017</span>
        </button>
        <button class="tab relative group" data-tab="2">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2018" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2018</span>
        </button>
        <button class="tab relative group" data-tab="3">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2019" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2019</span>
        </button>
        <button class="tab relative group" data-tab="4">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2020" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2020</span>
        </button>
        <button class="tab relative group" data-tab="5">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2021" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2021</span>
        </button>
        <button class="tab relative group" data-tab="6">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2022" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2022</span>
        </button>
        <button class="tab relative group" data-tab="7">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2023" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2023</span>
        </button>
        <button class="tab relative group" data-tab="8">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="2024" class="transition-transform duration-300 group-hover:scale-110">
            <span class="tab-year absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">2024</span>
        </button>
    </div>

    <!-- Solar System -->
    <div class="absolute inset-0 w-full h-full flex justify-center items-center -z-10 text-black">
        <div class="center absolute w-36 h-36 z-0">
            <img src="{{ asset('storage/assets/Orbit_00_earth.png') }}" alt="Earth" class="w-full h-full object-cover">
        </div>
        <div class="orbit absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" id="orbit1" style="--initial-rotation: 0deg; width: 150px; height: 150px;">
            <img src="{{ asset('storage/assets/Orbit_01.png') }}" alt="Orbit 1" class="w-full h-full object-cover">
        </div>
        <div class="orbit absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" id="orbit2" style="--initial-rotation: 45deg; width: 250px; height: 250px;">
            <img src="{{ asset('storage/assets/Orbit_02.png') }}" alt="Orbit 2" class="w-full h-full object-cover">
        </div>
        <div class="orbit absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" id="orbit3" style="--initial-rotation: 90deg; width: 350px; height: 350px;">
            <img src="{{ asset('storage/assets/Orbit_03.png') }}" alt="Orbit 3" class="w-full h-full object-cover">
        </div>
        <div class="orbit absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" id="orbit4" style="--initial-rotation: 135deg; width: 450px; height: 450px;">
            <img src="{{ asset('storage/assets/Orbit_04.png') }}" alt="Orbit 4" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Content -->
    <div class="mt-8 z-20 relative">
        <div class="content hidden" id="content1">Content for 2017</div>
        <div class="content hidden" id="content2">Content for 2018</div>
        <div class="content hidden" id="content3">Content for 2019</div>
        <div class="content hidden" id="content4">Content for 2020</div>
        <div class="content hidden" id="content5">Content for 2021</div>
        <div class="content hidden" id="content6">Content for 2022</div>
        <div class="content hidden" id="content7">Content for 2023</div>
        <div class="content hidden" id="content8">Content for 2024</div>
    </div>
</div>


    <style>
        .content {
            font-size: 18px;
            color: white;
            text-align: center;
        }

        @media (max-width: 768px) {
            .tabs {
                flex-wrap: wrap;
                justify-content: flex-start;
            }

            .tab {
                margin: 5px;
            }

            .tab img {
                width: 80px;
            }

            .content {
                font-size: 14px;
            }
        }
    </style>

    <script>
    const rotationIncrement = 90;
    const baseSpeed = 0.5;
    const speedFactor = 0.2;
    const orbits = document.querySelectorAll('.orbit');
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.content');
    let rotation = 0;
    let activeTab = tabs.length;
    tabs[activeTab - 1].classList.add('active');
    contents[activeTab - 1].classList.add('active');
    contents[activeTab - 1].classList.remove('hidden');
    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => {
                c.classList.remove('active');
                c.classList.add('hidden');
            });
            tab.classList.add('active');
            const selectedContent = document.getElementById(`content${tab.dataset.tab}`);
            selectedContent.classList.add('active');
            selectedContent.classList.remove('hidden');
            rotation += rotationIncrement;
            orbits.forEach((orbit, i) => {
                const speed = baseSpeed + i * speedFactor;
                orbit.style.transition = `transform ${speed}s ease-in-out`;
                orbit.style.transform = `translate(-50%, -50%) rotate(${rotation + parseFloat(getComputedStyle(orbit).getPropertyValue('--initial-rotation'))}deg)`;
            });
            activeTab = parseInt(tab.dataset.tab, 10);
        });
    });
</script>

</x-layout>
