	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>
					@php
                        $title1 = str_replace('(', '<span>', $titles[3]->title);
                        $title2 = str_replace(')', '</span>', $title1);
                        echo $title2;
                    @endphp
				</h2>
			</div>
			<div class="row">
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="img/{{$randomUser[0]->img}}" alt="">
							<h2>{{$randomUser[0]->name}}</h2>
							<h3>{{$randomUser[0]->job->job}}</h3>
						</div>
					</div>
				
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="img/{{$ceo[0]->img}}" alt="">
							<h2>{{$ceo[0]->name}}</h2>
							<h3>{{$ceo[0]->job->job}}</h3>
						</div>
					</div>

					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="img/{{$randomUser[1]->img}}" alt="">
							<h2>{{$randomUser[1]->name}}</h2>
							<h3>{{$randomUser[1]->job->job}}</h3>
						</div>
					</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->
