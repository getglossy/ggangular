(function () {
    var app = angular.module('getglossyApp', []);

    app.controller('featuredListController', function () {
        this.products = featuredWork;
    });

    app.controller('teamListController', function () {
        this.products = teamList;
        this.clients = clientsList;
        this.socials = socialList;
    });

    app.controller('formController', function ($scope, $http) {
        $scope.submitForm = function () {
            console.log($scope.edge);
            var jqxhr = $.ajax({
                type: "POST",
                url: "inc/submit.php",
                data: { name: $scope.edge.name, email: $scope.edge.email, contact: $scope.edge.contact, question: $scope.edge.question, subject: 'GetGlossy webMail: Edge' }
            })
                .done(function (data) {
                    alert(data); // show response from the php script.
                })
                .fail(function () {
                    alert("error");
                });
        }
    });

    app.controller('formControllerContact', function ($scope, $http) {
        $scope.submitForm = function () {
            console.log($scope.edge);
            var jqxhr = $.ajax({
                type: "POST",
                url: "inc/submit.php",
                data: { name: $scope.contact.name, email: $scope.contact.email, contact: $scope.contact.contact, question: $scope.contact.question, subject: 'GetGlossy webMail: Contact Us' }
            })
                .done(function (data) {
                    alert(data); // show response from the php script.
                })
                .fail(function () {
                    alert("error");
                });
        }
    });

    app.directive('ngHover', function () {
        return {
            link: function (scope, element, attrs) {
                $(element).bind({
                    mouseenter: function () {
                        $('#' + attrs.id + ' > img').hide();
                        $('#' + attrs.id + ' > div').show();
                    },
                    mouseleave: function () {
                        $('#' + attrs.id + ' > img').show();
                        $('#' + attrs.id + ' > div').hide();
                    }
                });
            }
        };
    });

    app.directive('ngClickTeam', function () {
        return {
            link: function (scope, element, attrs) {
                $(element).bind({
                    click: function () {
                        $('.employee-card').attr('src', 'images/team/' + attrs.id + 'Full.jpg');
                    }
                });
            }
        };
    });

    var featuredWork = [
        {
            'id': 1,
            'name': 'Project: VIP Glamazon Forum Group',
            'client': 'Glam by Manicare',
            'timing': 'June 2013 - ongoing',
            'platform': 'Facebook',
            'description': "We invited 50 avid glam fans to a closed forum group and made them VIPs! This group is envisioned as a reward for avid brand advocates and fans on the high-interaction end of the fan process. Key Results - Extremely high levels of interaction in posting pictures wearing glam products, supporting other glam initiatives and extending glam's viral reach on the platform.",
            'upperClass': 'glamUpper',
            'lowerClass': 'glamLower',
            'imgURL': 'images/work/glam.jpg',
            'alt': 'Manicare best social media campaign australia',
            'isFeatured': true,
            'isStrategy': true,
            'isPromotion': false,
            'isApp': false
        },
        {
            'id': 2,
            'name': 'Project: "One For The Girls - Pads For Pads" Initiative',
            'client': 'Moxie',
            'timing': 'August 2013 - December 2013',
            'platform': 'Worldwide',
            'description': "Shocked by the fact that Ugandan girls are absent 20% of the school year due to lack of sanitary hygiene, Moxie's founder Mia Klitsas created One For The Girls. The initiative aims to provide 6,000 young Ugandan women a reusable menstrual pack made by AFRIpads, a local African business. For every Moxie product sold, the Moxie team has personally delivered an AFRIpad kit to a very worthy recipient. Yes, you read right... Mia is currently in Uganda visiting schools and has so far donated over 2,700 AFRIpads! We've felt blessed to have joined Moxie on this incredible journey, proving that a small business can still make a very BIG difference in the world.",
            'upperClass': 'moxieUpper',
            'lowerClass': 'moxieLower',
            'isFeatured': true,
            'imgURL': 'images/work/moxie.jpg',
            'alt': 'Moxie social media marketing agency',
            'isStrategy': true,
            'isPromotion': true,
            'isApp': false
        },
        {
            'id': 3,
            'name': 'Project: Good Life Recipe App',
            'client': 'Always Fresh',
            'timing': 'July 2013',
            'platform': 'iOS & Android, mobile & tablet devices',
            'description': "A Mediterranean video recipe app to inspire something new in the kitchen! Featuring recipes from Grekk, Italian and Spanish cui-sine, this interactive app allows the user to view recipe videos, add ingredients to their editable shopping list, view simple step-by-step instructions, add to favourites, and search for a recipe to match your requirements. Available on Google Play and the App Store.",
            'upperClass': 'AFUpper',
            'lowerClass': 'AFLower',
            'imgURL': 'images/work/always-fresh.jpg',
            'alt': 'AlwaysFresh social media companies melbourne',
            'isFeatured': true,
            'isStrategy': false,
            'isPromotion': false,
            'isApp': true
        },
        {
            'id': 4,
            'name': 'Project: Message On A Mug competition',
            'client': 'Tetley Tea',
            'timing': "Father's Day 2013",
            'platform': 'Facebook',
            'description': "The competition gave fans the chance to show their sense of humour and love for the Tetley brand through an interactive 'Message On A Mug' competition. Fans created their own humourous mug slogan for their chance to win, with all entries being published publicly via a Facebook photo album. The Tetley fans loved the initiative, and were keen to 'share' their own entries with Facebook friends.",
            'upperClass': 'tetleyUpper',
            'lowerClass': 'tetleyLower',
            'imgURL': 'images/work/tetley.jpg',
            'alt': 'Tetley social media agency melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': true,
            'isApp': false
        },
        {
            'id': 5,
            'name': 'Project: Fed Uni Social Media Strategy',
            'client': 'Federation University Australia',
            'timing': 'October 2013',
            'platform': 'Facebook, Twitter, Instagram, Pintrest, Google+ and LinkedIn',
            'description': "Get Glossy has recently partnered up with The University of Ballarat and Monash University's Gippsland campus, to create a united, technically savvy university – Federation University Australia. Get Glossy have created a revolutionary social media strategy that will set the standard for universities across the country.",
            'upperClass': 'fedUpper',
            'lowerClass': 'fedLower',
            'imgURL': 'images/work/uni.jpg',
            'alt': 'Federation University Australia social media marketing melbourne',
            'isFeatured': true,
            'isStrategy': true,
            'isPromotion': false,
            'isApp': false
        },
        {
            'id': 6,
            'name': 'Project: Pimp My Pizza',
            'client': 'Lucky Coq & Bimbo Deluxe',
            'timing': '',
            'platform': 'Facebook',
            'description': "Now in it's 3rd year, Pimp My Pizza is a socially-driven activity that leverages two of the things that are great about Lucky Coq and Bimbo Deluxe: $4 pizzas and creative fans and followers! We have challenged fans of the venues to design their own pizza and put some amazing creations on the menus for 6 weeks, with one winner each year staying on the menu for a further 3 months. Creators of pizzas, and a charity of their choice share a dollar from the sale of each and one of their pizzas, and we have given away over $5,000 to some very worth causes and just as much to fixie-bike tight jeans and iPhone 5s funds!",
            'upperClass': 'pimpUpper',
            'lowerClass': 'pimpLower',
            'imgURL': 'images/work/pizza.jpg',
            'alt': 'Lucky Coq and Bimbo Deluxe best facebook marketing campaigns',
            'isFeatured': true,
            'isStrategy': false,
            'isPromotion': false,
            'isApp': false
        },
        {
            'id': 7,
            'name': 'Project: Formula 10.0.6 Pledge',
            'client': 'Formula 10.0.6',
            'timing': 'July 2013',
            'platform': 'Facebook',
            'description': "Description: Entrants clicked through a series of skincare questions, selecting their skincare concerns and also answering market research questions in a fun and interactive way. Key Results: Thorough market research data from fans, fun and interactive competition.",
            'upperClass': 'formulaUpper',
            'lowerClass': 'formulaLower',
            'imgURL': 'images/work/pledge.jpg',
            'alt': '10.0.6 social media marketing melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': true,
            'isApp': false
        },
        {
            'id': 8,
            'name': 'Project: Ice cream-inspired Cream Eyeshadow Duos',
            'client': 'Australis Cosmetics',
            'timing': 'October 2013',
            'platform': 'Facebook',
            'description': "To promote the new ice cream-inspired Cream Eyeshadow Duos, Get Glossy created an interactive competition for fans with fantastic prizes from Molly & Polly Swimswear and Cold Rock Ice Creamery. Fans chose from their favourite of three pre-designed ice cream-theme messages (e.g. 'You're so sweet you gave me a toothache!') to create a custom message for a friend. Entries were  ploaded daily, with fans tagging their Facebook friends on their messages",
            'upperClass': 'australisUpper',
            'lowerClass': 'australisLower',
            'imgURL': 'images/work/icecream.jpg',
            'alt': 'Australis social media marketing melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': true,
            'isApp': false
        },
        {
            'id': 9,
            'name': 'Project: Message on a Mirror competition',
            'client': 'Liptember',
            'timing': '10 days',
            'platform': 'Facebook',
            'description': "Liptember's 'Message on a Mirror' competition was extremely engaging for users and really spoke to the target audience of the charity initiative. Fans, or Lipettes as they're more affectionately known, were asked to upload their positive message onto our mirror for their chance to win. The messages the Lipettes came up with were inspiring, uplifting and empowering to all, and really helped to extend the message of Liptember to a wider audience. Key Results: This competition engaged the audience and tied them directly to the message of the Liptember charity initiative, which is mental health and positivity.",
            'upperClass': 'liptemberUpper',
            'lowerClass': 'liptemberLower',
            'imgURL': 'images/work/liptember.jpg',
            'alt': 'Liptember best facebook marketing campaigns',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': true,
            'isApp': false
        },
        {
            'id': 10,
            'name': 'Project: Lost Duck Hunt',
            'client': 'Casa Bottega',
            'timing': '',
            'platform': '',
            'description': "A brand new café tucked away in Sutton Street, North Melbourne needed a way to reveal itself to people in the local area, so we obviously thought about rubber ducks! We released 100 ducks into the surrounding neighbourhoods, each with a tag around its neck saying 'Help! I'm lost, return me to 64 Sutton Street for a reward' with social media links. Coffee and one of Casa Bottega's homemade cakes were given as rewards, but we even had members of the public negotiate for the return of the ducks that become reward in their own right! To build awareness, we also placed 'Missing Cat'-style posters around the area. Through twitter, Instagram and Facebook we released clues about the whereabouts of some of the ducks, which when found were 'strung up' in the café for all to see. To build further excitement, we created backstories around the last 5 ducks, why there was a reward out for their capture, and presented increased rewards. The aim was to grab the attention of the local public and create a fun point of interest in the café. The activity ran so well that we ran it again six months later! Key Results: This competition engaged the audience and tied them directly to the message of the Liptember charity initiative, which is mental health and positivity.",
            'upperClass': 'casaUpper',
            'lowerClass': 'casaLower',
            'imgURL': 'images/work/duck.jpg',
            'alt': 'Casa Bottega social media companies melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': false,
            'isApp': false
        },
        {
            'id': 11,
            'name': 'Project: Taste Of Asia competition',
            'client': 'Slendier',
            'timing': 'July 2013',
            'platform': 'Facebook',
            'description': "We approached three food and fitness bloggers to partner with Slendier on this competition. Each week was themed around a region of Asia and the bloggers came up with their own recipes for that region. The fans had the opportunity to win a weekly prize which consisted of a wok, Slendier variety pack and a recipe card from the bloggers. We increased the reach of the competition by having it featured via the blogger's social media channels, a website banner we designed for the Slendier site, Facebook advertising and posting on the Slendier page.",
            'upperClass': 'slendierUpper',
            'lowerClass': 'slendierLower',
            'imgURL': 'images/work/asia.jpg',
            'alt': 'Slendier social media companies melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': true,
            'isApp': false
        },
        {
            'id': 12,
            'name': 'Project: Always Fresh Consumer Promo Website',
            'client': 'Always Fresh',
            'timing': 'July - September 2013',
            'platform': 'Website: www.alwaysfreshgoodlife.com.au',
            'description': "Challenged with a way to bring the Mediterranean to life, we created the Always Fresh Good Life site. A place where people can explore the regions of Greece, Italy and Spain, viewing video recipes and learning about the culture to help them choose their chosen destination! This competition saw a high level of involvement in just 2 months, with over 24,000 entries and unique users. The lucky winner was sent to their region of the choice, including flights, accomodation and experiences to enjoy a taste of the Good Life! Following the competition, the website now houses over 60 Mediterranean video recipes, downloadable recipe books and information on how to get the Good Life Recipe App.",
            'upperClass': 'AFWUpper',
            'lowerClass': 'AFWLower',
            'imgURL': 'images/work/always-fresh-web.jpg',
            'alt': 'AlwaysFresh social media companies melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': false,
            'isApp': true
        },
        {
            'id': 13,
            'name': 'Project: Atomic Cheerleading',
            'client': 'Atomic Cheerleading',
            'timing': 'mid 2013',
            'platform': 'Website: www.atomiccheerleading.com.au',
            'description': "Get Glossy was engaged to create a brand identity and first ever website for Australia's newest and biggest Cheerleading gym, well who else would you go to?! While the subject matter was very different to our usual work, the principles were familiar: create an industry-leading presence that communicated key information and attributes to an audience that was not short of options. The branding had to balance between traditional cheerleading-branding and a tasteful, modern clean design, and has now been stretched across items from T Shirts to crop tops to 10m banners. The website set the club up to show everyone how serious they really are and bring in students to fill many new squads for 2013 and 2014.",
            'upperClass': 'atomicUpper',
            'lowerClass': 'atomicLower',
            'imgURL': 'images/work/atomic.jpg',
            'alt': 'Atomic Cheerleading social media companies melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': false,
            'isApp': true
        },
        {
            'id': 14,
            'name': 'Project: Riviana Website',
            'client': 'Riviana Foods',
            'timing': 'October 2013',
            'platform': 'Website: www.rivianafoods.com.au/',
            'description': "A top performer in the retail brands and foodservice industry, Riviana Foods undertook a corporate website refresh! This website provides users with key information on brands, corporate responsibility and product ranges. Designed to operate responsively based on the user's device, this website is a great example of a dynamic and engaging corporate platform for brands.",
            'upperClass': 'rivianaUpper',
            'lowerClass': 'rivianaLower',
            'imgURL': 'images/work/riviana.jpg',
            'alt': 'Riviana social media companies melbourne',
            'isFeatured': false,
            'isStrategy': false,
            'isPromotion': false,
            'isApp': true
        },
        {
            'id': 15,
            'name': 'Driving engagement behind the biggest Aus/NZ Documentary of all time',
            'client': 'That Sugar Film',
            'timing': 'March 2015 ongoing',
            'platform': 'Website: www.thatsugarfilm.com',
            'description': "Platform: In the modern socially-orientated media landscape, digital sentiment and advocacy was always going to either be a great support or an undermining presence. Through a well-researched ongoing content and contact strategy, we helped charge consumers to regularly and convincingly share the film and supporting media with peers. Social channels drove over half a million people to the website in the first six months and we had over 4 million views of the trailer in over 100 countries in the same period. Conversation and activity is ongoing beyond the theatrical release.",
            'upperClass': 'sugarUpper',
            'lowerClass': 'sugarLower',
            'imgURL': 'images/work/thatsugarfilm.png',
            'alt': 'That Sugar Film Documentary',
            'isFeatured': false,
            'isStrategy': true,
            'isPromotion': false,
            'isApp': false
        },
        {
            'id': 16,
            'name': 'Project: Helping a leading brand to excel socially',
            'client': 'Just Jeans',
            'timing': 'October 2014 ongoing',
            'platform': 'Facebook and Instagram',
            'description': "Just Jeans are an iconic brand in the Australian retail landscape. They needed to boost their social presence and to drive a commercial outcome from their social channels. We dug deep into our social analytics tools to justify a strategy that could be escalated and make sense to all within a publicly-listed company. We then got on with work, executing a campaign across Facebook, Instagram and through our blogger network, Edge.",
            'upperClass': 'jjUpper',
            'lowerClass': 'jjLower',
            'imgURL': 'images/work/justjeans.jpg',
            'alt': 'Just Jeans',
            'isFeatured': true,
            'isStrategy': true,
            'isPromotion': false,
            'isApp': false
        }

    ];

    var teamList = [
        {
            'id': 1,
            'name': 'Peter',
            'small_pic_upURL': 'images/team/Peter_2.jpg',
            'small_pic_downURL': 'images/team/Peter_1.jpg',
            'big_picURL': 'images/team/PeterFull.jpg',
            'mobile_big_picURL': 'images/team/PeterMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 2,
            'name': 'Maria',
            'small_pic_upURL': 'images/team/Maria_2.jpg',
            'small_pic_downURL': 'images/team/Maria_1.jpg',
            'big_picURL': 'images/team/MariaFull.jpg',
            'mobile_big_picURL': 'images/team/MariaMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 3,
            'name': 'David',
            'small_pic_upURL': 'images/team/David_2.jpg',
            'small_pic_downURL': 'images/team/David_1.jpg',
            'big_picURL': 'images/team/DavidFull.jpg',
            'mobile_big_picURL': 'images/team/DavidMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 4,
            'name': 'Dani',
            'small_pic_upURL': 'images/team/Dani_1.jpg',
            'small_pic_downURL': 'images/team/Dani_2.jpg',
            'big_picURL': 'images/team/DaniFull.jpg',
            'mobile_big_picURL': 'images/team/DaniMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 5,
            'name': 'Lily',
            'small_pic_upURL': 'images/team/Lily_1.jpg',
            'small_pic_downURL': 'images/team/Lily_2.jpg',
            'big_picURL': 'images/team/LilyFull.jpg',
            'mobile_big_picURL': 'images/team/LilyMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 6,
            'name': 'Sarah',
            'small_pic_upURL': 'images/team/Sarah_1.jpg',
            'small_pic_downURL': 'images/team/Sarah_2.jpg',
            'big_picURL': 'images/team/SarahFull.jpg',
            'mobile_big_picURL': 'images/team/SarahMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 7,
            'name': 'Rory',
            'small_pic_upURL': 'images/team/Rory_1.jpg',
            'small_pic_downURL': 'images/team/Rory_2.jpg',
            'big_picURL': 'images/team/RoryFull.jpg',
            'mobile_big_picURL': 'images/team/RoryMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 8,
            'name': 'Maddie',
            'small_pic_upURL': 'images/team/Maddie_1.jpg',
            'small_pic_downURL': 'images/team/Maddie_2.jpg',
            'big_picURL': 'images/team/MaddieFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 9,
            'name': 'Taylor',
            'small_pic_upURL': 'images/team/Taylor_1.jpg',
            'small_pic_downURL': 'images/team/Taylor_2.jpg',
            'big_picURL': 'images/team/TaylorFull.jpg',
            'mobile_big_picURL': 'images/team/TaylorMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 10,
            'name': 'Laura',
            'small_pic_upURL': 'images/team/Laura_1.jpg',
            'small_pic_downURL': 'images/team/Laura_2.jpg',
            'big_picURL': 'images/team/LauraFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 11,
            'name': 'Hollie',
            'small_pic_upURL': 'images/team/Hollie_1.jpg',
            'small_pic_downURL': 'images/team/Hollie_2.jpg',
            'big_picURL': 'images/team/HollieFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 12,
            'name': 'Brittany',
            'small_pic_upURL': 'images/team/Brittany_1.jpg',
            'small_pic_downURL': 'images/team/Brittany_2.jpg',
            'big_picURL': 'images/team/BrittanyFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 13,
            'name': 'Lizzie',
            'small_pic_upURL': 'images/team/Lizzie_1.jpg',
            'small_pic_downURL': 'images/team/Lizzie_2.jpg',
            'big_picURL': 'images/team/LizzieFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 14,
           'name': 'Michelle',
            'small_pic_upURL': 'images/team/Michelle_1.jpg',
            'small_pic_downURL': 'images/team/Michelle_2.jpg',
            'big_picURL': 'images/team/MichelleFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 15,
            'name': 'Maddie',
            'small_pic_upURL': 'images/team/Maddie_1.jpg',
            'small_pic_downURL': 'images/team/Maddie_2.jpg',
            'big_picURL': 'images/team/MaddieFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 16,
            'name': 'Maddie',
            'small_pic_upURL': 'images/team/Maddie_1.jpg',
            'small_pic_downURL': 'images/team/Maddie_2.jpg',
            'big_picURL': 'images/team/MaddieFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        },
        {
            'id': 17,
            'name': 'Maddie',
            'small_pic_upURL': 'images/team/Maddie_1.jpg',
            'small_pic_downURL': 'images/team/Maddie_2.jpg',
            'big_picURL': 'images/team/MaddieFull.jpg',
            'mobile_big_picURL': 'images/team/MaddieMobile.jpg',
            'alt': 'Get Glossy social media companies melbourne Team'
        }
    ];

    var clientsList = [
        {
            'id': 1,
            'imgURL': 'images/clients/Australis.jpg',
            'alt': 'Australis social media marketing melbourne'
        },
        {
            'id': 2,
            'imgURL': 'images/clients/Tetley.jpg',
            'alt': 'Tetley social media agency melbourne'
        },
        {
            'id': 3,
            'imgURL': 'images/clients/AlwaysFresh.jpg',
            'alt': 'AlwaysFresh social media companies melbourne'
        },
        {
            'id': 4,
            'imgURL': 'images/clients/LeTan.jpg',
            'alt': 'LeTan facebook marketing melbourne'
        },
        {
            'id': 5,
            'imgURL': 'images/clients/Swisspers.jpg',
            'alt': 'Swisspers social media consultant melbourne'
        },
        {
            'id': 6,
            'imgURL': 'images/clients/NaturesGift.jpg',
            'alt': 'Natures Gift social media manager melbourne'
        },
        {
            'id': 7,
            'imgURL': 'images/clients/Manicare.jpg',
            'alt': 'Manicare best social media campaign australia'
        },
        {
            'id': 8,
            'imgURL': 'images/clients/Moxie.jpg',
            'alt': 'Moxie social media marketing agency'
        },
        {
            'id': 9,
            'imgURL': 'images/clients/Biore.jpg',
            'alt': 'Biore social media agency'
        },
        {
            'id': 10,
            'imgURL': 'images/clients/BurtsBees.jpg',
            'alt': 'BurtsBees facebook brand marketing melbourne'
        },
        {
            'id': 11,
            'imgURL': 'images/clients/Liptember.jpg',
            'alt': 'Liptember best facebook marketing campaigns'
        },
        {
            'id': 12,
            'imgURL': 'images/clients/BiozetAttack.jpg',
            'alt': 'Biozet Instagram marketing campaign'
        },
        {
            'id': 13,
            'imgURL': 'images/clients/Movenpick.jpg',
            'alt': 'Movenpick social media agency australia'
        },
        {
            'id': 14,
            'imgURL': 'images/clients/RedEarth.jpg',
            'alt': 'Red Earth social media companies australia'
        },
        {
            'id': 15,
            'imgURL': 'images/clients/Bobble.jpg',
            'alt': 'Bobble facebook marketing'
        },
        {
            'id': 16,
            'imgURL': 'images/clients/Salt&Pepper.jpg',
            'alt': 'Salt&Pepper social media consultant australia'
        },
        {
            'id': 17,
            'imgURL': 'images/clients/JohnFrieda.jpg',
            'alt': 'John Frieda social media manager australia'
        },
        {
            'id': 18,
            'imgURL': 'images/clients/BabyBunting.jpg',
            'alt': 'Baby Bunting facebook marketing'
        },
        {
            'id': 19,
            'imgURL': 'images/clients/Nailene.jpg',
            'alt': 'Nailene social media marketing melbourne'
        },
        {
            'id': 20,
            'imgURL': 'images/clients/LadyJayne.jpg',
            'alt': 'Lady Jayne social media marketing melbourne'
        },
        {
            'id': 21,
            'imgURL': 'images/clients/Innoxa.jpg',
            'alt': 'Innoxa social media marketing melbourne'
        },
        {
            'id': 22,
            'imgURL': 'images/clients/Fingrs.jpg',
            'alt': 'Fingrs social media marketing melbourne'
        },
        {
            'id': 23,
            'imgURL': 'images/clients/10.0.6.jpg',
            'alt': '10.0.6 social media marketing melbourne'
        },
        {
            'id': 24,
            'imgURL': 'images/clients/Voost.jpg',
            'alt': 'Voost social media marketing melbourne'
        },
        {
            'id': 25,
            'imgURL': 'images/clients/Akin.jpg',
            'alt': 'Akin social media marketing melbourne'
        },
        {
            'id': 26,
            'imgURL': 'images/clients/MontagneJeunesse.jpg',
            'alt': 'Montagne Jeunesse social media marketing melbourne'
        },
        {
            'id': 27,
            'imgURL': 'images/clients/Alchemy.jpg',
            'alt': 'Alchemy social media marketing melbourne'
        },
        {
            'id': 28,
            'imgURL': 'images/clients/Wittner.jpg',
            'alt': 'Wittner social media marketing melbourne'
        },
        {
            'id': 29,
            'imgURL': 'images/clients/Moosehead.jpg',
            'alt': 'Moosehead social media marketing melbourne'
        },
        {
            'id': 30,
            'imgURL': 'images/clients/RedIsland.jpg',
            'alt': 'Red Island social media marketing melbourne'
        },
        {
            'id': 31,
            'imgURL': 'images/clients/TSF.jpg',
            'alt': 'That Sugar Film social media marketing melbourne'
        },
        {
            'id': 32,
            'imgURL': 'images/clients/Glam.jpg',
            'alt': 'Glam social media marketing melbourne'
        },
        {
            'id': 33,
            'imgURL': 'images/clients/Cedel.jpg',
            'alt': 'Cedel social media marketing melbourne'
        },
        {
            'id': 34,
            'imgURL': 'images/clients/CreateHavoc.jpg',
            'alt': 'Create Havoc social media marketing melbourne'
        },
        {
            'id': 35,
            'imgURL': 'images/clients/TablePlenty.jpg',
            'alt': 'Table of Plenty social media marketing melbourne'
        },
        {
            'id': 36,
            'imgURL': 'images/clients/Yumis.jpg',
            'alt': 'Yumis social media marketing melbourne'
        },
        {
            'id': 37,
            'imgURL': 'images/clients/ElegantTouch.jpg',
            'alt': 'Elegant Touch social media marketing melbourne'
        },
        {
            'id': 38,
            'imgURL': 'images/clients/InEssence.jpg',
            'alt': 'In Essence social media marketing melbourne'
        },
        {
            'id': 39,
            'imgURL': 'images/clients/Eylure.jpg',
            'alt': 'Eylure social media marketing melbourne'
        },
        {
            'id': 40,
            'imgURL': 'images/clients/SleepingDuck.jpg',
            'alt': 'Sleeping Duck social media marketing melbourne'
        }
    ];

    var socialList = [
        {
            'id': 1,
            'imgURL': 'images/social/social-fb.jpg',
            'alt': 'Get Glossy Facebook Social Media Marketing Melbourne',
            'URL': 'https://www.facebook.com/GetGlossy'

        },
        {
            'id': 2,
            'imgURL': 'images/social/social-instagram.jpg',
            'alt': 'Get Glossy Instagram Social Media Marketing Melbourne',
            'URL': 'http://instagram.com/getglossyhq'

        },
        {
            'id': 3,
            'imgURL': 'images/social/social-link.jpg',
            'alt': 'Get Glossy Linked In Social Media Marketing Melbourne',
            'URL': 'http://www.linkedin.com/company/get-glossy'

        },
        {
            'id': 4,
            'imgURL': 'images/social/social-twitter.jpg',
            'alt': 'Get Glossy Twitter Social Media Marketing Melbourne',
            'URL': 'https://twitter.com/GetGlossyHQ'

        },
        {
            'id': 5,
            'imgURL': 'images/social/social-urban.jpg',
            'alt': 'Get Glossy Urban Dictionary Social Media Marketing Melbourne',
            'URL': 'http://www.urbandictionary.com/define.php?term=Get%20Glossy'

        },
        {
            'id': 6,
            'imgURL': 'images/social/social-yt.jpg',
            'alt': 'Get Glossy Youtube Social Media Marketing Melbourne',
            'URL': 'http://www.youtube.com/user/GetGlossyHQ'

        }
    ]

})();