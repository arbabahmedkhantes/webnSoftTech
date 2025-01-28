<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI Tool - Tailwind CSS Template for AI Tools</title>
    <link rel="icon" href="favicon.ico">
    <link href="style.css" rel="stylesheet">
</head>

<body x-data="{ page: 'home', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">


    <?php

$protocol = isset($_SERVER['HTTPS']) &&
$_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$base_url = $protocol . $_SERVER['HTTP_HOST'] . '/webnsofttech';

// echo $base_url;

?>

    <!-- ===== Header Start ===== -->
    <header class="fixed left-0 top-0 w-full z-9999 py-7 lg:py-0"
        :class="{ 'bg-dark/70 backdrop-blur-lg shadow !py-4 lg:!py-0 transition duration-100 before:absolute before:w-full before:h-[1px] before:bottom-0 before:left-0 before:features-row-border' : stickyMenu }"
        @scroll.window="stickyMenu = (window.scrollY > 0) ? true : false">
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 lg:flex items-center justify-between relative">
            <div class="w-full lg:w-1/4 flex items-center justify-between">
                <a href="index.html">
                    <img src="images/logo.svg" alt="Logo" />
                </a>

                <!-- Hamburger Toggle BTN -->
                <button class="lg:hidden block" @click="navigationOpen = !navigationOpen">
                    <span class="block relative cursor-pointer w-5.5 h-5.5">
                        <span class="du-block absolute right-0 w-full h-full">
                            <span
                                class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-[0]"
                                :class="{ '!w-full delay-300': !navigationOpen }"></span>
                            <span
                                class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-150"
                                :class="{ '!w-full delay-400': !navigationOpen }"></span>
                            <span
                                class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-200"
                                :class="{ '!w-full delay-500': !navigationOpen }"></span>
                        </span>
                        <span class="du-block absolute right-0 w-full h-full rotate-45">
                            <span
                                class="block bg-white rounded-sm ease-in-out duration-200 delay-300 absolute left-2.5 top-0 w-0.5 h-full"
                                :class="{ '!h-0 delay-[0]': !navigationOpen }"></span>
                            <span
                                class="block bg-white rounded-sm ease-in-out duration-200 delay-400 absolute left-0 top-2.5 w-full h-0.5"
                                :class="{ '!h-0 dealy-200': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>
                <!-- Hamburger Toggle BTN -->
            </div>

            <div class="w-full lg:w-3/4 h-0 lg:h-auto invisible lg:visible lg:flex items-center justify-between"
                :class="{ '!visible bg-dark shadow-lgrelative !h-auto max-h-[400px] overflow-y-scroll rounded-md mt-4 p-7.5': navigationOpen }">
                <nav>
                    <ul class="flex lg:items-center flex-col lg:flex-row gap-5 lg:gap-2">
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="<?php echo $base_url; ?>"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient"
                                :class="{'!text-white nav-gradient' :page === 'home'}">Home</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="about"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">About</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="<?php echo $base_url; ?>/#services"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Services</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="<?php echo $base_url; ?>/#pricing"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Pricing</a>
                        </li>
                        <li class="group relative lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }"
                            x-data="{ dropdown: false }">
                            <a href="#"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient flex items-center justify-between gap-3"
                                @click.prevent="dropdown = !dropdown"
                                :class="{ '!text-white nav-gradient': page === 'about' || page === 'pricing' || page === 'blog-grid' || page === 'blog-single' || page === 'signin' || page === 'signup' || page === '404' }">
                                Pages

                                <svg class="fill-current w-3 h-3 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>
                            </a>

                            <!-- Dropdown Start -->
                            <ul class="dropdown" :class="{ 'flex': dropdown }">
                                <li>
                                    <a href="about.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'about' }">About Us</a>
                                </li>
                                <li>
                                    <a href="pricing.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'pricing' }">Pricing Table</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'blog-grid' }">Blog Grid</a>
                                </li>
                                <li>
                                    <a href="blog-single.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'blog-single' }">Blog Single</a>
                                </li>
                                <li>
                                    <a href="signin.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'signin' }">Sign In</a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'signup' }">Sign Up</a>
                                </li>
                                <li>
                                    <a href="404.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === '404' }">Error Page</a>
                                </li>
                            </ul>
                            <!-- Dropdown End -->
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="<?php echo $base_url; ?>/#support"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Support</a>
                        </li>
                    </ul>
                </nav>

                <div class="flex items-center gap-6 mt-7 lg:mt-0">
                    <a href="tel:+92 316 8621957" class="text-white text-sm hover:text-opacity-75">+92 316 8621957</a>

                    <a href="signup.html"
                        class="button-border-gradient relative rounded-lg text-white text-sm flex items-center gap-1.5 py-2 px-4.5 shadow-button hover:button-gradient-hover hover:shadow-none">Get a Propsal <svg class="mt-0.5" width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.4002 7.60002L9.2252 2.35002C9.0002 2.12502 8.6502 2.12502 8.4252 2.35002C8.2002 2.57502 8.2002 2.92502 8.4252 3.15002L12.6252 7.42502H2.0002C1.7002 7.42502 1.4502 7.67502 1.4502 7.97502C1.4502 8.27502 1.7002 8.55003 2.0002 8.55003H12.6752L8.4252 12.875C8.2002 13.1 8.2002 13.45 8.4252 13.675C8.5252 13.775 8.6752 13.825 8.8252 13.825C8.9752 13.825 9.1252 13.775 9.2252 13.65L14.4002 8.40002C14.6252 8.17502 14.6252 7.82503 14.4002 7.60002Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- ===== Header End ===== -->