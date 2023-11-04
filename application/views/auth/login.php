<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <style>
        * {
            margin: 0px;
            font-family: Rubik;
        }

        .form-group {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 60%;
            transform: translateY(-50%);
            right: 7rem;
            cursor: pointer;
        }

        .LoginPageContainer {
            height: 100vh;
            overflow: auto;
        }

        .showPassword {
            margin-left: 19.5rem;
        }

        .LoginPageInnerContainer {
            display: flex;
            min-height: 100%;
        }

        .LoginPageInnerContainer .ImageContianer {
            width: 45%;
            background-color: #4F709C;
            min-height: 100%;
            padding: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .LoginPageInnerContainer .ImageContianer .GroupImage {
            width: 80%;
            display: block;
        }

        .LoginPageInnerContainer .LoginFormContainer {
            flex-grow: 2;
            background-color: white;
            min-height: 100%;
            padding: 5%;
            background: url(https://i.imgur.com/BKyjjFa.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .LoginPageInnerContainer .LoginFormContainer .LogoContainer .logo {
            height: 60px;
            margin-bottom: 30px;
        }

        .LoginPageInnerContainer .LoginFormContainer .header {
            font-size: 32px;
            font-weight: 500;
        }

        .LoginPageInnerContainer .LoginFormContainer .subHeader {
            color: #9aa4ad;
            margin-top: 5px;
            margin-bottom: 40px;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer {
            color: #3f3f45;
            margin: 20px 0px;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer .label {
            display: flex;
            width: 100%;
            justify-content: flex-start;
            align-items: center;
            margin-right: 7px;
            margin-bottom: 10px;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer .label .labelIcon {
            width: 20px;
            margin-right: 10px;
            display: block;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer .input {
            display: block;
            width: calc(100% - 20px);
            font-size: 15px;
            padding: 10px;
            border: 1px solid #d6d7db;
            border-radius: 5px;
            margin-top: 5px;
            outline: 0px !important;
        }

        .LoginPageInnerContainer .LoginFormContainer .OptionsContainer {
            display: flex;
            justify-content: space-between;
        }

        .LoginFormContainer {
            display: flex;
            align-items: center;
        }

        .LoginFormInnerContainer {
            max-width: 500px;
        }

        .LoginPageInnerContainer .LoginFormContainer .checkbox {
            width: 15px;
            height: 15px;
            margin: 0px;
            display: block;
            border: 1px solid #d6d7db;
        }

        .LoginPageInnerContainer .LoginFormContainer .checkboxContainer {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .LoginPageInnerContainer .LoginFormContainer .checkboxContainer label {
            display: block;
            padding: 0px 5px;
            color: #9aa4ad;
        }

        .LoginPageInnerContainer .LoginFormContainer .ForgotPasswordLink {
            color: #e7483b;
            text-decoration: none;
        }

        .LoginFormContainer .LoginFormInnerContainer .LoginButton {
            margin-top: 30px;
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            font-weight: bold;
            color: white;
            background-color: #4F709C;
            border: 0px;
            outline: 0px;
            cursor: pointer;
        }

        .LoginFormContainer .LoginFormInnerContainer .LoginButton:active {
            background-color: #4F709C;
        }


        @media only screen and (max-width: 1200px) {
            .LoginPageInnerContainer .ImageContianer {
                width: 50%;
            }
        }

        @media only screen and (max-width: 800px) {
            .LoginPageInnerContainer .ImageContianer {
                display: none;
            }

            .form-group {
                position: relative;
            }

            .password-toggle {
                position: absolute;
                top: 61%;
                transform: translateY(-50%);
                right: 2.1rem;
                cursor: pointer;
            }


            .LoginFormContainer {
                justify-content: center;
            }
        }

        .LoginPageContainer::-webkit-scrollbar {
            width: 5px;
        }

        .LoginPageContainer::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .ImageContianer .LoginPageContainer::-webkit-scrollbar-thumb {
            background: #2e1f7a;
        }

        .LoginPageContainer::-webkit-scrollbar-thumb:hover {
            background: #4520ff;
        }
    </style>
</head>

<body>
    <div class="LoginPageContainer">
        <div class="LoginPageInnerContainer">
            <div class="ImageContianer">
                <img src="https://o.remove.bg/downloads/7a3608c7-b681-4beb-bf6b-acd24e7e8b77/istockphoto-1281150061-612x612-removebg-preview.png" class="GroupImage">
            </div>
            <div class="LoginFormContainer">
                <div class="LoginFormInnerContainer">

                    <header class="header">Login</header>
                    <header class="subHeader">Selamat Datang di <b>Website Sewa Ruang</b> Silahkan lengkapi data anda
                    </header>

                    <form action="<?php echo base_url('auth/aksi_login') ?>" method="post">
                        <div class="inputContainer">
                            <label class="label" for="emailAddress"><img src="https://i.imgur.com/Hn13wvm.png"
                                    class="labelIcon"><span>Email*
                                </span></label>
                            <input type="email" name="email" class="input" id="emailAddress"
                                placeholder="Enter your Email Address">
                        </div>
                        <div class="inputContainer">
                            <label class="label" for="emailAddress"><img src="https://i.imgur.com/g5SvdfG.png"
                                    class="labelIcon"><span>Password*</span></label>
                            <i class="password-toggle fa fa-eye-slash" onclick="togglePassword()"></i>
                            <input type="password" name="password" class="input" id="password"
                                placeholder="Enter your Password">
                            <br>
                            <!-- <label class="showPassword" for="showPasswordCheckbox">show password <input type="checkbox"
                                    id="showPasswordCheckbox"></label> -->
                        </div>

                        <button name="submit" type="submit" class="LoginButton">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    function togglePassword() {
        var passwordField = document.getElementById('password');
        var passwordToggle = document.querySelector('.password-toggle');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');


        } else {
            passwordField.type = "password";
            passwordToggle.classList.add('fa-eye-slash');
            passwordToggle.classList.remove('fa-eye');

        }
    }
</script>

</html>