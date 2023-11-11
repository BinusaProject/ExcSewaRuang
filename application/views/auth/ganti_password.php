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
            top: 40%;
            transform: translateY(-50%);
            right: 40rem;
            cursor: pointer;
        }

        .password-toggle-konfirmasi {
            position: absolute;
            top: 56%;
            transform: translateY(-50%);
            right: 40rem;
            cursor: pointer;
        }

        @media only screen and (max-width: 800px) {

            .form-group {
                position: relative;
            }

            .password-toggle-baru {
                position: absolute;
                top: 55%;
                transform: translateY(-50%);
                right: 3.9rem;
                cursor: pointer;
            }
            .password-toggle-konfirmasi {
                position: absolute;
                top: 73%;
                transform: translateY(-50%);
                right: 3.9rem;
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

            <form action="" method="post" id="survey-form"
                class="survey-form">
                <!-- <p>Silahkan masukkan password baru kamu untuk</p> -->
                <div class="inputContainer">
                    <label class="label" for="emailAddress"><span>Password Baru*</span></label>
                    <div class="password-input-container">
                        <input type="password" name="password_baru" class="password_baru" id="password_baru"
                            placeholder="Enter your Password">
                        <i class="password-toggle-baru fa fa-eye-slash" onclick="togglePassword_baru()"></i>
                    </div>
                </div>
                <div class="inputContainer">
                    <label class="label" for="emailAddress"><span>Konfirmasi Password*</span></label>
                    <div class="password-input-container">
                        <input type="password" name="password_konfirmasi" class="password_konfirmasi" id="password_konfirmasi"
                            placeholder="Enter your Password">
                        <i class="password-toggle-konfirmasi fa fa-eye-slash" onclick="togglePassword_konfirmasi()"></i>
                    </div>
                </div>


                <input type="submit" id="submit" class="submit" value="Submit">
            </form>


        </div>
    </main>
</body>
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