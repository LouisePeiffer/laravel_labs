<!-- services section -->
<div class="services-section spad">
    <div class="container" id="servicespaginate">
        <div class="section-title dark">
            <h2>
                @php
                        $title1 = str_replace('(', '<span>', $titles[2]->title);
                        $title2 = str_replace(')', '</span>', $title1);
                        echo $title2;
                    @endphp
            </h2>
        </div>
        <div class="row" id="serviceSection">
            @foreach ($services9recent->reverse() as $service)
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$service->icon->name}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$service->title}}</h2>
                            <p>{{$service->text}}</p>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center">
            {{ $services9recent->links() }}
          </div>
    </div>
</div>
<!-- services section end -->
