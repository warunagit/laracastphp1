<?php
require "views/partials/header.php";
require "views/partials/nav.php";
require "views/partials/banner.php"; ?>

<div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start">
                <form method="POST">
                    <label for="body" class="text-black">Description</label>
                    <div>
                        <textarea id="body" name="body" class="border border-blue-gray-200 text-black" required placeholder="Write youre note here."><?= isset($_POST['body']) ??  '' ?></textarea>

                        <?php 
                        if(isset($errors['body'])): ?>
                                <p class="text-red-500"><?= $errors['body']?></p>
                        <?php endif; ?>

                    </div>
                    <p>
                        <button type="submit" class="text-black text-white bg-green-700 hover:bg-green-800">Create</button>
                    </p>
                </form>
			</div>
		</div>
    </div>

<?php require "views/partials/footer.php"; ?>