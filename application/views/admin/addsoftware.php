<!DOCTYPE html>
<html lang="en">

<head>
  <title>Software List</title>
  <?php $this->load->view('admin/header') ?>

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php $active['active'] = 'addSoftwares'; ?>
  <?php $this->load->view("admin/sidebar", $active) ?>
    <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
    <?php echo form_open('Admin/addSoftware'); ?>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile">
            <p class="text-uppercase text-sm" style="display: flex; justify-content: center;"></p>
            <div class="card-body pt-0">
            <p class="text-uppercase text-sm">Software Details</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="title" class="form-control-label">Title</label>
                    <input class="form-control" required type="text" name="title" id="title" placeholder="Enter Name of Software">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="logo" class="form-control-label">Logo</label>
                    <input class="form-control" required type="text" name="logo" id="logo" placeholder="Enter Logo">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="company" class="form-control-label">Company</label>
                    <input class="form-control" required type="text" name="company" id="company" placeholder="Enter Company Name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="download_url" class="form-control-label">Download Url</label>
                    <input class="form-control" required type="text" name="download_url" id="download_url" placeholder="Enter Download url">
                  </div>
                </div>
              </div>
            <div class="row">
            <p class="text-uppercase text-sm">Software Info</p>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="category" class="form-control-label">Relation</label>
                    <select name="relation" id="relation"  class="form-select">
                           <option value="1">Windows</option>
                           <option value="2">Mac</option>
                           <option value="3">iOS</option>
                           <option value="4">Android</option>
                     </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="free" class="form-control-label">Free</label>
                    <select name="free" id="free" class="form-select">
                        <option value="Free">Free</option>
                        <option value="Paid">Paid</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="category" class="form-control-label">Category</label>
                    <select name="category" id="category" class="form-select">
                           <option value="App">App</option>    
                           <option value="Games">Games</option>
                           <option value="Software">Software</option>
                           <option value="Entertainment">Entertainment</option>
                     </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="released_date" class="form-control-label">Released Date</label>
                    <input class="form-control" required type="text" name="released_date" id="released_date" placeholder="Enter Released Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="version" class="form-control-label">Version</label>
                    <input class="form-control" required type="text" name="version" id="version" placeholder="Enter Version">
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                  <input name="trending" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="trending" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Trending</label>
              </div>
              <div class="d-flex align-items-center">
                <button class="btn btn-primary btn-sm ms-auto" type="submit">Add</button>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-md-8">  
          <div class="card">
            <div class="card-body">
              <p class="text-uppercase text-sm">Software Page content</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="overview" class="form-control-label">Overview</label>
                    <textarea class="form-control" required type="text" rows="6" name="overview" id="overview" placeholder="Enter overview"></textarea>  
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="features" class="form-control-label">Features</label>
                    <textarea class="form-control" required type="text" rows="4" name="features" id="features" placeholder="Enter Features"></textarea>  
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="requirement" class="form-control-label">Requirement</label>
                    <textarea class="form-control" required type="text" rows="4" name="requirement" id="requirement" placeholder="Enter Requirement"></textarea>  
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description" class="form-control-label">Description</label>
                    <textarea class="form-control" required type="text" rows="4" name="description" id="description" placeholder="Enter Description"></textarea>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
   <?php echo form_close(); ?>

    </div>
  </main>
  <!--   Core JS Files   -->
  <?php $this->load->view('admin/scripts') ?>
</body>

</html>