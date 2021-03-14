{{--One of the many sections that can be added to home page at will. Avoiding to do so is an option--}}
    <section class="content homepage">

        <!-- Right-Side Feature  -->
        <div class="container-fluid pv-md lightgray">
            <div class="container">
                <div class="side-feature reversed side-feature-right side-feature-bubble display-table">
                    <div class="table-row">
                        <div class="table-cell left-side width-60 text-center-xs">
                            <div class="pv-md">
                                <h3>{{$right_section['title']}}</h3>
                                <div class='pt-sm'>

                                    <p class="darkgray-text pt-sm" id="right-and-left-paragraph">
                                        {{$right_section['paragraph']}}  </p>



                                </div>
                            </div>
                        </div>
                        <div class="table-cell right-side text-center width-40">

                            <img class='app-shot' src="{{$right_section['image']}}" alt="Online anonymity">

                        </div>
                    </div>
                </div> <!-- /.side-feature -->
            </div>
        </div>
    </section>

