<!DOCTYPE html>
<html lang="en">

<head>
<title>
    Sign In
  </title>
 <?php $this->load->view('admin/header') ?>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                    <?php if(isset($error)) echo '<p>'.$error.'</p>'; ?>
                    <form role="form" method="post" action="<?php echo site_url('auth'); ?>">
                        <div class="mb-3">
                            <input required type="email" class="form-control form-control-lg" name="email" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="mb-3">
                            <input required type="password" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password">
                        </div>
                        <?php echo validation_errors(); ?>
                        <!-- ... other form elements ... -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('asset/js/core/popper.min.js')?>"></script>
  <script src="<?php echo base_url('asset/js/core/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('asset/js/plugins/perfect-scrollbar.min.js')?>"></script>
  <script src="<?php echo base_url('asset/js/plugins/smooth-scrollbar.min.js')?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
</body>

</html>