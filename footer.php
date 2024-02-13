<?php
/**
 * Theme Footer
 */

?>
<footer class="bg-primary-400 pt-44">
    <div class="m-auto max-w-7xl px-4 lg:px-0 pb-16">
        <div class="grid grid-cols-12 gap-6 md:gap-0 lg:gap-8">
            <div class="col-span-12 md:col-span-6 lg:col-span-3 mt-0 md:mt-8">
                <div
                    class="flex h-full items-center justify-between gap-6 py-6 md:flex-col md:items-start md:justify-between md:space-y-6 md:py-0">
                    <div class="w-full">
                        <a href="<?= site_url(); ?>"
                            class="logo-font flex items-center w-[180px] lg:w-[220px] text-3xl font-semibold bg-gradient-to-r from-primary-600 to-gray-700 bg-clip-text text-transparent">
                            <img src="<?= cutme_load_image('cutme-footer-logo.svg'); ?>" alt="cutme Footer Logo">
                        </a>
                        <p class="mt-8 font-inter font-normal text-gray-500 text-lg">
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.
                        </p>
                        <div class="mt-8">
                            <h4 class="font-semibold font-inter text-2xl text-primary-950 mb-8">
                                Follow Us
                            </h4>
                            <ul class="flex gap-3 items-center">
                                <li class="inline-block">
                                    <a href="#" class="text-gray-900 text-xl">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.0591 0.399902C15.3934 0.399902 19.7178 4.72424 19.7178 10.0586C19.7178 14.8795 16.1857 18.8754 11.5683 19.5999V12.8506H13.8188L14.247 10.0586H11.5683V8.24678C11.5683 7.48294 11.9424 6.73842 13.1423 6.73842H14.3602V4.36147C14.3602 4.36147 14.2911 4.34968 14.171 4.332C13.8106 4.27894 12.9907 4.17283 12.1981 4.17283C11.9223 4.17283 11.6585 4.19372 11.4079 4.23501C9.65393 4.52404 8.54991 5.81254 8.54991 7.93066V10.0586H6.09751V12.8506H8.54991V19.5999C3.93243 18.8754 0.400391 14.8795 0.400391 10.0586C0.400391 4.72424 4.72473 0.399902 10.0591 0.399902Z"
                                                fill="#093344" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="inline-block">
                                    <a href="#" class="text-gray-900 text-xl">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.491922 0.919922L8.64612 11.7746L0.44043 20.5999H2.2872L9.47127 12.8732L15.2758 20.5999H21.5604L12.9474 9.13468L20.5852 0.919922H18.7385L12.1223 8.03606L6.77656 0.919922H0.491922ZM3.20774 2.27424H6.09491L18.8442 19.2454H15.957L3.20774 2.27424Z"
                                                fill="#093344" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="inline-block">
                                    <a href="#" class="text-gray-900 text-xl">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.400391 6.3999H4.69399V19.5999H0.400391V6.3999ZM16.3892 6.5547C16.3436 6.5403 16.3004 6.5247 16.2524 6.5115C16.1948 6.49846 16.1367 6.48725 16.0784 6.4779C15.8249 6.42607 15.5668 6.39994 15.308 6.3999C12.8048 6.3999 11.2172 8.2203 10.694 8.9235V6.3999H6.40039V19.5999H10.694V12.3999C10.694 12.3999 13.9388 7.8807 15.308 11.1999V19.5999H19.6004V10.6923C19.5986 9.74447 19.2824 8.82401 18.7012 8.07523C18.1201 7.32645 17.3069 6.79166 16.3892 6.5547Z"
                                                fill="#093344" />
                                            <path
                                                d="M2.50039 4.5999C3.66019 4.5999 4.60039 3.6597 4.60039 2.4999C4.60039 1.3401 3.66019 0.399902 2.50039 0.399902C1.34059 0.399902 0.400391 1.3401 0.400391 2.4999C0.400391 3.6597 1.34059 4.5999 2.50039 4.5999Z"
                                                fill="#093344" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="inline-block">
                                    <a href="#" class="text-gray-900 text-xl">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.1268 3.7215C14.8989 3.7215 14.6762 3.78907 14.4868 3.91565C14.2973 4.04223 14.1497 4.22215 14.0625 4.43265C13.9753 4.64315 13.9525 4.87478 13.9969 5.09825C14.0414 5.32171 14.1511 5.52698 14.3122 5.68809C14.4733 5.8492 14.6786 5.95892 14.902 6.00337C15.1255 6.04782 15.3571 6.025 15.5676 5.93781C15.7781 5.85062 15.9581 5.70297 16.0846 5.51352C16.2112 5.32407 16.2788 5.10135 16.2788 4.8735C16.2788 4.56797 16.1574 4.27496 15.9414 4.05892C15.7253 3.84287 15.4323 3.7215 15.1268 3.7215ZM19.5428 6.0447C19.5241 5.24819 19.3749 4.46013 19.1012 3.7119C18.8571 3.07171 18.4772 2.49201 17.9876 2.0127C17.5122 1.52063 16.9312 1.14311 16.2884 0.908702C15.5421 0.626617 14.7532 0.474024 13.9556 0.457502C12.938 0.399902 12.6116 0.399902 10.0004 0.399902C7.38919 0.399902 7.06279 0.399902 6.04519 0.457502C5.24758 0.474024 4.45864 0.626617 3.71239 0.908702C3.0708 1.14548 2.49025 1.52268 2.01319 2.0127C1.52112 2.48807 1.1436 3.06912 0.909191 3.7119C0.627105 4.45815 0.474512 5.24709 0.457991 6.0447C0.400391 7.0623 0.400391 7.3887 0.400391 9.9999C0.400391 12.6111 0.400391 12.9375 0.457991 13.9551C0.474512 14.7527 0.627105 15.5417 0.909191 16.2879C1.1436 16.9307 1.52112 17.5117 2.01319 17.9871C2.49025 18.4771 3.0708 18.8543 3.71239 19.0911C4.45864 19.3732 5.24758 19.5258 6.04519 19.5423C7.06279 19.5999 7.38919 19.5999 10.0004 19.5999C12.6116 19.5999 12.938 19.5999 13.9556 19.5423C14.7532 19.5258 15.5421 19.3732 16.2884 19.0911C16.9312 18.8567 17.5122 18.4792 17.9876 17.9871C18.4793 17.5096 18.8596 16.9294 19.1012 16.2879C19.3749 15.5397 19.5241 14.7516 19.5428 13.9551C19.5428 12.9375 19.6004 12.6111 19.6004 9.9999C19.6004 7.3887 19.6004 7.0623 19.5428 6.0447ZM17.8148 13.8399C17.8078 14.4493 17.6974 15.0531 17.4884 15.6255C17.3351 16.0433 17.0889 16.4208 16.7684 16.7295C16.457 17.0468 16.0803 17.2925 15.6644 17.4495C15.0919 17.6585 14.4882 17.7689 13.8788 17.7759C12.9188 17.8239 12.5636 17.8335 10.0388 17.8335C7.51399 17.8335 7.15879 17.8335 6.19879 17.7759C5.56605 17.7878 4.936 17.6903 4.33639 17.4879C3.93874 17.3229 3.57929 17.0778 3.28039 16.7679C2.96176 16.4595 2.71864 16.0817 2.56999 15.6639C2.33561 15.0832 2.20562 14.4658 2.18599 13.8399C2.18599 12.8799 2.12839 12.5247 2.12839 9.9999C2.12839 7.4751 2.12839 7.1199 2.18599 6.1599C2.19029 5.53692 2.30402 4.91953 2.52199 4.3359C2.691 3.9307 2.95041 3.56949 3.28039 3.2799C3.57205 2.94982 3.93251 2.68767 4.33639 2.5119C4.92156 2.30074 5.53831 2.19038 6.16039 2.1855C7.12039 2.1855 7.47559 2.1279 10.0004 2.1279C12.5252 2.1279 12.8804 2.1279 13.8404 2.1855C14.4498 2.19249 15.0535 2.30286 15.626 2.5119C16.0622 2.67381 16.4538 2.93704 16.7684 3.2799C17.083 3.57479 17.3288 3.93533 17.4884 4.3359C17.7018 4.92048 17.8122 5.53761 17.8148 6.1599C17.8628 7.1199 17.8724 7.4751 17.8724 9.9999C17.8724 12.5247 17.8628 12.8799 17.8148 13.8399ZM10.0004 5.0751C9.02677 5.077 8.07555 5.36745 7.26694 5.90974C6.45832 6.45204 5.82859 7.22185 5.45732 8.12191C5.08604 9.02196 4.98989 10.0119 5.18099 10.9666C5.3721 11.9212 5.8419 12.7979 6.53102 13.4856C7.22015 14.1734 8.09768 14.6415 9.05274 14.8308C10.0078 15.02 10.9975 14.9219 11.8968 14.5489C12.7962 14.1759 13.5648 13.5446 14.1055 12.735C14.6462 11.9253 14.9348 10.9735 14.9348 9.9999C14.9361 9.352 14.8092 8.71025 14.5616 8.11154C14.3139 7.51284 13.9504 6.969 13.4918 6.51131C13.0332 6.05362 12.4887 5.69111 11.8895 5.44463C11.2903 5.19816 10.6483 5.07257 10.0004 5.0751ZM10.0004 13.1967C9.36812 13.1967 8.75006 13.0092 8.22434 12.6579C7.69863 12.3067 7.28889 11.8074 7.04693 11.2233C6.80497 10.6391 6.74167 9.99636 6.86502 9.37624C6.98837 8.75612 7.29283 8.1865 7.73991 7.73942C8.18699 7.29234 8.75661 6.98788 9.37673 6.86453C9.99685 6.74118 10.6396 6.80449 11.2238 7.04644C11.8079 7.2884 12.3072 7.69814 12.6584 8.22386C13.0097 8.74957 13.1972 9.36764 13.1972 9.9999C13.1972 10.4197 13.1145 10.8354 12.9538 11.2233C12.7932 11.6111 12.5577 11.9635 12.2609 12.2604C11.964 12.5572 11.6116 12.7927 11.2238 12.9534C10.8359 13.114 10.4202 13.1967 10.0004 13.1967Z"
                                                fill="#093344" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-3 mt-0 md:mt-8">
                <div class="mb-8 lg:mb-0 pl-0 lg:pl-12">
                    <h4 class="font-semibold font-inter text-2xl text-primary-950 mb-8">
                        Popular Link
                    </h4>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-1',
                            'container_class' => 'footer-menu',
                            'menu_class' => 'list-inside space-y-3 font-inter font-normal text-gray-500 text-lg',
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 lg:col-span-2 mt-0 md:mt-8">
                <div class="mb-8 lg:mb-0">
                    <h4 class="font-semibold font-inter text-2xl text-primary-950 mb-8">
                        Product
                    </h4>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-2',
                            'container_class' => 'footer-menu',
                            'menu_class' => 'list-inside space-y-3 font-inter font-normal text-gray-500 text-lg',
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 lg:col-span-2 mt-0 md:mt-8">
                <div class="mb-8 lg:mb-0">
                    <h4 class="font-semibold font-inter text-2xl text-primary-950 mb-8">
                        Resource
                    </h4>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-3',
                            'container_class' => 'footer-menu',
                            'menu_class' => 'list-inside space-y-3 font-inter font-normal text-gray-500 text-lg',
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 lg:col-span-2 mt-0 md:mt-8">
                <div class="mb-8 lg:mb-0">
                    <h4 class="font-semibold font-inter text-2xl text-primary-950 mb-8">
                        Company
                    </h4>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-4',
                            'container_class' => 'footer-menu',
                            'menu_class' => 'list-inside space-y-3 font-inter font-normal text-gray-500 text-lg',
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
    <div
        class="max-w-7xl mx-auto px-4 lg:px-0 py-8 mt-0 border-t border-black flex justify-between items-center">
        <div class="w-full lg:w-6/12 mx-auto text-center">
            <span class="text-black text-lg inline-block font-inter font-normal">Copyright © 2024. All rights are
                reserved Link Shorter</span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>