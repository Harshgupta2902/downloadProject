<section class="py-5">
    <div class="container py-4">
    <div class="row">
        <div class="col-lg-6 col-12 pe-lg-5">
            <div class="sidebar-fix">
                <img src="<?php echo $softData['screenshot'] ?>" alt="#" class="img-fluid w-100 rounded shadow">
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="mb-4 mt-2">
                <h3 class="fw-bold text-dark"><?php echo $softData['title'] ?></h3>
                <div class="mb-5 mt-4"><?php echo $softData['article'] ?></div>
                    <?php if(!empty($softData['download_url'])) {?>
                        <div class="d-flex justify-content-between bg-white rounded shadow-sm p-4 align-items-center">
                            <div>
                                <h6 class="fw-bold mb-2 text-uppercase small">License: <?php echo $softData['license']?></h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <h2 class="fw-bold text-primary mb-0"><?php echo strtoupper($softData['download_size'])?></h2>
                                    </div>
                            </div>
                            <div>
                                <a href="<?php echo $softData['download_url'] ?>" target="_blank" class="btn btn-danger btn-lg rounded-lg">Download</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        
                    <?php } ?>

            </div>
            <div class="pt-1">
                <div class="overflow-hidden bg-white rounded shadow-sm mb-4">
                <ul class="nav auther-tabs mb-0 gap-3 border-bottom px-4 py-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Related Softwares</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="artwork">
                            <?php foreach ($related_softwares as $relatedSoftwares) { ?>
                                <div class="border-bottom p-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div><img src="<?php echo $relatedSoftwares['icon']?>" alt="#" class="img-fluid rounded-circle ch-50 border shadow-sm"></div>
                                            <a href="<?php echo base_url('product/').urlencode($relatedSoftwares['slug']) ?>" target="_blank" rel="noopener noreferrer" style="  text-decoration: none;">
                                                <div>
                                                    <h6 class="fw-bold text-dark mb-1"><?php echo $relatedSoftwares['extra_title']?></h6>
                                                    <div class="text-muted fw-bold"><?php echo $relatedSoftwares['license']?></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <h6 class="mb-1"><?php echo strtoupper($softData['download_size'])?></h6>
                                            <div class="text-muted small"><?php echo $relatedSoftwares['downloads_count']. ' ' .'Downloads'?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>