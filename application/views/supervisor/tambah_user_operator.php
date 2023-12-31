<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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


        .username,
        .email,
        .password {
            min-height: 2rem;
            padding: 1rem 0;
            border: none;
            border-bottom: 1px solid #bcb9b9;
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

        .contain-all {
            overflow-y: scroll;
            height: auto;
        }

        .form-group {
            position: relative;
        }

        .password-toggle {
            margin-left: 96%;
            transform: translateY(-1.9rem);
            cursor: pointer;
            color: #555;
        }

        .subArteris {
            color: red;
            font-size: 14px;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .header-text {
            font-weight: bold;
            font-size: 15px;
        }

        @media only screen and (max-width: 800px) {

            .password-toggle {
                margin-left: 91%;
                transform: translateY(-1.7rem);
            }

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

<body class="relative h-screen overflow-hidden">
    <?php $this->load->view('sidebars'); ?>

    <main class="contain-all h-screen overflow-y-auto">
        <div class="container">
            <header class="heading">
                <div class="green-bar"></div>
                <h1 id="title" class="main-heading">Form Tambah Operator</h1>
            </header>

            <form action="<?php echo base_url('supervisor/aksi_tambah_user_operator') ?>" method="post" id="survey-form" class="survey-form">
                <!-- Your form fields go here -->
                <label for="username" class="header-text" id="name-label">Name</label>
                <input autocomplete="off" type="text" name="username" id="username" class="username" placeholder="Masukkan nama anda" required>

                <label for="email" class="header-text" id="email-label">Email</label>
                <input autocomplete="off" type="email" name="email" id="email" class="email" placeholder="Masukkan email anda" required>

                <div class="inputContainer">
                    <label class="label header-text" for="password">
                        <span>Password</span>
                    </label>
                    <div class="password-input-container">
                        <input type="password" name="password" class="input" id="password" placeholder="Enter your Password">
                        <i class="password-toggle fa fa-eye-slash" onclick="togglePassword()"></i>
                    </div>
                    <hr class="custom-hr">
                </div>

                <p class="subArteris">*Gunakan kombinasi minimal 8 karakter dengan huruf dan angka</p>

                <input type="button" onclick="submitForm()" id="submit" class="submit" value="Submit">
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script>
        var base_url = "<?php echo base_url(); ?>";

        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var passwordToggle = document.querySelector(".password-toggle");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggle.classList.remove("fa-eye-slash");
                passwordToggle.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                passwordToggle.classList.remove("fa-eye");
                passwordToggle.classList.add("fa-eye-slash");
            }
        }

        function submitForm() {
            // Use SweetAlert2 for confirmation
            Swal.fire({
                title: 'Simpan Data?',
                text: 'Apakah Anda yakin ingin menambah data?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Ya, Simpan!"
                    // Use jQuery to serialize the form data
                    var formData = $('#survey-form').serialize();

                    // Send an AJAX request to your CodeIgniter controller
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'supervisor/aksi_tambah_user_operator',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            if (response && response.success) {
                                // Display success message using SweetAlert2
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: response.message,
                                    timer: 1500,
                                    showConfirmButton: false,
                                }).then((result) => {
                                    // Redirect to 'supervisor/data_operator' after the alert is closed
                                    if (result.isConfirmed || result.isDismissed) {
                                        window.location.href = base_url + 'supervisor/data_operator';
                                    }
                                });
                            } else {
                                // Display error message using SweetAlert2
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: response && response.message ? response.message : 'Terjadi kesalahan yang tidak terduga.',
                                });
                            }
                        },
                        error: function() {
                            // Handle AJAX error
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Terjadi kesalahan saat memproses permintaan Anda. Silakan coba lagi.',
                            });
                        }
                    });
                }
            });
        }
    </script>
</body>

</html>