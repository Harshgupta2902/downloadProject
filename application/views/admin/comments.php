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
  <?php $active['active'] = 'comments'; ?>
  <?php $this->load->view("admin/sidebar", $active) ?>
    <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Latest Comments</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table id="blogsTable" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Comments</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">timestamp</th>  
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">software</th>  
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($comments as $comments) { ?>
                      <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $comments['name'] ?></h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $comments['email']?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $comments['comment']?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $comments['timestamp']?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $comments['software_id'] ?></span>
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