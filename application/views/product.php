<!DOCTYPE html>

<head>
  <?php $this->load->view('Assets/headers') ?>
</head>

<body class="skybox-closeBtn">

 <div class="c-layoutDefault">
 <div class="c-layoutDefault_page">
   <?php $this->load->view('Assets/topbar') ?>
   <?php $this->load->view('Assets/product_details') ?>
</div>
</div>
<script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>
</body>

</html>