<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<span class="relative flex justify-center	">
		<div
			class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl rounded-t-2xl">About</span>
	</span>
	<h1 class="p-4 bg-slate-100 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quidem!</h1>

	<section class="bg-slate-100">
		<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
			<div
				class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
				<div>
					<div class="max-w-lg md:max-w-none">
						<h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
							Skibidi Inc.
						</h2>

						<p class="mt-4 text-gray-700">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
							doloremque saepe architecto maiores repudiandae amet perferendis
							repellendus, reprehenderit voluptas sequi.
						</p>
					</div>
				</div>

				<div>
					<img
						src="https://images.unsplash.com/photo-1517502884422-41eaead166d4?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
						class="rounded"
						alt="" />
				</div>
			</div>
		</div>
	</section>

	<?= $this->endSection(); ?>
</body>

</html>