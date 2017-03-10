<!-----------------------------------------------------------------------------------
--
-- News
--
------------------------------------------------------------------------------------->
<div class="container medlab_news_container">
    <div class="row">
        <!--
        -- News Main
        -->

        <div class="col-md-8 col-sm-12 col-xs-12">

        <!--ANY URGENT UPDATES
            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        PHONE LINE UPGRADES
                    </div>
                    <div class="medlab_news_item_body">

                        <p>There may be slight disruptions to the phone lines at Medlab today due to an upgrade.</p>
                        <p>Please contact Medlab on our secondary Phone Number: 0280044572</p>
                        <p>We apologise for any inconveniences and appreciate your patience</p>


                    </div>
                </div>
            </div>

            -->



            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        Medlab Efficacy Magazine
                    </div>
                    <div class="medlab_news_item_body">



                        <div class="col-md-8 col-sm-12 col-xs-12">

                        <p>
                        <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="/efficacy/magazine_mm17"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                    target="_blank">

                                <img alt="Medlab Efficacy Magazine Edition 3"
                                     src="/img/efficacy/efficacy/EFFICACY Mag Web Banner 600x600 MAY17 v1[1].jpg"
                                     title="Medlab Efficacy Magazine Edition 3"
                                     width="450px"
                                     class="img-responsive center-block">
                            </a>
                        </p>

                        </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">


                                <h2 style="text-align:center;">Medlab's New Efficacy<sup>TM</sup> Magazine</h2>
                                <h4 style="color:grey; text-align:center;">A true integrative approach to medicine and health</h4>
                                <p style="text-align:center;">Issue 3: March 2017 - May 2017</p>
                                <p style="text-align:center;">Neonatal Health and Immunity</p>
                                </br>



                            </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">


                        <p style="text-align:center;">Medlab’s quarterly magazine designed to educate and update Practitioners with Medlab research and industry advancements with a variety of contributing authors. <a href="/account/login">Register or log in</a> to view today.</p>

                            </div>
                            </div>
                </div>
            </div>


            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        Featured News
                    </div>
                    <div class="medlab_news_item_body">



                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <a href="http://www.9news.com.au/national/2017/03/09/17/30/mouth-spray-developed-to-tackle-high-cholesterol/?ocid=9newsfb" target="_blank" class="medlab_news_content_link">
                                <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                                    New NanoCelle<sup>TM</sup> NanoStat<sup>TM</sup> could help tackle high cholesterol
                                </h2>
                            </a>
                            <div class="media-middle media-middle">

                                <iframe src="https://player.vimeo.com/video/207709909" width="100%" height="400" frameborder="0"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                            </div>
                            <p>Featured on Channel Nine News on the 9th of March 2017</p>

                        </div>



                    </div>
                </div>
            </div>




            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        FEATURED PRODUCTS
                    </div>
                    <div class="medlab_news_item_body">

                        <img src="/img/products/NanoCelleRange_Medlab.jpg" alt="Mg Optima™ Relax Featured product" height="400" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                                NanoCelle<sup>TM</sup> Range

                        </h2>
                        <p class="medlab_news_content_paragraph" style="text-align: justify">
                            <p>Want more information on Medlab’s sub-micron delivery platform NanoCelle<sup>TM</sup>? <a href="/research/medlab-delivery-platform">Cick here for more information.</a></p>
                            Our <a href="/nutraceuticals/products?q=N">NanoCelle™ nutrcaeutical range</a> currently includes four vitamin oral-buccal sprays, that offer superior absorption to that of a capsule, tablet or emulsion.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/research/medlab-delivery-platform" class="medlab_news_content_link">More Information</a>
                        </p>



                        



                    </div>
                </div>
            </div>

            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        REGISTER FOR A PRACTITIONER ACCOUNT TODAY
                    </div>
                    <div class="medlab_news_item_body">
                        <p>
                            <a href="https://goo.gl/aGHsdZ" target="_blank">
                                <img alt="Register for a practitioner account"
                                     src="/img/news/pracacc_register.jpg"
                                     title="Register for a practitioner account"
                                     width="500px;"
                                     class="img-responsive center-block">
                            </a>
                        </p>
                    </div>
                </div>
            </div>



            <div class="medlab_news_item">
            <div class="medlab_news_item_content_wrapper">
                <div class="medlab_news_item_title">
                    FEATURED CONFERENCE
                </div>
                <div class="medlab_news_item_body">
                    <h2 class="medlab_news_content_title">
                        General Practice Conference & Exhibition 2017
                    </h2>
                    <p>
                        <img src="/img/news/GPCETWITTER_36.jpg" alt="Microbiome" height="auto" width="100%"/>
                    </p>
                    <p>
                        Professor Luis Vitetta will present on: 'Mitigating Chronic Disease' </br>
                        Please visit Medlab at stand 1138.</br>
                        When:  19-21 May, 2017 </br>
                        Where: Sydney Showground, Sydney Olympic Park, NSW</br>
                    </p>


                </div>
            </div>
        </div>




            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        NEWS
                    </div>
                    <div class="medlab_news_item_body">




                        <a href="http://www.balmoralswim.com.au" target="_blank" class="medlab_news_content_link">
                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            Balmoral Swim 4 Cancer
                        </h2>
                            </a>
                        <p>Medlab is proud to be sponsoring the Balmoral Swim for Cancer 2017 to raise funds for Children's Cancer Institute.</br>
                            Registrations to join the swim are now open, so click the link below to help us raise funds for a great cause!
                        </p>

                        <br>
                        <a href="http://www.balmoralswim.com.au" target="_blank" class="medlab_news_content_link">
                        <p>
                            <img alt="Balmoral Swim"
                                 src="/img/news/balmoral.jpg"
                                 title="Balmoral Swim"
                                 width="75%"
                                 class="img-responsive center-block">

                        </p>
                        </a>
                        <br><br>

                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">Congratulations to Michael Thomsen on being the recipient of a Francis M Hooper RHD scholarship from the University of Sydney.</h2>

                        <br>
                            <p>
                                <img alt="Michael Thomsen"
                                     src="/img/news/michaelthomsen.png"
                                     title="Michael Thomsen"
                                     width="100%"
                                     class="img-responsive center-block">

                            </p>
                        <br><br>
                        <a href="http://www.global-engage.com/event/probiotics-asia/" target="_blank" class="medlab_news_content_link">
                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            Sean Hall (CEO) in March 2017 presented at The 2nd Probiotics Congress: Asia on ‘Mitigating Chronic Disease’</br>
                        </h2>

                        <br>
                        <p>

                            <img alt="Probiotics Congress Asia"
                                 src="/img/news/probiotics-congress.jpeg"
                                 title="Probiotics Congress Asia"
                                 width="75%"
                                 class="img-responsive center-block">

                        </p>
                        </a>
                        <br><br>


                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                                Sean Hall (CEO) recently presented on Medlab's NanoCelle Delivery platform at The University of Sydney’s BioNanoTechnology and Biomedical Engineering summer school.</br>
                        </h2>
                        <br>
                        <p>

                                <img alt="NanoCelle Delivery Platform"
                                     src="/img/news/USYD_presentation.jpg"
                                     title="USYD Presentation"
                                     width="75%"
                                     class="img-responsive center-block">

                        </p>
                        <br><br>


                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            <a href="https://issuu.com/aiglobalmedia/docs/biotech_awards_2016_supplement/1" target="_blank" class="medlab_news_content_link">
                                Congratulations to the Medlab team! Best early-phase chronic disease drug discovery company. Click the link to review the article, featured on pages 16 and 17.</br>
                            </a>
                        </h2>
                        <br>
                        <p>
                            <a href="https://issuu.com/aiglobalmedia/docs/biotech_awards_2016_supplement/1" target="_blank">
                                <img alt="Best Early-Phase Chronic Disease Drug Discovery Company Award"
                                     src="/img/news/awardlogo.jpg"
                                     title="Best Early-Phase Chronic Disease Drug Discovery Company Award"
                                     width="50%"
                                     class="img-responsive center-block">
                            </a>
                        </p>
                        <br><br>


                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 23px;">
                            <a href="http://a.msn.com/05/en-au/AAe6yNf?ocid=se%20" target="_blank" class="medlab_news_content_link">
                                Medlab's research featured on Channel 9 news
                            </a>
                        </h2>
                        <p style="text-align: justify">
                            Medlab Clinical is at the forefront of research into obesity and the prevention of diabetes.
                            Medlab's probiotic formulation is currently undergoing clinical trial evaluation in
                            collaboration with the University of Sydney's Boden Institute as featured in a recent Channel
                            9 news item.
                        </p>
                        <p>
                            <a class="medlab_panel_content_link" href="http://a.msn.com/05/en-au/AAe6yNf?ocid=se%20" target="_blank">
                                Watch Interview
                            </a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!--
        -- News Sidebar
        -->
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        WEBINARS
                    </div>
                    <div class="medlab_news_sidebar_item_body">

                        <p>Educational webinars available to healthcare practitioners. <a href="/account/login">Register or Log-in to view</a></p>

                        <ul class="medlab_news_sidebar_list media-list">
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="/education/webinars/dehydration"
                                        @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                        @else
                                        href="/account/login"
                                        @endif
                                        target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Understanding the Clinical Application of NanoCelle" src="/img/webinar/medlab_dehydration_webinar.jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Understanding the Clinical Application of NanoCelle
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Professor Luis Vitetta for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="/education/webinars/nanocelle"
                                        @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                        @else
                                        href="/account/login"
                                        @endif
                                        target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Understanding the Clinical Application of NanoCelle" src="/img/news/Medlab_nanocelle_webinar.jpeg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Understanding the Clinical Application of NanoCelle
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Professor Luis Vitetta for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="/education/webinars/nrgwebinar"
                                        @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                        @else
                                        href="/account/login"
                                        @endif
                                        target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Unlocking the Clinical benefits of NRGBiotic" src="/img/news/MedlabNRG_webinar.jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Unlocking the Clinical benefits of NRGBiotic
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Dr Samantha Coulson for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        Practitioner Educational Resource
                    </div>
                    <div class="medlab_news_sidebar_item_body">
                        <ul class="medlab_news_sidebar_list media-list">



                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.healthed.com.au/seminars/swh17/" target="_blank">

                                    <div class="media-left media-middle">
                                        <a href="/nutraceuticals/praceducationalresource">
                                            <img width="100%" src="/img/products/shippingandpayment/praceducationresource.png">
                                        </a>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        UPCOMING CONFERENCES
                    </div>
                    <div class="medlab_news_sidebar_item_body">
                        <ul class="medlab_news_sidebar_list media-list">



                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.gpce.com.au" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        General Practice Conference & Exhibition 2017</br>
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%"  alt="ACNEM 2017" src="/img/news/GPCEMREC_36.jpg">
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>