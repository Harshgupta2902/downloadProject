<div class="container mp-0">
    <ins class="adsbygoogle" data-ad-client="ca-pub-3553508983172692" data-ad-slot="1110800257" data-ad-format="auto"
        data-full-width-responsive="true" style="display: block; margin-top: 40px"></ins>
    <div class="content">
        <main class="main">
            <div class="post-wrap">
                <article class="article">
                    <h2>
                        Overview of
                        <?php echo $softData['data']['name'] ?>&nbsp;
                    </h2>
                    <?php echo $softData['data']['overview'] ?>
                    <h3>
                        Features of
                        <?php echo $softData['data']['name'] ?>
                    </h3>
                    <?php echo $softData['data']['features'] ?>
                    <h3>System Requirements and Technical Details</h3>
                    <?php echo $softData['data']['requirement'] ?>
                </article>
            </div>
            <div class="post-wrap shadow-2xl">
                <div class="section-title">
                    <h2>Comments</h2>
                </div>
                <div class="comment_form-wrap__hSvRJ">
                    <h3 class="comment_form-title__Cd864">Leave a comment</h3>
                    <p>Your email address will not be published. Required fields are marked * </p>
                <?php echo form_open('Welcome/comments'); ?>
                        <div class="comment_form-group__wt4lJ">
                            <div class="comment_form-input__sXwzF">
                                <input
                                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                    required type="text" id="name" name="name" placeholder="Name*" />
                            </div>
                            <div class="comment_form-input__sXwzF">
                                <input
                                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                    required type="email" id="email" name="email" placeholder="Email*" />
                            </div>
                        </div>
                        <div class="my-4">
                            <textarea placeholder="Comment*" id="comment" name="comment"
                            required class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <input type="hidden" name="software_id" value="<?php echo $softData['data']['id'] ?>">

                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button type="submit"
                                class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                                Post Comment
                            </button>
                        </div>
                <?php echo form_close(); ?>

                </div>
                <div class="comment_list__iYlX2"></div>
            </div>
        </main>
        <aside class="sidebar">
            <div class="widget_wrap__lfits download-info md-none">
                <div class="c-productCard_header u-flexbox">
                    <div class="c-productCard_icon">
                        <div>
                            <picture class="c-cmsImage">
                                <img src="<?php echo $softData['data']['logo'] ?>"
                                    alt="<?php echo $softData['data']['name'] ?> logo" />
                            </picture>
                        </div>
                    </div>
                    <div class="c-productCard_info">
                        <h3 class="c-productCard_title g-text-large g-text-bold g-outer-spacing-bottom-xsmall">
                            <?php echo $softData['data']['name'] ?>
                        </h3>
                        <div class="c-productCard_subhead u-text-uppercase g-color-primary g-text-bold g-text-xsmall">
                            <?php echo $softData['data']['free'] ?>
                        </div>
                    </div>
                </div>
                <div class="filter-options">
                    <div class="form-group">
                        <div class="custom-input"></div>
                    </div>
                    <a href="<?php echo $softData['data']['downloadurl'] ?>">
                        <button class="btn-primary_dark full">Direct Download</button>
                    </a>
                    <div class="other-buttons">
                        <button class="btn fav" type="button" aria-label="Add to Favorite">
                            <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path
                                        d="m479.435-93.999-71.001-63.87Q305.173-250.565 237.76-318.26q-67.413-67.696-106.696-121.609-39.282-53.913-55.065-99.609Q60.216-585.174 60.216-634q0-102.453 68.504-171.118 68.503-68.666 170.715-68.666 51.396 0 97.85 19.739 46.454 19.739 82.15 56.913 35.695-37.174 82.15-56.913 46.454-19.739 97.85-19.739 102.694 0 171.521 68.666Q899.784-736.453 899.784-634q0 48.261-15.5 93.957-15.5 45.695-55.066 99.326-39.565 53.63-107.261 121.609-67.695 67.978-171.522 161.239l-71 63.87Zm0-142.48q94.869-86 156.021-146.087 61.153-60.086 96.305-104.739 35.152-44.652 48.587-78.822 13.434-34.17 13.434-67.859 0-57.753-38.307-95.775-38.307-38.021-95.768-38.021-45.011 0-83.881 26.5-38.869 26.5-53.869 67.5h-84.479q-14.732-41-54.018-67.5t-83.871-26.5q-56.917 0-94.861 38.021-37.945 38.022-37.945 95.761 0 34.297 13.683 69.084 13.684 34.787 48.87 79.373 35.186 44.586 95.773 104.391 60.587 59.804 154.326 144.673Zm1.13-265.651Z">
                                    </path>
                                </svg></i><span>Add to Favorite</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="widget_wrap__lfits md-none">
                <div class="widget_header__vge_D">
                    <h3>Product Information</h3>
                </div>
                <div class="info_item__0IxQW">
                    <span class="info_label__TewQ_">File name</span><span class="info_data__N609l">
                        <?php echo $softData['data']['name'] ?>
                    </span>
                </div>
                <div class="info_item__0IxQW">
                    <span class="info_label__TewQ_">Created by</span><span class="info_data__N609l">
                        <?php echo $softData['data']['company'] ?>
                    </span>
                </div>
                <div class="info_item__0IxQW">
                    <span class="info_label__TewQ_">Version</span><span class="info_data__N609l">
                        <?php echo $softData['data']['version'] ?>
                    </span>
                </div>
                <div class="info_item__0IxQW">
                    <span class="info_label__TewQ_">Release Date</span><span class="info_data__N609l">
                        <?php echo $softData['data']['released_date'] ?>
                    </span>
                </div>
                <div class="info_item__0IxQW">
                    <span class="info_label__TewQ_">Languages</span><span
                        class="info_data__N609l info_languages__RF79O"><span>Multilingual</span></span>
                </div>
                <div class="tags_list__UUDK6">
                    <a class="tags_link__X8Gf_" href="">Thanks for choosing us!</a>
                </div>
            </div>
        </aside>
    </div>  
</div>

<style>
    .tags_list__UUDK6 {
        /* align-items: center; */
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 6px 4px;
        padding: 10px 0;
    }
    [type=text]:invalid, select:invalid, textarea:invalid {
    /* border: 1px solid #eb0036; */
    /* color: #eb0036; */
}
</style>