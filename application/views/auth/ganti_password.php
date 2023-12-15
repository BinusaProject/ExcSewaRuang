<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Sewa Ruang</title>

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        body {
            font-family: "DM Sans", sans-serif;
            font-size: 1.6rem;
            background-color: #E4F1FF;
            color: #222;
            padding: 0 5px;
        }

        .container {
            min-width: 20rem;
            max-width: 65rem;
            margin: 4rem auto;
        }

        .heading,
        .survey-form {
            background-color: #fff;
            padding: 1.3em 3rem 1.8rem 3rem;
            border-radius: 1rem;
            margin-bottom: 3rem;
            box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.15);
        }

        .heading {
            position: relative;
        }

        .survey-form {
            font-size: 1.8rem;
        }

        .green-bar {
            background-color: #4F709C;
            height: 1rem;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .main-heading {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .main-description {
            margin-bottom: 2rem;
        }

        .instructions {
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        .required {
            font-size: 1.6rem;
            color: #d61212;
        }

        label {
            display: block;
            font-size: 1.8rem;
            margin: 2rem 0;
        }

        input {
            display: block;
            width: 100%;
            margin: 2rem 0;
            font-size: 1.6rem;
        }

        .subArteris {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            margin-bottom: 40px;
        }

        .password-input-container {
            position: relative;
        }

        .password-input-container input {
            padding-right: 30px;
            /* Menambahkan ruang di sebelah kanan untuk ikon mata */
        }

        .password_baru,
        .password_konfirmasi {
            min-height: 2rem;
            padding: 1rem 0;
            border: none;
            border-bottom: 1px solid #bcb9b9;
        }


        .submit {
            font-size: 1.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #f4f4f4;
            background-color: #4F709C;
            border: 3px solid #4F709C;
            border-radius: 1rem;
            width: 15rem;
            padding: 1rem 2rem;
            margin: 4rem auto 2rem auto;
            cursor: pointer;
            transition: all .3s;
        }

        .submit:hover {
            background-color: transparent;
            color: #222;
        }

        a:link,
        a:visited {
            color: #008080;
        }

        .form-group {
            position: relative;
        }

        .password-toggle-baru {
            position: absolute;
            top: 50%;
            color: #474E68;
            right: 10px;
            /* Menyesuaikan posisi ikon ke kanan */
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-toggle-konfirmasi {
            position: absolute;
            color: #474E68;
            top: 50%;
            right: 10px;
            /* Menyesuaikan posisi ikon ke kanan */
            transform: translateY(-50%);
            cursor: pointer;
        }

        /* IP SE */
        @media (min-width: 333px) and (max-width: 671px) {

            .form-group {
                position: relative;
            }

            .password-toggle-baru {
                position: absolute;
                top: 50%;
                right: 10px;
                /* Menyesuaikan posisi ikon ke kanan */
                transform: translateY(-50%);
                cursor: pointer;
            }

            .password-toggle-konfirmasi {
                position: absolute;
                top: 50%;
                right: 10px;
                /* Menyesuaikan posisi ikon ke kanan */
                transform: translateY(-50%);
                cursor: pointer;
            }
        }

        /* Tablet */
        @media (min-width: 100px)(max-width: 1200px) {

            .form-group {
                position: relative;
            }

            .password-toggle-baru {
                position: absolute;
                top: 38%;
                transform: translateY(-50%);
                right: 31rem;
                cursor: pointer;
            }

            .password-toggle-konfirmasi {
                position: absolute;
                top: 52%;
                transform: translateY(-50%);
                right: 31rem;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <header class="heading">
                <div class="green-bar"></div>
                <h1 id="title" class="main-heading">Ubah Password</h1>
            </header>

            <form action="<?php echo base_url('auth/aksi_ganti_password') ?>" method="post" id="survey-form" class="survey-form">
                <!-- <p>Silahkan masukkan password baru kamu untuk</p> -->
                <div class="inputContainer">
                    <label class="label" for="emailAddress"><span><strong>Password Baru</strong></span></label>
                    <div class="password-input-container">
                        <input type="password" name="password" class="password_baru" id="password_baru" placeholder="Masukkan Password Baru">
                        <i class="password-toggle-baru fa fa-eye-slash" onclick="togglePassword_baru()"></i>
                    </div>
                </div>
                <div class="inputContainer">
                    <label class="label" for="emailAddress"><span><strong>Konfirmasi Password</strong></span></label>
                    <div class="password-input-container">
                        <input type="password" name="con_password" class="password_konfirmasi" id="password_konfirmasi" placeholder="Masukkan Konfirmasi Password">
                        <i class="password-toggle-konfirmasi fa fa-eye-slash" onclick="togglePassword_konfirmasi()"></i>
                    </div>
                </div>
                <p class="subArteris">*Gunakan kombinasi minimal 8 karakter dengan huruf dan angka</p>
                <input type="submit" id="submit" class="submit" value="Submit">
            </form>


        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    <?php if ($this->session->flashdata('error')) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Gagal Mengganti!',
            text: '<?php echo $this->session->flashdata('error'); ?>'
        }).then(() => {
            window.location.href = '<?php echo base_url('auth/ganti_password'); ?>';
        });
    <?php } ?>

    <?php if ($this->session->flashdata('success_code')) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Verifikasi Berhasil!',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            showConfirmButton: false,
            timer: 2500
        }).then(() => {
            window.location.href = '<?php echo base_url('auth/ganti_password'); ?>';
        });
    <?php } ?>
</script>

<script type="text/javascript">
    function togglePassword_baru() {
        var passwordField = document.getElementById('password_baru');
        var passwordToggle = document.querySelector('.password-toggle-baru');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        } else {
            passwordField.type = "password";
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        }
    }


    function togglePassword_konfirmasi() {
        var passwordField = document.getElementById('password_konfirmasi');
        var passwordToggle = document.querySelector('.password-toggle-konfirmasi');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        } else {
            passwordField.type = "password";
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        }
    }
</script>

</html>