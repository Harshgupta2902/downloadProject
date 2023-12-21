<section class="pt-5 bg-primary">
      <div class="container py-4 px-5 text-center">
         <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
               <h1 class="text-white display-5 mb-2 fw-bold">All Categories</h1>
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
         <div class="overflow-hidden shadow-osahan bg-white mb-5 border-radius-five filter-nav-page">
            <div class="row justify-content-between align-items-center">
               <div class="col-lg-12">
                  <ul class="nav explore-tabs m-2 justify-content-center gap-2" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-windows-tab" data-bs-toggle="pill" data-bs-target="#pills-windows" type="button" role="tab" aria-controls="pills-windows" aria-selected="true">Windows</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-macos-tab" data-bs-toggle="pill" data-bs-target="#pills-macos" type="button" role="tab" aria-controls="pills-macos" aria-selected="false"><span><i class="bi bi-brush"></i></span>&nbsp;MacOs</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-android-tab" data-bs-toggle="pill" data-bs-target="#pills-android" type="button" role="tab" aria-controls="pills-android" aria-selected="false"><span><i class="bi bi-controller"></i></span>&nbsp;Android</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="tab-content" id="pills-tabContent">
                  <?php foreach ($categories as $iosKey=> $iosData) { ?>
                     <div class="tab-pane fade<?php echo ($iosKey === 'windows') ? 'show active' : ''; ?>" id="pills-<?php echo $iosKey ?>" role="tabpanel" aria-labelledby="pills-<?php echo $iosKey ?>-tab">
                     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                           <?php foreach ($iosData as $data) { ?>
                           <div class="col">
                              <div class="rounded shadow-osahan bg-white card border-0 authors-card-list">
                              <a href="" target="_blank" rel="noopener noreferrer">
                                 <img src="<?php echo base_url('asset/img/' . $data['cover_image'] . '.jpg') ?>" alt="#" class="card-img-top rounded-lg">
                              </a>
                              <div class="card-body pt-2">
                                 <h6 class="card-title mb-1 fw-bold"><?php echo $data['name'] ?></h6>
                                 <div class="d-flex gap-2 small mb-3">
                                 </div>
                                 <p class="card-text text-muted" style="max-height: 3em; overflow: hidden;"><?php echo $data['description'] ?></p>
                              </div>
                           </div>
                           </div>
                           <?php } ?>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </section>