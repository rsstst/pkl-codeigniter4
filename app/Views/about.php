<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<span class="relative flex justify-center	">
		<div
			class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl rounded-t-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
	</span>
	<h1 class="p-4 bg-slate-100 text-sm text-center"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>

	<section class="bg-slate-100">
		<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
			<div
				class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
				<div>
					<div class="max-w-lg md:max-w-none">
						<h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
						<?= $profil['nama_perusahaan']; ?>
						</h2>

						<p class="mt-4 text-gray-700">
						<?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?>
						</p>
					</div>
				</div>

				<div>
					<img
						src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>"
						class="rounded"
						alt="" />
				</div>
			</div>
		</div>
	</section>

	<?= $this->endSection(); ?>
</body>

</html>