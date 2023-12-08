<!DOCTYPE html>
<html>

<head>
   <?php $this->load->view("Assets/headers") ?>
   <title>Add Software</title>
</head>

<body>




   <div class="flex items-center justify-center p-12">
      <div class="mx-auto w-full max-w-[550px]">


         <!-- <?php echo validation_errors(); ?> -->

            <?php echo form_open('Welcome/addSoftware'); ?>
         <div class="mb-5">
            <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
               Title
            </label>
            <input type="text" name="title" id="title" placeholder="Enter Name of Software"
               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
         </div>
         <div class="mb-5">
            <label for="relation" class="mb-3 block text-base font-medium text-[#07074D]">
               Relation
            </label>
            <select name="relation" id="relation" 
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                  <option value="1">Windows</option>
                  <option value="2">Mac</option>
                  <option value="3">iOS</option>
                  <option value="4">Android</option>
            </select>
         </div>
         <div class="mb-5">
            <label for="logo" class="mb-3 block text-base font-medium text-[#07074D]">
               Logo
            </label>
            <input type="text" name="logo" id="logo" placeholder="Enter Logo"
               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
         </div>


         <div class="mb-5">
            <label for="download_url" class="mb-3 block text-base font-medium text-[#07074D]">
               Download Url
            </label>
            <input type="text" name="download_url" id="download_url" placeholder="Enter Download url"
               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
         </div>


         <div class="mb-5">
            <label for="company" class="mb-3 block text-base font-medium text-[#07074D]">
               Company
            </label>
            <input type="text" name="company" id="company" placeholder="Enter Company Name"
               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
         </div>

         <div class="mb-5">
            <label for="free" class="mb-3 block text-base font-medium text-[#07074D]">
               Free
            </label>
            <select name="free" id="free" 
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                  <option value="Free">Free</option>
                  <option value="Paid">Paid</option>
            </select>
         </div>


         <div class="mb-5">
            <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">
               Category
            </label>
            <select name="category" id="category" 
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                  <option value="App">App</option>    
                  <option value="Games">Games</option>
                  <option value="Software">Software</option>
                  <option value="Entertainment">Entertainment</option>
            </select>
         </div>

         <div class="mb-5">
            <label for="specifications" class="mb-3 block text-base font-medium text-[#07074D]">
               Specifications
            </label>
            <textarea type="text" rows="4" name="specifications" id="specifications" placeholder="Enter Specifications"
               class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
         </div>

         <div class="mb-5">
            <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
               Description
            </label>
            <textarea type="text" rows="4" name="description" id="description" placeholder="Enter Description"
               class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
         </div>

         <?php echo validation_errors('<p class="text-red-500">', '</p>'); ?>

         <div>
            <button type="submit" name="submit"
               class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
               Add Software
            </button>
         </div>

         <?php echo form_close(); ?>


      </div>
   </div>
</body>

</html>