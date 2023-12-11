<?php
$image = get_field('image');
$text = get_field('text');
$title = get_field('title');
$buttonText = get_field('buttonText');
$buttonUrl = get_field('buttonUrl');
?>

<section class="">
    <div class="my-32 max-w-[67rem] mx-auto text-white">
        <div class="flex sm:flex-row flex-col justify-center items-center sm:justify-normal sm:items-start">
            <div class="sm:w-1/2 w-full px-4 mb-4 flex justify-center">
                <img src="<?php echo $image ?>" alt="" class="w-96 rounded-[3rem]">
            </div>
            <div class="sm:w-1/2 w-full px-4">
                <h2 class="text-3xl"><?php echo $title ?></h2><br>
                <p><?php echo $text ?></p>
                    <a class="mt-8 block w-52 mx-auto" href="<?php echo $buttonUrl ?>">
                        <button class="items-center w-full rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0"><?php echo $buttonText ?></button>
                    </a>
            </div>
        </div>
    </div>
</section>