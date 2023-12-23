<section class="pt-5 bg-primary">
    <div class="container py-4 px-5 text-center">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-white display-5 mb-2 fw-bold">Blogs</h1>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="#f0f2f5">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
        </svg>
    </div>
</section>
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4">
            <?php foreach ($blogs as $blogs) { ?>
                <div class="col-lg-4 col-12">
                    <div class="p-4 rounded shadow-osahan bg-white card border-0">
                        <a href="<?php echo base_url('viewBlog/').urlencode($blogs['id']) ?>">
                            <img src="<?php echo $blogs['image']?>" class="card-img-top rounded-lg" alt="..."style="max-height: 200px;min-height:200px">
                        </a>
                    
                        <div class="card-body px-0 pb-0 pt-4">
                            <div class="small text-muted">
                                <span class="text-decoration-none text-danger fw-bold"><?php echo $blogs['category']?></span>&nbsp;.&nbsp;<?php echo $blogs['timestamp']?>
                            </div>
                            <h4 class="card-title fw-bold my-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                <?php echo $blogs['title']?></h4>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>