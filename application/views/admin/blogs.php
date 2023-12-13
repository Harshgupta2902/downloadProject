<!DOCTYPE html>
<html lang="en">

<head>
<title>
    Blogs List
  </title>
  <?php $this->load->view('admin/header') ?>

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php $active['active'] = 'blogs'; ?>
  <?php $this->load->view("admin/sidebar", $active) ?>
    <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List of Windows Softwares</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table id="blogsTable" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Logo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($blogs as $blog) { ?>
                      <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $blog->image ?>" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $blog->title ?></h6>
                          </div>
                        </div>
                      </td>
                      
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $blog->category ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $blog->timestamp ?></span>
                      </td>
                      <td class="align-middle">
                        <a href="<?php echo base_url('editBlog/').urlencode($blog->id) ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="<?php echo base_url('deleteBlog/').urlencode($blog->id) ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                    <?php } ?> 
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
      
      <?php $this->load->view('admin/footer') ?>

    </div>
  </main>
  <!--   Core JS Files   -->
  <?php $this->load->view('admin/scripts') ?>


</body>

</html>