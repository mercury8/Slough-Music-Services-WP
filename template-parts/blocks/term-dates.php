<?php
$title = get_field('title');
$buttonLeftText = get_field('buttonLeftText');
$buttonRightText = get_field('buttonRightText');
$buttonLeftUrl = get_field('buttonLeftUrl');
$buttonRightUrl = get_field('buttonRightUrl');
?>

<section>
    <div class="container mx-auto">
        <div class="sm:max-w-[67rem] bg-[url('/wp-content/uploads/2023/11/bg-terms-dates.jpg')] sm:rounded-[49rem] rounded-[2rem] flex sm:flex-row flex-col text-white sm:justify-between h-auto mx-auto p-8">
            <h2 class="pl-8 text-4xl"><?php echo $title ?></h2>
            <div class="md:flex-row flex-col flex gap-6 items-center">
                <a href="<?php echo $buttonLeftUrl ?>"><button class="sm:mt-0 mt-4 items-center w-64 rounded-full bg-smblue bottom-2 h-12 py-4 px-12 flex justify-center 
                flex-col text-white text-base hover:bg-white hover:text-darkpurple border-0"><?php echo $buttonLeftText ?></button></a>
                <a href="<?php echo $buttonRightUrl ?>"><button class="items-center w-full rounded-full bg-smblue bottom-2 h-12 py-4 px-12 flex justify-center 
                flex-col text-white text-base hover:bg-white hover:text-darkpurple border-0"><?php echo $buttonRightText ?></button></a>
            </div>
        </div>
    </div>
</section>