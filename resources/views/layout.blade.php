
<div class="swiper-container swiper-container-n">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="container mt-5 mb-5">

            <div class="row justify-content-center">
                @foreach($data as $d)
                <div class="card mb-3 col-sm-12 col-md-4 shadow-lg m-2">
                    <div class="card-body ">
                        <div class=" text-center mb-0 desc">

                            {{ $d->title }}

                        </div>
                        <div class="mt-2 mb-0 text-secondary">
                            {!! $d->body !!}
                        </div>

                        <div class="image mt-2">
                            <img class="img-fluid" src="{{ $d->img }}" alt="">
                            <div class="fade"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
      </div>
    </div>
    <!-- Add Scroll Bar -->
    <div class="swiper-scrollbar"></div>
  </div>

  <!-- Initialize Swiper -->



