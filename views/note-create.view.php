<?php
require "partials/header.php";
require "partials/nav.php";
require "partials/banner.php"; ?>

<div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start">
                <form method="POST">
                    <label for="body" class="text-black">Description</label>
                    <div>
                        <textarea id="body" name="body" class="border border-blue-gray-200 text-black"></textarea>

                        <?php if (isset($errors['body'])): ?>
                                <p><?= $errors['body']?></p>
                        <?php endif; ?>
                    </div>
                    <p>
                        <button type="submit" class="text-black text-white bg-green-700 hover:bg-green-800">Create</button>
                    </p>
                </form>
			</div>
		</div>
    </div>

<?php require "partials/footer.php"; ?>