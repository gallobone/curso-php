<?php

require_once('config.php');
include_once('includes/header.php');


?>	

   <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-min.js"></script>

	<div class="container mt-5">
		<section class="section-team">
			<div class="container">
				<div class="row">
					<div class="col-4 div-team-configs">
						<div class="team-configs-area">
							<h3 class="anton">Defina o esquema</h3>
							<div>
								<p data-bind="text: name"></p>
								<p data-bind="text: age"></p>
								<p data-bind="text: country"></p>
							</div>
							<div>
								<input type="checkbox" name="442">
								<label>4-4-2</label><span>&nbsp;&nbsp;</span>

								<input type="checkbox" name="433">
								<label>4-3-3</label><span>&nbsp;&nbsp;</span>
							</div>
						</div>
						<div class="team-configs-area">
							<h3 class="anton">Escolha os jogadores</h3>
						</div>
					</div>
					<div class="col-8">
						<img class="img-soccer-field-base" src="images/soccer-field-2.png">
					</div>
				</div>
			</div>			
		</section>
	</div>

	<script type="text/javascript">
		var viewModel = {
			name: "Gallo Bone",
			age: "36",
			country: "Italy"
		}

		function AppViewModel(){
		//do something
		}

		ko.applyBindings(viewModel);

	</script>

<?php
	include_once('includes/footer.php');