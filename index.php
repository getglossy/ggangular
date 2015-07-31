<!DOCTYPE html>
<html lang="en" id="ng-app" ng-app="getglossyApp" >
<head>
    <meta charset="utf-8">
    <meta name="fragment" content="!" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Get Glossy is a Social Media Agency. We help brands get the best possible results out of Social Media Marketing here in Melbourne."/>
    <meta name="keywords"
          content="get glossy, facebook, twitter, social media optimization, social media, social media marketing melbourne, social media agency melbourne, social media companies melbourne, facebook marketing melbourne, social media consultant melbourne, social media manager melbourne,"/>

    <meta name="author" content="">

    <link rel="icon" href="images/favicon.ico">
    <title>Get Glossy | Social Media Marketing Melbourne</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!--[if lte IE 7]>
    <script src="js/json3.min.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.16/angular.min.js"></script>
</head>
<body>

<div class="container" style="background: url('images/nav-home-bg.jpg');" id="homeDiv">
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <ul class="nav nav-sidebar nav-padding-top">
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#featuredDiv" class="scroll">FEATURED WORK</a></li>
            <li><a href="#teamDiv" class="scroll">MEET THE TEAM</a></li>
            <li><a href="#whatDiv" class="scroll">WHAT WE DO </a></li>
            <li><a href="#contactDiv" class="scroll">CONTACT</a></li>
            <li><a href="#edgeDiv" class="scroll"><img src="images/icon-edge.jpg"
                                                    alt="Get Glossy Edge Social Media Marketing Melbourne"/></a></li>
        </ul>
    </div>

    <div class="navbar navbar-inverse navbar-home mobileNav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".home-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">HOME</span></div>
        <div class="collapse navbar-collapse home-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#featured" class="scroll">FEATURED WORK</a></li>
                <li><a href="#team" class="scroll">MEET THE TEAM</a></li>
                <li><a href="#what" class="scroll">WHAT WE DO </a></li>
                <li><a href="#edge" class="scroll">EDGE</a></li>
                <li><a href="#contact" class="scroll">CONTACT</a></li>
            </ul>
        </div>
    </div>

    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner">
        <img src="images/banner.jpg" alt="Get Glossy Social Media Marketing Melbourne" class="img-responsive"/>
    </div>
</div>

<div class="seperator"></div>

<div class="container" id="featuredDiv">
    <div class="col-lg-12 col-md-12 col-sm-12 desktopNav">
        <span class="navbar-brand">FEATURED WORK</span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <ul class="nav nav-sidebar" role="tablist">
            <li class="active"><a href="#featured" role="tab" data-toggle="tab">FEATURED</a></li>
            <li><a href="#strategy" role="tab" data-toggle="tab">STRATEGY</a></li>
            <li><a href="#promotion" role="tab" data-toggle="tab">CONSUMER PROMOTIONS</a></li>
            <li><a href="#apps" role="tab" data-toggle="tab">APPS/WEBSITES</a></li>
            <li><a href="#all" role="tab" data-toggle="tab">ALL</a></li>
        </ul>
        <div class="pageScroll">
            <ul>
                <li><a href="#homeDiv" class="scroll">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
                <li><a href="#teamDiv" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
            </ul>
        </div>
    </div>


    <div class="navbar navbar-inverse navbar-home mobileNav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".featured-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">FEATURED WORK</span></div>
        <div class="collapse navbar-collapse featured-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#featured" role="tab" data-toggle="tab">FEATURED</a></li>
                <li><a href="#strategy" role="tab" data-toggle="tab">STRATEGY</a></li>
                <li><a href="#promotion" role="tab" data-toggle="tab">CONSUMER PROMOTIONS</a></li>
                <li><a href="#apps" role="tab" data-toggle="tab">APPS/WEBSITES</a></li>
                <li><a href="#all" role="tab" data-toggle="tab">ALL</a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content" ng-controller="featuredListController as featuredWork">
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade in active" id="featured">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xss-12 work"
                 ng-repeat="product in featuredWork.products">
                <div id="{{product.upperClass}}" ng-show="product.isFeatured" ng-hover>
                    <img ng-src="{{product.imgURL}}" class="img-responsive" alt="{{product.alt}}"/>

                    <div class="hiddenDiv">
                        <h5>{{product.name}}</h5>

                        <p><span class="bold">Client:</span> <span class="italic">{{product.client}}</span><br/>
                            <span class="bold">Timing:</span> <span class="italic">{{product.timing}}</span><br/>
                            <span class="bold">Platform:</span> <span class="italic">{{product.platform}}</span></p>

                        <p>{{product.description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="strategy">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xss-12 work"
                 ng-repeat="product in featuredWork.products">
                <div id="{{product.upperClass}}" ng-show="product.isStrategy" ng-hover>
                    <img ng-src="{{product.imgURL}}" class="img-responsive" alt="{{product.alt}}"/>

                    <div class="hiddenDiv">
                        <h5>{{product.name}}</h5>

                        <p><span class="bold">Client:</span> <span class="italic">{{product.client}}</span><br/>
                            <span class="bold">Timing:</span> <span class="italic">{{product.timing}}</span><br/>
                            <span class="bold">Platform:</span> <span class="italic">{{product.platform}}</span></p>

                        <p>{{product.description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="promotion">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xss-12 work"
                 ng-repeat="product in featuredWork.products">
                <div id="{{product.upperClass}}" ng-show="product.isPromotion" ng-hover>
                    <img ng-src="{{product.imgURL}}" class="img-responsive" alt="{{product.alt}}"/>

                    <div class="hiddenDiv">
                        <h5>{{product.name}}</h5>

                        <p><span class="bold">Client:</span> <span class="italic">{{product.client}}</span><br/>
                            <span class="bold">Timing:</span> <span class="italic">{{product.timing}}</span><br/>
                            <span class="bold">Platform:</span> <span class="italic">{{product.platform}}</span></p>

                        <p>{{product.description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="apps">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xss-12 work"
                 ng-repeat="product in featuredWork.products">
                <div id="{{product.upperClass}}" ng-show="product.isApp" ng-hover>
                    <img ng-src="{{product.imgURL}}" class="img-responsive" alt="{{product.alt}}"/>

                    <div class="hiddenDiv">
                        <h5>{{product.name}}</h5>

                        <p><span class="bold">Client:</span> <span class="italic">{{product.client}}</span><br/>
                            <span class="bold">Timing:</span> <span class="italic">{{product.timing}}</span><br/>
                            <span class="bold">Platform:</span> <span class="italic">{{product.platform}}</span></p>

                        <p>{{product.description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="all">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xss-12 work"
                 ng-repeat="product in featuredWork.products">
                <div id="{{product.upperClass}}" ng-hover>
                    <img ng-src="{{product.imgURL}}" class="img-responsive" alt="{{product.alt}}"/>

                    <div class="hiddenDiv">
                        <h5>{{product.name}}</h5>

                        <p><span class="bold">Client:</span> <span class="italic">{{product.client}}</span><br/>
                            <span class="bold">Timing:</span> <span class="italic">{{product.timing}}</span><br/>
                            <span class="bold">Platform:</span> <span class="italic">{{product.platform}}</span></p>

                        <p>{{product.description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="seperator"></div>

<div class="container" id="teamDiv">
    <div class="col-lg-12 col-md-12 col-sm-12 desktopNav">
        <span class="navbar-brand">ABOUT US</span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <ul class="nav nav-sidebar" role="tablist">
            <li class="active"><a href="#team" role="tab" data-toggle="tab">MEET THE TEAM</a></li>
            <li><a href="#manifesto" role="tab" data-toggle="tab">MANIFESTO</a></li>
            <li><a href="#clients" role="tab" data-toggle="tab">CLIENTS</a></li>
            <li><a href="#social" role="tab" data-toggle="tab">SOCIAL CHANNELS</a></li>
        </ul>
        <div class="pageScroll">
            <ul>
                <li><a href="#homeDiv" class="scroll">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
                <li><a href="#whatDiv" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
            </ul>
        </div>
    </div>


    <div class="navbar navbar-inverse navbar-home mobileNav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".about-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">ABOUT US</span></div>
        <div class="collapse navbar-collapse about-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#team" role="tab" data-toggle="tab">MEET THE TEAM</a></li>
                <li><a href="#manifesto" role="tab" data-toggle="tab">MANIFESTO</a></li>
                <li><a href="#clients" role="tab" data-toggle="tab">CLIENTS</a></li>
                <li><a href="#social" role="tab" data-toggle="tab">SOCIAL CHANNELS</a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content" ng-controller="teamListController as teamList">
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade in active" id="team">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 col-xss-4"
                 ng-repeat="product in teamList.products">
                <div id="{{product.name}}" ng-click-team ng-hover>
                    <img ng-src="{{product.small_pic_upURL}}" class="img-responsive" alt="{{product.alt}}"/>

                    <div class="hiddenDivPic">
                        <img ng-src="{{product.small_pic_downURL}}" class="img-responsive" alt="{{product.alt}}"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                <img class="img-responsive employee-card" alt="Get Glossy social media companies melbourne Team"/>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="manifesto">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">
                <img src="images/head-maifesto.jpg" alt="manifesto social media marketing melbourne"
                     class="img-responsive"/>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 manifesto">
                    <p class="paragraph lead">In today's market, brands
                        increasingly feel pressure from private label, overseas brands, an evolving retail
                        landscape and a rapidly changing consumer relationship.</p>

                    <p class="paragraph lead">Choosing to work, and continue
                        to work, with an agency should be a decision based on more than a flashy address, a blue
                        chip client list or sixty-three hundred dollar suit... <a
                            href="http://www.youtube.com/watch?v=81Nl7VYFEaI">come on!</a></p>

                    <div class="bottomBorder"></div>

                    <h2 class="paragraph featurette-heading">We're different, and we're not
                        a cut and paste agency experience, we base what we do on a few simple rules, rules that
                        make us who we are:</h2>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xss-12">
                        <ul class="justifyMobile">
                            <li class="lead">We believe that social intelligence should flow through every thing
                                a brand does
                            </li>
                            <li class="lead">We're always honest</li>
                            <li class="lead">We never do average, and we believe in the power of creativity</li>
                            <li class="lead">We understand consumers, and what they'll be willing to watch, do,
                                say and share
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xss-12">
                        <ul class="justifyMobile">
                            <li class="lead">We believe that the right ideas and approach will always beat the
                                big budget
                            </li>
                            <li class="lead">We like getting up every day and working with our clients!</li>
                            <li class="lead">We keep our clients ahead of the curve when it comes to the latest
                                web technologies
                            </li>
                            <li class="lead">We never stop learning and experimenting</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xss-12">
                        <ul class="justifyMobile">
                            <li class="lead">We never want to dread a phone call from a client</li>
                            <li class="lead">We're experts at giving brands a voice and personality that engages
                                consumers
                            </li>
                            <li class="lead">When we say we will deliver, we mean it, and we will</li>
                            <li class="lead">We don't use confusing jargon</li>
                            <li class="lead">We believe that time is important: yours, ours and the customers
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="clients">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">

                <h2 class="paragraph featurette-heading biggerPadding">We have the pleasure of working with an amazing
                    roster of
                    clients. Our attitude and approach is to do one thing every day to make each one of our
                    clients love us. If your brand is below... hi!!! If your brand isn't - <a
                        href="#contact">get in touch!</a>
                </h2>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 col-xss-3" ng-repeat="client in teamList.clients">
                        <img ng-src="{{client.imgURL}}" class="img-responsive" alt="{{client.alt}}"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="social">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">

                <h2 class="paragraph featurette-heading biggerPadding">Like what you see? Connect with us via our social
                    media channels! We'll keep you in the loop with all the latest social media news and exciting
                    projects direct from Get Glossy HQ.
                </h2>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xss-4" ng-repeat="social in teamList.socials">
                        <a ng-href="{{social.URL}}" target="_blank">
                            <img ng-src="{{social.imgURL}}" class="img-responsive" alt="{{social.alt}}"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="seperator"></div>

<div class="container" id="whatDiv">
    <div class="col-lg-12 col-md-12 col-sm-12 desktopNav">
        <span class="navbar-brand">WHAT WE DO</span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <ul class="nav nav-sidebar" role="tablist">
            <li class="active"><a href="#what" role="tab" data-toggle="tab">WHAT WE DO</a></li>
            <li><a href="#core" role="tab" data-toggle="tab">CORE</a></li>
            <li><a href="#daytoday" role="tab" data-toggle="tab">DAY-TO-DAY</a></li>
        </ul>
        <div class="pageScroll">
            <ul>
                <li><a href="#homeDiv" class="scroll">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
                <li><a href="#edgeDiv" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
            </ul>
        </div>
    </div>


    <div class="navbar navbar-inverse navbar-home mobileNav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".what-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">WHAT WE DO</span></div>
        <div class="collapse navbar-collapse what-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#what" role="tab" data-toggle="tab">WHAT WE DO</a></li>
                <li><a href="#core" role="tab" data-toggle="tab">CORE</a></li>
                <li><a href="#daytoday" role="tab" data-toggle="tab">DAY-TO-DAY</a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content" ng-controller="teamListController as teamList">
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade in active" id="what">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">
                <img alt="Social Media Marketing Melbourne" src="images/banner-what-we-do.jpg" class="img-responsive"/>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 paragraph manifesto">
                    <h2 class="featurette-heading">At Get Glossy, it's about keeping ahead of the game.</h2>

                    <p class="lead">We make sure we're doing exactly what we should be doing every single day to
                        help our clients get better value out of their customers online.</p>

                    <p class="lead">While our intelligence is founded on us being a social media agency, our
                        team is structured to help our brands get the best possible results out of digital
                        platforms, so we've grown and developed and added to our team to ensure that we're best
                        positioned to get optimum results for you. We are writers, we are marketers, we are
                        developers, we are designers, we are thinkers.</p>

                    <p class="lead">We're based in Melbourne in an old clothing Factory in the north of the
                        city, but have clients all over Australia and even a few in New Zealand. The old factory
                        outlet is our boardroom, the cutting table is our meeting table, the bosses office is
                        now covered in astroturf and bean bags!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="core">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">
                <img src="images/head-maifesto.jpg" alt="Social Media Marketing Melbourne" class="img-responsive"/>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 paragraph manifesto">
                    <h2 class="featurette-heading">The core of what we do revolves around taking your brand onto
                        social media platforms.</h2>

                    <p class="lead">We develop the tone of voice, write content and generally entertain and grow
                        your audience, while best positioning your brand to them.</p>

                    <p class="lead">To go a little deeper, we want to give your brand loyalists the opportunity
                        to share you with their friends, peers and social followers. What comes next? The
                        advocacy cycle. Potential customers go from hearing about your brand, liking your brand
                        and connecting with your brand socially, to forming a deeper affection for your brand,
                        purchasing from your brand and then advocating on behalf of your brand.</p>

                    <p class="lead">It's all about getting the best possible results out of Facebook marketing,
                        Instagram marketing, social media marketing and digital marketing.</p>
                </div>

            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade" id="daytoday">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work manifesto">

                <h2 class="featurette-heading paragraph">The day-to-day management of social media platforms is based
                    on executing a strategy that outlines exactly what role your brand should play on social
                    media. The key is to find our way into the daily media consumption of our advocates,
                    customers and the wider public.</h2>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 paragraph daily manifesto">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-initiatives.png" alt="Driving Initiatives"/>

                        <h2 class="what-heading">Driving Initiatives</h2>

                        <p class="lead">The icing on the cake, the way that we can truly bring a brand to life
                            through social media, push fans to purchase and push fans to advocate. Ask us about
                            the time we put fans' profile pics onto Moxie's tampon tins, ran a design-a-flavour
                            pizza competition called Pimp My Pizza (3 times!), or executed a promotion for
                            Always Fresh that received over 10,000 entries. We discover what assets a brand has
                            that we can leverage and then devise initiatives that will truly excite the
                            consumer.</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-design.png" alt="Design &amp; Photography"/>

                        <h2 class="what-heading">Design &amp; Photography</h2>

                        <p class="lead">Having the best-looking pages and channels is crucial. We have two
                            awesomely talented designers who work full time at Get Glossy that make sure that
                            every cover photo, twitter background and app is beautifully constructed to say and
                            do everything that it needs to. The establishment of Instagram and Pinterest as core
                            social media channels has meant that photography has become a big part of what we
                            do. Simple catalogue-style images no longer cut it in the world of photo-sharing.
                            Sometimes it's even about putting a lot of work into making an image look like it
                            hasn't been carefully selected, shot and edited.</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-apps.png" alt="Building Apps"/>

                        <h2 class="what-heading">Building Apps</h2>

                        <p class="lead">Consumer promotions, sampling drives, video content and other
                            initiatives can be brought to life through social and digital channels. The way we
                            design, build and present and deliver these can be the difference between a
                            successful and unsuccessful campaign. We're constantly pushing the boundaries of
                            what's possible and tailoring our apps to each campaign. Facebook, mobile friendly,
                            iOS and Android apps are our specialty! We have a team of full-time developers who
                            pulls together the coding on all of our apps and we've built over 500 to date!</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-facebook.png"
                             alt="Facebook Advertising"/>

                        <h2 class="what-heading">Facebook Advertising</h2>

                        <p class="lead">We create concepts, design, build, manage and report on Facebook
                            Advertising campaigns. We've used it to reach hundreds of thousands of fans for our
                            clients and always find ways to capture the imagination of our target markets, bring
                            costs down and bring new people into our advocacy cycles!</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 paragraph daily manifesto">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-consumer.png" alt="Running Consumer Promotions"/>

                        <h2 class="what-heading">Running Consumer Promotions</h2>

                        <p class="lead">We also manage any and every required area of the consumer promotion - T&amp;C's,
                            permits, draws, fun and viral entry mechanics. We do it all, and we're very good at
                            it!</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-websites.png" alt="Websites"/>

                        <h2 class="what-heading">Websites</h2>

                        <p class="lead">The role of digital brand custodian that we play for most of our clients
                            extends beyond the social sphere and into their website. Whatever the platform,
                            whatever the communications piece we believe that it is critical that tone of
                            voice, style and brand feel is consistent and consistently awesome. We also have a
                            herd of developers (is herd the right collective term?) who speak more languages
                            that Siri!</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-writing.png" alt="Writing"/>

                        <h2 class="what-heading">Writing</h2>

                        <p class="lead">Our business relies on impeccable writing skills. We are wordsmiths who
                            know how to entertain while delivering subtle brand messages, come across as
                            authoritative without sounding authoritarian, and highlight content that fans and
                            followers will want to share. Our account managers are primarily writers and they've
                            got this covered.</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xss-12">
                        <img src="images/icon-database.png" alt="eDMs and Database Management"/>

                        <h2 class="what-heading">eDMs and Database Management</h2>

                        <p class="lead">We know what consumers like and know the timings and touchpoints of when
                            they are most willing to make a purchase or advocate on a brand's behalf. We've been
                            busy building this side of the business, because any communication that a consumer
                            receives from a brand should form a part of a rich, cohesive tapestry. We
                            strategise, copy-write, design, develop and send out eDMs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="seperator"></div>

<div class="container" id="edgeDiv">
    <div class="col-lg-12 col-md-12 col-sm-12 desktopNav">
        <span class="navbar-brand">EDGE</span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <ul class="nav nav-sidebar" role="tablist">
            <li class="active"><a href="#edge" role="tab" data-toggle="tab">ABOUT</a></li>
        </ul>
        <div class="pageScroll">
            <ul>
                <li><a href="#homeDiv" class="scroll">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
                <li><a href="#contactDiv" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
            </ul>
        </div>
    </div>


    <div class="navbar navbar-inverse navbar-home mobileNav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".edge-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">EDGE</span></div>
        <div class="collapse navbar-collapse edge-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#what" role="tab" data-toggle="tab">ABOUT</a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade in active" id="edge">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work edgeBox">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xss-12 paragraph edgeContent">
                    <h4>Get Glossy has founded Edge as a wholly integrated offering to maximise our clients'
                        exposure and help them connect with their audiences in new, exciting and innovative
                        ways.</h4>
                    <h4> Online and digital mediums are the way forward and Get Glossy believes bloggers are at
                        the forefront of this new information movement.</h4>

                    <p class="pEdge">Get Glossy Edge has formed strong relationships with bloggers spanning
                        across a diverse range of genres. We can place your products with these bloggers, have
                        them promote competitions on your social media channels and even get you in a room with
                        these people to further deepen the relationships. Get Glossy Edge can work closely with
                        you to best utilise bloggers' ever increasing power of influence in today's consumer
                        market. </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xss-12" ng-controller="formController">
                    <div id="edgeLogo">
                        <img src="images/logo-edge.png" alt="Get Glossy Edge">
                    </div>
                    <form name="form" class="css-form paragraph edgeForm" novalidate ng-submit="submitForm()">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                            <input type="text" ng-model="edge.name" name="eName" required placeholder="FULL NAME*">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xss-6 first">
                            <input type="email" ng-model="edge.email" name="eEmail" required placeholder="EMAIL*">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xss-6 second">
                            <input type="text" ng-model="edge.contact" name="eContact" required
                                   placeholder="CONTACT NUMBER">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                            <textarea name="creativeQuestion" ng-model="edge.question" name="eQuestion" required
                                      cols="55" rows="4"
                                      placeholder="YOUR ENQUIRY*"></textarea>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                            <button ng-disabled="form.$invalid || isUnchanged(edge)" class="buttonSubmit">submit! >
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="seperator"></div>

<div class="container" id="contactDiv">
    <div class="col-lg-12 col-md-12 col-sm-12 desktopNav">
        <span class="navbar-brand">CONTACT US</span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <ul class="nav nav-sidebar" role="tablist">
            <li class="active"><a href="#contact" role="tab" data-toggle="tab">FIND US</a></li>
        </ul>
        <div class="pageScroll">
            <ul>
                <li><a href="#homeDiv" class="scroll">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
            </ul>
        </div>
    </div>


    <div class="navbar navbar-inverse navbar-home mobileNav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".contact-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">CONTACT US</span></div>
        <div class="collapse navbar-collapse contact-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#contact" role="tab" data-toggle="tab">FIND US</a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade in active" id="contact">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xss-12 embed-responsive e gMap">
                    <iframe class="embed-responsive-item" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://www.google.com.au/maps?t=m&amp;q=147+High+Street,+Preston,+Victoria&amp;ie=UTF8&amp;hq=&amp;hnear=147+High+St,+Preston+Victoria+3072&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xss-12 manifesto">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xss-12">
                        <p class="lead">147 High St,<br/>
                            Preston, Melbourne<br/>
                            VIC 3072</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xss-12">
                        <p class="lead"><img src="images/icon-phone.png" alt="Get Glossy Email Phone Number"/>03
                            8899 7210<br/>
                            <img src="images/icon-email.png" alt="Get Glossy Email Address"/><a
                                href="mailto:team@getglossy.com.au">team@getglossy.com.au</a></p>
                    </div>
                    <div ng-controller="formControllerContact">
                        <form name="form" class="css-form-contact" novalidate ng-submit="submitForm()">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                                <input type="text" ng-model="contact.name" name="cName" required placeholder="FULL NAME*">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xss-6 first-contact">
                                <input type="email" ng-model="contact.email" name="cEmail" required placeholder="EMAIL*">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xss-6 second-contact">
                                <input type="text" name="cContact" required ng-model="contact.contact" placeholder="CONTACT NUMBER">
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                                <textarea name="creativeQuestion" name="cQuestion" required ng-model="contact.question"
                                          cols="55" rows="4"
                                          placeholder="YOUR ENQUIRY*"></textarea>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12">
                                <button ng-disabled="form.$invalid || isUnchanged(edge)" class="buttonSubmit-contact">
                                    submit! >
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="seperator"></div>

<div class="container" style="background: #c3c4c6">
    <div class="col-lg-2 col-md-2 col-sm-3 desktopNav">
        <div class="pageScroll" style="background: #c3c4c6">
            <ul>
                <li><a href="#homeDiv" class="scroll">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 getGlossyBanner tab-pane fade in active" id="contact">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 work">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-7 col-xss-12 footer_content">
                    <h5 class="footer-heading">About Get Glossy</h5>

                    <p class="fotterText">At Get Glossy it's about keeping ahead of the game. We make sure we're doing
                        exactly
                        what we should be doing every single day to help our clients get better value out of their
                        customers
                        online.</p>

                    <p class="fotterText">Our team is structured to help our brands get the best possible results out of
                        social
                        media marketing, so we've grown and developed and added to our team to ensure that we're best
                        positioned
                        to get optimum results for you. We are writers, we are marketers, we are developers, we are
                        designers,
                        we are thinkers.</p>

                    <p class="fotterText">Social media marketing melbourne, social media agency melbourne, Facebook
                        Marketing
                        Melbourne</p>

                    <a target="_blank" href="https://www.facebook.com/GetGlossy">
                        <img src="images/icon-footer-fb.png" alt="Get Glossy Facebook"/>
                    </a>
                    <a target="_blank" href="https://twitter.com/GetGlossyHQ">
                        <img src="images/icon-footer-twitter.png" alt="Get Glossy Twitter"/>
                    </a>
                    <a target="_blank" href="http://www.linkedin.com/company/get-glossy">
                        <img src="images/icon-footer-link.png" alt="Get Glossy LinedIn"/>
                    </a>
                    <a target="_blank" href="http://www.youtube.com/user/GetGlossyHQ">
                        <img src="images/icon-footer-youtube.png" alt="Get Glossy Youtube"/>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-5 col-xss-12 instaPicsDiv">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 footer_content">
                        <h5 class="footer-heading">Staff Photos</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xss-12 embed-responsive e instaPics">
                        <iframe class="embed-responsive-item" id="iframecode" onload="" scrolling="no" frameborder="0" src="http://instaembedder.com/gallery.php?username=getglossyhq&amp;hashtag=&amp;width=100&amp;cols=2&amp;frame=1&amp;image_border=10&amp;rows=3&amp;cell_margin=10&amp;display_username=0&amp;likes=0&amp;comments=0&amp;date=0&amp;link=0&amp;caption=0&amp;color=gray"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/angular-seo.js"></script>
<script src="controllers/apps.js"></script>
<script src="controllers/seo.js"></script>
<script>
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);
    });
</script>
</body>
</html>