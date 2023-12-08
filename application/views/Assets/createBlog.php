<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Blog Form</title>
    <?php $this->
    load->view('Assets/headers') ?>
</head>

<body>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />


    <div class="max-w-2xl mx-auto">
        <?php echo form_open('Welcome/save_blog'); ?>

        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Title</label>
        <input type="text" name="title"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Blog Title" />

        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Image</label>
        <input type="text" name="image"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Blog Title" />

        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Content</label>
        <a href="https://wordhtml.com/" target="_blank">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Click Here to create Content and then paste below</label>
        </a>


        <textarea name="content" rows="20"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Blog Content...">
        </textarea>


        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Category</label>
        <select name="category" id="category" 
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                <option value="Tech">Tech</option>    
                <option value="News">News</option>
                <option value="Science">Science</option>
        </select>

        <button style="box-shadow: inset 0 2px 4px 0 rgb(2 6 23 / 0.3), inset 0 -2px 4px 0 rgb(203 213 225);" 
            class="inline-flex cursor-pointer items-center gap-1 rounded border border-slate-300 bg-gradient-to-b from-slate-50 to-slate-200 px-4 py-2 font-semibold hover:opacity-90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-300 focus-visible:ring-offset-2 active:opacity-100">
            Save Blog
        </button>


        <!-- <button type="submit" name='value'>Save Blog</button> -->

        <?php echo form_close(); ?>
    </div>
</body>

</html>