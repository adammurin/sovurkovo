<div class="carousel carouselContainer customersCarousel">
    @foreach ($testimonials_data as $testimonial)
    <div>
        <div class="caption">
            <p class="text">
                {{ $testimonial->customer_testimonial }}
            </p>
            <p class="name">
                {{ $testimonial->customer_name }}
            </p>
        </div>
    </div>
    @endforeach
</div>