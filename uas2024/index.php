<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- CSS custom -->
    <link rel="stylesheet" href="{{url_for('static', filename='css.css')}}">

    <title>SIG Great Pondok | Hot-Spot Searcher</title>
</head>

<body>
    <!-- Peta -->
    <div id="peta"></div>

    <!-- Form login muncul kalo diklik run as admin -->
    <div id="login" style="display: none;">
        <span style="font-size: 14px; font-weight: 600; color: rgba(26, 217, 217, 0.85);">Run as Admin</span>
        <form id="admin" action="/login" method="post">
            <input type="text" id="username" name="nama" placeholder="name">
            <input type="password" id="password" name="pw" placeholder="passwd">
            <input type="submit" value="Login">
        </form>
    </div>

    <!-- login admin -->
    <div id="alert" style="display: block;">
        <p style="margin-bottom: 15px; font-size: 18px; color: rgba(0, 0, 0, 0.8); font-weight: bolder;">
            SIG Great Pondok | <span style="color: rgba(26, 217, 217)">Hot-Spot Searcher</span>
        </p>
        <p style="margin-bottom: 5px; font-size: 14px; color: rgba(26, 217, 217, 0.65); font-weight: 600;">
            Anda tidak memiliki izin Kelola !!
        </p>
        <span style="font-size: 14px; color: rgba(0, 0, 0, 0.8);">Punya akses kelola..?
            <button onclick="login()">Login</button>
        </span>
    </div>

    <!-- kategori -->
    <div class="Kategori">
        <label class="kategori-judul">Pilihan Hot-Spot</label>
        <div class="divider"></div>
        <div class="kategori-input">
            <label>
                <input type="radio" name="category" value="all" checked><span>Semua</span>
            </label>
            <label>
                <input type="radio" name="category" value="cafe"><span>Cafe</span>
            </label>
            <label>
                <input type="radio" name="category" value="gym"><span>Gym</span>
            </label>
            <label>
                <input type="radio" name="category" value="warnet"><span>Warnet</span>
            </label>
            <label>
                <input type="radio" name="category" value="wifi_park"><span>Wifi Park</span>
            </label>
        </div>
    </div>

    <!-- Form komentar muncul kalo diklik -->
    <div id="komentar" style="display: none;">
        <p style="margin-bottom: 15px; font-size: 14px; color: rgba(0, 0, 0, 0.9); font-weight: 600;">
            Tambahkan rekomendasi tempat
        </p>
        <form id="comment" action="/comment" method="post">
            <textarea id="commenttext" name="comment" placeholder="Saran tempat untuk ditambahkan..?"></textarea>
            <input type="submit" value="kirim">
        </form>
    </div>

    <!-- form komentar -->
    <div id="box-komentar" style="display: block;">
        <button onclick="comment()">Kirim masukan</button>
    </div>



    <!-- JS bawaan Leaflet -->
    <script>
        var map = L.map('peta').setView([-6.267907071515342, 106.93322820925268], 14);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 20,
        }).addTo(map);
    </script>


    <!-- JS kasteman -->
    <script>
        // JS untuk login
        function login() {
            var alert = document.getElementById("alert");
            var login = document.getElementById("login");

            if (login.style.display === "none" || login.style.display === "") {
                login.style.display = "block";
                alert.style.display = "none";
            }
        }

        var map = document.getElementById("peta");
        map.addEventListener("click", function () {
            var alert = document.getElementById("alert");
            var login = document.getElementById("login");
            login.style.display = "none";
            alert.style.display = "block";
        });

        // JS untuk komentar
        function comment() {
            var button = document.getElementById("box-komentar");
            var comment = document.getElementById("komentar");
            if (comment.style.display === "none" && button.style.display === "block") {
                comment.style.display = "block";
                button.style.display = "none";
            }
        }

        var map = document.getElementById("peta");
        map.addEventListener("click", function () {
            var button = document.getElementById("box-komentar");
            var comment = document.getElementById("komentar");
            comment.style.display = "none";
            button.style.display = "block";
        });
    </script>
</body>

</html>
