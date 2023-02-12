<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../assets/css/normalize.css" />
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
		<title>Cawipad Contact page</title>
	</head>
	<body>

		

		<main class="contact">
			<div class="container">
				<h1 class="section__title">Nous contacter</h1>
				<section class="flex__contact">
					<!-- ========== FORM SECTION ============= -->
					<form action="register" class="contact__form">
						<div class="flex__input">
							<div class="input__container">
								<label for="name">Nom</label>
								<input type="text" id="name" class="contact__input" />
							</div>
							<div class="input__container">
								<label for="email">Email</label>
								<input type="email" id="email" class="contact__input" />
							</div>
						</div>
						<div class="flex__input">
							<div class="input__container">
								<label for="society">Société</label>
								<input type="text" id="society" class="contact__input" />
							</div>
							<div class="input__container">
								<label for="object">Objet</label>
								<input type="email" id="object" class="contact__input" />
							</div>
						</div>
						<div class="message__container">
							<label for="message">Message</label>
							<textarea
								name="message"
								id="message"
								class="contact__message"
							></textarea>
						</div>
						<button type="submit" class="button contact__button">
							Envoyer
						</button>
					</form>
					<!-- ======== CONTACT IMAGE FOR LARGE SCREEN -->
					<img
						src="../assets/svg/contact/contact_image.svg"
						class="contact__image"
						alt="contact-image"
					/>
				</section>
			</div>
		</main>
	</body>
</html>
