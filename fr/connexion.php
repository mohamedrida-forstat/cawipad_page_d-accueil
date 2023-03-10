<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../assets/css/normalize.css" />
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
		<script src="assets/script/main.js" defer></script>
		<title>Cawipad - la page de connexion</title>
	</head>
	<body>
		<main class="connexion">
			<div class="container">
				<h1 class="section__title">Connexion</h1>
				<!-- ======== START CONNEXION FORM ========== -->
				<div class="flex__connexion">
					<div class="form__container">
						<form action="register" class="connexion__form">
							<div class="input__container">
								<input
									type="text"
									name=""
									id="nom-utilisateur"
									class="form__input"
								/>
								<label for="nom-utilisateur">Nom d’utilisateur</label>
							</div>
							<div class="input__container">
								<input
									type="password"
									name=""
									id="mot-de-pass"
									class="form__input"
								/>
								<label for="mot-de-pass">Mot de passe</label>
							</div>
							<div class="input__container-save">
								<input type="checkbox" name="" id="save" />
								<label for="save">Se souvenir de moi</label>
							</div>
							<button type="submit" class="button connexion__form-btn">
								se connecter
							</button>
						</form>
						<!-- ======== END CONNEXION FORM ========== -->
						<div class="links__container">
							<a href="#" class="connexion__link">mot de passe oublié ?</a>
							<a href="#" class="connexion__link">
								Vous n’avez pas de compte ?
							</a>
						</div>
					</div>

					<!-- ======= IMAGE CONNEXION FOR FLEX BOX -->
					<div class="image__container">
						<ul class="social__media-icons">
							<li>
								<a href="#" target="_blank" class="facebook">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" class="instagram">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" class="linkedin">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
						<img
							src="../assets/svg/connexion/connexion_image.svg"
							class="connexion__image"
							alt="connexion-image"
						/>
					</div>
				</div>

				<!-- ========== CONTACT INFORMATION SECTION ============= -->
				<section class="flex__contact-info flex__info">
					<article class="info">
						<img
							src="../assets/svg/contact/location.svg"
							class="info__icon"
							alt="location-icon"
						/>
						<h3 class="info__title">Location</h3>
						<p class="info__paragraph">
							6 Avenue Gambetta, 92160 Antony, France
						</p>
					</article>
					<article class="info">
						<img
							src="../assets/svg/contact/phone.svg"
							class="info__icon"
							alt="location-icon"
						/>
						<h3 class="info__title">Télephone</h3>
						<p class="info__paragraph">01 48 25 19 51</p>
					</article>
					<article class="info">
						<img
							src="../assets/svg/contact/mail.svg"
							class="info__icon"
							alt="location-icon"
						/>
						<h3 class="info__title">Website</h3>
						<a href="#" class="info__paragraph"> www.dataoptique.fr </a>
					</article>
				</section>

				<!-- ======== SOCIAL MEDIA ========= -->
				<section class="social">
					<h1 class="section__title">Suivez-nous</h1>
					<div class="flex__social">
						<ul class="flex__social-icons">
							<li>
								<a href="#" target="_blank" class="facebook">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" class="instagram">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" class="linkedin">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
						<p class="copyright">© Politique de confidentialité 2022</p>
					</div>
				</section>
			</div>
		</main>
	</body>
</html>
