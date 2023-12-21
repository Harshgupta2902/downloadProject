<div class="mb-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="h4 m-0 fw-bold">Top Categories 🌟</div>
        <div><a href="<?php echo base_url('categories') ?>" class="btn btn-outline-primary btn-sm px-3">See all</a></div>
    </div>
    <div class="row g-3">
       <?php foreach ($topCategories as $topCategories) { ?>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="top-artistss">
                <div class="p-2 rounded shadow-osahan bg-white card border-0" style="min-height: 180px;max-height: 180px;">
                    <a href="<?php echo base_url('categories') ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo base_url('asset/img/' . $topCategories['cover_image'] . '.jpg') ?>" class="card-img-top rounded-lg" alt="...">
                    </a>
                    <div class="card-body text-center py-1">
                        <h6 class="card-title mb-1 text-dark fw-bold mt-2"><?php echo $topCategories['name'] ?></h6>
                        <p class="card-text text-muted small mb-2" style="max-height: 3em; overflow: hidden;"><?php echo $topCategories['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>