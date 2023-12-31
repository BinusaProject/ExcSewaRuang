<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background-color: #E4F1FF;
            color: #222;
            padding: 0 0px;
        }

        .container {
            min-width: 20rem;
            max-width: 65rem;
            margin: 1rem auto;
            padding: 30px 7.5rem 5px 7.5rem;
        }

        .heading,
        .survey-form {
            background-color: #fff;
            padding: 1.3em 3rem 1.8rem 3rem;
            border-radius: 1rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.15);
        }

        .heading {
            position: relative;
        }

        .survey-form {
            font-size: 15px;
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
            font-size: 2rem;
            margin-bottom: 1rem;
            height: 1.5rem;
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
            font-size: 1.1rem;
            margin: 30px 0;
            line-height: 1px;
        }

        input {
            display: block;
            width: 100%;
            height: 29px;
            margin: 5px 0;
            font-size: 1.6rem;
            line-height: 1px;
        }

        .nama,
        .hari,
        .no_lantai,
        .snack,
        .jam_penggunaan,
        .no_ruang,
        .total_booking,
        .deskripsi,
        .kapasitas {
            min-height: 2rem;
            padding: 1rem 0;
            border: none;
            border-bottom: 1px solid #bcb9b9;
        }

        textarea {
            display: block;
            width: 100%;
            margin: 5px 0;
            font-size: 1.6rem;
            line-height: 1px;
        }

        .submit {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #f4f4f4;
            background-color: #4F709C;
            border: 3px solid #4F709C;
            border-radius: 1rem;
            width: 8rem;
            height: 2.5rem;
            padding: 8px 2rem;
            margin: 40px auto 10px auto;
            cursor: pointer;
            transition: all .3s;
        }

        .submit:hover {
            background-color: transparent;
            color: #222;
        }

        /* Spesifikasi ditingkatkan untuk tombol "submit" */
        .survey-form .submit {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #f4f4f4;
            background-color: #4F709C;
            border: 3px solid #4F709C;
            border-radius: 1rem;
            width: 8rem;
            height: 2.5rem;
            padding: 8px 2rem;
            margin: 40px auto 10px auto;
            cursor: pointer;
            transition: all .3s;
        }

        .survey-form .submit:hover {
            background-color: transparent;
            color: #222;
        }

        /* style comboboxs */
        input {
            padding: 5px;
            height: 35px;
            border-bottom: 1px solid;
            outline: none;
        }

        datalist {
            /* position: absolute; */
            background-color: white;
            border-top: none;
            width: 350px;
            padding: 5px;
            max-height: 10rem;
            overflow-y: auto
        }

        option {
            background-color: white;
            padding: 4px;
            margin-bottom: 1px;
            font-size: 14px;
            cursor: pointer;
        }

        .contain-all {
            overflow-y: scroll;
            height: 70rem;
        }

        @media only screen and (max-width: 800px) {

            .container {
                padding: 1rem 1rem 0px 1rem;
            }


            .heading {
                padding: 1.3em 9px 1.8rem 9px;
            }

            .survey-form {
                padding: 1.3em 15px 1.8rem 15px;

            }

            .main-heading {
                font-size: 22px;
                margin-bottom: 0;
                text-align: center;
            }

            label {
                font-size: 16px;
            }
        }

    </style>
</head>

<body class="relative min-h-screen overflow-hidden">
    <?php $this->load->view('sidebar'); ?>

    <main class="contain-all max-h-screen overflow-y-auto">
        <div class="container">
            <header class="heading">
                <div class="green-bar"></div>
                <h1 id="title" class="main-heading">Form Data Pelanggan</h1>
            </header>

            <form action="<?php echo base_url('operator/aksi_tambah_ruangan') ?>" method="post" id="survey-form" class="survey-form ">
                <div class="flex flex-wrap">
                    <div class="w-full px-7">
                        <label for="nama" class="block font-bold">Nama</label>
                        <input autocomplete="off" type="text" name="nama" id="nama" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik nama lengkap anda" >
                    </div>

                    <div class="w-full px-7">
                        <label for="phone" class="block font-bold">No Telepon</label>
                        <input autocomplete="off" type="text" name="phone" id="phone" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik no telepon anda" >
                    </div>

                    <div class="w-full px-7">
                        <label for="eamil" class="block font-bold">Email</label>
                        <input autocomplete="off" type="email" name="email" id="email" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik email anda" >
                    </div>
                </div>
                <div class="text-center mt-1">
                    <input type="submit" id="submit" class="submit font-size-14px ont-weight-600 text-transform-uppercase letter-spacing-1px color-#f4f4f4 background-color-#4F709C border-3px-solid-#4F709C border-radius-1rem        width-8rem height-2.5rem padding-3px-2rem margin-40px-auto-10px-auto cursor-pointer transition-all .3s" value="Submit">
                </div>
            </form>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            const form = document.getElementById("survey-form");

            form.addEventListener("submit", function(e) {
                e.preventDefault();

                if (e.submitter.id === "submit") {
                    // Display SweetAlert confirmation before submitting
                    Swal.fire({
                        title: 'Konfirmasi',
                        text: 'Apakah Anda yakin ingin menambah data?',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Batal'
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            // If user clicks "Ya", proceed with AJAX submission
                            document.getElementById("submit").disabled = true;

                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('operator/aksi_tambah_pelanggan') ?>",
                                data: new FormData(form),
                                contentType: false,
                                processData: false,
                                dataType: "json",
                                success: function(response) {
                                    if (response.status === 'success') {
                                        // Show success SweetAlert and then redirect
                                        Swal.fire({
                                            title: 'Berhasil Menambah Data Pelanggan',
                                            text: response.message,
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 2000
                                        }).then(function() {
                                            window.location.href = response.redirect;
                                        });
                                    } else {
                                        // Display error messages
                                        if (response.errors) {
                                            response.errors.forEach(function(error) {
                                                Swal.fire({
                                                    title: 'Gagal',
                                                    text: error,
                                                    icon: 'error',
                                                    showConfirmButton: false,
                                                    timer: 2000
                                                });
                                            });
                                        } else {
                                            Swal.fire({
                                                title: 'Gagal',
                                                text: response.message,
                                                icon: 'error',
                                                showConfirmButton: false,
                                                timer: 2000
                                            });
                                        }

                                        // Re-enable the submit button immediately upon encountering an error
                                        document.getElementById("submit").disabled = false;
                                    }
                                }
                            });
                        }
                    });
                } else if (e.submitter.id === "cancel") {
                    // Handle the "Batal" button click event here
                    Swal.fire({
                        title: 'Aksi dibatalkan',
                        text: 'Anda membatalkan aksi penyimpanan data.',
                        icon: 'info',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    // Optionally, you can redirect or perform other actions when canceling
                }
            });
        });
    </script>
</body>

</html>