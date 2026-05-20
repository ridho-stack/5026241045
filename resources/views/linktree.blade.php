<!DOCTYPE html>
<html lang="en">

<head>
    <title>Linktree - @surabaya.go.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showme() {
            //alert("hallo selamat siang");
            Swal.fire({
                title: "Halo!",
                text: "Selamat Siang",
                icon: "success"
            });
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }

    </script>

    <style>

        body, html {
            height: 100%;
            margin: 0;
            background-color: #d1d4d9; /* Warna abu-abu background luar */
            font-family: Inter, -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Container Luar agar terlihat seperti HP di tengah layar */
        .viewport-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Area Linktree (Simulasi layar HP) */
        .page-wrapper {
            width: 100%;
            max-width: 430px; /* Lebar standar mobile agar mirip asli */
            height: 90vh; /* Tinggi menyesuaikan layar */
            background: linear-gradient(180deg, #fdfbff 0%, #e2e5ee 100%);
            backdrop-filter: blur(20px);
            border-radius: 40px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            position: relative;
            padding: 15px 12px;
            overflow-y: auto; /* Biar bisa scroll kalau link banyak */
        }

        /* Header Icons */
        .top-icons {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            margin-bottom: 5px;
        }

        .icon-btn {
            width: 32px; height: 32px;
            background: rgba(255,255,255,0.7);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: #000; font-size: 16px;
        }

        /* Profile Section */
        .profile-container {
            margin-bottom: 25px;
        }

        .profile-gif {
            width: 90px; height: 90px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 12px;
        }

        .profile-handle {
            font-size: 14px;
            font-weight: 700;
            color: #000;
        }

        /* Link Cards */
        .link-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 10px 12px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            text-decoration: none !important;
            transition: all 0.2s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.03);
        }

        .link-card:hover {
            transform: scale(1.01);
            background-color: #fafafa;
        }

        .thumb-box, .thumb-img {
            width: 42px; height: 42px;
            border-radius: 6px;
            object-fit: contain; /* Agar logo surabaya tidak kepotong */
            background-color: #fff;
        }

        .thumb-box {
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; color: #000;
            border: 1px solid #f0f0f0;
        }

        .link-text {
            flex-grow: 1;
            font-size: 12px;
            font-weight: 700;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-align: center;
            margin-left: -10px; /* Untuk balancing teks ke tengah */
        }

        .dots-right {
            color: #e0e0e0;
            font-size: 16px;
        }

        /* Footer Pill */
        .footer-pill {
            background: white;
            border-radius: 25px;
            padding: 8px 20px;
            display: inline-block;
            margin-top: 30px;
            font-weight: 700;
            font-size: 13px;
            color: #000;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            text-decoration: none !important;
        }
    </style>
</head>

<body>
    <div class="viewport-wrapper">
                    <button class="btn btn-primary" onclick="showme();"> Show Me </button>
            <button class="btn btn-primary" onclick="changeText();"> Change Text </button>
            <button class="btn btn-primary" onclick="changeStyle();"> Change Style </button>
        <div class="page-wrapper shadow-lg">
            <div class="top-icons">
                <div class="icon-btn"><i class="bi bi-asterisk"></i></div>
                <div class="icon-btn"><i class="bi bi-box-arrow-up"></i></div>
            </div>

            <div class="profile-container">
                <img src="https://ugc.production.linktr.ee/49451e57-4fe9-4006-af20-ff55ee4c7176_GIF-LOGO.gif?io=true&size=avatar-v3_0"
                     class="profile-gif shadow-sm">
                <p class="profile-handle">@surabaya.go.id</p>
            </div>

            <div class="px-2">
                <a href="https://sswalfa.surabaya.go.id/" target="_blank" class="link-card">
                    <div class="thumb-box"><i class="bi bi-clipboard-check"></i></div>
                    <span class="link-text">SURABAYA SINGLE WINDOW</span>
                    <i class="bi bi-three-dots dots-right"></i>
                </a>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfMwOoAtKnC1JufCTBYUpXPdidqlFyv1EtCP1iIS2iGd5ceqg/viewform" target="_blank" class="link-card">
                    <div class="thumb-box"><i class="bi bi-stack"></i></div>
                    <span class="link-text">FORM OUTREACH</span>
                    <i class="bi bi-three-dots dots-right"></i>
                </a>

                <a href="https://tiketwisata.surabaya.go.id/" target="_blank" class="link-card">
                    <img src="https://ugc.production.linktr.ee/cf57a0e0-5cb5-46cd-83d0-f03a00d242c1_img-meta.jpeg?io=true&size=thumbnail-stack_v1_0" class="thumb-img">
                    <span class="link-text">TIKET WISATA SURABAYA</span>
                    <i class="bi bi-three-dots dots-right"></i>
                </a>

                <a href="https://sayangwarga.surabaya.go.id/" target="_blank" class="link-card">
                    <img src="https://sayangwarga.surabaya.go.id/img/png/surabaya-hebat.png" class="thumb-img">
                    <span class="link-text">SAYANG WARGA SURABAYA</span>
                    <i class="bi bi-three-dots dots-right"></i>
                </a>

                <a href="https://pbb.surabaya.go.id/esppt" target="_blank" class="link-card">
                    <img src="https://ugc.production.linktr.ee/618f30be-7f52-4518-8ed7-4057a7bbbabc_4.png?io=true&size=thumbnail-stack_v1_0" class="thumb-img">
                    <span class="link-text">E-SPPT PBB</span>
                    <i class="bi bi-three-dots dots-right"></i>
                </a>

                <a href="https://peken.surabaya.go.id/" target="_blank" class="link-card">
                    <img src="https://ugc.production.linktr.ee/3f1e0a53-e693-46be-85cc-9645044395c9_10.png?io=true&size=thumbnail-stack_v1_0" class="thumb-img">
                    <span class="link-text">E-PEKEN SURABAYA</span>
                    <i class="bi bi-three-dots dots-right"></i>
                </a>
            </div>

            <a href="#" class="footer-pill shadow-sm">
                Join surabaya.go.id on Linktree
            </a>
        </div>
    </div>
</body>

</html>
