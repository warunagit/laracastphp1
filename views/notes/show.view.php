<?php
require "views/partials/header.php";
require "views/partials/nav.php";
require "views/partials/banner.php"; ?>

    <div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left  text-black">
				<p><?= htmlspecialchars($note['body']);?></p>
			</div>
		</div>
    </div>

<?php require "views/partials/footer.php"; ?>