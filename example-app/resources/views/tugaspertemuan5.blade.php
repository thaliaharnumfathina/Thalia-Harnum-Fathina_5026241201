<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Recreate Linktree Richeese - Thalia Harnum Fathina 5026241201</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: 'Jost', sans-serif;
            background-color: #ebedee;
            margin: 0;
        }

        .kartu-utama {
            background-image: url('https://ugc.production.linktr.ee/604dbbc9-207e-4522-b3e8-14386fa99112_2.jpeg');
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: #ffffff;
            min-height: 100vh;
            padding-top: 25px;
            padding-bottom: 60px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
        }

        .foto-profil {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            border: 2px solid #fff;
            margin-bottom: 15px;
        }

        .nama-brand {
            font-weight: 700;
            font-size: 24px;
            color: #000;
        }

        .kartu-utama .link-box {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: #000;
            border: 2px solid #000;
            border-radius: 50px;
            padding: 18px 20px;
            margin-bottom: 16px;
            font-weight: 600;
            text-decoration: none;
            position: relative;
            box-shadow: 4px 4px 0px 0px #000;
            transition: 0.2s ease-in-out;
        }

        .kartu-utama .link-box:hover {
            background-color: #f1f1f1;
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px 0px #000;
            color: #000;
            text-decoration: none;
        }

        .link-box img {
            width: 32px;
            height: 32px;
            position: absolute;
            left: 12px;
            border-radius: 6px;
        }

        .top-icon {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
        }

        .sosmed-list a {
            color: #000;
            font-size: 1.6rem;
            margin: 0 10px;
            transition: 0.2s;
        }

        .sosmed-list a:hover {
            color: #e41c24;
            transform: scale(1.1);
        }

        .kartu-utama .join-badge {
            background: #fff;
            color: #000;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 13px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            display: inline-block;
        }

        .kartu-utama .join-badge:hover {
            text-decoration: none;
            color: #000;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 kartu-utama text-center">

                <div class="d-flex justify-content-between px-3 mb-4">
                    <div class="top-icon"><i class="fas fa-asterisk"></i></div>
                    <div class="top-icon"><i class="fas fa-share"></i></div>
                </div>

                <header class="mb-4">
                    <img src="https://ugc.production.linktr.ee/1c586ce1-c492-4f3a-b611-ff465646420f_1.-logo-Richeese-Factory-HIRES-with-TM-01.jpeg"
                        alt="Logo" class="foto-profil shadow-sm">
                    <h1 class="nama-brand">Richeese Factory</h1>
                    <p class="font-weight-bold px-3">Hallo, Cheesemate! Everything is fun with cheese!</p>
                </header>

                <main class="row justify-content-center px-3 mt-4">
                    <div class="col-12">
                        <a href="https://apps.apple.com/id/app/richeese-factory/id6657982438" class="link-box"
                            target="_blank">
                            <img src="https://ugc.production.linktr.ee/46d1f8d0-1d44-4e7c-93fd-ca96b57dd739_image.png"
                                alt="iOS">
                            Order via RF App (iOS)
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="https://play.google.com/store/apps/details?id=com.richeese.id" class="link-box"
                            target="_blank">
                            <img src="https://ugc.production.linktr.ee/f2b4aa02-dfae-44d1-81c5-701e126ce63e_image.png"
                                alt="Android">
                            Order via RF App (Android)
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="https://order.richeesefactory.com/" class="link-box" target="_blank">
                            <img src="https://ugc.production.linktr.ee/69d75927-24bb-45b7-8db4-1b08e22fb4bc_image.png"
                                alt="Web">
                            Web Order
                        </a>
                    </div>
                </main>

                <div class="sosmed-list my-5">
                    <a href="https://instagram.com/richeese_factory" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/RicheeseFactoryID" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://tiktok.com/@richeesefactory.id" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/@RicheeseFactoryID" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                </div>

                <footer class="mt-5">
                    <a href="https://linktr.ee/RicheeseFactoryWeb" class="join-badge" target="_blank">
                        Bergabung dengan RicheeseFactoryWeb di Linktree
                    </a>
                    <p class="text-muted small mt-3">Cookie Preferences • Report • Privacy</p>
                </footer>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>