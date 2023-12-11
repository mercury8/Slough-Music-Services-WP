<?php
$title = get_field('title');
$tabOneTitle = get_field('tabOneTitle');
$tabTwoTitle = get_field('tabTwoTitle');
$tabThreeTitle = get_field('tabThreeTitle');

$tabOneText = get_field('tabOneText');
$tabTwoText = get_field('tabTwoText');
$tabThreeText = get_field('tabThreeText');

$tabOneButton = get_field('tabOneButton');
$tabOneButtonUrl = get_field('tabOneButtonUrl');
$tabTwoButton = get_field('tabTwoButton');
$tabTwoButtonUrl = get_field('tabTwoButtonUrl');
$tabThreeButton = get_field('tabThreeButton');
$tabThreeButtonUrl = get_field('tabThreeButtonUrl');

?>

<section>
    <div class="container mx-auto text-white my-32">
            <div class="text-3xl text-center pb-11">
                <h2><?php echo $title ?></h2>
            </div>
        <div class="flex sm:flex-col lg:flex-row sm:columns-3 flex-col gap-8 flex-wrap lg:flex-nowrap content-center lg:content-none md:justify-center ">
            <div class="bg-smblue rounded-[3rem] px-6 py-4 gap-0 w-[22rem] drop-shadow-lg flex items-center flex-col min-h-[40rem]">
                <h2 class="text-[1.8rem] font-semibold leading-8 text-center mx-auto max-w-[13rem]"><?php echo $tabOneTitle ?></h2><br>
                <div class="min-h-[30rem]"><p class="font-thin text-base"><?php echo $tabOneText ?></p></div>
                <a href="<?php echo $tabOneButtonUrl ?>" class="z-20"><button class="items-center w-64 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-white hover:text-lightpurple border-0"><?php echo $tabOneButton ?></button></a>
                <div class="absolute top-[26rem] left-40 h-72 rotate-[18deg] z-10">
                    <div class="absolute h-auto top-[-2rem] w-20 right-[-10rem]"><img src="/wp-content/uploads/2023/11/Drum-parts-03.svg" class="animate-wiggle-more animate-infinite animate-duration-200 animate-ease-in-out animate-alternate-reverse" alt="drum"></div>
                    <div class="absolute h-auto top-[-1rem] left-[-1rem] w-24"><img src="/wp-content/uploads/2023/11/Drum-parts-02.svg" class="animate-wiggle-more animate-infinite animate-duration-200 animate-ease-in-out animate-alternate-reverse" alt="drum"></div>
                    <div class="absolute h-auto top-4 w-40"><img src="/wp-content/uploads/2023/11/Drum-parts-01.svg" class="animate-wiggle animate-infinite animate-duration-[2000ms] animate-delay-100 animate-ease-out animate-normal" alt="drumMain"></div>
                </div>
            </div>
            <div class="w-[22rem] bg-smyellow rounded-[3rem] px-6 py-4 drop-shadow-lg flex items-center flex-col min-h-[40rem]">
                <h2 class="text-[1.8rem] font-semibold leading-8 text-center mx-auto max-w-[13rem]"><?php echo $tabTwoTitle ?></h2><br>
                <div class="min-h-[30rem] z-20"><p class="font-thin text-base"><?php echo $tabTwoText ?></p></div>
                <a href="<?php echo $tabTwoButtonUrl ?>"><button class="items-center w-64 rounded-full bg-smblue bottom-2 h-12 py-4 px-12 flex justify-center 
                flex-col text-white text-base hover:bg-white hover:text-smblue border-0 z-20"><?php echo $tabTwoButton ?></button></a>
                <div class="absolute top-[26rem] left-40 h-72 z-10">
                    <div class="absolute h-80 top-[-7rem] left-[2rem] w-40"><img src="/wp-content/uploads/2023/11/Volin-parts-01.svg" class="animate-wiggle animate-infinite animate-duration-[2000ms] animate-delay-100 animate-ease-out animate-normal" alt="VolinMain"></div>
                    <div class="absolute h-auto top-[-4rem] w-32 right-[-12rem] rotate-[25deg]"><img src="/wp-content/uploads/2023/11/Volin-parts-02.svg" class="animate-shake animate-infinite animate-duration-[400ms] animate-ease-out animate-normal" alt="Volinstick"></div>  
                </div>
            </div>
            <div class="w-[22rem] bg-lightpurple rounded-[3rem] px-6 py-4 drop-shadow-lg flex items-center flex-col min-h-[40rem]">
                <h2 class="text-[1.8rem] font-semibold leading-8 text-center mx-auto max-w-[13rem] mb-8"><?php echo $tabThreeTitle ?></h2><br>
                <div class="min-h-[30rem]"><p class="font-thin text-base"><?php echo $tabThreeText ?></p></div>
                <a href="<?php echo $tabThreeButtonUrl ?>"><button class="items-center w-64 rounded-full bg-darkpurple bottom-2 h-12 py-4 px-12 flex justify-center 
                flex-col text-white text-base hover:bg-white hover:text-darkpurple border-0"><?php echo $tabThreeButton ?></button></a>
                <div class="absolute top-72 left-36 h-72 z-10">
                    <div class="absolute h-auto top-16 w-20 right-[-4rem]"><img src="/wp-content/uploads/2023/11/Notes-001.svg" class="animate-fade-up animate-infinite animate-duration-[2000ms] animate-ease-out animate-normal" alt="note"></div>
                    <div class="absolute h-auto top-[-1rem] left-[-1rem] w-24"><img src="/wp-content/uploads/2023/11/Notes-001.svg" class="animate-delay-100 animate-fade-up animate-infinite animate-duration-[2000ms] animate-ease-out animate-normal" alt="note"></div>
                    <div class="absolute h-auto top-4 w-52 left md:left-[-3rem]"><img src="/wp-content/uploads/2023/11/Sax-01.svg" class="animate-wiggle animate-infinite animate-duration-[2000ms] animate-delay-100 animate-ease-out animate-normal" alt="saxMain"></div>
                </div>
            </div>
        </div>
    </div>
</section>