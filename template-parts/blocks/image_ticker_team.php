<?php 

$slider_text_color = get_field('slider_text_color');
$button_main_url = get_field('button_main_url');
$button_main_label = get_field('button_main_label');
$title = get_field('title');

?>

<section>
        <div class="container mx-auto">
            <div class="row">

                <div  id="mainsponsors_single" class="max-w-[67rem]  mx-auto py-5 bg-smyellow rounded-3xl">
                    <div class="text-3xl text-center pb-11 text-white">
                        <h2><?php echo $title ?></h2>
                    </div>

                    <div class="mx-auto">

                    <?php echo do_shortcode('[testimonialSlider]') ?>

                    </div>

                    <div class="w-full flex justify-center">
                        <a href="<?php echo $button_main_url ?>">
                            <button class="items-center w-56 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0">
                                <?php echo $button_main_label ?></button>
                        </a>
                    </div>

                </div>


            </div>
            </div>
        </div>
    </section>

