<div>
    <nav class="p-4 fixed top-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <ul id="main-menu" class="hidden md:flex gap-[90px]">
                <li><a href="#hero-section" class="">Home</a></li>
                <li><a href="#about-me" class="">About Me</a></li>
                <li><a href="#" class="">Skills</a></li>
                <li><a href="#" class="">Projects</a></li>
                <li><a href="#" class="">Blogs</a></li>
                <li><a href="#" class="">Contact Me</a></li>
            </ul>

            <!-- Hamburger Menu Button (Visible on small screens) -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu"
        class="md:hidden bg-white absolute top-full left-0 right-0 transform translate-y-2 transition-transform duration-300 opacity-0 invisible">
        <ul class="py-2 px-4 border-b border-gray-300">
            <li><a href="#hero-section" class="block py-2">Home</a></li>
            <li><a href="#about-me" class="block py-2">About Me</a></li>
            <li><a href="#" class="block py-2">Skills</a></li>
            <li><a href="#" class="block py-2">Projects</a></li>
            <li><a href="#" class="block py-2">Blogs</a></li>
            <li><a href="#" class="block py-2">Contact Me</a></li>
        </ul>
    </div>
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            // console.log('clicked');
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('visible');
            mobileMenu.classList.toggle('opacity-0');
            mobileMenu.classList.toggle('translate-y-2');
        });
    </script>
</div>