<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<!--HTML CODE-->
	<div class="w-full relative">
		<div class="swiper default-carousel swiper-container">
			<div class="swiper-wrapper">
				<?php if (!empty($slider) && is_array($slider)): ?>
					<?php foreach ($slider as $s): ?>
						<div class="swiper-slide">
							<div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
								<span class="text-3xl font-semibold"><img
										src="<?= base_url('assets/img/slider/' . $s['foto_slider']) ?>"
										alt="" />
								</span>
								<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
									<h2 class="text-4xl font-bold text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]"><?= ($lang == 'id') ? $s['caption_slider_id'] : $s['caption_slider_en']; ?></h2>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>

	<!-- About -->
	<span class="relative flex justify-center mt-8">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl rounded-t-2xl"><?= $lang == 'id' ? $aboutMeta['nama_halaman_id'] : $aboutMeta['nama_halaman_en']; ?></span>
	</span>

	<h3 class="p-4 bg-slate-100 text-sm text-center"><?= $lang == 'id' ? $aboutMeta['deskripsi_halaman_id'] : $aboutMeta['deskripsi_halaman_en']; ?></h3>

	<section class="bg-slate-100">
		<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
			<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
				<div>
					<div class="max-w-lg md:max-w-none">
						<h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl"><?= $profil['nama_perusahaan']; ?></h2>

						<p class="mt-4 text-gray-700">
							<?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?>
						</p>

						<a class="border border-gray-900 rounded-md px-4 py-2 mt-4 inline-block text-gray-900 transition ease-in-out hover:bg-slate-200" href="<?= base_url($lang == 'id' ? 'id/tentang' : 'en/about') ?>"><?= lang('bahasa.btn') ?></a>
					</div>
				</div>

				<div>
					<img
						src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>"
						class="rounded"
						alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>" />
				</div>
			</div>
		</div>
	</section>

	<!-- Product -->
	<span class="relative flex justify-center">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl">Product</span>
	</span>

	<h3 class="p-4 bg-slate-100 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quidem!</h3>
	<div class="flex flex-row gap-16 justify-center p-8 bg-slate-100">
		<a href="#" class="group block w-100 transition ease-in-out duration-150 hover:scale-110">
			<img
				src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				alt=""
				class="aspect-square w-full rounded-sm object-cover" />

			<div class="mt-3">
				<h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">Skull Peace</h3>

				<p class="mt-1 text-sm text-gray-700">T-shirt dengan dua jari tulang</p>
			</div>
		</a>
		<a href="detail-product" class="group block w-100 transition ease-in-out duration-150 hover:scale-110">
			<img
				src="https://images.unsplash.com/photo-1564859228273-274232fdb516?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				alt=""
				class="aspect-square w-full rounded-sm object-cover" />

			<div class="mt-3">
				<h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">Lighthouse</h3>

				<p class="mt-1 text-sm text-gray-700">T-shirt dengan gambar mercusuar</p>
			</div>
		</a>
	</div>

	<!-- Activity -->
	<span class="relative flex justify-center">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl">Activity</span>
	</span>

	<h3 class="p-4 bg-slate-100 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quidem!</h3>
	<div class="flex flex-row flex-wrap justify-center gap-8 p-8 bg-slate-100">
		<a href="detail-activity" class="block p-4 rounded-xl transition ease-in-out hover:scale-105 bg-white">
			<img
				alt=""
				src="https://images.unsplash.com/photo-1605721911519-3dfeb3be25e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
				class="h-64 w-full object-cover sm:h-80 lg:h-96" />

			<h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>

			<p class="mt-2 max-w-sm text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.</p>
		</a>

		<a href="#" class="block p-4 rounded-xl transition ease-in-out hover:scale-105 bg-white">
			<img
				alt=""
				src="https://images.unsplash.com/photo-1605721911519-3dfeb3be25e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
				class="h-64 w-full object-cover sm:h-80 lg:h-96" />

			<h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>

			<p class="mt-2 max-w-sm text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.</p>
		</a>

		<a href="#" class="block p-4 rounded-xl transition ease-in-out hover:scale-105 bg-white">
			<img
				alt=""
				src="https://images.unsplash.com/photo-1605721911519-3dfeb3be25e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
				class="h-64 w-full object-cover sm:h-80 lg:h-96" />

			<h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>

			<p class="mt-2 max-w-sm text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.</p>
		</a>

		<a href="#" class="block p-4 rounded-xl transition ease-in-out hover:scale-105 bg-white">
			<img
				alt=""
				src="https://images.unsplash.com/photo-1605721911519-3dfeb3be25e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
				class="h-64 w-full object-cover sm:h-80 lg:h-96" />

			<h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>

			<p class="mt-2 max-w-sm text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.</p>
		</a>

		<a href="#" class="block p-4 rounded-xl transition ease-in-out hover:scale-105 bg-white">
			<img
				alt=""
				src="https://images.unsplash.com/photo-1605721911519-3dfeb3be25e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
				class="h-64 w-full object-cover sm:h-80 lg:h-96" />

			<h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>

			<p class="mt-2 max-w-sm text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.</p>
		</a>
	</div>

	<!-- Article -->
	<span class="relative flex justify-center">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl">Article</span>
	</span>

	<h3 class="p-4 bg-slate-100 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quidem!</h3>
	<div class="block w-5/6 p-4 bg-slate-100 m-auto">
		<div class="flex flex-row justify-center gap-16">
			<div class="block w-fit">
				<div class="flex flex-col bg-white p-2 rounded-2xl">
					<img class="w-4xl" src="https://sablonmanual.id/wp-content/uploads/2024/11/post_sablonmanual.id_26-1024x657.webp" alt="" />
					<div class="flex flex-col gap-2 p-2">
						<h1 class="text-xl font-bold">Workflow seorang pembuat kaos</h1>
						<div class="flex flex-row gap-4">
							<p class="text-sm bg-blue-600 rounded-2xl px-2 text-white">Tutorial</p>
							<p class="text-sm text-slate-400">12 Feb 2023</p>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quibusdam.</p>
						<a class="text-blue-400 transition ease-in-out hover:text-blue-700" href="detail-article">Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="block w-xl">
				<div class="flex flex-col gap-4">
					<a href="" class="flex flex-row gap-4 bg-white bg-auto rounded-2xl transition ease-in-out hover:bg-blue-200 p-4">
						<img class="w-[128px] rounded-2xl" src="https://gratisongkir-storage.com/products/900x900/vN5nMuCePG0r.jpg" alt="" />
						<div class="flex flex-col gap-2 justify-center">
							<h1 class="font-bold text-sm">Bagaimana sih cara menggunakan mesin sablon kaos?</h1>
							<p class="text-sm text-slate-400">08 Feb 2023</p>
						</div>
					</a>
					<a href="" class="flex flex-row gap-4 bg-white bg-auto rounded-2xl transition ease-in-out hover:bg-blue-200 p-4">
						<img class="w-[128px] rounded-2xl" src="https://gratisongkir-storage.com/products/900x900/vN5nMuCePG0r.jpg" alt="" />
						<div class="flex flex-col gap-2 justify-center">
							<h1 class="font-bold text-sm">Bagaimana sih cara menggunakan mesin sablon kaos?</h1>
							<p class="text-sm text-slate-400">08 Feb 2023</p>
						</div>
					</a>
					<a href="" class="flex flex-row gap-4 bg-white bg-auto rounded-2xl transition ease-in-out hover:bg-blue-200 p-4">
						<img class="w-[128px] rounded-2xl" src="https://gratisongkir-storage.com/products/900x900/vN5nMuCePG0r.jpg" alt="" />
						<div class="flex flex-col gap-2 justify-center">
							<h1 class="font-bold text-sm">Bagaimana sih cara menggunakan mesin sablon kaos?</h1>
							<p class="text-sm text-slate-400">08 Feb 2023</p>
						</div>
					</a>
					<a href="" class="flex flex-row gap-4 bg-white bg-auto rounded-2xl transition ease-in-out hover:bg-blue-200 p-4">
						<img class="w-[128px] rounded-2xl" src="https://gratisongkir-storage.com/products/900x900/vN5nMuCePG0r.jpg" alt="" />
						<div class="flex flex-col gap-2 justify-center">
							<h1 class="font-bold text-sm">Bagaimana sih cara menggunakan mesin sablon kaos?</h1>
							<p class="text-sm text-slate-400">08 Feb 2023</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	<span class="relative flex justify-center">
		<div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl">Contact</span>
	</span>

	<h3 class="p-4 bg-slate-100 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quidem!</h3>
	<div class="justify-center flex sm:flex-row flex-col gap-x-8 bg-slate-100 p-8">
		<div class="text-white bg-teal-600 flex flex-row gap-x-4 justify-center w-1/6 p-8 rounded-xl">
			<div class="flex flex-col gap-y-8 justify-center">
				<div>
					<i class="fa-regular fa-map text-2xl inline-block align-middle"></i>
					<h3 class="text-xl inline-block align-middle ml-3">Lokasi Kami</h3>
					<p>Jl. Skibidi No 42</p>
					<p>Malang, 69420</p>
				</div>
				<div>
					<i class="fa-solid fa-phone text-2xl inline-block align-middle"></i>
					<h3 class="text-xl inline-block align-middle ml-3">Hubungi Kami</h3>
					<p>+021 111111</p>
				</div>
				<div>
					<i class="fa-regular fa-envelope text-2xl inline-block align-middle"></i>
					<h3 class="text-xl inline-block align-middle ml-3">Email</h3>
					<p>zxcv@example.com</p>
				</div>
			</div>
		</div>

		<!-- <div class="map-responsive"> -->
		<iframe
			width="500px"
			height="500px"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.760171011258!2d112.63411517596374!3d-7.92010117884868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62a1dfad5ff05%3A0xbaace283b75eeb98!2sTasikmadu%2C%20Lowokwaru%2C%20Malang%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1739594424662!5m2!1sen!2sid"
			allowfullscreen=""
			loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!-- </div> -->
	</div>

	<!--JAVASCRIPT CODE-->
	<script>
		var swiper = new Swiper(".default-carousel", {
			spaceBetween: 30,
			centeredSlides: true,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
</body>

</html>

<?= $this->endSection(); ?>