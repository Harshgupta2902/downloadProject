<section class="bg-primary py-5">
    <h1 class="d-none">For SEO</h1>
    <div class="container py-4">
    <div class="row">
        <div class="col-lg-7 col-12">
            <div class="mb-4">
                <div class="display-5 fw-bold text-white mb-3">Download. Elevate. Explore. Innovate. Enjoy</div>
                <div class="fs-5 text-white-50">Explore, download, and elevate your digital experience with our software hub.</div>
            </div>
            <!-- <div>
                <a href="explore.html" class="btn btn-warning btn-lg me-3">Discover</a>
                <a href="create.html" class="btn btn-light btn-lg">Create</a>
            </div> -->
        </div>
    </div>
    <div class="row g-4 mt-5">
        <?php foreach ($mainNav as $osKey => $osData) { ?>
            <div class="col-lg-4 col-4">
            <div class="rounded shadow-sm p-4 bg-white d-flex align-items-center gap-3 steps-item">
                <span class="bg-primary rounded-circle steps-item-icon"><i class="bi bi-wallet2 text-white"></i></span>
                <div>
                <div class="fw-bold fs-6 mb-1"><?php echo ucfirst($osData['navs_name']) ?></div>
                <p class="text-muted m-0 d-none d-md-block">Use Trust Wallet, Metamask or any wallet to connect to the app.</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</section>