	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" method="POST" action="{{route('newsletterstore')}}" role="form">
						@csrf
						<input type="email" placeholder="Your e-mail here" id="email" name="email">
						<button class="site-btn btn-2" type="submit">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->