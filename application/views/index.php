<!DOCTYPE html>
<head>
  <?php $this->load->view('Assets/headers') ?>
</head>

<body class="overflow-x-hidden antialiased">

    <?php $this->load->view('Assets/topbar') ?>
    <?php $this->load->view('Assets/blogcard') ?>
    <?php $this->load->view('Assets/tabs') ?>
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
</body>

</html>