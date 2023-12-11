
<section>
   <div class="max-w-[67rem] mx-auto my-32">

   <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
<?php

$select_feed = get_field('select_feed');


 $eventsfeed = new WP_Query(array(
    'posts_per_page' => '-1',
    'post_type' => $select_feed,
    

 ));
 while($eventsfeed->have_posts()){
    $eventsfeed->the_post();
    $eventDate = get_field('date_time', get_the_ID());
    $eventLocation = get_field('location', get_the_ID());
    $eventLocation = get_field('location', get_the_ID());
    $position = get_field('position', get_the_ID());
    ?>
      <div class="bg-smblue rounded-[3rem] w-56 h-[37rem] mx-auto">
            <div class="h-56 bg-[url('/wp-content/uploads/2023/11/Bg-purple-note-002.jpg')] bg-repeat object-cover rounded-t-[3rem]">
               <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'h-56 object-cover rounded-t-[3rem]')) ?>
               </a>
            </div>  
         <div class="px-8 pt-4 justify-center"> 
            <div class="h-[17rem]">        
               <a href="<?php the_permalink() ?>">
                  <?php the_title( '<h2 class="text-white text-[1rem] text-center">','</h2>'); ?>
               </a>
                  <p class="text-smyellowbright text-[0.8rem] mb-2 text-center">
                     <?php echo $eventDate ?>
                     <?php echo $eventLocation ?>
                     <?php echo $position ?>
                  </p>
               <p class="text-white text-[0.8rem]">
                  <?php echo wp_trim_words(get_the_content(), 18); ?>
               </p>
            </div>
            <a href="<?php the_permalink(); ?>"><button class="items-center w-auto rounded-full bg-lightpurple bottom-2 h-auto py-1 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0">Find out more</button></a>

      </div>
      </div>


    <?php
 }

 wp_reset_postdata(); // Reset post data after the custom query
?>


</div>

</div>
</section>


