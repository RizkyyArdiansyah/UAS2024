<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- CSS custom-an -->
    <link rel="stylesheet" href="<?= base_url('assets/css/peta.css') ?>">
    <title>GIS | J-Island - Satwa Langka</title>
</head>

<body>
    <!-- import warning dari warning.php -->
    <?= $this->include('templates/warning.php') ?>

    <!-- import card kategori -->
    <?= $this->include('templates/kategori.php') ?>

    <!-- bagian peta -->
    <div id="map"></div>

    <!-- Import JS dari js.php -->
    <?= $this->include('templates/js.php') ?>
</body>

</html>
