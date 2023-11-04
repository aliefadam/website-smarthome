<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- my css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <aside>
        <div class="item">
            <div class="item-atas">
                <a href="" class="mb-5">
                    <i class="bi bi-house-door"></i>
                </a>
                <a href="" class="active">
                    <i class="bi bi-boxes"></i>
                </a>
            </div>
            <div class="item-bawah">
                <a href="">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
        </div>
    </aside>
    <main>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Lamiacasa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-gear"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="me-2" width="30" src="imgs/user.png" alt="">
                                Scarlett
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->

        <!-- content -->
        <form action="download.php" method="post">
            <div class="content">
                <div class="content-kiri">
                    <!-- header -->
                    <header class="shadow shadow-sm">
                        <div class="header-kiri">
                            <h1>Hello, Scarlett!</h1>
                            <p class="desk">Welcome Home! The air quality is good & fresh you can go out today</p>
                            <p class="suhu"><i class="bi bi-thermometer-half"></i><span>+25&deg;C</span> Outdoor
                                Temperature
                            <p class="cuaca"><i class="bi bi-cloud"></i>Fuzzy cloudy weather
                            </p>
                        </div>
                        <div class="header-kanan">
                            <img src="imgs/gambar-header.png" alt="">
                        </div>
                    </header>
                    <!-- header -->

                    <!-- teks -->
                    <div class="teks-1 mt-4">
                        <div class="teks-1-kiri">
                            <h3>Scarlett's Home</h3>
                        </div>
                        <div class="teks-1-kanan">
                            <i class="bi bi-droplet me-1"></i>
                            <span class="me-3">35%</span>
                            <i class="bi bi-thermometer-half me-1"></i>
                            <span class="me-3">35%</span>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Living Room
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">None</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ahir teks -->

                    <!-- device 1 -->
                    <div class="device-1">
                        <div class="device-1-item shadow shadow-sm">
                            <div class="kondisi">
                                <span class="kulkas">OFF</span>
                                <label class="toggle">
                                    <input type="checkbox" name="kulkas" onclick="update('kulkas')">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <img src="imgs/kulkas.png" alt="">
                            <p class="kulkas">Refridgerator</p>
                        </div>
                        <div class="device-1-item shadow shadow-sm">
                            <div class="kondisi">
                                <span class="suhu">OFF</span>
                                <label class="toggle">
                                    <input type="checkbox" name="suhu" onclick="update('suhu')">
                                    <span class=" slider"></span>
                                </label>
                            </div>
                            <img src="imgs/lighting.png" alt="">
                            <p class="suhu">Temperature</p>
                        </div>
                        <div class="device-1-item shadow shadow-sm">
                            <div class="kondisi">
                                <span class="ac">OFF</span>
                                <label class="toggle">
                                    <input type="checkbox" name="ac" onclick="update('ac')">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <img src="imgs/air-conditioner.png" class="ms-1" alt="">
                            <p class="ac">Air Conditioner</p>
                        </div>
                        <div class="device-1-item shadow shadow-sm">
                            <div class="kondisi">
                                <span class="lampu">OFF</span>
                                <label class="toggle">
                                    <input type="checkbox" name="lampu" onclick="update('lampu')">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <img src="imgs/light-bulb.png" alt="">
                            <p class="lampu">Lights</p>
                        </div>
                    </div>
                    <!-- akhir device 1 -->
                    <!-- print -->
                    <div class="aksi">
                        <button type=" submit" class="btn btn-sm shadow shadow-sm"">
                        Print<i class=" bi bi-filetype-jpg"></i>
                        </button>
                    </div>
                    <!-- akhir print -->
                </div>
                <div class="content-kanan">
                    <div class="devices shadow shadow-sm">
                        <div class="teks-2">
                            <span>My Devices</span>
                            <div class="dropdown shadow shadow-sm">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    ON
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">OFF</a></li>
                                </ul>
                            </div>
                            <span class="shadow shadow-sm">
                                <a href="#" class="text-decoration-none text-black">
                                    >
                                </a>
                            </span>
                        </div>
                        <div class="device-2">
                            <div class="device-2-kiri">
                                <div class="device-2-item">
                                    <div class="kondisi">
                                        <img src="imgs/door.png" width="20" alt="">
                                        <div class="kondisi-item">
                                            <span class="door">OFF</span>
                                            <label class="toggle">
                                                <input type="checkbox" name="pintu" onclick="update('door')">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="device-name">Door</span>
                                </div>
                                <div class="device-2-item">
                                    <div class="kondisi">
                                        <img src="imgs/music.png" width="20" alt="">
                                        <div class="kondisi-item">
                                            <span class="music-system">OFF</span>
                                            <label class="toggle">
                                                <input type="checkbox" name="music" onclick="update('music-system')">
                                                <span class=" slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="device-name">Music System</span>
                                </div>
                            </div>
                            <div class="device-2-kanan">
                                <div class="device-2-item">
                                    <div class="kondisi">
                                        <img src="imgs/wifi-router.png" width="20" alt="">
                                        <div class="kondisi-item">
                                            <span class="router">OFF</span>
                                            <label class="toggle">
                                                <input type="checkbox" name="router" onclick="update('router')">
                                                <span class=" slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="device-name">Router</span>
                                </div>
                                <div class="device-2-item">
                                    <div class="kondisi">
                                        <img src="imgs/gate.png" width="20" alt="">
                                        <div class="kondisi-item">
                                            <span class="gate">OFF</span>
                                            <label class="toggle">
                                                <input type="checkbox" name="gerbang" onclick="update('gate')">
                                                <span class=" slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="device-name">Gate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calendar shadow shadow-sm">
                        <div class="header">
                            <button type="button" id="prevBtn" class="shadow shadow-sm">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <div class="monthYear" id="monthYear"></div>
                            <button type="button" id="nextBtn" class="shadow shadow-sm">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="days">
                            <div class="day">Mon</div>
                            <div class="day">Tue</div>
                            <div class="day">Wed</div>
                            <div class="day">Thu</div>
                            <div class="day">Fri</div>
                            <div class="day">Sat</div>
                            <div class="day">Sun</div>
                        </div>
                        <div class="dates" id="dates"></div>
                    </div>
                </div>
            </div>
        </form>
        <!-- akhir content -->
    </main>

    <!-- my js -->
    <script src="js/script.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>