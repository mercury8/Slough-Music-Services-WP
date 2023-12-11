<?php

$tab1 = get_field('tab1');
$tab2 = get_field('tab2');
$tab3 = get_field('tab3');
$tab4 = get_field('tab4');
$tab5 = get_field('tab5');

$imageheader1 = get_field('imageheader1');
$imageheader2 = get_field('imageheader2');
$imageheader3 = get_field('imageheader3');
$imageheader4 = get_field('imageheader4');
$imageheader5 = get_field('imageheader5');

$text1 = get_field('text1');
$text2 = get_field('text2');
$text3 = get_field('text3');
$text4 = get_field('text4');
$text5 = get_field('text5');

$title1 = get_field('title1');
$title2 = get_field('title2');
$title3 = get_field('title3');
$title4 = get_field('title4');
$title5 = get_field('title5');

$more1 = get_field('more1');
$more2 = get_field('more2');
$more3 = get_field('more3');
$more4 = get_field('more4');
$more5 = get_field('more5');

$moreUrl1 = get_field('moreUrl1');
$moreUrl2 = get_field('moreUrl2');
$moreUrl3 = get_field('moreUrl3');
$moreUrl4 = get_field('moreUrl4');
$moreUrl5 = get_field('moreUrl5');



?>

<div class="rounded-[3rem] mx-auto my-32 max-w-[67rem] bg-lightpurple flex flex-col">
  <div class="w-full"><img src="<?php echo $imageheader1 ?>" alt="" class="rounded-t-[3rem]"></div>
  <!-- Tabs -->
    <div class="flex flex-col sm:flex-row-reverse p-8 items-center">
      <ul id="tabs" class="pt-2 px-1 flex flex-col items-center gap-4 w-2/5 list-none">
        <li class="list-none"><a id="default-tab" href="#first"><button class="items-center w-64 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-smyellow hover:text-white hover:border-smyellow border-smyellow"><?php echo $tab1 ?></button></a></li>
        <li class="list-none"><a href="#second"><button class="items-center w-64 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-smyellow hover:text-white hover:border-smyellow border-smyellow"><?php echo $tab2 ?></button></a></li>
        <li class="list-none"><a href="#third"><button class="items-center w-64 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-smyellow hover:text-white hover:border-smyellow border-smyellow"><?php echo $tab3 ?></button></a></li>
        <li class="list-none"><a href="#fourth"><button class="items-center w-64 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-smyellow hover:text-white hover:border-smyellow border-smyellow"><?php echo $tab4 ?></button></a></li>
        <li class="list-none"><a href="#fifth"><button class="items-center w-64 rounded-full bg-lightpurple bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-smyellow hover:text-white hover:border-smyellow border-smyellow"><?php echo $tab5 ?></button></a></li>
      </ul>

      <!-- Tab Contents -->
      <div id="tab-contents" class="w-full sm:w-3/5 mt-8 sm:mt-0">
      <div id="first" class="text-white">
          <h2 class="text-4xl mb-4"><?php echo $title1 ?></h2>
          <p class="min-h-[13rem]"><?php echo $text1 ?></p>
          <a href="<?php echo $moreUrl1 ?>"><button class="mx-auto sm:mx-0 mt-4 items-center w-64 rounded-full bg-smyellow bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-lightpurple hover:text-white hover:border-smyellow border-smyellow"><?php echo $more1 ?></button></a>
      </div>
      <div id="second" class="hidden text-white">
      <h2 class="text-4xl mb-4"><?php echo $title2 ?></h2>
          <p class="min-h-[13rem]"><?php echo $text2 ?></p>
          <a href="<?php echo $moreUrl2 ?>"><button class="mx-auto sm:mx-0 mt-4 items-center w-64 rounded-full bg-smyellow bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-lightpurple hover:text-white hover:border-smyellow border-smyellow"><?php echo $more2 ?></button></a>
      </div>
      <div id="third" class="hidden text-white">
      <h2 class="text-4xl mb-4"><?php echo $title3 ?></h2>
          <p class="min-h-[13rem]"><?php echo $text3 ?></p>
          <a href="<?php echo $moreUrl3 ?>"><button class="mx-auto sm:mx-0 mt-4 items-center w-64 rounded-full bg-smyellow bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-lightpurple hover:text-white hover:border-smyellow border-smyellow"><?php echo $more3 ?></button></a>
      </div>
      <div id="fourth" class="hidden text-white">
      <h2 class="text-4xl mb-4"><?php echo $title4 ?></h2>
          <p class="min-h-[13rem]"><?php echo $text4 ?></p>
          <a href="<?php echo $moreUrl4 ?>"><button class="mx-auto sm:mx-0 mt-4 items-center w-64 rounded-full bg-smyellow bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-lightpurple hover:text-white hover:border-smyellow border-smyellow"><?php echo $more4 ?></button></a>
      </div>
      <div id="fifth" class="hidden text-white">
      <h2 class="text-4xl mb-4"><?php echo $title5 ?></h2>
          <p class="min-h-[13rem]"><?php echo $text5 ?></p>
          <a href="<?php echo $moreUrl5 ?>"><button class="mx-auto sm:mx-0 mt-4 items-center w-64 rounded-full bg-smyellow bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-white text-base hover:bg-lightpurple hover:text-white hover:border-smyellow border-smyellow"><?php echo $more5 ?></button></a>
      </div>
    </div>
  </div>
</div>