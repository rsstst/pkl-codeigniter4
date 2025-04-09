<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

	<span class="relative flex justify-center">
		<div
			class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
		<span class="relative z-10 bg-slate-100 px-6 text-2xl"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
	</span>
	<h3 class="p-4 bg-slate-100 text-sm text-center"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h3>
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

	<?= $this->endSection(); ?>

</body>

</html>