<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<span class="relative flex justify-center">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
	</span>
	<h1 class="p-4 bg-slate-100 text-sm text-center"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>

	<div class="block p-4 w-fit m-auto bg-slate-100">
		<div class="flex flex-row gap-4">
			<div class="flex flex-col gap-16">
			<?php foreach ($allArticle as $article): ?>
				<div class="block w-fit m-auto">
					<div class="flex flex-col bg-white p-2 rounded-2xl">
						<img class="w-2xl" src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>" />
						<div class="flex flex-col gap-2 p-2">
							<h2 class="text-xl font-bold"><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></h2>
							<div class="flex flex-row gap-4">
								<p class="text-sm bg-blue-600 rounded-2xl px-2 text-white"><?= $lang == 'id' ? $article['nama_kategori'] : $article['nama_kategori']; ?></p>
								<p class="text-sm text-slate-400"><?= date('d F Y', strtotime($article['created_at'])); ?></p>
							</div>
							<p><?= $lang == 'id' ? $article['snippet_id'] : $article['snippet_en']; ?></p>
							<a class="text-blue-400 transition ease-in-out hover:text-blue-700" href="<?= base_url(
                                        $lang === 'id'
                                            ? 'id/artikel/' . ($article['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                            : 'en/article/' . ($article['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article['slug_artikel_en'] ?? 'article-not-found')
                                    ); ?>">Selengkapnya</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="block w-xl">
				<div class="flex flex-col gap-4">
				<?php foreach ($sideArticle as $article): ?>
					<a href="<?= base_url($lang == 'id'
                                            ? 'id/artikel/' . $article['slug_kategori_id'] . '/' . $article['slug_artikel_id']
                                            : 'en/article/' . $article['slug_kategori_en'] . '/' . $article['slug_artikel_en']); ?>" class="flex flex-row gap-4 bg-white bg-auto rounded-2xl transition ease-in-out hover:bg-blue-200 p-4">
						<img class="w-[128px] rounded-2xl" src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>" />
						<div class="flex flex-col gap-2 justify-center">
							<h2 class="font-bold text-sm"><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></h2>
							<p class="text-sm text-slate-400"><?= date('d F Y', strtotime($article['created_at'])); ?></p>
						</div>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

	<ol class="flex justify-center gap-1 text-xs font-medium mt-4">
		<li>
			<a href="#" class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
				<span class="sr-only">Prev Page</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
				</svg>
			</a>
		</li>

		<li class="block size-8 rounded-sm border-blue-600 bg-blue-600 text-center leading-8 text-white">1</li>

		<li>
			<a href="#" class="block size-8 rounded-sm border border-gray-100 bg-white text-center leading-8 text-gray-900"> 2 </a>
		</li>

		<li>
			<a href="#" class="block size-8 rounded-sm border border-gray-100 bg-white text-center leading-8 text-gray-900"> 3 </a>
		</li>

		<li>
			<a href="#" class="block size-8 rounded-sm border border-gray-100 bg-white text-center leading-8 text-gray-900"> 4 </a>
		</li>

		<li>
			<a href="#" class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
				<span class="sr-only">Next Page</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
				</svg>
			</a>
		</li>
	</ol>
	</div>

	<?= $this->endSection(); ?>


</body>

</html>