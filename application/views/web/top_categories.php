<div class="mb-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="h4 m-0 fw-bold">Top Categories 🌟</div>
        <div><a href="authors.html" class="btn btn-outline-primary btn-sm px-3">See all</a></div>
    </div>
    <div class="row g-3">
       <?php foreach ($topCategories as $topCategories) { ?>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="top-artistss">
            <div class="p-2 rounded shadow-osahan bg-white card border-0">
                <img src="<?php echo base_url('asset/img/cover1.jpg') ?>" class="card-img-top rounded-lg" alt="...">
                <div class="card-body text-center py-1">
                    <h6 class="card-title mb-1 text-dark fw-bold mt-2"><?php echo $topCategories['name'] ?></h6>
                    <p class="card-text text-muted small mb-2" style="max-height: 3em; overflow: hidden;"><?php echo $topCategories['description'] ?></p>
                </div>
            </div>
            <a href="single-artwork.html" class="stretched-link"></a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>