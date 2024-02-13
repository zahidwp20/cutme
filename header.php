<!doctype html>
<html <?php language_attributes(); ?> lang="">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>

</head>

<body <?php body_class('bg-white'); ?>>
    <?php wp_body_open(); ?>

    <header>
        <nav class="fixed inset-x-0 z-20 w-full bg-transparent lg:py-8 transition-all">
            <div class="mx-auto max-w-7xl px-4 py-4 lg:py-0 lg:px-0 xl:px-0">
                <div class="relative flex flex-wrap items-center justify-between gap-6 md:gap-0">
                    <div class="relative w-full z-20 flex justify-between md:px-0 lg:w-max">
                        <div class="flex items-center">
                            <a href="http://cutme.local"
                                class="logo-font flex items-center w-[180px] lg:w-[220px] text-3xl bg-clip-text text-transparent">
                                <img src="http://cutme.local/wp-content/themes/cutme/images/cutme-logo.svg"
                                    alt="Cutme-Logo">
                            </a>
                            <a href="#"
                                class="hidden lg:inline-block rounded-full bg-white px-6 py-2 text-lg text-gray-700 ring-1 ring-primary-800 hover:bg-primary-800">
                                <span class="inline-block leading-none">https://dribbble.com/jobs/projects/messages?page</span>
                            </a>
                        </div>
                        <div class="relative flex max-h-16 items-center lg:hidden">
                            <button aria-label="humburger" id="hamburger" class="relative mr-0 p-6">
                                <div aria-hidden="true" id="line"
                                    class="m-auto h-0.5 w-5 rounded bg-black transition duration-300"></div>
                                <div aria-hidden="true" id="line2"
                                    class="m-auto mt-2 h-0.5 w-5 rounded bg-black transition duration-300"></div>
                            </button>
                        </div>
                    </div>
                    <div id="navLayer" aria-hidden="true"
                        class="fixed inset-0 z-10 h-screen w-screen bg-gray-100/70 backdrop-blur-2xl transition duration-500 lg:hidden origin-bottom scale-y-0">
                    </div>
                    <div id="navlinks"
                        class="invisible absolute top-full left-0 z-20 origin-top-right translate-y-1/2 scale-90 flex-col flex-wrap justify-end gap-6 rounded-3xl border border-gray-100 bg-primary-500 p-8 opacity-0 shadow-2xl shadow-gray-600/10 transition-all duration-300 lg:visible lg:relative lg:translate-y-0 lg:scale-100 lg:flex-row lg:items-center lg:gap-0 lg:border-none lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none">

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container_class' => 'text-black lg:w-auto main-menu',
                                'menu_class' => 'cutme-menu-main flex flex-col gap-6 tracking-wide lg:flex-row lg:gap-0 lg:text-xl font-inter font-normal',
                            )
                        ); ?>

                    </div>
                    <div
                        class="get-started-area relative pl-4 mt-12 lg:mt-0 lg:flex items-center hidden lg:visible border-gray-100">
                        <div class="vr-line absolute top-1/2 -translate-y-1/2 left-0 w-[2px] h-4 bg-black"></div>
                        <a href="#" class="relative flex w-full items-center justify-center px-2 sm:w-max">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.8078 16.4998C21.6864 16.4997 21.567 16.4701 21.4596 16.4137C21.3523 16.3572 21.2602 16.2756 21.1913 16.1757C21.1224 16.0759 21.0788 15.9608 21.0642 15.8404C21.0495 15.72 21.0643 15.5978 21.1073 15.4843C21.6179 14.1484 21.8285 12.7165 21.7239 11.2901C21.6194 9.86374 21.2023 8.47783 20.5022 7.23065C19.8022 5.98347 18.8364 4.90557 17.6732 4.07338C16.51 3.24119 15.178 2.67509 13.7716 2.41521C12.3652 2.15533 10.9189 2.20804 9.53514 2.5696C8.15139 2.93117 6.86413 3.59273 5.76463 4.50739C4.66513 5.42204 3.78031 6.56739 3.17293 7.86221C2.56554 9.15704 2.25045 10.5696 2.25 11.9998C2.24819 13.19 2.46609 14.3703 2.89275 15.4813C2.93037 15.5738 2.94916 15.6727 2.94804 15.7725C2.94692 15.8723 2.9259 15.9708 2.88622 16.0624C2.84654 16.1539 2.78899 16.2366 2.71694 16.3056C2.6449 16.3747 2.5598 16.4286 2.46664 16.4644C2.37349 16.5001 2.27413 16.5169 2.17441 16.5137C2.07468 16.5106 1.97659 16.4875 1.88587 16.446C1.79515 16.4045 1.71363 16.3453 1.64609 16.2718C1.57854 16.1984 1.52633 16.1122 1.4925 16.0183C0.902813 14.4768 0.659558 12.8243 0.779988 11.1782C0.900419 9.53204 1.38159 7.93258 2.18936 6.49322C2.99713 5.05387 4.11173 3.80989 5.45408 2.84952C6.79644 1.88915 8.33367 1.2359 9.95674 0.936131C11.5798 0.636358 13.249 0.697395 14.8458 1.11491C16.4427 1.53243 17.9281 2.2962 19.1967 3.35206C20.4653 4.40791 21.4861 5.72997 22.1866 7.22448C22.8871 8.71899 23.2501 10.3493 23.25 11.9998C23.2518 13.3736 23.0001 14.7359 22.5075 16.0183C22.4511 16.1585 22.3546 16.2789 22.2302 16.3645C22.1057 16.4501 21.9588 16.4972 21.8078 16.4998Z"
                                        fill="black"></path>
                                    <path
                                        d="M20.0464 20.4751C18.9946 19.421 17.7396 18.5915 16.3575 18.0371C14.9754 17.4828 13.4951 17.215 12.0064 17.2501H11.9996C10.5089 17.2156 9.02679 17.4847 7.64342 18.0412C6.26005 18.5977 5.00439 19.4299 3.95289 20.4871C3.85285 20.5938 3.78619 20.7274 3.76111 20.8715C3.73603 21.0156 3.75362 21.1639 3.81172 21.2981C3.86983 21.4323 3.9659 21.5466 4.08812 21.6269C4.21035 21.7072 4.35339 21.7501 4.49964 21.7501L19.4996 21.7381C19.646 21.738 19.7891 21.6952 19.9114 21.6148C20.0336 21.5343 20.1297 21.4199 20.1877 21.2856C20.2458 21.1513 20.2632 21.0029 20.238 20.8587C20.2127 20.7146 20.1459 20.581 20.0456 20.4744L20.0464 20.4751Z"
                                        fill="black"></path>
                                    <path
                                        d="M12 15.603C14.4853 15.603 16.5 13.5883 16.5 11.103C16.5 8.61775 14.4853 6.60303 12 6.60303C9.51472 6.60303 7.5 8.61775 7.5 11.103C7.5 13.5883 9.51472 15.603 12 15.603Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <span class="relative text-lg text-black ml-4">
                                Login </span>
                        </a>
                        <a href="#" class="btn-primary-500 py-3 ml-5">
                            <span class="relative z-10">Get Started</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>