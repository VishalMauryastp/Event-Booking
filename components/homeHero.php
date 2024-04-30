<div class="swiper-container row" data-swiper-config='{ "loop": true, "prevButton":".swiper-button-prev", "nextButton": ".swiper-button-next", "speed": 700, "autoplay": "5000", "slidesPerView": 1, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 1 }, "767": { "slidesPerView": 1 }, "500": { "slidesPerView": 1 }}}'>

    <ul class="artist-line-wrapper swiper-wrapper">
        <!-- <?php
                $images = array("a1", "a2", "a3", "a4", "a1", "a2", "a3", "a4");
                $data = [
                    [
                        "img" => "img/special_act/special_act (1).jpg",
                        "title" => "Akshat Gupta",
                        "subtitle" => "Author & Motivational Speaker",
                        "description" => "Akshat Gupta, National Bestselling Author of The Hidden Hindu, Historian, Screenwriter and Lyricist by profession is a gifted motivational speaker who is known for his storytelling in the Bollywood bubble and for his bestselling books in the literary world. He is adept at expressing ideas in a way that drives millions of young minds and people in search of inspiration with his talks on Mythology, Hinduism, Ways of Life, Work-Life Balance, Mental Health, Dealing with Depression, not restricted to any age boundaries or category of audience."
                    ],
                    [
                        "img" => "img/special_act/special_act (2).jpg",
                        "title" => "Adbhut Collective Arts",
                        "subtitle" => "Collective Arts Studio Based in Mumbai",
                        "description" => "We present acts and performances from various cultures around the world with a twist. These range from aerial acts to Hologram, LED Interactions and a lot more. We bring an array of options for your couple entries at weddings to Product Launched at the big corporate conferences!"
                    ],
                ];
                foreach ($images as $value) { ?>
            <li class="artist-single clearfix swiper-slide">
                <img src="assets/img/<?php echo $value; ?>.jpg" alt="">
                <img src="assets/img/home/s2.jpg" alt="">
                <div class="artist-single-content">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                    <h6>James Hetfield</h6>
                    <p>Band: Metallica</p>
                </div>
            </li>
        <?php } ?> -->

        <?php
        $data = [
            [
                "img" => "assets/img/home/s2.jpg",
                "title" => "EVENT MANAGEMENT COMPANIES",
                "subtitle" => "Author & Motivational Speaker",
                "description" => "Akshat Gupta, National Bestselling Author of The Hidden Hindu, Historian, Screenwriter and Lyricist by profession is a gifted motivational speaker who is known for his storytelling in the Bollywood bubble and for his bestselling books in the literary world. He is adept at expressing ideas in a way that drives millions of young minds and people in search of inspiration with his talks on Mythology, Hinduism, Ways of Life, Work-Life Balance, Mental Health, Dealing with Depression, not restricted to any age boundaries or category of audience."
            ],
            [
                "img" => "img/special_act/special_act (2).jpg",
                "title" => "Russian Belly Dancers",
                "subtitle" => "Collective Arts Studio Based in Mumbai",
                "description" => "We present acts and performances from various cultures around the world with a twist. These range from aerial acts to Hologram, LED Interactions and a lot more. We bring an array of options for your couple entries at weddings to Product Launched at the big corporate conferences!"
            ],
            [
                "img" => "img/special_act/special_act (2).jpg",
                "title" => "Harmonious Melodies",
                "subtitle" => "Collective Arts Studio Based in Mumbai",
                "description" => "We present acts and performances from various cultures around the world with a twist. These range from aerial acts to Hologram, LED Interactions and a lot more. We bring an array of options for your couple entries at weddings to Product Launched at the big corporate conferences!"
            ],
            [
                "img" => "img/special_act/special_act (2).jpg",
                "title" => "Melodic Magic",
                "subtitle" => "Collective Arts Studio Based in Mumbai",
                "description" => "We present acts and performances from various cultures around the world with a twist. These range from aerial acts to Hologram, LED Interactions and a lot more. We bring an array of options for your couple entries at weddings to Product Launched at the big corporate conferences!"
            ],
        ];

        foreach ($data as $value) { ?>
            <li class="swiper-slide bg-black/50 mix-blend-multiply  max-lg:h-[70vh] h-[100vh] flex  justify-center items-center  relative">

                <img class="absolute h-100 w-100 z-[-1]  mix-blend-multiply" src="<?php echo $value['img']; ?>" alt="">
                <div class="artist-single-content  !mt-[73px]  ">
                    <!-- <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul> -->
                    <h1 class="text-[#ffc107] max-md:text-3xl text-7xl text-center"><?php echo $value['title']; ?></h1>
                    <p class="text-center text-white max-md:text-sm text-2xl max-md:mt-3 mt-8 max-md:font-normal font-bold text-balance max-md:max-w-[95%]  max-w-[70%]  mx-auto ">WE OFFER END-TO-END EVENT PLANNING SOLUTIONS, ENSURING SEAMLESS EXECUTION AND UNFORGETTABLE EXPERIENCES</p>

                    <a class="tim-slide-btn backdrop-blur-[4px] hover:!border-solid hover:!text-white hover:!bg-[#ffc107] mx-auto block w-fit max-md:mt-3 mt-8" href="#">Book Now</a>
                </div>
            </li>
        <?php } ?>
    </ul>
    <!-- <div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div> -->
</div>