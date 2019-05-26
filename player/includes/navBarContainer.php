<div id="navBarContainer">
	<nav class="navBar">

		<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
			<img src="assets/images/icons/logo1.png">
		</span>


		<div class="group">

			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("search.php")' class="navItemLink">
					Search
					<img src="assets/images/icons/search.png" class="icon" alt="Search">
				</span>
			</div>

		</div>

		<div class="group">
		<a >
		    <div class="navItem">
			<a href='../index.php'>
			<span role="link" tabindex="0" onclick="" class="navItemLink">Home</span></a>
				
			</div>
			</a>
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('genre.php')" class="navItemLink">Genre</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('artists.php')" class="navItemLink">Artists</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('songs.php')" class="navItemLink">Songs</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"> <?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>
		</div>

	</nav>
</div>