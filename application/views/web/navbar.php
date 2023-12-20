<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm p-0 osahan-nav">

    <div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>">
    <img src="<?php echo base_url('asset/img/logo.svg') ?>" alt="Logo" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup16" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup16">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>">Home</a>
            </li>
            <?php foreach ($mainNav as $osKey => $osData) { ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $osData['navs_name']; ?>
                </a>
                <ul class="dropdown-menu border-0 shadow-sm">
                    <?php foreach ($osData['categories'] as $category) { ?>
                        <li><a class="dropdown-item" href="<?php echo base_url('explore/' . $osKey . '/' . $category['category_slug_permanent']); ?>">
                            <?php echo $category['category_name']; ?>
                        </a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php  } ?>
        </ul>
        <div class="navbar-nav ms-auto gap-3">
            <form class="d-flex align-items-center bg-white overflow-hidden border-radius-five">
                <input type="text" placeholder="Search..." class="border-0 form-control form-control-sm">
                <a href="#" class="btn text-primary btn-sm px-3"><i class="icofont-search-1"></i></a>
            </form>
        </div>
    </div>
    </div>
</nav>