<?php
$titleFirstHalf = get_field('titleFirstHalf');
$titleMiddle = get_field('titleMiddle');
$titleSecondHalf = get_field('titleSecondHalf');
$image = get_field('image');
$subText = get_field('subText');
$tabText = get_field('tabText');
$tabButtonText = get_field('tabButtonText');
$tabButtonUrl = get_field('tabButtonUrl');

?>

<section class="">
    <div class="max-w-[67rem] mx-auto pt-8 mb-32">
        <div class="flex sm:flex-row flex-col">
            <div class="md:w-4/5 logo is-animetion lg:text-7xl md:text-5xl font-light px-4 xl:px-0 sm:text-4xl text-7xl text-center sm:text-left flex flex-col justify-center sm:justify-normal items-center sm:items-start mb-6 sm:mb-0">
                <h1 class="text-white mt-4 animate-fade-down animate-once animate-delay-[25ms] animate-ease-in-out"><?php echo $titleFirstHalf ?> 
                <span class="text-smyellow font-semibold italic animate-pulse animate-delay-[25ms]"><?php echo $titleMiddle ?></span>
                <br> 
                <?php echo $titleSecondHalf ?></h1>
                <p class="text-white text-2xl italic mt-4 w-80 animate-fade animate-ease-out"><?php echo $subText ?></p>
            </div>
            
            <div class="floatitem rounded-3xl m-4 sm:px-0 flex justify-center">
                <img src="<?php echo $image ?>" alt="" class="w-full animate-fade animate-once animate-duration-[4000ms] animate-ease-out rounded-3xl">
            </div>
        </div>
        <div class="animate-fade animate-once animate-duration-[4000ms] animate-ease-out drop-shadow-lg md:w-full rounded-full bg-lightpurple w-full mt-16 shadow lg:flex-row justify-evenly p-4 items-center flex flex-col">
            <h2 class="text-white text-2xl mb-3 lg:mb-0"><?php echo $tabText ?></h2>
            <a href="<?php echo $tabButtonUrl ?>"><button class="drop-shadow-xl items-center w-64 rounded-full bg-smblue bottom-2 h-12 py-4 px-12 flex justify-center border-0 flex-col text-white text-xl hover:bg-white hover:text-smblue"><?php echo $tabButtonText ?></button></a>
        </div>
    </div>
</section>