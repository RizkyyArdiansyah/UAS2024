 <script>
     // Fungsi untuk menutup popup warning
     function Mengerti() {
         var overlay = document.getElementById('warning');
         overlay.style.display = 'none';
     }


     // nampilin peta
     const peta = L.map('map').setView([-1.85, 117.45], 5);
     L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
         maxZoom: 18
     }).addTo(peta);

     // custom icon buat marker
     const iconfauna = L.icon({
         iconUrl: 'https://cdn3.iconfinder.com/data/icons/pet-shop-45/64/1_pin_gps_paw_pet_animal_map-512.png',
         iconSize: [35, 35],
         iconAnchor: [12, 27],
         popupAnchor: [5, -30]
     });

     const iconflora = L.icon({
         iconUrl: 'https://cdn1.iconfinder.com/data/icons/smart-farming/64/3-512.png',
         iconSize: [50, 40],
         iconAnchor: [12, 27],
         popupAnchor: [12, -30]
     });

     // Ambil data dari database yang dikirim dari controller
     var fauna = <?= json_encode($fauna) ?>;
     var flora = <?= json_encode($flora) ?>;

     // Function untuk menampilkan data ke map dari database menggunakan looping
     function tampilkanData(data, icon) {
         data.forEach(function(item) {
             var marker = L.marker([item.lat, item.lon], {
                 icon: icon
             }).addTo(peta).bindPopup(
                 '<img src="' + item.img + '" alt="" style="width:100%;height:180px;border-radius:10px;"><br>' +
                 'Hewan: <b>' + item.nama + '</b><br>' +
                 'kategori: <b>' + item.kategori + '</b>' +
                 '<p>' + item.deskripsi + '</p>'
             ); // nampilin bindpopup dari marker
         });
     }

     // Tampilkan data flora & fauna ke map pas pertamakali web di load
     tampilkanData(fauna, iconfauna);
     tampilkanData(flora, iconflora);



     // Fungsi untuk memfilter data berdasarkan kategori
     function filterData(kategori) {
         // Menghapus semua marker pada peta
         peta.eachLayer(layer => {
             if (layer instanceof L.Marker) {
                 peta.removeLayer(layer);
             }
         });

         // Menampilkan marker sesuai dengan kategori yang dipilih
         if (kategori === 'semua') {
             // Jika kategori adalah "semua", tampilkan semua data fauna dan flora
             tampilkanData(fauna, iconfauna);
             tampilkanData(flora, iconflora);
         } else if (kategori === 'fauna' || kategori === 'flora') {
             // Jika kategori adalah "fauna" atau "flora", tampilkan semua data sesuai dengan kategori
             tampilkanData(kategori === 'fauna' ? fauna : flora, kategori === 'fauna' ? iconfauna : iconflora);
         }
     }

     // Event listener untuk perubahan pada dropdown kategori
     document.getElementById('kategori').addEventListener('change', function() {
         // Mendapatkan nilai kategori yang dipilih
         const kategori = this.value;
         filterData(kategori);
     });



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
