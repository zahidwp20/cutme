<?php
/**
 * Template Name: Contact
 *
 * @package cutme
 */

get_header();

get_template_part('templates-parts/part', 'banner');

?>

<!-- contact-start -->
<section class="relative py-24">
    <div class="mx-auto max-w-7xl px-4 lg:px-0 grid items-center gap-[30px] lg:grid-cols-12 relative">
        <div class="lg:col-span-5">
            <h2 class="font-bold font-literata text-3xl lg:text-[55px] lg:leading-[65px] text-primary-950 mb-5">
                Get In Touch
            </h2>
            <p class="text-lg mb-12 text-primary-950 pr-0 lg:pr-4">
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout.
            </p>


            <form class="w-full">
                <div class="mb-5">
                    <label for="name" class="block mb-4 text-lg font-medium font-inter text-gray-700">Name</label>
                    <input type="name" id="name"
                        class="bg-primary-200 border border-primary-500 text-gray-700 text-lg rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full px-2.5 py-4 placeholder-gray-400 outline-none"
                        placeholder="Name" required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-4 text-lg font-medium font-inter text-gray-700">Email
                        Address</label>
                    <input type="email" id="email"
                        class="bg-primary-200 border border-primary-500 text-gray-700 text-lg rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full px-2.5 py-4 placeholder-gray-400 outline-none"
                        placeholder="info@gmail.com" required>
                </div>
                <div class="mb-5">
                    <label for="message" class="block mb-4 text-lg font-medium font-inter text-gray-700">Message</label>
                    <textarea id="message" rows="5"
                        class="block bg-primary-200 border border-primary-500 text-gray-700 text-lg rounded-md focus:ring-primary-500 focus:border-primary-500 w-full px-2.5 py-4 placeholder-gray-400 outline-none"
                        placeholder="Message"></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-primary-500 font-medium font-inter rounded-md text-lg w-full sm:w-auto px-8 py-3 text-center mt-5">Submit</button>
            </form>
        </div>
        <div class="lg:col-span-7">
            <img src="<?= cutme_load_image('contact.svg'); ?>" alt="contact">
        </div>
    </div>
</section>
<!-- contact-end -->

<?php
get_template_part('templates-parts/part', 'faq'); ?>

<?php
get_template_part('templates-parts/part', 'cta');
get_footer();
