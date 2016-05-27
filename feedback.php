<?php include_once 'header.php'; ?>

<main class="feedback">
	<div class="container">
			<h1 class="heading feedback-heading">FEEDBACKS</h1>
			<p>Thank you for participating in our client satisfaction survey. <br>
			We would love to hear about your LifeScience experience, your answers below will help us improve our services.</p>
			<form class="form form--feedback" id="form-feedback" action="">
				<hr class="feedback-separator">

				<div class="row feedback-group">
					<div class="col-md-12 form-group">
						<label class="feedback-label" for="first_name">First Name</label>
						<input type="text" class="form-control feedback-input-sm" id="first_name" name="first_name">
						<label class="feedback-label-sm" for="last_name">Last Name</label>
						<input type="text" class="form-control feedback-input-sm" id="last_name" name="last_name">
					</div>
					<div class="col-md-12 form-group">
						<label class="feedback-label" for="address">Address</label>
						<input type="text" class="form-control feedback-input" style="display: inline-block;" id="address" name="address">
					</div>
					<div class="col-md-12 form-group">
						<label class="feedback-label" for="email">E-mail</label>
						<input type="text" class="form-control feedback-input" id="email" name="email">
					</div>
					<div class="col-md-12 form-group">
						<label class="feedback-label" for="regular_client">Client</label>
						<div class="feedback-checkbox">
							<input type="checkbox" class="form-checkbox single-select" id="regular_client" name="client" value="regular">
							<label class="feedback-checkbox-label" for="regular_client">Regular Client</label>
						</div>
						<div class="feedback-checkbox">
							<input type="checkbox" class="form-checkbox single-select" id="firsttime_client" name="client" value="first time">
							<label class="feedback-checkbox-label" for="firsttime_client">First Time Client</label>
						</div>
					</div>
				</div>

				<hr class="feedback-separator">

				<div class="row feedback-group">
					<div class="col-md-12 form-group">
						<label class="form-label" for="last_visit">When did you last visit our clinic?</label>
						<input type="text" class="form-control" id="last_visit" name="last_visit">
					</div>
					<div class="col-md-12 form-group">
						<label class="form-label" for="experience">How has your experience been so far across all your visits?</label>
						<input type="text" class="form-control" id="experience" name="experience">
					</div>
					<div class="col-md-12 form-group">
						<label class="form-label" for="improve">In what ways can we improve your experience with us?</label>
						<input type="text" class="form-control" id="improve" name="improve">
					</div>
					<div class="col-md-12 form-group">
						<label class="form-label" for="message">Please share with us the name of the doctor/staff that you would like to commend and a message you would like to give them.</label>
						<input type="text" class="form-control" id="message" name="message">
					</div>
				</div>

				<hr class="feedback-separator">
			</form>
		</div>
	</div>
</main>

<?php include_once 'footer.php'; ?>