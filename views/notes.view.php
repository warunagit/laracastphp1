<?php
require "partials/header.php";
require "partials/nav.php";
require "partials/banner.php"; ?>

    <div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left  text-black">
				<?php foreach ($notes as $note): ?>
                    <li>
                        <a href="/note?id=<?= $note['id']?>" class="hover:blue underline">
                            <?= $note['body']?>
                        </a>
                    </li>
                <?php endforeach; ?>
			</div>
		</div>
    </div>

<?php require "partials/footer.php"; ?>