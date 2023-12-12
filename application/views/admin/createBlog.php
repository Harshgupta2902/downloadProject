<!DOCTYPE html>
<html lang="en">

<head>
  <title>Software List</title>
  <?php $this->load->view('admin/header')?>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php $active['active'] = 'createBlog';?>
  <?php $this->load->view("admin/sidebar", $active)?>
    <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
    <?php echo form_open('Admin/save_blog'); ?>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile">
            <p class="text-uppercase text-sm" style="display: flex; justify-content: center;"></p>
            <div class="card-body pt-0">
            <p class="text-uppercase text-sm">Blog Details</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="title" class="form-control-label">Title</label>
                    <input class="form-control" required type="text" name="title" id="title" placeholder="Blog Title">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="image" class="form-control-label">Image</label>
                    <input class="form-control" required type="text" name="image" id="image" placeholder="Enter Image">
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="category" class="form-control-label">Category</label>
                    <select name="category" id="category" class="form-select">
                            <option value="Tech">Tech</option>
                            <option value="News">News</option>
                            <option value="Science">Science</option>
                    </select>
                  </div>
                </div>
              </div>
              <div>
                <button class="btn btn-primary btn-sm ms-auto" type="submit">Add</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="content" class="form-control-label">Content</label>
                    <textarea class="form-control" required type="text" rows="12" name="content" id="content" placeholder="Blog Content..."></textarea>
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
  <?php $this->load->view('admin/scripts')?>
</body>

</html>