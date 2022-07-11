<?php   

?>
<!DOCTYpE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href=" /restaurant-css-framework/style.css">
	<title>Exercise-Bootstrap</title>
</head>

<body>
	<div class="container-fluid">
		<!----------------------------------------------------------nav bar start------------------>
		<nav class="navbar navbar-expand-lg  navbar-light bg-light justify-content-end">
			<div class="container-fluid shadow-lg fixed-top bg-light">
				<a class="navbar-brand " href="#home-page">
					<h1 class="text-warning bg-light lh-lg font-monospace ">Habesha</h1>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav  w-100 justify-content-end m-2">
						<li class="nav-item">
							<a class="nav-link active  font-monospace" aria-current="page" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  font-monospace" aria-current="page" href="#menu">Menu</a>
						</li>
						<li class="nav-item  font-monospace">
							<a class="nav-link " aria-current="page" href="#gallery">Gallery</a>
						</li>
						<li class="nav-item  font-monospace">
							<a class="nav-link " aria-current="page" href="#guest-book">Guest-Book</a>
						</li>
						<li class="nav-item  font-monospace">
							<a class="nav-link " aria-current="page" href="#contact">Contact</a>
						</li>
					</ul>
		</nav>
		<!------------------------------------------------navbar end -------------------------->
		<!--------------------------------------------home page start---------------------------->
		<div id="home-page">
			<div class="justify-content-center m-auto mt-5 p-lg-5 p-sm-3 bg-warning">
				<h1 class="text-center text-white lh-lg font-monospace">Welcome To Habesha Restaurant</h1>
				<p class="text-center text-dark font-monospace">Tasty and rich cuisine.</p>
			</div>
		</div>
	</div>


	<!-----------------------------------------------home-page end-------------------->
	<!------------------------------------------------about-page start----------------->

	<div id="about">
		<div class="container m-auto">
			<div class="row mt-3">
				<div class="col-lg-6 col-md-6 col-sm-6 text-center ">
					<div class="inner-column justify-content-center">
						<h2 class="navbar-text text-warning font-monospace mt-2">Little About us & our Food</h2>
						<p class="text-start lh-lg font-monospace mt-2">
							first about the name HABESHA, the Habesha are people from the Northern part of Ethiopia, specifically the
							Tigre, the Agew, Beta Israel, and the Amhara. The Habesha, also known as Abyssinians, is the name given to
							three distinct ethnic groups and some
							minor ones inhabiting the Horn of Africa. Habesha Food consists of vegetable and often very spicy meat
							dishes, usually in the form of wat (also w’et or wot), a thick stew, served atop injera, a large sourdough
							bread, made
							out of fermented Teff flour.
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<img src="../asset/img 5.png" alt="Ethiopian food " class="img-thumbnail " />
				</div>

			</div>
		</div>

		<!----------------------------------------------about-page end--------------------->

		<!-- ------------------------------------Start Menu------------------------------->

		<div class="container w-75" id="menu">
			<div class="row mt-5">
				<div class="col-lg-12  ">
					<div class="heading-title text-center m-auto">
						<h2 class="text-center m-auto lh-lg font-monospace">Menu</h2>
					</div>
				</div>
			</div>

			<div class="row m-auto ">
				<h4 class=" text-warning font-monospace">Doro Wot<span class=" text-dark float-end">
						<h4> Euro 20.00</h4>
					</span></h4>
				<p class="font-monospace">Stewed marinated chicken pieces on the bone cooked in mild Ethiopian spiced clarified
					butter with a tomato, onion & garlic base sauce, served with a boiled free-range egg.</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace">Siga Wot <span>
						<h4 class="float-end text-dark"> Euro 25.00</h4>
					</span></h4>
				<p class="font-monospace ">Diced lean marinated beef gently simmered until tender in mild Ethiopian spices &
					slowly cooked in a tomato & garlic-based sauce until tender. Yesega Tibs – Sautéed Beef </p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace">Ye beg Alecha<span>
						<h4 class="float-end text-dark"> Euro 25.00</h4>
					</span></h4>
				<p class="font-monospace ">Braised Lamb Braised marinated lamb on the bone simmered with turmeric, garlic,
					onion, fresh green chillies, ginger, carrots & potatoes.</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace">Minchet Abish<span>
						<h4 class="float-end  text-dark">Euro 26.00</h4>
				</h4>
				<p class="font-monospace "> Spiced Minced Beef,Braised minced beef in mild Ethiopian spice mix in tomato with
					fresh green beans, onion, garlic and soft Ethiopian cheese. Gomen Besiga – Beef & Kale</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace ">Gomen Besega<span>
						<h4 class="float-end  text-dark"> Euro 26.00</h4>
					</span></h4>
				<p class="font-monospace">Beef & Kale Slow cooked Marinated beef in mild Ethiopian spices with kale, garlic,
					mild green chillies and onion. .
				</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace ">Ye Beg Alicha<span>
						<h4 class="float-end text-dark"> Euro 20.00</h4>
					</span></h4>
				<p class="font-monospace  ">Braised Lamb Braised marinated lamb on the bone simmered with turmeric, garlic,
					onion, fresh green chillies, ginger, carrots & potatoes.</p>
				<hr class="my-4 bg-warning ">

				<h4 class=" text-warning font-monospace ">Asa Gulash<span>
						<h4 class="float-end text-dark"> Euro 27.00</h4>
					</span></h4>
				<p class="font-monospace">Braised Fish (GF) Braised marinated Nile Perch gently simmered in a blend of roasted
					turmeric, garlic,
				</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning  font-monospace ">Fiyel Wot<span>
						<h4 class="float-end  text-dark"> Euro 22.00</h4>
					</span></h4>
				<p class="font-monospace">Braised Goat,Braised local goat on the bone in mild Ethiopian spice mix, roasted
					turmeric, garlic, ginger wand fresh green beans. .
				</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace">Miser Wot<span>
						<h4 class="float-end text-dark"> Euro 22.00</h4>
					</span>
				</h4>
				<p class="font-monospace">Red Lentils Braised split red lentils cooked in a tomato, onion, ginger &garlic sauce
					finished in a mild Ethiopian spiced clarified butter.
				</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning font-monospace">Kik Alicha<span>
						<h4 class="float-end text-dark"> Euro 24.00</h4>
					</span>
				</h4>
				<p class="font-monospace">Yellow Split Peas Braised yellow split peas cooked in an onion, roasted turmeric,
					fresh green chilli, ginger & ginger sauce finished with mild Ethiopian spice clarified butter.</p>
				<hr class="my-4 bg-warning">

				<h4 class=" text-warning  font-monospace">Tikel Gomen
					<span>
						<h4 class="float-end  font-monospace text-dark"> Euro 18.00</h4>
					</span>
				</h4>
				<p class=" font-monospace"> Cabbage, Carrot & Potato Braised cabbage, carrot & potato mildly spiced with roasted
					turmeric, garlic & mild green chillies.</p>
				<hr class="my-4 bg-warning ">

				<h4 class=" text-warning font-monospace">Enguday Tibs<span>
						<h4 class="float-end text-dark"> Euro 18.00</h4>
					</span>
				</h4>
				<p class="font-monospace">Sautéed Mushroom Sautéed Swiss Brown mushrooms with mild Ethiopian spices, onion,
					rosemary, fresh tomato, garlic, capsicum and fresh green chillies.</p>
				<hr class="my-4 bg-warning">
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<!------------------------------------ End Menu-------------------------------------------------------------- -->


	<!------------------------------------------Gallery Start--------------------------------->

	<div class="container" id="gallery">
		<div class="row">
			<div class="heading-title text-center m-auto">
				<h2 class="text-center lh-lg font-monospace ">Gallery</h2>
			</div>
			<div class="col-lg-12 text-center">
				<a class="btn btn-warning text-white mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
					data-slide="prev">
					<i class="fa fa-arrow-left"></i>
				</a>
				<a class="btn btn-warning text-white mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
					<i class="fa fa-arrow-right"></i>
				</a>
			</div>
			<div class="col-12">
				<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">

								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery 1.png">

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery 2.png">

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery 3.png">
									</div>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row">

								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery 4.png">

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery 6.png">

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery 7.png">

									</div>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row">

								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/gallery png 5.png">

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/img 1.png">

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="Ethiopian food img" src="../asset/img 2.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------------------------------------------------------------------------------------->
	<div id="guest-book">
		<div class="container-fluid">
			<div class="row">
				<div class=" col-12 ">
					<div class=" text-center m-auto ">
						<h2 class=" text-center lh-lg font-monospace ">Guest Book</h2>
					</div>
				</div>
			</div>
		</div>
		<div class=" col-lg-6 col-sm-1 mt-lg-3 mt-sm-1 p-2 m-auto border border-2 w-50 mb-lg-4">
			<form action="add.php" method="post" id="gb-form">
				<!-- Name input -->
				<div class=" mb-3 ">
					<label class=" form-label text-warning " for="name ">Name</label>
					<input class="form-control" type="text" name="name" required />
				</div>

				<!-- Email address input -->
				<div class="mb-3 ">
					<label class=" form-label text-warning " for="email">Email</label>
					<input class=" form-control " type="text" name="email" required />
				</div>

				<!-- Message input -->
				<div class=" mb-3 ">
					<label class=" form-label text-warning " for="comment">Comment</label>
					<textarea type="text" class=" form-control " rows=" 4" cols="50" name="comment" required style="
			height: 10rem; "></textarea>
					<div class=" d-grid ">
						<input class=" btn btn-warning btn-lg mt-5 text-white " type="submit" name="Submit" value="Add" />
					</div>
				</div>
				<!-- Form submissions success message -->
				<div class=" d-none " id=" submitSuccessMessage ">
					<div class=" text-center mb-3 ">Form submission successful!</div>
				</div>

			</form>
		</div>


		<!----------------------------------------------footer start---------------------->
		<div id="contact">
			<div class="container-fluid">
				<div class="row">
					<div class=" col-12 ">
						<div class=" text-center m-auto ">
							<h2 class=" text-center lh-lg font-monospace ">Contact Us</h2>
						</div>
					</div>
				</div>
			</div>

			<div class=" container-fluid m-auto mt-4 border border-2 w-75 mb-lg-5 " id=" contact ">
				<div class=" row mt-lg-4 mt-sm-1 m-auto w-100 ">
					<div class=" col-lg-6 col-sm-1 text-center justify-content-lg-center m-auto ">

						<iframe class=" w-100 m-2 border " src="
			https://www.google.com/maps/d/u/0/embed?mid=1RrONmRNnY-d6nVbotyCdIoebOYMRGdYr&ehbc=2E312F "></iframe>
						<i class=" fa fa-map-marker text-black-50 "><span>
								<p class=" lh-base font-monospace d-inline
			text-warning ">Address</p>
							</span></i>
						<p class=" lh-base font-monospace text-dark ">Rue de resto 2 1348 LLN-Belgium</p>
						<p class=" lh-base font-monospace text-dark ">Rue be centeral 2 Brussels-Belgium</p>
						<i class=" fa fa-phone text-black-50 "><span>
								<p class=" lh-base font-monospace d-inline text-warning ">Phone</p>
							</span></i></i>
						<p class=" lead lh-base font-monospace text-dark "> +32 00 00 00</p>
						<h4 class=" text-warning lh-base font-monospace text-warning ">Opening hours</h4>
						<p class=" lh-base font-monospace text-dark ">Tue-Wed 9:00Am - 10:00 PM</p>
						<p class=" lh-base font-monospace text-dark ">Thu-Fri 9:00Am - 10:00 PM</p>
						<p class=" lh-base font-monospace text-dark ">Sat-Sun 5:00pM - 10:00 PM</p>
					</div>

					<div class=" col-lg-6 col-sm-1 mt-lg-3 mt-sm-1 p-2 m-auto">
						<form action="create.php" method="post" id="contactForm">

							<!-- Name input -->
							<div class="mb-3 ">
								<label class=" form-label text-warning " for="name">Name</label>
								<input class=" form-control" id="name" name="name" type="text" placeholder="Name" />

							</div>

							<!-- Email address input -->
							<div class=" mb-3 ">
								<label class=" form-label text-warning " for=" emailAddress ">Email Address</label>
								<input class=" form-control " id=" emailAddress " type="text" name="email" placeholder=" Email" />

							</div>

							<!-- Message input -->
							<div class=" mb-3 ">
								<label class=" form-label text-warning" for="message">Message</label>
								<textarea class=" form-control " id="message" type="text" name="message" placeholder="Message "
									style="height: 10rem; " data-sb-validations=" required "></textarea>

							</div>




							<!-- Form submit button -->
							<div class=" d-grid ">
								<button class=" btn btn-warning btn-lg mt-5 text-white " type="submit " name="Submit"
									value="Add">Submit</button>
							</div>
							<!-- <input class=" btn btn-warning btn-lg mt-5 text-white " type="submit" name="Submit" value="Add" /> -->
					</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!---------------------------------------footer starts--------------------------------->
	<footer class=" card-footer ">

		<div class=" container-fluid ">
			<div class=" row ">
				<div class=" col-lg-12 text-center ">
					<small>
						<p>All Rights Reserved. &copy; 2022 <span class=" text-warning ">Habesha Restaurant</span> Powered By :
							<a class=" text-warning text-decoration-none " href=" https://github.com/seninet ">Senait</a>
						<ul class=" list-inline ">
							<li class=" list-inline-item "><a href="
			https://www.linkedin.com/in/senait-b-86944277/ "><i class=" fa fa-linkedin text-dark " aria-hidden=" true "></i></a>
							</li>
							<li class=" list-inline-item "><a href=" https://github.com/seninet "><i class=" fa
			fa-github text-dark " aria-hidden=" true "></i></a></li>
							<li class=" list-inline-item "><a href=" https://www.instagram.com/yenejojo/ "><i class="
			fa fa-instagram text-dark " aria-hidden=" true "></i></a></li>
							<li class=" list-inline-item "><a href="
			https://www.youtube.com/channel/UCzXfvDKpOJs6QexOd_uXP9Q "><i class=" fa fa-youtube text-dark "
										aria-hidden=" true "></i></a></li>
						</ul>
					</small>
				</div>
			</div>
		</div>
	</footer>
	<!-----------------------------------------------------footer end------------------------->
	</div>
	<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="
			sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsp1UyJoMp4YLEuNSfAp+JcXn/tWtIaxVXM " crossorigin=" anonymous "></script>
	<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>

	<script type=" text/javascript " src=" https://code.jquery.com/jquery-3.3.1.slim.min.js "></script>
	<script type=" text/javascript " src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js ">
	</script>
	<script type=" text/javascript " src=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js ">
	</script>
</body>

</html>