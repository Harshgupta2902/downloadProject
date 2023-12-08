    <div section="nav" class="c-siteHeader g-outer-spacing-bottom-large">
            <div class="c-siteHeader_grid g-grid-container">
            <div section="logo" class="c-siteLogo"><a href="<?php echo base_url() ?>" rel="follow" aria-label="Download.com"><svg
                    class="c-siteLogo_image c-siteLogo_image-medium g-fill-white">
                    <use xlink:href="#logo"></use>
                </svg></a></div>
              
            <nav class="flex justify-center">
                <ul class="flex flex-wrap items-center font-medium text-sm">
                    <?php foreach ($mainNav as $mainNav): ?>
                        <li class="p-4 lg:px-8 relative flex items-center space-x-1" x-data="{ open: false }"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a class="text-slate-800 hover:text-slate-900" href="#0" :aria-expanded="open"><?php echo $mainNav["nav_title"]; ?></a>
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
                                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="<?php echo base_url('Welcome/product/') . urlencode(str_replace(' ', '-', $subnavItem["subnav_title"])); ?>">
                                            <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                                <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                                    <!-- Add your SVG path here -->
                                                </svg>
                                            </div>
                                            <span class="whitespace-nowrap"><?php echo $subnavItem["subnav_title"]; ?></span>
                                        </a>
                                    </li>
                                <?php
                                 endforeach; ?>
                            </ul>
                        </li>
                    <?php
            endforeach; ?>
                </ul>
            </nav>
    </div>
    </div>