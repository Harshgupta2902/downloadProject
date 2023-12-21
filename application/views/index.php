<!doctype html>
<html lang="en">
   <head>
      <title>GetItFast-Homepage</title>
      <?php $this->load->view('web/header')?>
   </head>
   <body>
   <?php $this->load->view('web/navbar')?>
   <?php $this->load->view('web/homepage_banner')?>
      <section class="py-5">
         <div class="container my-4">
            <?php $this->load->view('web/top_categories')?>
            <?php $this->load->view('web/trending_softwares')?>
            <?php $this->load->view('web/popular_softwares')?>
         </div>
      </section>
      <?php $this->load->view('web/footer')?>
     <?php $this->load->view('web/script') ?>
   </body>
</html>