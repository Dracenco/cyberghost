{{--One of the many sections that can be added to home page at will. Avoiding to do so is an option--}}
<section class="three-images-section">
    <article class='title-and-paragraphs '>
        <div class='container max-950'>
            <div class='inner-container '>
                <div class="pt-md">
                    <h2 class='text-center'>{{$three_images['title']}}</h2>
                    <p class='subtitle text-center pt-10'>{{$three_images['subtitle']}}</p>
                </div>
                <div class="text-center">
                </div>
            </div>
        </div>
    </article>
    <article class="three-images-main-container">
        <div class="image-and-text-container">
            <img src="{{$three_images['first_image']}}" class="image-container"></img>
            <p class="text-container">{{$three_images['first_text']}}</p>
            <p class="sub-text-container">{{$three_images['first_sub_text']}}</p>
        </div>
        <div class="image-and-text-container">
            <img src="{{$three_images['second_image']}}" class="image-container"></img>
            <p class="text-container">{{$three_images['second_text']}}</p>
            <p class="sub-text-container">{{$three_images['second_sub_text']}}</p>
        </div>
        <div class="image-and-text-container">
            <img src="{{$three_images['third_image']}}" class="image-container"></img>
            <p class="text-container">{{$three_images['third_text']}}</p>
            <p class="sub-text-container">{{$three_images['third_sub_text']}}</p>
        </div>
    </article>

</section>
