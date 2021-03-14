{{--One of the many sections that can be added to home page at will. Avoiding to do so is an option--}}
    <header class='main-header first-banner' style="background-image: url({{$banner['image']}})">

        <div class="container">

            <div class="top-banner-container">

                <div class="text-content">


                    <div class='title-container'>
                        <p id='title-first-banner'>{{$banner['title']}}</p>
                        <p id="subtitle-first-banner">{{$banner['subtitle']}}</p>
                    </div>

                    <div class="download-button-container">

                        <div class='container-button-timer'>

                            <div class="button-holder">
                                <a href="#" class=" no-margin cg-btn cg-btn-lg primary" id="banner-button-top-section" data-ctatype="order" data-cp="homepage_jumbotron_order" data-campaign="productlaunchcg8">{{$banner['button_text']}}</a></div>

                            <div class='countdown-box'>
                                <div id="countdown-clock" class="countdown"></div>
                            </div>

                        </div>
                        <div class='button-subtext'>{{$banner['button_subtext']}}</div>
                    </div>

                </div>

            </div> <!-- content-container -->

        </div> <!-- container -->


    </header>
