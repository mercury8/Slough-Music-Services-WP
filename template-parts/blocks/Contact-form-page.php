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
    <div class="mt-16 mx-auto">
        <div class="">
            <div class="max-w-[80rem] mx-auto flex flex-col">    
                <div class="text-black text-base w-1/2 px-4 pb-16">
                    <h2 class="font-semibold mb-4"><?php echo $title ?></h2>
                    <p class="text-2xl mb-4"><?php echo $address ?></p>
                    <strong><p class="text-base mt-4"><?php echo $phoneNumber ?></p></strong>
                </div>
                <div class="z-20 bg-darkpurple rounded-b-[3rem] mb-[-7rem] relative flex sm:flex-row pt-4">
                    <div class="w-1/2 text-2xl px-4 pb-4 text-white">
                        <h2 class="font-semibold mb-4"><?php echo $formtitle1 ?></h2>
                        <?php echo $contactForm ?>
                    </div>
                    <div class="w-1/2 text-2xl px-4 pb-4 text-white">
                        <h2 class="font-semibold mb-4"><?php echo $formtitle2 ?></h2>
                        <?php echo $contactForm2 ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[80rem] mx-auto bg-darkpurple rounded-b-[3rem]">
            <div class="max-w-[78rem] mx-auto object-cover rounded-b-[3rem] z-10">
                <?php echo $googlemap ?> 
            </div>
        </div>
    </div>
</section>
