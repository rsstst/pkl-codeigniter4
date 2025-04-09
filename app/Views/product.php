<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

	<body>

		<span class="relative flex justify-center">
			<div
				class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
			<span class="relative z-10 bg-slate-100 px-6 text-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
		</span>
		<h1 class="p-4 bg-slate-100 text-sm text-center"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>

		<div class="flex flex-row gap-16 justify-center p-8 bg-slate-100">
		<?php foreach ($product as $p) : ?>
			<a href="<?= base_url($lang == 'id'
                                    ? 'id/produk/'  . $p['slug_id']
                                    : 'en/product/' . $p['slug_en']); ?>" class="group block w-100 transition ease-in-out duration-150 hover:scale-110">
				<img
					src="<?= base_url('assets/img/produk/' . $p["foto_produk"]) ?>"
					alt="<?= $lang == 'id' ? $p['alt_produk_id'] : $p['alt_produk_en']; ?>"
					class="aspect-square w-full rounded-sm object-cover" />

				<div class="mt-3">
					<h1 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"><?= $lang == 'id' ? $p['nama_produk_id'] : $p['nama_produk_en']; ?></h1>

					<p class="mt-1 text-sm text-gray-700"><?= $lang == 'id' ? substr($p['deskripsi_produk_id'], 0, 250) : substr($p['deskripsi_produk_en'], 0, 250); ?>...</p>
				</div>
			</a>
			<?php endforeach; ?>
		</div>

	</body>
</html>

<?= $this->endSection(); ?>