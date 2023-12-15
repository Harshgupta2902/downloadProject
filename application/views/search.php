<!DOCTYPE html>
<head>
  <?php $this->load->view('Assets/headers') ?>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body class="overflow-x-hidden antialiased">

    <?php $this->load->view('Assets/topbar') ?>
    <?php $this->load->view('Assets/search') ?>
    <?php $this->load->view('Assets/footer') ?> 
    <!-- a little JS for the mobile nav button -->
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
<script src="<?php echo base_url("asset/pagination.js") ?>"></script>    
</body>

</html>