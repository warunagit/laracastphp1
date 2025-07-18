<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php"); ?>

    <div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left  text-black">
				<p><?= htmlspecialchars($note['body']);?></p>

				<form class="mt-6" method="POST">
					<input type="hidden" name="_method" value="DESTROY"/>
					<input name="id" type="hidden" value="<?= $note['id']?>" type="text"/>
					<button class="text-sm text-red-400 pt-8">Delete</button>
				</form>
			</div>
		</div>
    </div>

<?php require base_path("views/partials/footer.php"); ?>