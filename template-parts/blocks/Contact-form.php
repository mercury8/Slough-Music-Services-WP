<?php
$title = get_field('title');
$address = get_field('address');
$contactForm = get_field('contactForm');
$contactForm2 = get_field('contactForm2');
$googlemap = get_field('google_map');
$phoneNumber = get_field('phoneNumber');
$formtitle1 = get_field('formtitle1');
$formtitle2 = get_field('formtitle2');
?>

<section>
    <div class="mt-32 mx-auto">
        <div class="z-20 bg-darkpurple rounded-b-[3rem] mb-[-7rem] relative">
            <div class="max-w-[80rem] mx-auto flex flex-col md:flex-row">    
                <div class="text-white md:w-1/3 w-[27rem] mx-auto px-16 pb-16 text-2xl ">
                    <h2 class="font-semibold mb-4"><?php echo $title ?></h2>
                    <p class="text-2xl mb-4"><?php echo $address ?></p>
                    <p class="text-2xl font-semibold mt-4"><?php echo $phoneNumber ?></p>
                </div>
                <div class="md:w-1/3 w-full text-2xl md:border-x-2 md:border-white-200 px-4 pb-4 text-white">
                    <h2 class="font-semibold mb-4"><?php echo $formtitle1 ?></h2>
                    <?php echo $contactForm ?>
                </div>
                <div class="md:w-1/3 w-full text-2xl px-4 pb-4 text-white">
                    <h2 class="font-semibold mb-4"><?php echo $formtitle2 ?></h2>
                    <?php echo $contactForm2 ?>
                </div>
            </div>
        </div>
        <div class="w-full z-10">
            <?php echo $googlemap ?> 
        </div>
    </div>
</section>
