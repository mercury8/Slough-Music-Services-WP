<?php
$viewAll = get_field('viewAll');
$title = get_field('title');

?>


<section>
   <div class="max-w-[67rem] mx-auto my-32 flex flex-col">
      <div class="text-3xl text-center pb-11 text-white">
         <h2><?php echo $title ?></h2>
      </div>
   <div class="flex lg:flex-row flex-col lg:justify-center items-center gap-4 md:flex-col">
<?php

$select_feed = get_field('select_feed');
$feed_number = get_field('feed_number');


 $eventsfeed = new WP_Query(array(
    'posts_per_page' => $feed_number,
    'post_type' => $select_feed,
    

 ));
 while($eventsfeed->have_posts()){
    $eventsfeed->the_post();
    $eventDate = get_field('date_time', get_the_ID());
    $eventLocation = get_field('location', get_the_ID());
    ?>
      <div class="bg-smblue rounded-[3rem] w-72 h-[37rem]">
         <div class="h-56 bg-[url('/wp-content/uploads/2023/11/Bg-purple-note-002.jpg')] bg-repeat object-cover rounded-t-[3rem]">
            <a href="<?php the_permalink() ?>">
               <?php the_post_thumbnail('post-thumbnail', array('class' => 'w-auto h-56 object-cover rounded-t-[3rem]')) ?>
            </a>
         </div>  
         <div class="px-8 pt-4 justify-center"> 
            <div class="h-[17rem]">        
               <a href="<?php the_permalink() ?>">
                  <?php the_title( '<h2 class="text-white text-2xl">','</h2>'); ?>
               </a>
                  <p class="text-smyellowbright text-base my-2">
                     <?php echo $eventDate ?><br>
                     <?php echo $eventLocation ?>
                  </p>
               <p class="text-white text-base">
                  <?php echo wp_trim_words(get_the_content(), 18); ?>
               </p>
            </div>
            <a href="<?php the_permalink(); ?>"><button class="items-center w-56 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0">find out more</button></a>
         </div>
      </div>

    <?php
 }

 wp_reset_postdata(); // Reset post data after the custom query
?>


</div>
<div class="w-full flex justify-center mt-12"><a href="<?php echo $viewAll ?>"><button class="items-center w-56 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0">View all</button></a></div>
</div>
</section>


