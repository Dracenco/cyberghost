{{--One of the many sections that can be added to home page at will. Avoiding to do so is an option--}}
<section class="content homepage">
    <div class='inner-container' id="bottom-section-title">
        <div class="pt-md">
            <h2 class='text-center'>{{$text_image['title']}}</h2>
            <p class='subtitle text-center pt-10'> </p>
        </div>
        <div class="text-center">
        </div>
    </div>
    {{--text--}}
    <div class="text-section-container">
        <p class="text-slice">{{$text_image['first_paragraph']}}</p>
        <p class="text-slice">{{$text_image['second_paragraph']}}</p>
        <p class="text-slice">{{$text_image['third_paragraph']}}</p>
    </div>
    {{--image--}}
    <div class="image-section-container">
        <img src="{{$text_image['image']}}"></img>
    </div>
    {{--text--}}
    <div class="text-section-container">
        <p class="text-slice">{{$text_image['fourth_paragraph']}}</p>
        <p class="text-slice">{{$text_image['fifth_paragraph']}}</p>
    </div>
</section>
