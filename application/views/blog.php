<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title><?php echo $blogData[0]['title'] ?></title>
    <?php $this->
    load->view('Assets/headers') ?>
</head>

<body>
<div class="max-w-screen-xl mx-auto">
    <!-- header -->
  <?php $this->load->view('Assets/topbar') ?>
    <!-- header ends here -->

    <main class="mt-10">
      <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
        <img src="<?php echo $blogData[0]['image'] ?>" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
        <div class="p-4 absolute bottom-0 left-0 z-20">
          <a href="#"
            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2"><?php echo $blogData[0]['category'] ?></a>
          <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
          <?php echo $blogData[0]['title'] ?>
          </h2>
          <div class="flex mt-3">
            <img src="https://randomuser.me/api/portraits/men/97.jpg"
              class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
              <p class="font-semibold text-gray-200 text-sm"> Harsh Gupta </p>
              <p class="font-semibold text-gray-400 text-xs"> <?php echo $blogData[0]['timestamp'] ?> </p>
            </div>
          </div>
        </div>
      </div>

      <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
      <?php echo $blogData[0]['content'] ?> 
      </div>
    </main>
    <!-- main ends here -->


  </div>
</body>

</html>