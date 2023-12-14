<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo base_url('dashboard') ?>" >
        <svg class="w-25 h-25 text-indigo-10 fill-current" viewBox="0 0 194 116" xmlns="http://www.w3.org/2000/svg">
            <g fill-rule="evenodd">
                <path d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z"></path>
                <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z"></path>
            </g>
        </svg>

        <span class="ms-4 font-weight-bold">GetItFast</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url() ?>" target="_blank">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-primary text-sm opacity-10"></i>  
            </div>
            <span class="nav-link-text ms-1">Visit Website</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $active == 'dashboard' ? 'active' : ''; ?>" href="<?php echo base_url('dashboard') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>  
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $active == 'softwares' ? 'active' : ''; ?>" href="<?php echo base_url('softwares') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Softwares</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $active == 'blogs' ? 'active' : ''; ?>" href="<?php echo base_url('blogs') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Blogs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $active == 'addSoftwares' ? 'active' : ''; ?>" href="<?php echo base_url('addSoftware') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-fat-add text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add Softwares</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php echo $active == 'createBlog' ? 'active' : ''; ?>" href="<?php echo base_url('createBlog') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-fat-add text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add Blogs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php echo $active == 'comments' ? 'active' : ''; ?>" href="<?php echo base_url('comments') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-fat-add text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Comments</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url('logOut') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>