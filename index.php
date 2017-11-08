<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ontario Power Generation</title>
    <meta name="description" content="At Ontario Power Generation we don’t just make electricity for Ontarians. We are committed to environmental responsibility, to new job opportunities, community involvement, innovation and the future of energy generation.">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.min.js"></script> -->
    <script type="text/javascript" src="js/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
    <!-- <script type="text/javascript" src="../../js/lib/iscroll-probe.js"></script> -->
    <link rel="stylesheet" href="css/main.css"> 
    <link rel="stylesheet" href="css/mobile.css"> 
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <audio class="sound" id="sound_head" src="assets/media/sound/HYDRO_DAM_Audio.mp3" loop muted reload="metadata">
        Your browser does not support the <code>audio</code> element.
    </audio>

      <!-- Nav start-->
    <div class="header">

        <nav class="nav">

            <a class="logo" href="#top"><img src="assets/media/img/L_OPG.png"></a>

            <ul class="nav-holder">

                <li class="nav-el environment"><a href="#environmentAnchor" onclick="navscroll(this)">Environment</a></li>

                <li class="nav-el economy"><a href="#economyAnchor" onclick="navscroll(this)">Economy</a></li>

                <li class="nav-el communities"><a href="#communitiesAnchor" onclick="navscroll(this)">Communities</a></li>

                <li class="nav-el innovation"><a href="#innovationAnchor" onclick="navscroll(this)">Innovation</a></li>

                <li class="nav-el sound">

                    <a class="sound-toggle" href="javascript:void(0)"><span>Best experienced with sound</span> <i class="fa fa-volume-off" aria-hidden="true"></i></a>

                </li>

            </ul>

        </nav>

        <nav class="mobile-nav">

            <a href="javascript:void(0);" class="icon" id="icon" onclick="showNav()">&#9776;</a>

            <a class="mobile-logo" href="#top" ><img data-src="assets/media/img/L_OPG.png"></a>

            <li class="nav-el sound">
                <a class="sound-toggle" href="javascript:void(0)"><i class="fa fa-volume-off" aria-hidden="true"></i></a>
            </li>

            <ul class="nav-holder" id="mobileNav">

                <li class="nav-el environment"><a href="#environmentAnchor" onclick="showNav()">Environment</a></li>

                <li class="nav-el economy"><a href="#economyAnchor" onclick="showNav()">Economy</a></li>

                <li class="nav-el communities"><a href="#communitiesAnchor" onclick="showNav()">Communities</a></li>

                <li class="nav-el innovation"><a href="#innovationAnchor" onclick="showNav()">Innovation</a></li>

            </ul>

        </nav>

    </div>

    <div class="main" id="top">

       <div class="video-overlay" style="background-image: url(./assets/media/img/hero.jpg);">
            <!--[if lte IE 8]><img data-src="assets/media/power.jpg"><![endif]-->
            <div class="hero-text"> 
                <h1>Made in Ontario.</h1>
                <h4>Across this province, Ontario Power Generation is working<br> with a greater purpose in mind. That’s why we don’t just make electricity for Ontarians.</h4>
            </div>
            <div id="more">
                <a class="scroll-link" href="#scrollPoint">
                    <p>SCROLL</p>
                    <svg height="70" width="70">
                        <polygon points="25,15 35,30 45,15" stroke="white" stroke-width="3" fill="white"/>
                    </svg>
                </a>
            </div>
            <video class="top-video video" id="video" style="top: -200vh;" autoplay loop muted playsinline>
                <source type="video/mp4" data-src="https://player.vimeo.com/external/241068101.hd.mp4?s=5ce742776ae127f45d035f336d2239026ee90b54&profile_id=174"></source>
                <!-- <source type="video/webm" data-src="assets/media/video/footer.webm"></source> -->
            </video>
            <!-- <iframe class="top-video video" id="video" src="https://player.vimeo.com/video/241068101?background=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 -->
        </div>

        <div class="rows">
            <span id="scrollPoint" style="position:relative; top:-60px;"></span>
            <span id="scroll-trigger" style="position: relative;top: 200px;display: inline-block;"></span>

            <a href="#intro1"><div data-bg="./assets/media/img/intro1.png" class="slide-down" id="row1">
                <span class="row-overlay">
                    <h2>We make the air cleaner.</h2>
                </span>
            </div></a>

            <a href="#intro2"><div data-bg="./assets/media/img/intro2.png" class="slide-down" id="row2">
                <span class="row-overlay">
                    <h2>We make economies stronger.</h2>
                </span>
            </div></a>

            <a href="#communities"><div data-bg="./assets/media/img/intro3.png" class="slide-down" id="row3">
                <span class="row-overlay">
                    <h2>We make communites more livable.</h2>
                </span>
            </div></a>

            <a href="#intro4"><div data-bg="./assets/media/img/turbine.png" class="slide-down" id="row4">
                <span class="row-overlay">
                    <h2>We make possibilities for future generations.</h2>
                </span>
            </div></a>
        </div>

        <div class="content intro intro1" data-bg="./assets/media/img/intro1.png" id="intro1">

            <span id="environmentAnchor" style="position: relative;top: 2vh;display: inline-block;"></span>

            <audio class="sound" id="sound_1" src="assets/media/sound/SKY_AND_FIELD_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="intro-overlay">

                <div class="intro-text intro-environment navlink" id="scroll-trigger">

                    <h1 ><span style="font-weight: 100;">Clean Air.</span> Made in Ontario.</h1>

                    <p>Ontario Power Generation is committed to keeping Ontario’s air as clean as possible. That’s why in 2014 we closed the last of our last coal plants. Now our electricity is more than 99% free of smog and carbon emissions, which helps battle climate change and keeps the air clean for all Ontarians.</p>

                </div>

            </div>                

        </div>

        <div class="content click-video intro1" id="breaths-video">
            <video class="breaths-video video" id="video" loop playsinline poster="./assets/media/img/Breathe_thumb.jpg">
                <!-- <source type="video/webm" data-src="assets/media/waves.webm"></source> -->
                <source type="video/mp4" data-src="https://player.vimeo.com/external/241068042.hd.mp4?s=5da12bfa5a644c9e7da462c2a9eff2aa70193a11&profile_id=174"></source>
            </video>
            <!-- <iframe class="breaths-video video" id="video" src="https://player.vimeo.com/video/241068042" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
            <div class="playpause">
                <img data-src="assets/media/img/playBtn.png">
            </div>
        </div>

        <div class="content environment-lb intro1" id="contentLightbox" data-bg="./assets/media/img/environment-lb.png">

            <audio class="sound" id="sound_2" src="assets/media/sound/OVERHEAD_TREES_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="caption-overlay">
                <div class="lightbox-link-holder">
                    <h4><span style="font-weight: 100;">From trees to bees.</span></h4>
                    <p style="text-align: left;">In addition to clean air, we’re making the environment greener by protecting biodiversity, planting trees, and helping species at risk. Here are just a few of the environmental initiatives we’re involved with:</p>
                    <span class="lightbox-link" id="rangers">
                        <a href="./assets/media/img/earth_rangers.jpg" class="rangers lightbox_trigger">
                            Earth Rangers
                            <p style="display: none;">Despite its ferocious reputation, the wolverine is under threat in Ontario due to habitat loss and incidental trapping. Fortunately, one of OPG’s biodiversity partners, Earth Rangers, is working to protect them. Earth Rangers is a kid-focused conservation organization dedicated to educating children and their families about biodiversity. Along with the Wildlife Conservation Society (WCS), Earth Rangers launched a project to reduce incidental trapping of wolverines in Ontario’s southern boreal forest. It’s unknown how many wolverines are left in the wild, but estimates are just 600. Part of the problem is that they have low birth rates, which mean the population has been slow to recover. As a proud supporter of Earth Rangers since 2010, OPG has helped to raise more than $470,000 to conserve species just like the wolverine.</p>
                            </a>
                    </span>
                    <span class="lightbox-link" id="bee">
                        <a href="./assets/media/img/let_it_bee.jpg" class="bee lightbox_trigger">
                            Let it Bee
                            <p style="display: none;">There are 400+ species of bees in Ontario dying by the millions due to climate change and the use of neonicotinoid pesticides. It’s a serious situation for both bee and human since pollinators like bees are responsible for about two thirds of what we eat. To help fight the decline of Ontario’s bee population, Ontario Power Generation has partnered with Friends of the Earth Canada to encourage businesses and city gardeners to let their yards just “bee,” so they can become a haven for bees. This means doing things like leaving old stems and decaying wood, keeping sunny ground areas mulch-free so bees can burrow, planting native flowers to provide nectar (Bumble bees like white, yellow, blue, and purple flowers), and avoiding the use of neonicotinoid pesticides.</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="salmon">
                        <a href="./assets/media/img/BringBackSalmon.jpg" class="salmon lightbox_trigger">
                            Bring Back the Salmon
                            <p style="display: none;">The Atlantic salmon settled in Lake Ontario approximately 12,000 years ago, but was declared locally extinct in 1896 due to the impact of human activities. About ten years ago, the Ontario Federation of Anglers and Hunters (OFAH), along with more than 40 partners, launched a major initiative to restore a self-sustaining Atlantic salmon population to Lake Ontario and its streams. As lead sponsor of the program, OPG has since helped stock more than 7 million salmon in Lake Ontario and three target tributaries (Credit River, Duffins Creek and Cobourg Creek). A 2014 study by the Ministry of Natural Resources and Forestry found the salmon fry exceeded expectations for growth and survival in their first year. The study also noted the presence of Atlantic salmon nests, wild juveniles, and wild adults in the rivers.</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="planting">
                        <a href="./assets/media/img/treeplanting.jpg" class="rangers lightbox_trigger">
                            Tree Planting
                            <p style="display: none;">With close to 7 million native trees and shrubs planted since 2000, our tree planting initiative is the centrepiece of our biodiversity and wildlife habitat program. “Tree planting supports multiple objectives,” says Jeff Wright, an environmental advisor at OPG. “It aids in reforestation of lands, creates habitats for wildlife, contributes to carbon storage, and mitigates greenhouse gas impacts.” Ontario Power Generation maintains contracts with several conservation authorities across Ontario, including Essex Region, South Nation, Long Point, and Kettle Creek. In addition, OPG and LEAF (Local Enhancement and Appreciation of Forest) are partners in helping to green Toronto and surrounding communities with the Backyard Tree Planting program, which helps to grow the Greater Toronto Area’s urban canopy.</p>
                        </a>
                    </span>
                </div>

                <div id="lightbox">
                    <div id="content">
                        <img data-src="#" />
                    </div>
                    <button><img src="assets/media/img/exit.svg"></button>
                </div>

            </div>

        </div>

        <div class="content intro intro2" data-bg="./assets/media/img/intro2.png" id="intro2">

            <span id="economyAnchor" style="position: relative;top: 2vh;display: inline-block;"></span>

            <audio class="sound" id="sound_3" src="assets/media/sound/HARDHATS_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="intro-overlay">

                <div class="intro-text intro-jobs navlink">

                    <h1><span style="font-weight: 100;">Stronger Economies.</span> Made in Ontario.</h1>

                    <p>Ontario Power Generation proudly employs over 9,300 people from from a wide range of backgrounds and skills. You can meet a few of them in our Worker Profile Series below.</p>

                </div>

            </div>

        </div>

        <div class="content slides intro2" id="slides2" style="background-color: black;">
            <video class="video click-video" id="video0" loop playsinline poster="./assets/media/img/Joe_thumb.jpg">
                <source src="https://player.vimeo.com/external/241102343.hd.mp4?s=6336bed85c0a7a3099970b7dfc055e1af843e54b&profile_id=174"></source>
                <!-- <source type="video/webm" data-src="assets/media/video/footer.webm"></source> -->
            </video>
            <div class="playpause">
                <img data-src="assets/media/img/playBtn.png">
            </div>

            <!-- <iframe class="click-video main-video video" id="videoMain" src="https://player.vimeo.com/video/241068114" onclick="hideslider(this.id)" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

            <div class="slides-wrap">

                <button class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>

                <p class="slides-caption">Ontario Power Generation Worker Profile Series</p>

                <div class="container siema">

                    <div>
                        <video class="slider-video1 video slider-image" id="video1" onclick="switchVideo(this.id)" loop playsinline poster="./assets/media/img/Gerry_thumb.jpg">
                            <source src="https://player.vimeo.com/external/241322012.sd.mp4?s=a051480397cc1c7de79c92be4a1cbb585f767f5d&profile_id=165"></source>
                        </video>
                        <!-- <img data-src="./assets/media/opg-slide2.jpg" class="slider-image"> -->
                    </div>
                    <div>
                        <video class="slider-video2 video slider-image" id="video2" onclick="switchVideo(this.id)" loop playsinline poster="assets/media/img/Joe_thumb.jpg">
                            <source src="https://player.vimeo.com/external/241102343.hd.mp4?s=6336bed85c0a7a3099970b7dfc055e1af843e54b&profile_id=174"></source>
                        </video>
                        <!-- <img data-src="./assets/media/opg-slide3.jpg" class="slider-image"> -->
                    </div>
                    <div>
                        <video class="slider-video3 video slider-image" id="video3" onclick="switchVideo(this.id)" loop playsinline poster="assets/media/img/Gerry_thumb.jpg">
                            <source src="https://player.vimeo.com/external/241322012.sd.mp4?s=a051480397cc1c7de79c92be4a1cbb585f767f5d&profile_id=165"></source>
                        </video>
                        <!-- <img data-src="./assets/media/opg-slide1.jpg" class="slider-image"> -->
                    </div>

                </div>
                
                <button class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

            </div>
        </div>

        <div class="content jobs-lb intro2" id="contentLightbox" data-bg="assets/media/img/welder.png">

            <audio class="sound" id="sound_4" src="assets/media/sound/WELDING_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="caption-overlay">
                <div class="lightbox-link-holder">
                    <h4><span style="font-weight: 100;">For all Ontarians.</span></h4>
                    <p style="text-align: left;">We also help put thousands of people to work across Ontario on our clean energy projects and through our supply chain. Our Darlington Refurbishment project alone will create 14,000 jobs each year and include more than 60 partner companies throughout Ontario – companies just like these:</p>
                    <span class="lightbox-link" id="cameco">
                        <a href="./assets/media/img/Cameco.jpg" class="lightbox_trigger">
                            Cameco
                            <p style="display: none;">Cameco is a fuel manufacturer based in Cobourg, Ontario. For the Darlington Refurbishment project, they were awarded the contract for making the calandria tubes which sit inside the Unit 2 reactor core. Each tube houses a pressure tube that contains the nuclear fuel bundles crucial to making clean, reliable power. In June 2017, Cameco delivered the first shipment of more than 200 new calandria tubes ahead of their delivery commitment with the remaining 300 tubes on track for an early delivery as well. “We are thrilled to be part of this project and look forward to working closely with OPG,” said Dale Clark, Vice President of Cameco’s Fuel Services Division. “We are all reaching for the same goal of delivering safe, low-carbon, reliable energy.” OPG’s partnership with Cameco is a shining example of Ontarians supporting Ontarians.</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="esfox">
                        <a href="./assets/media/img/esfox.jpg" class="lightbox_trigger">
                            E.S. Fox
                            <p style="display: none;">Established in 1934 and based in Niagara Falls, Ontario, E.S. Fox is recognized as one of the preeminent multi-trade and nuclear constructor/fabricators in the country. For this reason it’s also one of the prime contractors involved with the Darlington Refurbishment project. Of the many projects Fox supports, one of the most important is the PowerTrack – an integral part of Darlington’s fuel-handling system. The PowerTrack provides a flexible avenue for power, control, and signal cables to be connected to trolleys from the central service area. Due to its importance, a full mock-up of the PowerTrack is currently being used for training in a small warehouse at Darlington to allow workers to hone their skills in a non-nuclear environment before moving into the actual fuel channels in a reactor building.</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="nutech">
                        <a href="./assets/media/img/NuTech.jpg" class="lightbox_trigger">
                            Nu-Tech
                            <p style="display: none;">Arnprior, Ontario is home to Nu-Tech Precision Metals, a metal fabricator that has made every pressure tube in a CANDU reactor worldwide since 1957. Recently, Nu-Tech delivered 513 new pressure tubes for the Unit 2 reactor at the Darlington Nuclear Generating Station (480 for the reactor, 33 spares). Made with zirconium metal, each pressure tube sits inside a calandria tube within the reactor. And inside each pressure tube sits the nuclear fuel bundles that make clean, reliable nuclear power. This design enables the use of online refueling, which is a unique feature of CANDU reactors. “We’re proud to have been trusted to manufacture this very important component when Darlington was first built and again for its continued operations,” said Nu-Tech president, George Legate. Nu-Tech’s long history with Darlington is a perfect example of how OPG’s partnerships help support Ontarians across the province.</p>
                        </a>
                    </span>
                </div>

                <div id="lightbox">
                    <div id="content">
                        <img data-src="#" />
                    </div>
                    <button><img src="assets/media/img/exit.svg"></button>
                </div>

            </div>

        </div>

        <div class="content partnerships-lb intro2" id="contentLightbox" data-bg="./assets/media/img/partnership.jpg">

            <audio class="sound" id="sound_5" src="assets/media/sound/WIND_CONSTRUCTION_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="caption-overlay">
                <div class="lightbox-link-holder">
                    <h4><span style="font-weight: 100;">Meaningful partnerships.</span></h4>
                    <p style="text-align: left;">But it’s not just companies we partner with; we also work with communities like the Taykwa Tagamou Nation – a partnership that proudly built the Peter Sutherland Senior Hydroelectric Generating station, which is now generating clean power in Northern Ontario.</p>
                    <span class="lightbox-link" id="sutherland">
                        <a href="./assets/media/img/partnership.png" class="lightbox_trigger">
                            Peter Sutherland
                            <p style="display: none;">After almost two years of construction and eight years of planning, a partnership development between OPG and Coral Rapids Power – a wholly-owned company of the Taykwa Tagamou Nation (TTN), came to life. The 28-megawatt Peter Sutherland Sr. Hydroelectric Generating Station 80 kilometres north of Smooth Rock Falls can provide 25,000 homes and businesses with clean, renewable power. At its peak construction, 220 people worked on the project, including 50 TTN members. Along with helping build the station, the community retains one-third ownership and will receive a share of profits over the station’s expected 90-year life.</p>
                        </a>
                    </span>
                </div>

                <div id="lightbox">
                    <div id="content">
                        <img data-src="#" />
                    </div>
                    <button><img src="assets/media/img/exit.svg"></button>
                </div>

            </div>

        </div>

        <div class="content intro intro2" data-bg="assets/media/img/Moderating-Price.jpg" id="introNew">

            <audio class="sound" id="sound_new" src="assets/media/sound/WIND_CONSTRUCTION_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="intro-overlay">

                <div class="intro-text intro-innovation">

                    <h1><span style="font-weight: 100;">Moderating price.</span></h1>

                        <p>As Ontario’s low-cost, clean energy producer, Ontario Power Generation works diligently to moderate energy prices and keep its portion of customer’s energy bills as low as possible. Our electricity is about 40 per cent less expensive than the average of all other generators in Ontario. In 2016, OPG accounted for about half of the province’s electricity and received 6.6 cents/kWh for this output while other generators received on average 11 cents/kWh. This means OPG produces about half of Ontario’s power while representing less than 20 per cent of the average residential customer’s bill. Our low-cost power helps keep the overall cost of electricity down for Ontarians, while our profits return to the Province to help pay for government services.</p>

                </div>

            </div>

        </div>

        <div class="content communities-lb" id="contentLightbox" data-bg="./assets/media/img/community.jpg">

            <span id="communitiesAnchor" style="position: relative;top: 1vh;display: inline-block;"></span>

            <!-- <audio id="sound_6" src="assets/media/sound/waterfallSound.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio> -->

            <div class="caption-overlay" id="communities">
                <div class="lightbox-link-holder navlink">

                    <h4><span style="font-weight: 100;">Liveable Communities.</span><br id='tabhide'> Made in Ontario.</h4>
                    <p style="text-align: left;">Last year, Ontario Power Generation supported more than 850 grassroots initiatives and programs at our local sites and Indigenous communities across Ontario covering a range of areas, including: arts and culture, education, environment, health and safety, and sports programs. Here are a few:</p>
                    <span class="lightbox-link" id="reading">
                        <a href="./assets/media/img/reading_camp.jpg" class="lightbox_trigger">
                            Indigenous Summer Reading Camps
                            <p style="display: none;">The First Nations of Ontario are an important piece of our provincial fabric. That’s why we take our Indigenous community programs to heart – especially when it comes to the children of remote communities where access to various programs can be challenging. OPG has been a steadfast supporter of the Lieutenant Governor of Ontario's Annual Aboriginal Youth Summer Reading Camp Program. Since 2005, its purpose is to improve the literacy skills of Indigenous youth living in these remote communities. At OPG-hosted “Reading is Cool” events, OPG volunteers hold fun activities and provide each camper with school supplies a new age-appropriate book. They also mentor campers in their literacy activities. For people like Tana-Leigh Harty, OPG’s corporate relations officer in northwest Ontario, “It’s a real community event that brings everyone together.” No wonder she’s been helping for eight years.</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="olympics">
                        <a href="./assets/media/img/special_olympics.jpg" class="lightbox_trigger">
                            Special Olympics
                            <p style="display: none;">Special Olympics Ontario has been providing opportunities for people with intellectual disabilities for more than 40 years. It now maintains programs in over 140 communities across the province with more than 21,000 participants annually. Athletes who participate are more self-confident and more likely to find jobs. That’s why OPG has been a proud sponsor since 2008. The last Special Olympics Ontario Provincial Championships were held at Durham College and saw more than 600 athletes competing in five sports. In addition to their family and fans, they were accompanied by more than 300 volunteers, 200 coaches, and several community partners, including OPG, Durham Regional Police Service, and Durham College. For Scott Burns, OPG’s Vice President of Security and Emergency Preparedness and who introduced the Law Enforcement Torch Run, “Causes like this inspire individual development and community well-being.”</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="trails">
                        <a href="./assets/media/img/TuesdayOnTheTrails.jpg" class="lightbox_trigger">
                            Tuesday on the Trail
                            <p style="display: none;">These days, kids don’t get the chance to explore the great outdoors as much as they should. Our Tuesdays on the Trail program is a two-month program designed to inspire kids between 5 and 12 with nature’s hidden delights. Hosted by our two nuclear generating stations in Pickering and Darlington, activities take place at Alex Robertson Park and the Enniskillen Conservation Area and are free for everyone. Every week, community partners arrive with bundles of equipment, ready for new adventures. With partners like Earth Rangers and Scientists in Schools, kids get to do fun things like go on hikes, do arts and crafts, and learn interesting things about nature. Adults are plentiful too with some kids bringing their entire family. The program runs for the duration of the summer and reaches hundreds of kids many of whom come back every week and some, every year.</p>
                        </a>
                    </span>
                    <span class="lightbox-link" id="tackle">
                        <a href="./assets/media/img/tackleshare.jpg" class="lightbox_trigger">
                            TackleShare
                            <p style="display: none;">TackleShare is a province-wide program that connects Ontario families with all the equipment and resources they need to enjoy fishing in Ontario’s beautiful lakes and rivers. Run by the Ontario Federation of Anglers and Hunters (OFAH), TackleShare has received OPG’s support since 2010, in part to help spread the word about water safety near OPG’s dams and hydroelectric stations. Fishing kits are available for free at over 140 loaner sites across Ontario and to further bolster the program’s reach, a travelling TackleShare van makes regular appearances at weekend events across the province.</p>
                        </a>
                    </span>
                </div>

                <div id="lightbox">
                    <div id="content">
                        <img data-src="#" />
                    </div>
                    <button><img src="assets/media/img/exit.svg"></button>
                </div>

            </div>

        </div>

        <div class="content darlington click-video innovation" id="darlington">
            
            <span id="innovationAnchor" style="position: relative;top: -99vh;display: inline-block;"></span>

            <video class="video click-video" id="video" loop playsinline poster="assets/media/img/darlington2.png">
                <source src="https://player.vimeo.com/external/241068091.sd.mp4?s=2d30d5ffdc07e318288d97bc0f715eaab990ba72&profile_id=165"></source>
                <track default label="English" kind="subtitles" srclang="en" src="assets/media/video/original-opg_innovation_at_darlington.vtt">
            </video>
            <div class="playpause">
                <img data-src="assets/media/img/playBtn.png">
            </div>
            <div class="slides-wrap">
                
                <h1><span style="font-weight: 100;">Innovation.</span> Made in Ontario.</h1>

                <p>At OPG, we’re not just generating power for today’s Ontarians, but for tomorrow’s as well. Our world-leading Darlington Nuclear Generating Station is undergoing a major upgrade that will see it continue to provide clean energy past 2050.</p>
            </div>
        </div>

        <div class="content intro innovation" data-bg="assets/media/img/intro4.png" id="intro4">

            <audio class="sound" id="sound_7" src="assets/media/sound/E-CAR_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="intro-overlay">

                <div class="intro-text intro-innovation">

                    <h1><span style="font-weight: 100;">Electrifying the road.</span></h1>

                        <p>We’re also looking to use our clean electrons to help power the transportation sector. That’s why we started Plug N’ Drive, a not-for-profit group aimed at accelerating the adoption of electric vehicles in Ontario. As part of our climate change action plan, we’re also looking at electrifying our vehicle fleet.</p>

                </div>

            </div>

        </div>

        <div class="content intro innovation" data-bg="./assets/media/img/satellite.jpg" id="intro5">

            <audio class="sound" id="sound_8" src="assets/media/sound/SPACE_Audio.mp3" loop muted preload="metadata">
                Your browser does not support the <code>audio</code> element.
            </audio>

            <div class="intro-overlay">

                <div class="intro-text intro-satellite">

                    <h1><span style="font-weight: 100;">Ontario and beyond.</span></h1>

                    <p>Ontario Power Generation produces power for Ontario homes and businesses, but we’re also looking to power those as far away as deep space. Recently we entered a partnership with NASA to provide power for its future deep space missions by supplying a special plutonium isotope, Pu-238, a critical power source for probes like the Mars Rover.</p>

                </div>

            </div>

        </div>

        <div class="content intro innovation" data-bg="./assets/media/img/cobalt.jpg" id="intro6">

            <div class="intro-overlay">

                <div class="intro-text intro-cobalt">

                    <h1><span style="font-weight: 100;">Advancing Medicine.</span></h1>

                    <p>Cobalt-60 is a radioisotope produced by the adjustor rods at our Pickering Nuclear Generating Station. Every 24 months we extract these rods and process them for scientists, technicians, and academic researchers. One of the most important uses for Cobalt-60 is irradiation sterilization, a Canadian technology used around the world to enhance the safety of perishable foods and medical devices like implants.</p>

                </div>

            </div>

        </div>

                <!-- <video class="content doc-video video" id="video" autoplay loop muted playsinline> -->
                    <!-- <source type="video/webm" data-src="assets/media/river.webm"></source> -->
                    <!-- <source type="video/mp4" data-src="assets/media/video/river.mp4"></source>
                    <div class="playpause"></div>
                </video> -->

                <!-- <div class="content innovation-lb" id="contentLightbox" data-bg="./assets/media/img/innovation-lb.png">

                    <div class="caption-overlay">
                        <div class="lightbox-link-holder">
                            <h4>Electrifying the road.</h4>
                            <p style="text-align: left;">In addition to clean air emissions, Ontario Power Generation is making our environment greener by protecting biodiversity, planting trees, and helping species at risk.</p>
                            <span class="lightbox-link" id="salmon">
                                <a href="./assets/media/img/opg-slide1.jpg" class="lightbox_trigger">
                                    Salmon Program
                                    <p style="display: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque massa, vehicula nec nunc vel, dapibus egestas augue. In hac habitasse platea dictumst. Fusce semper turpis ut arcu fermentum, fermentum faucibus leo posuere. Curabitur sit amet dui non quam facilisis consectetur vel in eros. Aliquam in placerat lacus. In velit erat, auctor a rhoncus nec, lacinia vitae dui. Nunc sed lorem elit. Donec aliquam, massa et ullamcorper tempus, turpis nisl viverra velit, ut porta nunc lorem in magna. Mauris euismod nibh at ullamcorper placerat. Proin mollis turpis tellus, eu egestas velit consequat non. Morbi viverra massa vitae posuere porta. In condimentum eros massa, in viverra elit vestibulum non. Fusce lacus nisl, auctor ac mauris fringilla, pretium aliquet enim. Cras consequat condimentum lectus. Curabitur nec odio mi. Cras ultricies felis libero, a fermentum augue lacinia eu. Fusce et fringilla nibh.</p>
                                </a>
                            </span>
                            <span class="lightbox-link" id="bee">
                                <a href="./assets/media/img/opg-slide2.jpg" class="lightbox_trigger">
                                    Let it Bee
                                    <p style="display: none;">Dolor sit amet, consectetur adipiscing elit. Ut neque massa, vehicula nec nunc vel, dapibus egestas augue. In hac habitasse platea dictumst. Fusce semper turpis ut arcu fermentum, fermentum faucibus leo posuere. Curabitur sit amet dui non quam facilisis consectetur vel in eros. Aliquam in placerat lacus. In velit erat, auctor a rhoncus nec, lacinia vitae dui. Nunc sed lorem elit. Donec aliquam, massa et ullamcorper tempus, turpis nisl viverra velit, ut porta nunc lorem in magna. Mauris euismod nibh at ullamcorper placerat. Proin mollis turpis tellus, eu egestas velit consequat non. Morbi viverra massa vitae posuere porta. In condimentum eros massa, in viverra elit vestibulum non. Fusce lacus nisl, auctor ac mauris fringilla, pretium aliquet enim. Cras consequat condimentum lectus. Curabitur nec odio mi. Cras ultricies felis libero, a fermentum augue lacinia eu. Fusce et fringilla nibh.</p>
                                </a>
                            </span>
                            <span class="lightbox-link" id="rangers">
                                <a href="./assets/media/img/opg-slide3.jpg" class="lightbox_trigger">
                                    Earth Rangers
                                    <p style="display: none;">Consectetur adipiscing elit. Ut neque massa, vehicula nec nunc vel, dapibus egestas augue. In hac habitasse platea dictumst. Fusce semper turpis ut arcu fermentum, fermentum faucibus leo posuere. Curabitur sit amet dui non quam facilisis consectetur vel in eros. Aliquam in placerat lacus. In velit erat, auctor a rhoncus nec, lacinia vitae dui. Nunc sed lorem elit. Donec aliquam, massa et ullamcorper tempus, turpis nisl viverra velit, ut porta nunc lorem in magna. Mauris euismod nibh at ullamcorper placerat. Proin mollis turpis tellus, eu egestas velit consequat non. Morbi viverra massa vitae posuere porta. In condimentum eros massa, in viverra elit vestibulum non. Fusce lacus nisl, auctor ac mauris fringilla, pretium aliquet enim. Cras consequat condimentum lectus. Curabitur nec odio mi. Cras ultricies felis libero, a fermentum augue lacinia eu. Fusce et fringilla nibh.</p>
                                </a>
                            </span>
                        
                        </div>

                        <div id="lightbox">
                            <div id="content">
                                <img data-src="#" />
                            </div>
                            <button><img src="assets/media/img/exit.svg"></button>
                        </div>

                    </div>

                </div> -->

    </div>

    <div class="content footer" data-bg="assets/media/img/footer.jpg">

        <video class="top-video video" id="video" autoplay loop muted playsinline>
            <source type="video/webm" data-src="assets/media/video/header.webm"></source>
            <source type="video/mp4" data-src="assets/media/video/header.mp4"></source>
        </video>

        <audio class="sound" id="sound_footer" src="assets/media/sound/RIVER_RUNNING_Audio.mp3" loop muted preload="metadata">
            Your browser does not support the <code>audio</code> element.
        </audio>

        <div class="footer-text">
            <h1>Made in Ontario.</h1>

            <h3>From environmental responsibility, to new job opportunities, community involvement, and the future of energy generation, Ontario Power Generation is committed to ensuring the electricity we produce is done in a way that all Ontarians can be proud. After all, we’re Ontarians too.<br><br>To learn more about our projects or to get involved with our community initiatives, visit opg.com.</h3>

                
            <div class="cta-button">
                <a href="http://opg.com" target="_blank">
                    <h2>OPG.COM</h2>
                </a>
            </div>
                
        </div>

        <div class="footer-links">
            <a class="logo" href="#top"><img data-src="assets/media/img/L_OPG_W.png"></a>
            <div class="link instagram-link"><a href="https://www.instagram.com/opgpics/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
            <div class="link twitter-link"><a href="https://twitter.com/opg" target="_blank"><img src="assets/media/img/Twitter.svg"></a></div>
            <div class="link facebook-link"><a href="https://www.facebook.com/Ontario-Power-Generation-504061526642471/" target="_blank"><img src="assets/media/img/FBicon.svg"></a></div>
            <div class="link youtube-link"><a href="https://www.youtube.com/user/opgvideos" target="_blank"><img src="assets/media/img/Youtube.svg"></a></div>
            <div class="link opg-link"><a href="http://www.opg.com/">OPG.COM</a></div>
        </div>
        
    </div>   

   

    

</body>

    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/siema.min.js"></script>
    <script type="text/javascript" src="js/animation.js"></script>
    <script type="text/javascript" src="js/jquery.lazyloadxt.extra.js"></script>
    <script type="text/javascript" src="js/jquery.lazyloadxt.bg.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- <script type="text/javascript" src="js/jQuery.visible.js"></script> -->

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-109034971-1','auto');ga('send','pageview')
    </script>
    <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->

</html>