<div class="mt-5 mb-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="h4 m-0 fw-bold">Most Popular Softwares</div>
        <div><a href="<?php echo base_url('softwares/all') ?>" class="btn btn-outline-primary btn-sm px-3">See all</a></div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    <?php foreach ($trending_softwares as $softwares) {?>
        <div class="col">
            <div class="card osahan-item-list p-3 rounded h-100 shadow-osahan bg-white border-0">
            <div class="card-header border-0 bg-white p-0 mb-3">
            <div class="d-flex justify-content-between">
            <div class="d-flex gap-2 align-items-center">
                <div><img src="<?php echo $softwares['icon'] ?>" alt="#" class="img-fluid rounded-circle"></div>
                <div class="small fw-bold"><?php echo $softwares['sub_category_title'] ?> </div>
                </div>
                    <?php
                        $osKey = $softwares['category_slug'];   
                            $osImage = '';
                            switch ($osKey) {
                                case 'android':
                                    $osImage = 'android.png';
                                    break;
                                case 'mac':
                                    $osImage = 'mac.gif';
                                    break;
                                case 'windows':
                                    $osImage = 'windows.png';
                                    break;
                                default:
                                    $osImage = '';
                            }

                        if (!empty($osImage)) {
                            $osImagePath = base_url() . 'asset/img/' . $osImage;
                            echo '<img src="' . $osImagePath . '" alt="#" class="img-fluid">';
                        }
                    ?>
            </div>
            </div>
            <a href="<?php echo base_url('product/').urlencode($softwares['slug']) ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo $softwares['screenshot'] ?>" class="card-img-top rounded-lg" style="min: height 100px; max-height: 100px" alt="...">
            </a>
            <div class="card-body fw-bold px-0 pb-0">
            <?php $softwareName = preg_replace('/\b(v?\d+(\.\d+)+)\b/i', '', $softwares['extra_title']);?>
                <h6 class="card-title mb-1"><?php echo $softwareName ?></h6>
                <div class="card-text mb-1"><small class="text-muted" style="max-height: 40px; overflow: hidden;"><?php echo $softwares['excerpt'] ?></small></div>
                <div class="text-danger"><?php echo $softwares['version'] ?></div>
            </div>
            <a href="activity.html" class="stretched-link"></a>
            </div>
        </div>
    <?php }?>
    </div>
</div>