
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
	
	<body>
	
		<span class="relative flex justify-center mt-4">
			<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
			<span class="relative z-10 bg-slate-100 px-6 text-2xl rounded-t-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
		</span>
		<h2 class="p-4 bg-slate-100 text-sm text-center mb-4"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h2>
		<div class="block w-full p-8">
			<div class="bg-slate-100 w-fit m-auto rounded-xl p-8 flex flex-col gap-4">
                <h1 class="text-lg font-bold text-gray-900 sm:text-xl text-center"> <?= $lang == 'id' ? $product['nama_produk_id'] : $product['nama_produk_en']; ?></h1>
				<div class="flex flex-row flex-wrap gap-8 justify-center">
					<img
						alt="<?= $lang == 'id' ? $product['alt_produk_id'] : $product['alt_produk_en']; ?>"
						src="<?= base_url('assets/img/produk/' . $product["foto_produk"]) ?>"
						class="h-128" />
					<p class="mt-2 max-w-sm text-gray-700"> <?= $lang == 'id' ? $product['deskripsi_produk_id'] : $product['deskripsi_produk_en']; ?></p>
				</div>
			</div>
		</div>

	</body>
</html>

<?= $this->endSection(); ?>
