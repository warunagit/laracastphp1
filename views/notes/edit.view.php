<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php"); ?>

<div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start">
                <form method="POST" action="/note">
                    
                    <input type="hidden" name="_method" value="PATCH"/>;
                    <input type="hidden" name="id" value="<?= $note['id'];?>"/>;

                    <label for="body" class="text-black">Description</label>
                    <div>
                        <textarea id="body" name="body" class="border border-blue-gray-200 text-black" required placeholder="Write youre note here."><?= $note['body']; ?></textarea>

                        <?php 
                        if(isset($errors['body'])): ?>
                                <p class="text-red-500"><?= $errors['body']?></p>
                        <?php endif; ?>

                    </div>
                    <p>
                        <a href="/notes" class="text-black text-white bg-red-700">Cancel</button>

                        <button type="submit" class="text-black text-white bg-blue-700 hover:bg-blue-800">Update</button>
                    </p>
                </form>
			</div>
		</div>
    </div>

<?php require base_path("views/partials/footer.php"); ?>