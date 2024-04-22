

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library ponpes</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.jpeg" />
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css" />
    <!-- Other head elements -->

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <?php
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == "gagal"){
                                        echo "Login gagal! username dan password salah!";
                                    }else if($_GET['pesan'] == "logout"){
                                        echo "Anda telah berhasil logout";
                                    }else if($_GET['pesan'] == "belum_login"){
                                        echo "Anda harus login untuk mengakses halaman admin";
                                    }
                                }?>
                                <h3 class="text-center">
                                    <img src="img/logo.jpeg" width="100" alt="" class="mb-2">
                                    
                                </h3>
                                <?php if(!isset($_GET['register'])){ ?>
                                <p class="text-center">Login untuk mengakses halaman dashboard</p>
                                <form role="form" method="post" action="login.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="user" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                name="pass" required />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-success"
                                                    id="show-password-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <button name="login"
                                        class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="text-success fw-bold ms-2" href="?register">Buat akun baru</a>
                                    </div>
                                </form>
                                <?php } else { ?>
                                <p class="text-center">Daftar sebagai pengguna baru</p>
                                <form role="form" method="post" action="register.php">
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputtext1"
                                            aria-describedby="textHelp" name="user" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputtext1"
                                            aria-describedby="textHelp" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                name="pass" required />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    id="show-password-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <button name="register"
                                        class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Daftar</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Sudah punya akun?<a
                                                class="text-success fw-bold ms-2" href="?login">Login
                                            </a>
                                        </p>
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const passwordInput = document.getElementById('exampleInputPassword1');
    const showPasswordButton = document.getElementById('show-password-button');

    showPasswordButton.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });

    function refreshCaptcha() {
        // Mendapatkan elemen gambar captcha
        var captchaImage = document.getElementById('captchaImage');

        // Menambahkan parameter timestamp untuk memaksa browser memuat ulang gambar captcha
        var timestamp = new Date().getTime();
        captchaImage.src = "captcha.php?timestamp=" + timestamp;
    }
    </script>
</body>

</html>