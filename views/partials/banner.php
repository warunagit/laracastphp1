	<!--Hero-->
	<div class="pt-24">
		<div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
			<!--Left Col-->
			<div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left">
				<p class="w-full text-black uppercase tracking-loose">Page: <?= isset($page)??$page; ?></p>
				<p class="w-full text-black uppercase tracking-loose">Hello <?= $_SESSION['username'] ?? 'Guest' ?></p>
			</div>
		</div>
    </div>