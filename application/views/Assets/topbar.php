<header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="<?php echo base_url() ?>" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path
                            d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                        <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                    </g>
                </svg>
                <span class="ml-3 text-xl text-gray-800">GetItFast<span class="text-pink-500">.</span></span>
            </a>

            <nav id="nav" class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
            <ul class="flex flex-wrap items-center font-medium text-sm">
                    <?php foreach ($mainNav as $mainNav): ?>
                        <li class="p-4 lg:px-8 relative flex items-center space-x-1" x-data="{ open: false }"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 hover:text-slate-900" href="<?php echo base_url('search') ?>" :aria-expanded="open"><?php echo $mainNav["nav_title"]; ?></a>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                            <span class="sr-only">Show submenu for "<?php echo $mainNav["nav_title"]; ?>"</span>
                            <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                            </svg>
                        </button>
                        <!-- 2nd level menu -->
                        <ul
                            class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
                            x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" x-cloak
                            @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                                <?php foreach ($mainNav["subnav"] as $subnavItem): ?>
                                    <li>
                                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="<?php echo base_url('product/') . urlencode(str_replace(' ', '-', $subnavItem["subnav_id"])); ?>">
                                            <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                                <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                                    <!-- Add your SVG path here -->
                                                </svg>
                                            </div>
                                            <span class="whitespace-nowrap"><?php echo $subnavItem["subnav_title"]; ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
               
            </nav>


            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </header>

    <style>
        .g-grid-container{
                margin-left: auto;
        }
    </style>    