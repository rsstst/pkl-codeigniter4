<!DOCTYPE html>
<html lang="<?= session()->get('lang') ?? 'id'; ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php if (isset($metaCategory)): ?>
        <title><?= $lang == 'id' ? $metaCategory['title_id'] : $metaCategory['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $metaCategory['meta_desc_id'] : $metaCategory['meta_desc_en']; ?>">
    <?php else: ?>
        <title><?= $lang == 'id' ? $meta['title_id'] : $meta['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $meta['meta_desc_id'] : $meta['meta_desc_en']; ?>">
    <?php endif; ?>

    <link rel="canonical" href="<?= isset($canonical) && !empty($canonical) ? $canonical : base_url() ?>">

    <!-- Favicons -->
    <link href=" <?= base_url('favicon.ico'); ?>" rel="icon">

    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/main.css') ?>" />

	<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@376&display=swap" rel="stylesheet">

</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <main>

        <?= $this->renderSection('content'); ?>

    </main>

    <?= $this->include('layout/footer'); ?>

</body>

</html>