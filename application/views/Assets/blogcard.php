<div class="c-pageFrontDoor_topStories g-grid-container u-grid-columns">
        <div class="lg:u-col-9 md:u-col-4 sm:u-col-2 u-grid-full-row">
          <div class="c-listingPromoStories u-grid u-grid-columns">
            <div section="top_stories|pos1" class="c-listingPromoStories_mainItem">
              <a href="<?php echo base_url('Welcome/Blog/') . urlencode($blogs['latest']['id']); ?>" target="_blank">
                <div class="c-listingPromoStories_image">
                  <div>
                    <picture class="c-cmsImage">
                      <img src="<?php echo $blogs['latest']['image'] ?>" alt="Loading..." />
                    </picture>
                  </div>
                </div>
                <div class="c-listingPromoStories_meta g-outer-spacing-top-medium">
                  <div class="c-listingPromoStories_subhead g-color-primary g-text-small g-outer-spacing-bottom-small">
                    <?php echo $blogs['latest']['category'] ?>
                  </div>
                  <h1 class="g-text-large g-text-normal g-outer-spacing-bottom-small">
                    <?php echo $blogs['latest']['title'] ?>
                  </h1>
                </div>
              </a>
            </div>
            <div class="c-listingPromoStories_subItemWrapper u-grid u-grid-columns">
              <?php foreach ($blogs['latest2'] as $blog2) { ?>
              <div section="top_stories|pos2" class="c-listingPromoStories_subItem g-inner-spacing-bottom-large-fluid">
                <a href=" " target="_blank">
                  <div class="c-listingPromoStories_image g-outer-spacing-bottom-medium">
                    <div>
                      <picture class="c-cmsImage">
                        <img src="<?php echo $blog2['image'] ?>" alt="Loading..." />
                      </picture>
                    </div>
                  </div>
                  <div class="c-listingPromoStories_meta">
                    <div
                      class="c-listingPromoStories_subhead g-color-primary g-text-xsmall g-outer-spacing-bottom-small">
                      <?php echo $blog2['category'] ?>
                    </div>
                    <h2 class="g-text-large g-text-normal">
                      <?php echo $blog2['title'] ?>
                    </h2>
                  </div>
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="lg:u-col-3 md:u-col-2 sm:u-col-2">
          <div class="c-listingLinkStories">
            <?php foreach ($blogs['latest4'] as $blogs4) { ?>
            <div
              class="c-listingLinkStories_item g-outer-spacing-bottom-large-fluid g-inner-spacing-bottom-large-fluid g-border-thin-light-bottom">
              <div class="c-listingLinkStories_meta">
                <div
                  class="c-listingLinkStories_subhead g-color-primary g-text-xsmall g-outer-spacing-bottom-small g-text-bold u-text-uppercase">
                  <?php echo $blogs4['category'] ?>
                </div>
                <h2 class="c-listingLinkStories_head g-text-small g-text-normal">
                  <a href="<?php echo base_url('Welcome/Blog/') . urlencode($blogs4['id']); ?>" target="_blank">
                    <?php echo $blogs4['title'] ?>
                  </a>
                </h2>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>