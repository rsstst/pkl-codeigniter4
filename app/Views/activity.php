<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<span class="relative flex justify-center">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl rounded-t-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
	</span>
	<h1 class="p-4 bg-slate-100 text-sm text-center"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>

	<div class="flex flex-row flex-wrap justify-center gap-8 p-8 bg-slate-100">
	<?php foreach ($allAktivitas as $p) : ?>
		<a href="<?= base_url(
                                    $lang === 'id'
                                        ? 'id/aktivitas/' . ($p['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($p['slug_aktivitas_id'] ?? 'aktivitas-tidak-ditemukan')
                                        : 'en/activity/' . ($p['slug_kategori_en'] ?? 'category-not-found') . '/' . ($p['slug_aktivitas_en'] ?? 'activity-not-found')
                                ); ?>" class="block p-4 rounded-xl transition ease-in-out hover:scale-105 bg-white">
			<img
				alt="<?= $lang == 'id' ? $p['alt_aktivitas_id'] : $p['alt_aktivitas_en']; ?>"
				src="<?= base_url('assets/img/aktivitas/' . $p["foto_aktivitas"]) ?>"
				class="h-64 w-full object-cover sm:h-80 lg:h-96" />

			<h2 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl"><?= $lang == 'id' ? $p['judul_aktivitas_id'] : $p['judul_aktivitas_en']; ?></h2>

			<p class="mt-2 max-w-sm text-gray-700"><?= $lang == 'id'  ? substr($p['deskripsi_aktivitas_id'], 0, 100) : substr($p['deskripsi_aktivitas_en'], 0, 100); ?>... </p>
		</a>
		<?php endforeach; ?>
	</div>

</body>

</html>

<?= $this->endSection(); ?>