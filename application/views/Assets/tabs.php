<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

<!-- This is an example component -->
<div class="max-w-2xl mx-auto">
    <div style="margin-top:2rem "></div>
<h2 class="g-text-xlarge g-text-bold lg:u-col-12 md:u-col-6 sm:u-col-2">Best Browsers Apps</h2>
    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
        <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active"
                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="true">
                    Windows
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 "
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">
                    MacOS
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">
                    Ios
                </button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">
                    Android
                </button>
            </li>
        </ul>
    </div>

    <!-- <?php print_r($tabCard['Windows'][0]->name) ?> -->
<div id="myTabContent">
    <div class="c-productCards g-grid-container u-grid-columns g-outer-spacing-bottom-large g-outer-spacing-top-large"
            id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <?php foreach ($tabCard['Windows'] as $windows) { ?>
            <div section="related_apps|Games|pos0"
                class="c-globalCard lg:u-col-3 md:u-col-3 sm:u-col-2 c-productCard u-flexbox-column c-productCard-simple">
                <div class="c-productCard_header u-flexbox">
                    <div class="c-productCard_icon">
                        <div>
                            <picture class="c-cmsImage">
                                <img src="<?php echo $windows->logo ?>"
                                    alt="<?php echo $windows->name ?> logo" />
                            </picture>
                        </div>
                    </div>
                    <div class="c-productCard_info">
                        <h3 class="c-productCard_title g-text-large g-text-bold g-outer-spacing-bottom-xsmall">
                        <?php echo $windows->name ?>
                        </h3>
                        <div class="c-productCard_subhead u-text-uppercase g-color-primary g-text-bold g-text-xsmall">
                        <?php echo $windows->free ?>
                        </div>
                    </div>
                </div>
                <div class="c-productCard_footer u-flexbox-column g-outer-spacing-top-medium">
                    <div class="c-productCard_summary g-text-small g-color-gray70">
                        <?php echo $windows->description ?>
                    </div>
                    <!---->
                </div>
                <a href="<?php echo $windows->downloadurl ?>" class="c-productCard_link">
                    <?php echo $windows->name ?>
                </a>
            </div>
        <?php } ?>
    </div>



    <div class="c-productCards g-grid-container u-grid-columns g-outer-spacing-bottom-large g-outer-spacing-top-large hidden"
            id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <?php foreach ($tabCard['Mac'] as $mac) { ?>
            <div section="related_apps|Games|pos0"
                class="c-globalCard lg:u-col-3 md:u-col-3 sm:u-col-2 c-productCard u-flexbox-column c-productCard-simple">
                <div class="c-productCard_header u-flexbox">
                    <div class="c-productCard_icon">
                        <div>
                            <picture class="c-cmsImage">
                                <img src="<?php echo $mac->logo ?>"
                                    alt="<?php echo $mac->name ?> logo" />
                            </picture>
                        </div>
                    </div>
                    <div class="c-productCard_info">
                        <h3 class="c-productCard_title g-text-large g-text-bold g-outer-spacing-bottom-xsmall">
                        <?php echo $mac->name ?>
                        </h3>
                        <div class="c-productCard_subhead u-text-uppercase g-color-primary g-text-bold g-text-xsmall">
                        <?php echo $mac->free ?>
                        </div>
                    </div>
                </div>
                <div class="c-productCard_footer u-flexbox-column g-outer-spacing-top-medium">
                    <div class="c-productCard_summary g-text-small g-color-gray70">
                        <?php echo $mac->description ?>
                    </div>
                    <!---->
                </div>
                <a href="<?php echo $mac->downloadurl ?>" class="c-productCard_link">
                    <?php echo $mac->name ?>
                </a>
            </div>
        <?php } ?>
    </div>

    <div class="c-productCards g-grid-container u-grid-columns g-outer-spacing-bottom-large g-outer-spacing-top-large hidden"
            id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <?php foreach ($tabCard['Ios'] as $Ios) { ?>
            <div section="related_apps|Games|pos0"
                class="c-globalCard lg:u-col-3 md:u-col-3 sm:u-col-2 c-productCard u-flexbox-column c-productCard-simple">
                <div class="c-productCard_header u-flexbox">
                    <div class="c-productCard_icon">
                        <div>
                            <picture class="c-cmsImage">
                                <img src="<?php echo $Ios->logo ?>"
                                    alt="<?php echo $Ios->name ?> logo" />
                            </picture>
                        </div>
                    </div>
                    <div class="c-productCard_info">
                        <h3 class="c-productCard_title g-text-large g-text-bold g-outer-spacing-bottom-xsmall">
                        <?php echo $Ios->name ?>
                        </h3>
                        <div class="c-productCard_subhead u-text-uppercase g-color-primary g-text-bold g-text-xsmall">
                        <?php echo $Ios->free ?>
                        </div>
                    </div>
                </div>
                <div class="c-productCard_footer u-flexbox-column g-outer-spacing-top-medium">
                    <div class="c-productCard_summary g-text-small g-color-gray70">
                        <?php echo $Ios->description ?>
                    </div>
                    <!---->
                </div>
                <a href="<?php echo $Ios->downloadurl ?>" class="c-productCard_link">
                    <?php echo $Ios->name ?>
                </a>
            </div>
        <?php } ?>
    </div>

    <div class="c-productCards g-grid-container u-grid-columns g-outer-spacing-bottom-large g-outer-spacing-top-large hidden"
        id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
       <?php foreach ($tabCard['Android'] as $Android) { ?>
            <div section="related_apps|Games|pos0"
                class="c-globalCard lg:u-col-3 md:u-col-3 sm:u-col-2 c-productCard u-flexbox-column c-productCard-simple">
                <div class="c-productCard_header u-flexbox">
                    <div class="c-productCard_icon">
                        <div>
                            <picture class="c-cmsImage">
                                <img src="<?php echo $Android->logo ?>"
                                    alt="<?php echo $Android->name ?> logo" />
                            </picture>
                        </div>
                    </div>
                    <div class="c-productCard_info">
                        <h3 class="c-productCard_title g-text-large g-text-bold g-outer-spacing-bottom-xsmall">
                        <?php echo $Android->name ?>
                        </h3>
                        <div class="c-productCard_subhead u-text-uppercase g-color-primary g-text-bold g-text-xsmall">
                        <?php echo $Android->free ?>
                        </div>
                    </div>
                </div>
                <div class="c-productCard_footer u-flexbox-column g-outer-spacing-top-medium">
                    <div class="c-productCard_summary g-text-small g-color-gray70">
                        <?php echo $windows->description ?>
                    </div>
                    <!---->
                </div>
                <a href="<?php echo $Android->downloadurl ?>" class="c-productCard_link">
                    <?php echo $Android->name ?>
                </a>
            </div>
        <?php } ?>

    </div>
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

</div>

<style>
    .max-w-2xl {
        max-width: 90rem;
    }
    .c-productCard_summary {
        max-height: 3em; /* Adjust this value based on your font size and desired max lines */
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Number of lines to show */
        -webkit-box-orient: vertical;
    }
</style>