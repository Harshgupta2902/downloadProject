<?php if(!empty($allSoftwares)) {?> 
<section class="pt-5 bg-primary">
   <div class="container py-4 px-5 text-center">
      <div class="row gx-5 justify-content-center">
         <div class="col-lg-8">
            <h1 class="text-white display-5 mb-2 fw-bold"><?php echo strtoupper($name) ?> Softwares  </h1>
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
      <div class="row">
         <div class="col-lg-12 col-12">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
               <?php foreach ($allSoftwares as $softwares) {?>
                    <div class="col">
                        <div class="card osahan-item-list p-3 rounded h-100 shadow-osahan bg-white border-0">
                            <div class="card-header border-0 bg-white p-0 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div><img src="<?php echo $softwares['icon'] ?>" alt="#" class="img-fluid rounded-circle"></div>
                                        <div class="small fw-bold"><?php echo $softwares['sub_category_title'] ?></div>
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
                            <a href="<?php echo base_url('product/') . urlencode($softwares['slug']) ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo $softwares['screenshot'] ?>" class="card-img-top rounded-lg" style="min: height 100px; max-height: 100px" alt="...">
                            </a>
                            <div class="card-body fw-bold px-0 pb-0">
                            <?php $softwareName = preg_replace('/\b(v?\d+(\.\d+)+)\b/i', '', $softwares['extra_title']);?>
                                <h6 class="card-title mb-1"><?php echo $softwareName ?></h6>
                                <div class="card-text mb-1"><small class="text-muted" style="max-height: 40px; overflow: hidden;"><?php echo $softwares['excerpt'] ?></small></div>
                                <div class="text-danger"><?php echo $softwares['version'] ?></div>
                            </div>
                        </div>
                    </div>
               <?php }?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php } else { ?>
<section class="py-5">
   <div class="container py-4">
      <div class="row justify-content-center">
         <div class="col-8 mx-auto">
            <div class="text-center">
               <img src="<?php echo base_url('asset/img/error.svg') ?>" class="img-fluid w-50 mb-4" alt="#">
               <div class="fw-bold text-dark display-6 my-3">No Result Founf for '<?php echo $searched ?>'</div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php } ?>



