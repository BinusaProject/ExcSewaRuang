<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .email {
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
    </style>
</head>

<body>
    <main>
        <div class="container">
            <header class="heading">
                <div class="green-bar"></div>
                <h1 id="title" class="main-heading">Verifikasi Kode</h1>
            </header>

            <form action="<?php echo base_url('auth/aksi_verifikasi')?>" method="post" id="survey-form"
                class="survey-form">
                <p>Silahkan masukkan code verifikasi anda untuk mengubah password </p>
                <input autocomplete="off" type="number" name="code" id="email" class="email" placeholder="Masukkan code verifikasi anda"
                    required>


                <input type="submit" id="submit" class="submit" value="Submit">
            </form>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    <?php if ($this->session->flashdata('success_forgot')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Pesan Terkirim!',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            timer: 2500, // Waktu tampilan SweetAlert dalam milidetik (dalam contoh ini, 2500ms atau 2,5 detik)
            showConfirmButton: false // Menghilangkan tombol "OK"
        }).then(() => {
            window.location.href = '<?php echo base_url('auth/verifikasi_kode'); ?>';
        });
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Verifikasi Gagal!',
            text: '<?php echo $this->session->flashdata('error'); ?>'
        }).then(() => {
            window.location.href = '<?php echo base_url('auth/verifikasi_kode'); ?>';
        });
    <?php } ?>
</script>

</html>