<footer class="bg-[#100d39] text-white py-8">
    <div class="max-w-7xl mx-auto px-6 sm:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <div class="space-y-4 sm:space-y-0 sm:flex sm:space-x-6">
                <a href="#" class="font-medium text-md hover:text-[#48c6ef]">Home</a>
                <a href="#" class="font-medium text-md hover:text-[#48c6ef]">About Us</a>
                <div class="relative group">
                    <button class="flex items-center font-medium text-md hover:text-[#48c6ef]" id="toggle-services">
                        Services
                        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-24 -top-36 z-10 hidden w-48 overflow-hidden mt-2 text-[#48c6ef] bg-[#07061c] rounded-md shadow-lg transition-all duration-300"
                        id="services-dropdown">
                        <a href="#" class="block px-4 py-2">Schools</a>
                        <a href="#" class="block px-4 py-2">Corporate</a>
                        <a href="#" class="block px-4 py-2">AIR+ Community</a>
                        <a href="#" class="block px-4 py-2">Events</a>
                    </div>
                </div>
                <a href="#" class="font-medium text-md hover:text-[#48c6ef]">Collaboration</a>
                <a href="#" class="font-medium text-md hover:text-[#48c6ef]">Contact Us</a>
            </div>
            <div class="mt-4 sm:mt-0 flex flex-row items-center space-x-3">
                <a href="https://www.youtube.com" target="_blank" class="text-[#48c6ef] hover:text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="text-[#48c6ef] hover:text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.2c3.5 0 4.1.01 5.6.08 1.3.07 2.4.34 3.2 1.1.8.8 1.1 1.9 1.1 3.2.07 1.5.08 2.1.08 5.6s0 4.1-.08 5.6c-.07 1.3-.34 2.4-1.1 3.2-.8.8-1.9 1.1-3.2 1.1-1.5.07-2.1.08-5.6.08s-4.1 0-5.6-.08c-1.3-.07-2.4-.34-3.2-1.1-.8-.8-1.1-1.9-1.1-3.2-.07-1.5-.08-2.1-.08-5.6s0-4.1.08-5.6c.07-1.3.34-2.4 1.1-3.2.8-.8 1.9-1.1 3.2-1.1 1.5-.07 2.1-.08 5.6-.08zm0 1.5c-3.3 0-3.6.01-4.8.07-1.1.06-1.7.36-2.1.72-.4.4-.69.9-.72 2.1-.06 1.2-.07 1.5-.07 4.8s.01 3.6.07 4.8c.06 1.1.36 1.7.72 2.1.4.4.9.69 2.1.72 1.2.06 1.5.07 4.8.07s3.6-.01 4.8-.07c1.1-.06 1.7-.36 2.1-.72.4-.4.69-.9.72-2.1.06-1.2.07-1.5.07-4.8s-.01-3.6-.07-4.8c-.06-1.1-.36-1.7-.72-2.1-.4-.4-.9-.69-2.1-.72-1.2-.06-1.5-.07-4.8-.07zM12 7.9c2.2 0 4.1 1.8 4.1 4.1s-1.8 4.1-4.1 4.1-4.1-1.8-4.1-4.1 1.8-4.1 4.1-4.1zm0 6.2c1.2 0 2.1-.96 2.1-2.1s-.96-2.1-2.1-2.1-2.1.96-2.1 2.1.96 2.1 2.1 2.1z" />
                    </svg>
                </a>
                <select class="bg-[#07061c] text-[#48c6ef] p-2 rounded-md border-none">
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                    <option value="de">Deutsch</option>
                </select>
            </div>
        </div>
        <div class="mt-6 text-center text-sm text-[#aaa]">
            &copy; 2024 Air Drumming. All Rights Reserved.
        </div>
    </div>
</footer>
<script>
    const toggleButton = document.getElementById('toggle-services');
    const dropdown = document.getElementById('services-dropdown');

    toggleButton.addEventListener('click', function(event) {
        event.stopPropagation();
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.add('hidden');
        }
    });

    document.addEventListener('click', function(event) {
        if (!toggleButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>

