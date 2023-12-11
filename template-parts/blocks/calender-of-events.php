<?php
$eventDate = get_field('date_time', get_the_ID());
?>

<section>
    <div class="container">
        <div class="mx-auto mt-4">
            <!-- Tabs -->
            <ul id="tabs" class="sm:inline-flex flex sm:flex-row flex-col pt-2 px-1 w-full justify-center ml-0 mb-1 mr-0">
                <li class="bg-smblue px-4 font-semibold py-2 rounded-t border-t border-r border-l list-none"><a id="default-tab"  href="#first"><h3 class="text-white">Community</h3></a></li>
                <li class="bg-[#47b387] px-4 font-semibold py-2 rounded-t border-t border-r border-l list-none"><a id="default-tab" href="#second"><h3 class="text-white">Staff Development</h3></a></li>
                <li class="bg-[#999999] px-4  font-semibold py-2 rounded-t list-none"><a href="#third"><h3 class="text-white">Strategy</h3></a></li>
                <li class="px-4 bg-smyellow font-semibold py-2 rounded-t list-none"><a href="#forth"><h3 class="text-white">Events, Concerts, and Projects</h3></a></li>
            </ul>
            <table class="sm:inline-table mb-0 rounded-t-[16rem] bg-lightpurple hidden">
                <thead>
                    <tr>
                        <th class="w-1/5 pt-3 pb-3 pl-8 text-left text-white text-base font-normal">
                            Date
                        </th>
                        <th class="w-1/5 p-3 text-left text-white text-base font-normal">
                            Event
                        </th>
                        <th class="w-2/4 p-3 text-left text-white text-base font-normal">
                            Description
                        </th>
                        <th class="w-[10%] p-3 text-left text-white text-base font-normal">
                            Location
                        </th>
                    </tr>
                </thead>
            </table>

            <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first" class="">
                    <div class="bg-[#b8deff]">
                        
                        
                        <table class="w-full">
                            <tbody class="">
                                            
                                <?php


                                $eventsfeed = new WP_Query(array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'event',
                                    'order' => 'ABC',
                                    'category_name' => 'community', 

                                    

                                ));
                                while($eventsfeed->have_posts()){
                                        $eventsfeed->the_post();
                                        $eventDate = get_field('date_time', get_the_ID());
                                        $eventLocation = get_field('location', get_the_ID());
                                        ?>
                                                <tr class="flex flex-col sm:table-row sm:mb-0 border-2 border-gray-600 m-3 sm:border-0">
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Date</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php echo $eventDate ?>
                                                    </a>
                                                    </td>
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Events</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                        <a href="<?php the_permalink() ?>">
                                                                <?php the_title(); ?>
                                                        </a>
                                                    </td>
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Description</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-2/4 align-top">
                                                        <?php echo get_the_content(); ?>
                                                    </td>
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Location</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-[10%] align-top">
                                                        <?php echo $eventLocation ?>
                                                    </td>
                                                    
                                                </tr>


                                        <?php
                                    }

                                    wp_reset_postdata(); // Reset post data after the custom query
                                ?>

                                           
                            </tbody>
                        </table>

                    </div>
                </div>
                <div id="second" class="hidden">
                    <div class="bg-[#b0ffdf]">
                        
                        
                    <table class="w-full">
                        <tbody class="">
                                            
                        <?php


                            $eventsfeed = new WP_Query(array(
                                'posts_per_page' => -1,
                                'post_type' => 'event',
                                'order' => 'ABC',
                                'category_name' => 'staff-development', 

                                

                            ));
                            while($eventsfeed->have_posts()){
                                    $eventsfeed->the_post();
                                    $eventDate = get_field('date_time', get_the_ID());
                                    $eventLocation = get_field('location', get_the_ID());
                                    ?>
                                            <tr class="flex flex-col sm:table-row sm:mb-0 border-2 border-gray-600 m-3 sm:border-0">
                                                <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Date</p></td>
                                                <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                <a href="<?php the_permalink() ?>">
                                                    <?php echo $eventDate ?>
                                                </a>
                                                </td>
                                                <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Events</p></td>
                                                <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                    <a href="<?php the_permalink() ?>">
                                                            <?php the_title(); ?>
                                                    </a>
                                                </td>
                                                <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Description</p></td>
                                                <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-2/4 align-top">
                                                    <?php echo get_the_content(); ?>
                                                </td>
                                                <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Location</p></td>
                                                <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-[10%] align-top">
                                                    <?php echo $eventLocation ?>
                                                </td>
                                                
                                            </tr>


                                    <?php
                                }

                            wp_reset_postdata(); // Reset post data after the custom query
                        ?>

                                           
                                        </tbody>
                                    </table>

                    </div>
                </div>
                <div id="third" class="hidden">
                <div class="bg-[#ebebeb]">
                        
                        
                        <table class="w-full">
                                            <tbody class="">
                                                
                            <?php
    
    
                                $eventsfeed = new WP_Query(array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'event',
                                    'order' => 'ABC',
                                    'category_name' => 'strategy', 
    
                                    
    
                                ));
                                while($eventsfeed->have_posts()){
                                        $eventsfeed->the_post();
                                        $eventDate = get_field('date_time', get_the_ID());
                                        $eventLocation = get_field('location', get_the_ID());
                                        ?>
                                                <tr class="flex flex-col sm:table-row sm:mb-0 border-2 border-gray-600 m-3 sm:border-0">
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Date</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php echo $eventDate ?>
                                                    </a>
                                                    </td>
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Events</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                        <a href="<?php the_permalink() ?>">
                                                                <?php the_title(); ?>
                                                        </a>
                                                    </td>
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Description</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-2/4 align-top">
                                                        <?php echo get_the_content(); ?>
                                                    </td>
                                                    <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Location</p></td>
                                                    <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-[10%] align-top">
                                                        <?php echo $eventLocation ?>
                                                    </td>
                                                    
                                                </tr>
    
    
                                        <?php
                                    }
    
                                wp_reset_postdata(); // Reset post data after the custom query
                            ?>
    
                                               
                                            </tbody>
                                        </table>
    
                        </div>
                </div>
                <div id="forth" class="hidden">
                        <div class="bg-[#fff0d8]">
                            
                            
                            <table class="w-full">
                                                <tbody class="">
                                                    
                                <?php
        
        
                                    $eventsfeed = new WP_Query(array(
                                        'posts_per_page' => -1,
                                        'post_type' => 'event',
                                        'order' => 'ABC',
                                        'category_name' => 'school-and-event-for-schools', 
        
                                        
        
                                    ));
                                    while($eventsfeed->have_posts()){
                                            $eventsfeed->the_post();
                                            $eventDate = get_field('date_time', get_the_ID());
                                            $eventLocation = get_field('location', get_the_ID());
                                            ?>
                                                    <tr class="flex flex-col sm:table-row sm:mb-0 border-2 border-gray-600 m-3 sm:border-0">
                                                        <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Date</p></td>
                                                        <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo $eventDate ?>
                                                        </a>
                                                        </td>
                                                        <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Events</p></td>
                                                        <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-1/5 align-top">
                                                            <a href="<?php the_permalink() ?>">
                                                                    <?php the_title(); ?>
                                                            </a>
                                                        </td>
                                                        <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Description</p></td>
                                                        <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-2/4 align-top">
                                                            <?php echo get_the_content(); ?>
                                                        </td>
                                                        <td class="sm:hidden block"><p class="bg-lightpurple p-3 text-white">Location</p></td>
                                                        <td class="border-grey-light border hover:bg-gray-100 p-3 sm:w-[10%] align-top">
                                                            <?php echo $eventLocation ?>
                                                        </td>
                                                        
                                                    </tr>
        
        
                                            <?php
                                        }
        
                                    wp_reset_postdata(); // Reset post data after the custom query
                                ?>
        
                                                
                                                </tbody>
                                            </table>
        
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>