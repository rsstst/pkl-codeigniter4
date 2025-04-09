<?php
// Ambil bahasa yang disimpan di session
$lang = session()->get('lang') ?? 'id'; // Default ke 'id' jika tidak ada di session

$current_url = uri_string();

// Ambil query string (misalnya ?keyword=sukses)
$query_string = $_SERVER['QUERY_STRING'] ?? ''; // Pastikan tidak ada error jika query string kosong

// Simpan segmen bahasa saat ini
$segments = explode('/', $current_url);
$lang_segment = $segments[0] ?? ''; // Ambil segmen pertama dari URL

// Pastikan hanya 'en' atau 'id' yang dianggap sebagai segmen bahasa
if ($lang_segment !== 'en' && $lang_segment !== 'id') {
    $lang_segment = 'id'; // Default ke 'id' jika segmen bahasa tidak ada
}

// Definisikan tautan untuk setiap halaman berdasarkan bahasa
$homeLink    = ($lang_segment === 'en') ? '/' : '/';
$aboutLink   = ($lang_segment === 'en') ? 'about' : 'tentang';
$contactLink = ($lang_segment === 'en') ? 'contact' : 'kontak';
$articleLink = ($lang_segment === 'en') ? 'article' : 'artikel';
$activityLink = ($lang_segment === 'en') ? 'activity' : 'aktivitas';
$productLink = ($lang_segment === 'en') ? 'product' : 'produk';

// Ambil bagian dari URL tanpa segmen bahasa
array_shift($segments); // Hapus segmen bahasa dari array
$url_without_lang = implode('/', $segments); // Gabungkan kembali sisa URL

// Tentukan bahasa yang ingin digunakan
$new_lang = ($lang_segment === 'en') ? 'id' : 'en';

// Mapping penggantian segmen dalam URL berdasarkan bahasa yang aktif
$replace_map = [
    'tentang' => 'about',
    'kontak' => 'contact',
    'artikel' => 'article',
    'aktivitas' => 'activity',
    'produk' => 'product',
];

foreach ($replace_map as $id => $en) {
    if ($lang_segment === 'en') {
        // Jika bahasa saat ini 'en', ubah ke 'id'
        $url_without_lang = str_replace($en, $id, $url_without_lang);
    } else {
        // Jika bahasa saat ini 'id', ubah ke 'en'
        $url_without_lang = str_replace($id, $en, $url_without_lang);
    }
}

// Buat URL yang bersih
$clean_url = ($url_without_lang !== '') ? "$new_lang/$url_without_lang" : $new_lang;

// Gabungkan query string jika ada
if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
}

// Tautan Bahasa Inggris & Indonesia
$english_url = base_url($clean_url);
$indonesia_url = base_url($clean_url);

// Tautan Kategori Artikel untuk Navbar
$categoryLinks = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $categoryLinks[] = [
            'url' => base_url("$lang/$articleLink/$slug"),
            'name' => $name
        ];
    }
}

// Tautan Kategori Aktivitas untuk Navbar
$kategoriAktivitasLinks = [];
if (!empty($categoriesAktivitas)) {
    foreach ($categoriesAktivitas as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $kategoriAktivitasLinks[] = [
            'url' => base_url("$lang/$activityLink/$slug"),
            'name' => $name
        ];
    }
}
?>

<header class="shadow-md bg-white font-[sans-serif] tracking-wide relative z-50">
    <div class="flex flex-wrap justify-center px-10 py-3 relative">
        <div id="collapseMenu" class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50">
            <button id="toggleClose" class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class="lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[280px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                    <a href="<?= base_url($lang . '/') ?>" class="hover:text-teal-600 text-gray-800 text-[15px] block"><?= lang('bahasa.home') ?></a>
                </li>

                <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                    <a href="<?= base_url($lang . '/' . $aboutLink) ?>" class="hover:text-teal-600 text-gray-800 text-[15px] block"><?= lang('bahasa.about') ?></a>
                </li>

                <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                    <a href="<?= base_url($lang . '/' . $productLink) ?>" class="hover:text-teal-600 text-gray-800 text-[15px] block"><?= lang('bahasa.product') ?></a>
                </li>

                <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                    <a href="#" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"><?= lang('bahasa.activity') ?><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                        <?php if (!empty($kategoriAktivitasLinks)): ?>
                            <?php foreach ($kategoriAktivitasLinks as $categoriAktivitasLink): ?>
                                <li>
                                    <a href="javascript:void(0)" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"> <?= $categoriAktivitasLink['name']; ?> </a>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><a class="dropdown-item"><?= $lang == 'id' ? 'Tidak ada kategori' : 'No Categories available'; ?></a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                    <a href="#" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"><?= lang('bahasa.article') ?><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                        <?php if (!empty($categoryLinks)): ?>
                            <?php foreach ($categoryLinks as $categoryLink): ?>
                                <li>
                                    <a href="javascript:void(0)" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"> <?= $categoryLink['name']; ?> </a>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><a class="dropdown-item"><?= $lang == 'id' ? 'Tidak ada kategori' : 'No Categories available'; ?></a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                    <a href="<?= base_url('/' . $lang . '/' . $contactLink); ?>" class="hover:text-teal-600 text-gray-800 text-[15px] block"><?= lang('bahasa.contact') ?></a>
                </li>

                <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                    <a href="javascript:void(0)" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"><?= lang('bahasa.language') ?><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                        <li>
                            <a href="<?= $indonesia_url; ?>" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"> <?= lang('bahasa.indonesia') ?> </a>
                        </li>
                        <li>
                            <a href="<?= $english_url; ?>" class="hover:text-teal-600 hover:fill-teal-600 text-gray-800 text-[15px] flex items-center"> <?= lang('bahasa.english') ?> </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div id="toggleOpen" class="flex ml-auto lg:hidden">
            <button>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</header>