<section class="py-5 bg-white">
<div class="container py-4">
    <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-8">
            <div class="text-center">
                <div class="text-muted text-danger fw-bold">
                    <span class="text-danger"><?php echo $blogData[0]['category'] ?></span>
                    &nbsp;.&nbsp;
                    <span class="fw-normal"><?php echo $blogData[0]['timestamp'] ?></span>
                </div>
                <div class="fw-bold display-4 my-3"><?php echo $blogData[0]['title'] ?></div>
            </div>
        </div>
    </div>  
    <div class="row">
        <div class="col-12">
        <img src="<?php echo $blogData[0]['image'] ?>" alt="#" class="img-fluid rounded" style="min-width: 85rem; max-height: 33rem;">
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
            <p class="my-5 fs-5">
            </p>
            <?php echo $blogData[0]['content'] ?>
    </div>
</div>
</section>
<section class="py-5 bg-light">
<div class="container py-4">
    <div class="row">
        <h3 class="text-center fw-bold mb-4">Related Blogs</h3>
        <?php foreach ($relatedBlogs as $relatedBlogs) { ?>
            <div class="col-lg-4 col-12">
                <div class="p-4 rounded shadow-osahan bg-white card border">
                    <a href="<?php echo base_url('viewBlog/').urlencode($relatedBlogs['id']) ?>">
                        <img src="<?php echo $relatedBlogs['image']?>" class="card-img-top rounded-lg" alt="..."style="max-height: 200px;min-height:200px">
                    </a>
                    <div class="card-body px-0 pb-0 pt-4">
                        <div class="small text-muted">
                            <span class="text-decoration-none text-danger fw-bold"><?php echo $relatedBlogs['category'] ?></span>&nbsp;.&nbsp;<?php echo $relatedBlogs['timestamp'] ?>
                        </div>
                        <h4 class="card-title fw-bold my-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                            <?php echo $relatedBlogs['title']?></h4>
                    </div>
                </div>
            </div>
        <?php } ?>
        
    </div>
</div>
</section>