<form action="<?php echo BASEURL ?>/profile/feedbackdata" method="post">
<section class="text-gray-600 body-font relative">  
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-blue-100 mr-80 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
    <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" 
        value="<?php if(!empty($data['message'])): echo $data['message']; endif?>"></textarea>
      </div>
      <div class="error">
<?php if (!empty($data['messageError'])): echo $data['messageError']; endif;?>
</div>
      <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
     
    </div>
  </div>
</section>
</form>