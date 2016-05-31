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

				<div class="row feedback-group feedback-question hidden-xs hidden-sm">
					<div class="col-md-5"></div>
					<div class="col-md-2">Strongly Agree</div>
					<div class="col-md-1">Agree</div>
					<div class="col-md-1">Neutral</div>
					<div class="col-md-1">Disagree</div>
					<div class="col-md-2">Strongly Disagree</div>
				</div>

				<div class="row feedback-group feedback-question">
					<div class="col-md-5"><label for="question1">You are treated with care throughout your stay</label></div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question1" id="question1_sa">
						<label class="hidden-md hidden-lg" for="question1_sa">Strongly Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question1" id="question1_a">
						<label class="hidden-md hidden-lg" for="question1_a">Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question1" id="question1_n">
						<label class="hidden-md hidden-lg" for="question1_n">Neutral</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question1" id="question1_d">
						<label class="hidden-md hidden-lg" for="question1_d">Disagree</label>
					</div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question1" id="question1_sd">
						<label class="hidden-md hidden-lg" for="question1_sd">Strongly Disagree</label>
					</div>
				</div>

				<div class="row feedback-group feedback-question">
					<div class="col-md-5"><label for="question2">You consider yourself as a regular customer for the next 5 years</label></div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question2" id="question2_sa">
						<label class="hidden-md hidden-lg" for="question2_sa">Strongly Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question2" id="question2_a">
						<label class="hidden-md hidden-lg" for="question2_a">Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question2" id="question2_n">
						<label class="hidden-md hidden-lg" for="question2_n">Neutral</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question2" id="question2_d">
						<label class="hidden-md hidden-lg" for="question2_d">Disagree</label>
					</div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question2" id="question2_sd">
						<label class="hidden-md hidden-lg" for="question2_sd">Strongly Disagree</label>
					</div>
				</div>

				<div class="row feedback-group feedback-question">
					<div class="col-md-5"><label for="question3">The staff are friendly and accomodating</label></div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question3" id="question3_sa">
						<label class="hidden-md hidden-lg" for="question3_sa">Strongly Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question3" id="question3_a">
						<label class="hidden-md hidden-lg" for="question3_a">Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question3" id="question3_n">
						<label class="hidden-md hidden-lg" for="question3_n">Neutral</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question3" id="question3_d">
						<label class="hidden-md hidden-lg" for="question3_d">Disagree</label>
					</div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question3" id="question3_sd">
						<label class="hidden-md hidden-lg" for="question3_sd">Strongly Disagree</label>
					</div>
				</div>

				<div class="row feedback-group feedback-question">
					<div class="col-md-5"><label for="question4">LifeScience provides you the health care you need</label></div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question4" id="question4_sa">
						<label class="hidden-md hidden-lg" for="question4_sa">Strongly Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question4" id="question4_a">
						<label class="hidden-md hidden-lg" for="question4_a">Agree</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question4" id="question4_n">
						<label class="hidden-md hidden-lg" for="question4_n">Neutral</label>
					</div>
					<div class="col-md-1">
						<input type="radio" class="form-radio" name="question4" id="question4_d">
						<label class="hidden-md hidden-lg" for="question4_d">Disagree</label>
					</div>
					<div class="col-md-2">
						<input type="radio" class="form-radio" name="question4" id="question4_sd">
						<label class="hidden-md hidden-lg" for="question4_sd">Strongly Disagree</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 form-group">
						<button class="btn btn--feedback" id="feeback">SUBMIT</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>

<?php include_once 'footer.php'; ?>