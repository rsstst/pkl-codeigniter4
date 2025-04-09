<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<span class="relative flex justify-center mt-4">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl rounded-t-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
	</span>
	<h2 class="p-4 bg-slate-100 text-sm text-center mb-4"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h2>
	<div class="block w-fit p-4 bg-slate-100 m-auto">
		<div class="flex flex-row justify-center gap-16">
			<div class="block w-fit">
				<div class="flex flex-col bg-white p-2 rounded-2xl w-196">
					<img class="h-196" src="<?= base_url('assets/img/aktivitas/' . $aktivitas['foto_aktivitas']); ?>" alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>" />
					<div class="flex flex-col gap-2 p-2">
						<h1 class="text-xl font-bold"><?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?></h1>
						<div class="flex flex-row gap-4">
							<p class="text-sm bg-blue-600 rounded-2xl px-2 text-white"><?= $lang == 'id' ? $aktivitas['nama_kategori_id'] : $aktivitas['nama_kategori_en']; ?></p>
							<p class="text-sm text-slate-400"><?= date('d F Y', strtotime($aktivitas['created_at'])); ?></p>
						</div>
						<p><?= $lang == 'id' ? $aktivitas['deskripsi_aktivitas_id'] : $aktivitas['deskripsi_aktivitas_en']; ?></p>
					</div>
				</div>
			</div>
			<div class="block w-sm">
				<div class="flex flex-col gap-4">
				<?php foreach ($allAktivitas as $a): ?>
					<a href="<?= base_url($lang == 'id'
									? 'id/artikel/' . $a['slug_kategori_id'] . '/' . $a['slug_aktivitas_id']
									: 'en/article/' . $a['slug_kategori_en'] . '/' . $a['slug_aktivitas_en']); ?>" class="flex flex-row gap-4 bg-white bg-auto rounded-2xl transition ease-in-out hover:bg-blue-200 p-4">
						<img class="h-[128px] rounded-2xl" src="<?= base_url('assets/img/aktivitas/' . $a['foto_aktivitas']); ?>" alt=<?= $lang == 'id' ? $a['alt_aktivitas_id'] : $a['alt_aktivitas_en']; ?>" />
						<div class="flex flex-col gap-2 justify-center">
							<h1 class="font-bold text-sm"><?= $lang == 'id' ? $a['judul_aktivitas_id'] : $a['judul_aktivitas_en']; ?></h1>
							<p class="text-sm text-slate-400"><?= date('d F Y', strtotime($a['created_at'])); ?></p>
						</div>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

</body>

</html>

<?= $this->endSection(); ?>