<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>
                @php
                    $title1 = str_replace('(', '<span>', $titles[0]->title);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2;
                @endphp
            </h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 features">
                    @foreach ($iphoneLeft as $left)
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$left->title}}</h2>
                            <p>{{$left->text}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$left->icon}}"></i>
                        </div>
                    </div>
                    @endforeach
                </div>  
            <!-- feature item -->
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                    @foreach ($iphoneRight as $right)  
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="{{$right->icon}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$right->title}}</h2>
                            <p>{{$right->text}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
        <div class="text-center mt100">
            <a href="#postService" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->
