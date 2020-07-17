<html lang='fr'>
	<!------------------------------------Declaration-Generale------------------------------------------>
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<title><?= $pageTitle ?></title>
		<link rel='stylesheet' type='text/css' href='style/index.css'>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script scr="https://kit.fontawesome.com/ca891620ee.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="./javascript/index.js" async></script>
	</head>
	<!---------------------------------Fin-Declaration-Generale----------------------------------------->
    <body>
	<!-----------------------------------------Nav-du-site---------------------------------------------->
		<header>
			<nav class="navbar navbar-expand-md navbar-dark bg-orange position-fixed w-100 border-bottom border-white">
				<a class="navbar-brand d-md-none" href="index.php" title="Accueil"><svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="40px" height="40px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
								<g>
									<path fill-rule="evenodd" fill="white" clip-rule="evenodd" d="M9.774,17.564c-1.747-0.029-3.54-0.742-5.029-2.189
									C3.981,14.633,3.41,13.76,3.02,12.768c-0.232-0.59-0.383-1.203-0.459-1.835c-0.033-0.275-0.033-0.552-0.03-0.828
									c0.003-0.266-0.002-0.531,0.02-0.796c0.044-0.526,0.159-1.041,0.322-1.544c0.239-0.739,0.586-1.425,1.041-2.054
									C4.665,4.669,5.62,3.87,6.775,3.309c0.544-0.265,1.114-0.458,1.706-0.586c0.739-0.16,1.485-0.206,2.237-0.147
									c0.606,0.047,1.198,0.166,1.776,0.356c1.061,0.35,2,0.904,2.818,1.666c0.813,0.758,1.428,1.652,1.846,2.683
									c0.281,0.699,0.453,1.424,0.512,2.175c0.016,0.225,0,0.452,0.006,0.679c0.01,0.371-0.014,0.738-0.074,1.105
									c-0.076,0.453-0.186,0.896-0.342,1.328c-0.424,1.174-1.098,2.178-2.018,3.018c-0.725,0.658-1.545,1.158-2.463,1.5
									C11.916,17.406,11.021,17.564,9.774,17.564z M11.168,16.654c-0.002-0.008-0.002-0.012-0.002-0.012
									c-0.021-0.004-0.045-0.008-0.064-0.012c-0.633-0.129-1.241-0.33-1.819-0.617c-0.983-0.49-1.813-1.16-2.446-2.064
									c-0.42-0.598-0.711-1.256-0.881-1.967c-0.104-0.432-0.156-0.869-0.167-1.313C5.772,10.05,5.842,9.443,6.047,8.855
									c0.283-0.814,0.78-1.469,1.481-1.968c0.499-0.354,1.05-0.594,1.643-0.742c0.527-0.131,1.057-0.177,1.596-0.097
									c0.754,0.111,1.407,0.432,1.959,0.956c0.529,0.503,0.895,1.113,1.115,1.808c0.125,0.397,0.197,0.805,0.182,1.223
									c-0.021,0.544-0.186,1.046-0.451,1.517c-0.436,0.766-1.066,1.264-1.951,1.418c-0.602,0.105-1.142-0.027-1.613-0.412
									c-0.627-0.516-0.873-1.186-0.772-1.985c0.045-0.366,0.174-0.705,0.343-1.029c0.125-0.241,0.427-0.312,0.643-0.155
									c0.181,0.131,0.227,0.356,0.115,0.572c-0.126,0.246-0.223,0.501-0.251,0.778c-0.051,0.502,0.124,0.907,0.535,1.204
									c0.165,0.117,0.35,0.201,0.556,0.201c0.484-0.002,0.906-0.162,1.254-0.502c0.271-0.268,0.457-0.588,0.584-0.943
									c0.104-0.289,0.166-0.585,0.141-0.896c-0.061-0.748-0.338-1.407-0.83-1.97c-0.613-0.702-1.395-1.018-2.324-0.956
									c-0.458,0.03-0.896,0.153-1.315,0.338C8.16,7.449,7.703,7.778,7.347,8.238c-0.409,0.527-0.611,1.135-0.674,1.793
									c-0.048,0.498-0.02,0.993,0.069,1.487c0.102,0.559,0.291,1.088,0.575,1.58c0.442,0.768,1.054,1.369,1.801,1.838
									c0.773,0.482,1.612,0.787,2.513,0.91c0.584,0.082,1.164,0.082,1.74-0.045c0.117-0.025,0.238-0.039,0.34-0.113
									c0.172-0.125,0.355-0.238,0.52-0.373c1.578-1.277,2.439-2.926,2.553-4.958c0.047-0.824-0.068-1.63-0.332-2.413
									c-0.277-0.828-0.697-1.575-1.27-2.234c-1.059-1.216-2.381-1.967-3.969-2.244C10.539,3.348,9.86,3.344,9.182,3.438
									c-0.695,0.096-1.36,0.292-1.99,0.601C5.893,4.676,4.895,5.631,4.205,6.903c-0.423,0.779-0.673,1.613-0.76,2.495
									c-0.046,0.465-0.042,0.931,0.009,1.396c0.077,0.704,0.258,1.377,0.553,2.02c0.586,1.273,1.481,2.273,2.687,2.992
									c0.932,0.557,1.943,0.859,3.025,0.924c0.471,0.027,0.939,0.004,1.405-0.064C11.139,16.664,11.154,16.658,11.168,16.654z"/>
								</g>
							</svg></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse justify-content-md-center collapse" id="navbarToggler">
					<ul class="navbar-nav d-flex flex-xl-row w-100 justify-content-around align-items-center">
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php?p=menu">Nos Menus</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php?p=ramen" >Nos Ramens</a>
						</li>
						<li class="nav-item active d-none d-md-block">
							<a class="nav-link" href="index.php" title="Accueil">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="40px" height="40px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve" id="logo_menu">
								<g>
									<path fill-rule="evenodd" fill="white" clip-rule="evenodd" d="M9.774,17.564c-1.747-0.029-3.54-0.742-5.029-2.189
									C3.981,14.633,3.41,13.76,3.02,12.768c-0.232-0.59-0.383-1.203-0.459-1.835c-0.033-0.275-0.033-0.552-0.03-0.828
									c0.003-0.266-0.002-0.531,0.02-0.796c0.044-0.526,0.159-1.041,0.322-1.544c0.239-0.739,0.586-1.425,1.041-2.054
									C4.665,4.669,5.62,3.87,6.775,3.309c0.544-0.265,1.114-0.458,1.706-0.586c0.739-0.16,1.485-0.206,2.237-0.147
									c0.606,0.047,1.198,0.166,1.776,0.356c1.061,0.35,2,0.904,2.818,1.666c0.813,0.758,1.428,1.652,1.846,2.683
									c0.281,0.699,0.453,1.424,0.512,2.175c0.016,0.225,0,0.452,0.006,0.679c0.01,0.371-0.014,0.738-0.074,1.105
									c-0.076,0.453-0.186,0.896-0.342,1.328c-0.424,1.174-1.098,2.178-2.018,3.018c-0.725,0.658-1.545,1.158-2.463,1.5
									C11.916,17.406,11.021,17.564,9.774,17.564z M11.168,16.654c-0.002-0.008-0.002-0.012-0.002-0.012
									c-0.021-0.004-0.045-0.008-0.064-0.012c-0.633-0.129-1.241-0.33-1.819-0.617c-0.983-0.49-1.813-1.16-2.446-2.064
									c-0.42-0.598-0.711-1.256-0.881-1.967c-0.104-0.432-0.156-0.869-0.167-1.313C5.772,10.05,5.842,9.443,6.047,8.855
									c0.283-0.814,0.78-1.469,1.481-1.968c0.499-0.354,1.05-0.594,1.643-0.742c0.527-0.131,1.057-0.177,1.596-0.097
									c0.754,0.111,1.407,0.432,1.959,0.956c0.529,0.503,0.895,1.113,1.115,1.808c0.125,0.397,0.197,0.805,0.182,1.223
									c-0.021,0.544-0.186,1.046-0.451,1.517c-0.436,0.766-1.066,1.264-1.951,1.418c-0.602,0.105-1.142-0.027-1.613-0.412
									c-0.627-0.516-0.873-1.186-0.772-1.985c0.045-0.366,0.174-0.705,0.343-1.029c0.125-0.241,0.427-0.312,0.643-0.155
									c0.181,0.131,0.227,0.356,0.115,0.572c-0.126,0.246-0.223,0.501-0.251,0.778c-0.051,0.502,0.124,0.907,0.535,1.204
									c0.165,0.117,0.35,0.201,0.556,0.201c0.484-0.002,0.906-0.162,1.254-0.502c0.271-0.268,0.457-0.588,0.584-0.943
									c0.104-0.289,0.166-0.585,0.141-0.896c-0.061-0.748-0.338-1.407-0.83-1.97c-0.613-0.702-1.395-1.018-2.324-0.956
									c-0.458,0.03-0.896,0.153-1.315,0.338C8.16,7.449,7.703,7.778,7.347,8.238c-0.409,0.527-0.611,1.135-0.674,1.793
									c-0.048,0.498-0.02,0.993,0.069,1.487c0.102,0.559,0.291,1.088,0.575,1.58c0.442,0.768,1.054,1.369,1.801,1.838
									c0.773,0.482,1.612,0.787,2.513,0.91c0.584,0.082,1.164,0.082,1.74-0.045c0.117-0.025,0.238-0.039,0.34-0.113
									c0.172-0.125,0.355-0.238,0.52-0.373c1.578-1.277,2.439-2.926,2.553-4.958c0.047-0.824-0.068-1.63-0.332-2.413
									c-0.277-0.828-0.697-1.575-1.27-2.234c-1.059-1.216-2.381-1.967-3.969-2.244C10.539,3.348,9.86,3.344,9.182,3.438
									c-0.695,0.096-1.36,0.292-1.99,0.601C5.893,4.676,4.895,5.631,4.205,6.903c-0.423,0.779-0.673,1.613-0.76,2.495
									c-0.046,0.465-0.042,0.931,0.009,1.396c0.077,0.704,0.258,1.377,0.553,2.02c0.586,1.273,1.481,2.273,2.687,2.992
									c0.932,0.557,1.943,0.859,3.025,0.924c0.471,0.027,0.939,0.004,1.405-0.064C11.139,16.664,11.154,16.658,11.168,16.654z"/>
								</g>
							</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php?p=the">Nos Thés</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php?p=contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
	<!---------------------------------------Fin-Nav-du-site-------------------------------------------->	
	<!---------------------------------------Corps-du-site---------------------------------------------->
		<main>
				<?= $content ?>
		</main>
	<!-------------------------------------Fin-Corps-du-site-------------------------------------------->	
	<!----------------------------------------Pied-du-site---------------------------------------------->
		<footer class="container-fluid px-4 py-4 bg-orange w-100">
			<h2 class="text-white pb-4">Navigation :</h2>
			<div class="row" id="navfooter">
				<ul class="col-md-4">
					<a class="nav-link text-white" href="index.php?p=menu"><li class="nav-item">Nos Menus</li></a>
					<a class="nav-link text-white" href="index.php?p=ramen"><li class="nav-item">Nos Ramens</li></a>
					<a class="nav-link text-white" href="index.php?p=the"><li class="nav-item" >Nos Thés</li></a>
				</ul>
				<ul class="col-md-4">
					<a class="nav-link text-white" href="index.php"><li class="nav-item">Accueil</li></a>
					<a class="nav-link text-white" href="index.php?p=contact"><li class="nav-item">Contact</li></a>
					<a class="nav-link text-white" href="index.php?p=mention"><li class="nav-item">Mentions Légales</li></a>
				</ul>
			</div>
		</footer>
		<footer class="container-fluid px-5 py-5 bg-orangered w-100">
			<div class="row">
				<div class="col-md-6 text-center">
				<h2 class="text-white">Horaires :</h2>
					<p class="text-white">Du Lundi au Samedi :<p>
					<p class="text-white">De 11h30 à 14h00 et 18h00 à 22h30</p>
				</div>
				<div class="col-md-6 text-center" id="social_network">
				<h2 class="text-white">Réseaux Sociaux :</h2>
				<div class="d-flex justify-content-center">
					<a href="" title="facebook" class="d-block px-3">
						<svg height="40px" viewBox="0 0 512 512" width="40px" xmlns="http://www.w3.org/2000/svg" id="facebook"><path d="m297.277344 508.667969c-2.132813.347656-4.273438.667969-6.421875.960937 2.148437-.292968 4.289062-.613281 6.421875-.960937zm0 0"/><path d="m302.398438 507.792969c-1.019532.1875-2.039063.359375-3.058594.535156 1.019531-.175781 2.039062-.347656 3.058594-.535156zm0 0"/><path d="m285.136719 510.339844c-2.496094.28125-5.007813.53125-7.527344.742187 2.519531-.210937 5.03125-.460937 7.527344-.742187zm0 0"/><path d="m290.054688 509.738281c-1.199219.160157-2.40625.308594-3.609376.449219 1.203126-.140625 2.410157-.289062 3.609376-.449219zm0 0"/><path d="m309.367188 506.410156c-.898438.191406-1.800782.382813-2.703126.566406.902344-.183593 1.804688-.375 2.703126-.566406zm0 0"/><path d="m326.664062 502.113281c-.726562.207031-1.453124.402344-2.179687.605469.726563-.203125 1.453125-.398438 2.179687-.605469zm0 0"/><path d="m321.433594 503.542969c-.789063.207031-1.582032.417969-2.375.617187.792968-.199218 1.585937-.40625 2.375-.617187zm0 0"/><path d="m314.589844 505.253906c-.835938.195313-1.679688.378906-2.523438.566406.84375-.1875 1.6875-.371093 2.523438-.566406zm0 0"/><path d="m277.527344 511.089844c-1.347656.113281-2.695313.214844-4.046875.304687 1.351562-.089843 2.699219-.191406 4.046875-.304687zm0 0"/><path d="m512 256c0-141.363281-114.636719-256-256-256s-256 114.636719-256 256 114.636719 256 256 256c1.503906 0 3-.03125 4.5-.058594v-199.285156h-55v-64.097656h55v-47.167969c0-54.703125 33.394531-84.476563 82.191406-84.476563 23.367188 0 43.453125 1.742188 49.308594 2.519532v57.171875h-33.648438c-26.546874 0-31.6875 12.617187-31.6875 31.128906v40.824219h63.476563l-8.273437 64.097656h-55.203126v189.453125c107.003907-30.675781 185.335938-129.257813 185.335938-246.109375zm0 0"/><path d="m272.914062 511.429688c-2.664062.171874-5.339843.308593-8.023437.398437 2.683594-.089844 5.359375-.226563 8.023437-.398437zm0 0"/><path d="m264.753906 511.835938c-1.414062.046874-2.832031.082031-4.25.105468 1.417969-.023437 2.835938-.058594 4.25-.105468zm0 0"/></svg>
					</a>
					<a href="" title="twitter" class="d-block px-3">
						<svg height="40px" viewBox="0 0 512 512" width="40px" xmlns="http://www.w3.org/2000/svg" id="twitter"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0"/></svg>
					</a>
					<a href="" title="youtube" class="d-block px-3">
						<svg height="40px" viewBox="0 0 512 512" width="40px" xmlns="http://www.w3.org/2000/svg" id="youtube"><path d="m224.113281 303.960938 83.273438-47.960938-83.273438-47.960938zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm159.960938 256.261719s0 51.917969-6.585938 76.953125c-3.691406 13.703125-14.496094 24.507812-28.199219 28.195312-25.035156 6.589844-125.175781 6.589844-125.175781 6.589844s-99.878906 0-125.175781-6.851562c-13.703125-3.6875-24.507813-14.496094-28.199219-28.199219-6.589844-24.769531-6.589844-76.949219-6.589844-76.949219s0-51.914062 6.589844-76.949219c3.6875-13.703125 14.757812-24.773437 28.199219-28.460937 25.035156-6.589844 125.175781-6.589844 125.175781-6.589844s100.140625 0 125.175781 6.851562c13.703125 3.6875 24.507813 14.496094 28.199219 28.199219 6.851562 25.035157 6.585938 77.210938 6.585938 77.210938zm0 0"/></svg>
						</a>
					<a href="" title="instagram" class="d-block px-3">
						<svg height="40px" viewBox="0 0 512 512" width="40px" xmlns="http://www.w3.org/2000/svg" id="instagram"><path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"/><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"/></svg>
					</a>
				</div>
			</div>
		</footer>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="image/arrow.svg" alt="flèche vers le bas"></button>
	<!---------------------------------------Fin-Pied-du-site------------------------------------------->	
	</body>
</html>