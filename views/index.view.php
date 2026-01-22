<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>

<main>
    <div class="mx-auto max-w-7zl py-6 sm:px-6 lg:px-8">
        <p class="w-full text-black uppercase tracking-loose"> <?= $_SESSION['username'] ?? 'Guest' ?></p>
        <p class="text-black">Hello. Welcome to home page.</p>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>