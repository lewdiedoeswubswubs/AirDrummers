<x-layout>
    <div style="background-image: url('{{ asset('storage/assets/Galaxy Background.jpg') }}'); background-size: cover; background-position: center center;" id="parallax-bg">
        <div class="relative">
            <!-- Hero Section -->
            <section class="relative w-full h-screen bg-center bg-cover z-10">
                <div id="planets-container" class="absolute inset-0 overflow-hidden h-[1080px] pointer-events-none z-0">
                    <!-- Planets -->
                    <img src="{{ asset('storage/assets/AD_Mylocritas.png') }}" alt="" class="planet absolute top-[25%] left-[10%] w-[150px] transition-opacity duration-500">
                    <img src="{{ asset('storage/assets/AD_Devorah.png') }}" alt="" class="planet absolute top-[55%] left-[10%] w-[200px] transition-opacity duration-500">
                    <img src="{{ asset('storage/assets/AD_Aurelia.png') }}" alt="" class="planet absolute top-[35%] left-[70%] w-[350px] transition-opacity duration-500">
                    <img src="{{ asset('storage/assets/AD_Earth.png') }}" alt="" class="planet absolute top-[55%] left-[20%] w-[600px] transition-opacity duration-500">
                    <img src="{{ asset('storage/assets/AD_Comet_Asteroid.png') }}" alt="" class="planet absolute top-[60%] left-[30%] w-[1000px] transition-opacity duration-500">
                </div>

                <!-- Content Overlay -->
                <div class="absolute inset-0 flex items-center justify-center p-4 text-center text-white z-20">
                    <div>
                        <img src="{{ asset('storage/assets/ico/AirDrumming_logo.svg') }}" alt="Air Drumming Logo" class="mx-auto w-[450px] drop-shadow-md">
                        <p class="max-w-3xl text-lg sm:text-xl md:text-2xl drop-shadow-md">
                            Air Drumming is a rhythmic exploration, a lifestyle statement, and a social movement, that integrates users seamlessly across the mobile application, the physical experience, and their connection with the larger communities.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <section class="py-4 mt-14 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 z-20 relative">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 h-full">
                <div class="col-span-1 bg-gradient-to-br from-[#0f2d80] to-[#1a1053] h-auto flex flex-col justify-center rounded-2xl">
                    <a href="#">
                        <img src="{{ asset('storage/assets/ico/AirDrumming_logo.svg') }}" alt="Air Drumming Logo" class="mx-auto w-full drop-shadow-md">
                    </a>
                </div>

                <div class="col-span-2 bg-gradient-to-br from-[#64ff9f] to-[#08e5f8] h-auto flex flex-col justify-center rounded-2xl p-5">
                    <a href="#" class="relative flex text-[#100d39] flex-row content-center items-center overflow-hidden rounded-lg">
                        <div class="pl-10">
                            <h1 class="text-4xl sm:text-5xl font-extrabold">AIRCITING FEATURES</h1>
                            <small class="text-sm sm:text-base">Explore your celestial adventure!</small>
                        </div>
                        <img src="{{ asset('storage/assets/PhoneScene_01.png') }}" alt="Air Drumming Logo" class="mx-auto w-full drop-shadow-md">
                    </a>
                </div>

                <div class="col-span-2 h-auto flex flex-col bg-gradient-to-br from-[#feecb3] to-[#f64c71] rounded-2xl p-5">
                    <a href="#" class="relative flex flex-row content-center items-center overflow-hidden">
                        <div class="pl-10">
                            <h1 class="text-4xl sm:text-5xl font-extrabold">STAR TRACKS</h1>
                            <small class="text-sm sm:text-base">Drum N' Roll to your all-time favorite songs!</small>
                        </div>
                        <img src="{{ asset('storage/assets/PhoneScene_02.png') }}" alt="Air Drumming Logo" class="mx-auto w-full drop-shadow-md">
                    </a>
                </div>

                <div class="col-span-1 bg-gradient-to-br from-[#f2c2fb] to-[#c64ec6] h-auto flex flex-col justify-center rounded-2xl">
                    <a href="#" class="mx-6 sm:mx-24">
                        <h1 class="text-4xl sm:text-5xl font-extrabold text-white">FEEL D' COSMIC BEAT</h1>
                    </a>
                </div>

                <div class="col-span-1 bg-gradient-to-r from-[#41e6be] to-[#0f773d] h-auto flex items-center justify-center rounded-2xl">
                    <a href="/learn-more" class="flex items-center px-6 py-4 rounded-2xl">
                        <h1 class="text-white text-2xl sm:text-4xl font-medium mr-2">Learn More</h1>
                        <div>
                            <svg class="w-8 sm:w-10 text-white flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 11l4-4m0 0l-4-4m4 4H7" class="w-full" />
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="col-span-2 bg-gradient-to-r from-[#e597e6] to-[#0f773d] h-auto flex flex-col rounded-2xl">
                    <a href="#" class="relative flex flex-row content-center items-center overflow-hidden">
                        <div class="pl-10 text-[#100d39]">
                            <h1 class="text-4xl sm:text-5xl font-extrabold">DRUMPLAY</h1>
                            <small class="text-sm sm:text-base">Electrify the universe with your best score!</small>
                        </div>
                        <img src="{{ asset('storage/assets/PhoneScene_03.png') }}" alt="Air Drumming Logo" class="mx-auto w-full drop-shadow-md">
                    </a>
                </div>
            </div>
        </section>
        <section class="pt-24">
            <div style="background-image: linear-gradient(to bottom, #100d39, transparent), url('{{ asset('storage/assets/AD_Img_02.jpeg') }}'); background-size: cover; background-position: center center;" class="h-screen text-white">
                <div class="p-8 sm:p-12 lg:p-20 max-w-screen-lg 2xl:mx-64 xl:mx-auto">
                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl">AIR COMMUNITY</h1>
                        <p class="text-lg sm:text-xl md:text-2xl">We make rhythm learning accessible for people from all walks of life, especially the underserved communities, with our multi-functional AI-powered Air Drumming application.</p>
                        <br>
                        <button class="border border-white p-4 sm:p-5 hover:bg-white hover:text-[#1a1053] transition-all duration-300 text-xl sm:text-2xl">Learn More →</button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div style="background-image: linear-gradient(to bottom, #100d39, transparent), url('{{ asset('storage/assets/Drummers.png') }}'); background-size: cover; background-position: center center;" class="h-screen text-white">
                <div class="p-8 sm:p-12 lg:p-20 max-w-screen-lg 2xl:mx-64 xl:mx-auto">
                    <div class="space-y-3 w-full sm:w-2/3">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl">EVENTS</h1>
                        <p class="text-lg sm:text-xl md:text-2xl">Tap on our comprehensive suite of AI-powered solutions to hype up your pop-up events and boost crowd engagement.</p>
                        <br>
                        <button class="border border-white p-4 sm:p-5 hover:bg-white hover:text-[#1a1053] transition-all duration-300 text-xl sm:text-2xl">Learn More →</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
<script>
    const parallaxBg = document.getElementById('parallax-bg');
    const planets = document.querySelectorAll('.planet');

    // Configurable factors for movement
    const bgMovementFactor = 500; // Background movement sensitivity
    const planetMovementBase = 0.05; // Base movement for planets
    const planetMovementFactor = 0.5; // Additional movement scaling for planets
    const smoothingFactor = 0.1; // Smoothing for background movement
    const planetSmoothingFactor = 0.1; // Smoothing for planet movement
    const fadeStart = 800; // Height where planets start fading out
    const fadeEnd = 1080;
    let mouseY = 0;
    let scrollY = 0;
    let targetBgPositionY = 0;
    let currentBgPositionY = 0;
    let targetPlanetPositions = Array(planets.length).fill(0);
    let currentPlanetPositions = Array(planets.length).fill(0);
    document.addEventListener('mousemove', (event) => {
        mouseY = event.clientY;
        updateTargets();
    });
    document.addEventListener('scroll', () => {
        scrollY = window.scrollY;
        updateTargets();
    });
    function updateTargets() {
        const viewportHeight = window.innerHeight;
        const mouseRatio = mouseY / viewportHeight;
        targetBgPositionY = scrollY * 0.5 + (mouseRatio * -bgMovementFactor);
        planets.forEach((planet, index) => {
            const planetIntensity = planetMovementBase + (planets.length - index - 1) * planetMovementFactor;
            targetPlanetPositions[index] = (mouseY - viewportHeight / 2 + scrollY) * planetIntensity;
            const planetTop = targetPlanetPositions[index];
            const opacity = calculateOpacity(planetTop);
            planet.style.opacity = opacity;
        });
        requestAnimationFrame(animateParallax);
    }
    function calculateOpacity(position) {
        if (position < fadeStart) return 1;
        if (position > fadeEnd) return 0;
        return 1 - (position - fadeStart) / (fadeEnd - fadeStart);
    }
    function animateParallax() {
        const bgDiff = targetBgPositionY - currentBgPositionY;
        currentBgPositionY += bgDiff * smoothingFactor;
        parallaxBg.style.backgroundPositionY = `${currentBgPositionY}px`;
        planets.forEach((planet, index) => {
            const diff = targetPlanetPositions[index] - currentPlanetPositions[index];
            currentPlanetPositions[index] += diff * planetSmoothingFactor;
            planet.style.transform = `translateY(${currentPlanetPositions[index]}px)`;
        });
        requestAnimationFrame(animateParallax);
    }

    animateParallax();
</script>
