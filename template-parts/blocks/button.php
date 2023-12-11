<?php
$buttonText = get_field('buttonText');
$buttonUrl = get_field('buttonUrl');
?>

<section class="w-56 mb-12 mt-8">
    <div class="">
            <div class="">
                    <a class="my-4 block mx-2" href="<?php echo $buttonUrl ?>">
                        <button class="items-center w-full rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0"><?php echo $buttonText ?></button>
                    </a>
            </div>
    </div>
</section>