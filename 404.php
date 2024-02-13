<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cutme
 */

get_header();
?>

    <section class="banner py-16 relative">
        <div aria-hidden="true" class="absolute z-[-1] inset-0 top-56 grid grid-cols-2 -space-x-52 opacity-50">
            <div class="h-56 bg-gradient-to-br from-primary-200/50 to-purple-400/50 blur-[106px]"></div>
            <div class="h-32 bg-gradient-to-r from-cyan-400/50 to-sky-300/50 blur-[106px] "></div>
        </div>
        <div class="mx-auto px-4 pt-40 sm:px-12 sm:pt-40 md:pt-32 lg:pt-40 xl:max-w-6xl xl:px-0">
            <div class="flex flex-col items-center max-w-xl mx-auto text-center">
                <p class="block w-12 h-12 p-3 mb-8 text-sm font-medium text-blue-500 rounded-full bg-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                    </svg>
                </p>
                <h1 class="block text-center mb-6 text-4xl font-bold text-blue-900 sm:text-5xl lg:text-6xl">404 Page Not Found !</h1>
                <p class="text-md text-gray-700">The page you are looking for doesn't exist. Here are some helpful links.</p>
                <div class="mt-8 flex justify-center items-center md:justify-start">
                    <a href="#" class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:bg-primary-700 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                        <span class="relative text-sm font-semibold text-white">Home Page</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
