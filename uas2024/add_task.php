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
    <!-- bagian warning yang dibuat jadi popup make js dibawah -->
    <div id="warning">
        <div id="popup">
            <h3>! PERINGATAN !</h3>
            <p>Website ini ditujukan untuk memberikan informasi mengenai jumlah populasi satwa langka yang ada di Indonesia. Sebagai pengunjung, mungkin Anda bertanya tentang tanggung jawab dan kewajiban kami terkait dengan informasi yang disediakan website ini. Kami dengan tegas menyatakan bahwa tidak bertanggung jawab atas tindakan yang dilakukan oleh oknum yang menggunakan informasi dari website ini untuk tujuan ilegal.</p>
            <p>Perlu dicatat bahwa melindungi satwa langka adalah tanggung jawab bersama. Kami mengajak semua pengunjung untuk menjadi bagian dari upaya pelestarian dan perlindungan satwa langka dengan cara yang legal dan etis. Edukasi, konservasi habitat, dan dukungan terhadap upaya pelestarian merupakan langkah-langkah yang lebih baik dalam mendukung keberlangsungan satwa langka daripada melakukan praktik ilegal.</p>
            <p>Dengan berpedoman pada <b>Pasal 21 ayat 2 Undang-Undang nomor 5 tahun 1990</b>. Kami secara tegas menolak serta mengutuk segala bentuk tindakan ilegal terhadap satwa langka.</p>
            <p>Kami senang bisa menjadi sumber informasi yang berguna bagi Anda yang peduli terhadap satwa langka. Terima kasih atas kunjungan Anda.</p>
            <button onclick="Mengerti()">Mengerti</button>
        </div>
    </div>

    <!-- bagian peta -->
    <div id="map"></div>

    <!-- JS leaflet -->
    <script>
        // nampilin peta
        const peta = L.map('map').setView([-1.35, 119.45], 5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18
        }).addTo(peta);
        
        // ambil data dari database yang dikirim dari controller
        var data = <?= json_encode($satwa) ?>

        // nampilin semua data ke map dari database make looping
        data.forEach(function(satwa) {
            var marker = L.marker([satwa.lat, satwa.lon], {
                icon: icon
            }).addTo(peta).bindPopup(
                '<img src="' + satwa.img + '" alt="" style="width:100%;height:200px;border-radius:10px;"><br>' +
                'Hewan: <b>' + satwa.nama + '</b><br>' +
                'Populasi: <b>' + satwa.populasi + '</b>' +
                '<p>' + satwa.deskripsi + '</p>'
            ); // nampilin bindpopup dari marker
        });

        // Fungsi untuk menutup popup warning
        function Mengerti() {
            var overlay = document.getElementById('warning');
            overlay.style.display = 'none';
        }


        // ! ABAIKAN SAJA KODE DIBAWAH !

        // Gw komentarin code dibawah soalnya cuman buat dapetin coordinate
        // 
        // var popup = L.popup();
        // function getcoord(e) {
        //     popup
        //         .setLatLng(e.latlng)
        //         .setContent(`<b>Coordinate</b><br><hr> <b>Lat</b>: ${e.latlng.lat}<br><b>Lon</b>: ${e.latlng.lng}`)
        //         .openOn(peta);
        // }

        // peta.on('click', getcoord);
    </script>
</body>

</html>
