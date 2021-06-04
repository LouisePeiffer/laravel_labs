	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>{{$contacts->text}}</p>
					<h3 class="mt60">{{$contacts->titleAddress}}</h3>
					<p class="con-item">{{$contacts->address}}<br>{{$contacts->postcode}}</p>
					<p class="con-item">{{$contacts->telephone}}</p>
					<p class="con-item">{{$contacts->email}}</p>
				</div>
				@include('partials.contact')
			</div>
		</div>
	</div>
	<!-- Contact section end-->