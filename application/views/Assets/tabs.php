<div class="container">
<div class="content">
    <main class="main">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-4">
                <section class="products">
                    <div class="section-header">
                        <h4>Windows</h4>
                        <a class="btn-transparent view-all" href="">View All</a>
                    </div>
                    <div class="product-list">
                        <?php foreach ($softwares['windows'] as $windows) { ?>
                        <div class="card_wrap__S35wt">
                            <span class="badge-<?php echo $windows['badge'] ?>" data-badge="latest"></span>
                                <img alt="<?php echo $windows['title'] ?>" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" style="color:transparent;min-width:auto;width:45;height:45" src="<?php echo $windows['icon'] ?>" />
                            <div class="card_info__LY5ob">
                                <a class="card_title__az7G7" href="<?php echo base_url('product/').urlencode($windows['slug']) ?>"><?php echo $windows['title'] ?></a>
                                <p class="card_desc__b66Ca"><?php echo $windows['excerpt'] ?></p>
                                <a class="card_category__4DBde" href=""><?php echo $windows['sub_category_title'] ?></a>
                            </div>
                            <div class="card_data__R40qV card_bordered__EbLSO">
                                <a class="card_windows__IDOFA card_primary__29Dv6" href="/ms-windows/">
                                <i class="icon card_windows__IDOFA card_primary-icon__sjMeT">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M0 80v160h224V52zm256-32v192h256V16zm0 224v192l256 32V272zM0 272v160l224 28V272z"></path>
                                    </svg>
                                </i>
                                <span class="card_primary-text__fEKA_">windows</span>
                                </a>
                                <div class="card_meta-data__L5O0g">
                                <div class="card_meta-item__TwrDI">
                                    <i class="icon card_meta-icon__nd_yu">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -16 512 512">
                                            <path d="M413.492 128.91C396.2 42.145 311.844-14.172 225.078 3.121 161.618 15.77 111.996 65.36 99.308 128.813 37.79 135.903-6.34 191.52.747 253.043c6.524 56.621 54.48 99.34 111.477 99.3h80.093c8.848 0 16.02-7.171 16.02-16.019 0-8.847-7.172-16.02-16.02-16.02h-80.093c-44.239-.261-79.883-36.331-79.625-80.566.261-44.238 36.332-79.886 80.57-79.625 8.164 0 15.023-6.14 15.922-14.258 8.133-70.304 71.722-120.707 142.031-112.574 59.11 6.836 105.738 53.465 112.574 112.574 1.344 8.262 8.5 14.313 16.867 14.258 44.239 0 80.098 35.86 80.098 80.098 0 44.234-35.86 80.094-80.098 80.094H320.47c-8.848 0-16.02 7.172-16.02 16.02 0 8.847 7.172 16.019 16.02 16.019h80.097c61.926-.387 111.817-50.903 111.434-112.828-.352-56.395-42.531-103.754-98.508-110.606zm0 0"></path>
                                            <path d="m313.02 385.184-40.61 40.62V224.192c0-8.847-7.172-16.02-16.015-16.02-8.848 0-16.02 7.173-16.02 16.02v201.614l-40.61-40.621c-6.144-6.368-16.288-6.543-22.652-.395-6.363 6.145-6.539 16.285-.394 22.649.133.136.261.265.394.394l67.938 67.953a16.077 16.077 0 0 0 5.176 3.461 15.831 15.831 0 0 0 12.335 0 16.018 16.018 0 0 0 5.172-3.46l67.938-67.954c6.363-6.144 6.539-16.285.394-22.648-6.148-6.364-16.289-6.54-22.652-.395-.133.129-.266.258-.394.395zm0 0"></path>
                                        </svg>
                                    </i>
                                    <span class="card_meta-text__KdSKY"><?php echo $windows['downloads_count'] ?></span>
                                </div>
                                </div>
                            </div>
                            <div class="card_size__8bQyg card_bordered__EbLSO">
                            <?php echo $windows['download_size'] ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    </section>
                </div>
                <div class="col-lg-4">
                <section class="products">
                    <div class="section-header">
                        <h4>MacOs</h4>
                        <a class="btn-transparent view-all" href="">View All</a>
                    </div>
                    <div class="product-list">
                    <?php foreach ($softwares['macos'] as $windows) { ?>
                        <div class="card_wrap__S35wt">
                            <span class="badge-<?php echo $windows['badge'] ?>" data-badge="latest"></span>
                                <img alt="<?php echo $windows['title'] ?>" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" style="color:transparent;min-width:auto;width:45;height:45" src="<?php echo $windows['icon'] ?>" />
                            <div class="card_info__LY5ob">
                                <a class="card_title__az7G7" href="<?php echo base_url('product/').urlencode($windows['slug']) ?>"><?php echo $windows['title'] ?></a>
                                <p class="card_desc__b66Ca"><?php echo $windows['excerpt'] ?></p>
                                <a class="card_category__4DBde" href=" "><?php echo $windows['sub_category_title'] ?></a>
                            </div>
                            <div class="card_data__R40qV card_bordered__EbLSO">
                                <a class="card_windows__IDOFA card_primary__29Dv6" href="/ms-windows/">
                                <i class="icon card_macos__hYQAr card_primary-icon__sjMeT"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.003 512.003"><path d="M351.98 0c-27.296 1.888-59.2 19.36-77.792 42.112-16.96 20.64-30.912 51.296-25.472 81.088 29.824.928 60.64-16.96 78.496-40.096 16.704-21.536 29.344-52 24.768-83.104z"></path><path d="M459.852 171.776c-26.208-32.864-63.04-51.936-97.824-51.936-45.92 0-65.344 21.984-97.248 21.984-32.896 0-57.888-21.92-97.6-21.92-39.008 0-80.544 23.84-106.88 64.608-37.024 57.408-30.688 165.344 29.312 257.28 21.472 32.896 50.144 69.888 87.648 70.208 33.376.32 42.784-21.408 88-21.632 45.216-.256 53.792 21.92 87.104 21.568 37.536-.288 67.776-41.28 89.248-74.176 15.392-23.584 21.12-35.456 33.056-62.08-86.816-33.056-100.736-156.512-14.816-203.904z"></path></svg></i>
                                <span class="card_primary-text__fEKA_">MacOs</span>
                                </a>
                                <div class="card_meta-data__L5O0g">
                                <div class="card_meta-item__TwrDI">
                                    <i class="icon card_meta-icon__nd_yu">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -16 512 512">
                                            <path d="M413.492 128.91C396.2 42.145 311.844-14.172 225.078 3.121 161.618 15.77 111.996 65.36 99.308 128.813 37.79 135.903-6.34 191.52.747 253.043c6.524 56.621 54.48 99.34 111.477 99.3h80.093c8.848 0 16.02-7.171 16.02-16.019 0-8.847-7.172-16.02-16.02-16.02h-80.093c-44.239-.261-79.883-36.331-79.625-80.566.261-44.238 36.332-79.886 80.57-79.625 8.164 0 15.023-6.14 15.922-14.258 8.133-70.304 71.722-120.707 142.031-112.574 59.11 6.836 105.738 53.465 112.574 112.574 1.344 8.262 8.5 14.313 16.867 14.258 44.239 0 80.098 35.86 80.098 80.098 0 44.234-35.86 80.094-80.098 80.094H320.47c-8.848 0-16.02 7.172-16.02 16.02 0 8.847 7.172 16.019 16.02 16.019h80.097c61.926-.387 111.817-50.903 111.434-112.828-.352-56.395-42.531-103.754-98.508-110.606zm0 0"></path>
                                            <path d="m313.02 385.184-40.61 40.62V224.192c0-8.847-7.172-16.02-16.015-16.02-8.848 0-16.02 7.173-16.02 16.02v201.614l-40.61-40.621c-6.144-6.368-16.288-6.543-22.652-.395-6.363 6.145-6.539 16.285-.394 22.649.133.136.261.265.394.394l67.938 67.953a16.077 16.077 0 0 0 5.176 3.461 15.831 15.831 0 0 0 12.335 0 16.018 16.018 0 0 0 5.172-3.46l67.938-67.954c6.363-6.144 6.539-16.285.394-22.648-6.148-6.364-16.289-6.54-22.652-.395-.133.129-.266.258-.394.395zm0 0"></path>
                                        </svg>
                                    </i>
                                    <span class="card_meta-text__KdSKY"><?php echo $windows['downloads_count'] ?></span>
                                </div>
                                </div>
                            </div>
                            <div class="card_size__8bQyg card_bordered__EbLSO">
                            <?php echo $windows['download_size'] ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    </section>
                </div>
                <div class="col-lg-4">
                <section class="products">
                    <div class="section-header">
                        <h4>Android</h4>
                        <a class="btn-transparent view-all" href="">View All</a>
                    </div>
                    <div class="product-list">
                    <?php foreach ($softwares['android'] as $windows) { ?>
                        <div class="card_wrap__S35wt">
                            <span class="badge-<?php echo $windows['badge'] ?>" data-badge="latest"></span>
                        <img alt="<?php echo $windows['title'] ?>" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" style="color:transparent;min-width:auto;width:45;height:45" src="<?php echo $windows['icon'] ?>" />
                            <div class="card_info__LY5ob">
                                <a class="card_title__az7G7" href="<?php echo base_url('product/').urlencode($windows['slug']) ?>"><?php echo $windows['title'] ?></a>
                                <p class="card_desc__b66Ca"><?php echo $windows['excerpt'] ?></p>
                                <a class="card_category__4DBde" href=" "><?php echo $windows['sub_category_title'] ?></a>
                            </div>
                            <div class="card_data__R40qV card_bordered__EbLSO">
                                <a class="card_windows__IDOFA card_primary__29Dv6" href="/ms-windows/">
                                <i class="icon card_android__vpTx_ card_primary-icon__sjMeT"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.007 512.007"><path d="M64.004 192.007c-17.664 0-32 14.336-32 32v128c0 17.664 14.336 32 32 32s32-14.336 32-32v-128c0-17.664-14.336-32-32-32zm384 0c-17.664 0-32 14.336-32 32v128c0 17.664 14.336 32 32 32s32-14.336 32-32v-128c0-17.664-14.336-32-32-32zm-320 1.856v192c0 17.664 14.336 32 32 32v62.144c0 17.664 14.336 32 32 32s32-14.336 32-32v-62.144h64v62.144c0 17.664 14.336 32 32 32s32-14.336 32-32v-62.144c17.664 0 32-14.336 32-32v-192h-256zm0-33.856h256c0-40.32-19.008-75.84-48.128-99.296l28.48-34.528c5.632-6.816 4.672-16.896-2.144-22.528-6.848-5.6-16.896-4.672-22.528 2.144l-31.136 37.728c-16.064-7.264-33.76-11.52-52.544-11.52-19.04 0-36.96 4.416-53.184 11.904L172.516 6.023c-5.536-6.88-15.584-8.032-22.496-2.496-6.88 5.536-8 15.584-2.496 22.496l28.096 35.136c-28.832 23.456-47.616 58.784-47.616 98.848zm160-80c8.832 0 16 7.168 16 16s-7.168 16-16 16-16-7.168-16-16 7.168-16 16-16zm-64 0c8.832 0 16 7.168 16 16s-7.168 16-16 16-16-7.168-16-16 7.168-16 16-16z"></path></svg></i>
                                <span class="card_primary-text__fEKA_">Android</span>
                                </a>
                                <div class="card_meta-data__L5O0g">
                                <div class="card_meta-item__TwrDI">
                                    <i class="icon card_meta-icon__nd_yu">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -16 512 512">
                                            <path d="M413.492 128.91C396.2 42.145 311.844-14.172 225.078 3.121 161.618 15.77 111.996 65.36 99.308 128.813 37.79 135.903-6.34 191.52.747 253.043c6.524 56.621 54.48 99.34 111.477 99.3h80.093c8.848 0 16.02-7.171 16.02-16.019 0-8.847-7.172-16.02-16.02-16.02h-80.093c-44.239-.261-79.883-36.331-79.625-80.566.261-44.238 36.332-79.886 80.57-79.625 8.164 0 15.023-6.14 15.922-14.258 8.133-70.304 71.722-120.707 142.031-112.574 59.11 6.836 105.738 53.465 112.574 112.574 1.344 8.262 8.5 14.313 16.867 14.258 44.239 0 80.098 35.86 80.098 80.098 0 44.234-35.86 80.094-80.098 80.094H320.47c-8.848 0-16.02 7.172-16.02 16.02 0 8.847 7.172 16.019 16.02 16.019h80.097c61.926-.387 111.817-50.903 111.434-112.828-.352-56.395-42.531-103.754-98.508-110.606zm0 0"></path>
                                            <path d="m313.02 385.184-40.61 40.62V224.192c0-8.847-7.172-16.02-16.015-16.02-8.848 0-16.02 7.173-16.02 16.02v201.614l-40.61-40.621c-6.144-6.368-16.288-6.543-22.652-.395-6.363 6.145-6.539 16.285-.394 22.649.133.136.261.265.394.394l67.938 67.953a16.077 16.077 0 0 0 5.176 3.461 15.831 15.831 0 0 0 12.335 0 16.018 16.018 0 0 0 5.172-3.46l67.938-67.954c6.363-6.144 6.539-16.285.394-22.648-6.148-6.364-16.289-6.54-22.652-.395-.133.129-.266.258-.394.395zm0 0"></path>
                                        </svg>
                                    </i>
                                    <span class="card_meta-text__KdSKY"><?php echo $windows['downloads_count'] ?></span>
                                </div>
                                </div>
                            </div>
                            <div class="card_size__8bQyg card_bordered__EbLSO">
                            <?php echo $windows['download_size'] ?>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<style>
  @media only screen and (min-width: 1200px)
.content {
    /* flex-direction: row; */
    /* gap: 30px; */
}

.content {
    /* align-items: flex-start; */
    display: flex;
    flex-direction: column;
    gap: 30px;
    /* justify-content: flex-start; */
    margin-top: 40px;
    min-height: 100vh;
    /* width: 100%; */
}
</style>