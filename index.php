<?php 
$title = 'เข้าสู่ระบบ';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <?php require('main_header.php'); ?>
    <style>
        body, html {
            width: 100%;
            height: 100%;
        }       
        .body-img {
            background: url("assets/images/login-bg.png"); 
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .body-img::before {
            content: "";
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            background-color: rgba(0,0,0,0.25);
        }
        .div-form {
            position: relative;
            color: #ffffff;  
            font-family: "Kanit";
            width: 100%;
            height: 100%;
        }
        .cus-input {
            width: 100%;
            border-radius: 10px;
            outline: none;
            box-sizing: border-box;
            transition: 0.3s;
            background-color: rgba(255,255,255, 0.25);
            border: white;
        }
        .inputWithIcon {
            position: relative;
        }
        .inputWithIcon i {
            position: absolute;
            right: 10px;
            top: 72%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        ::placeholder {
            color: white;
            opacity: 1; /* Firefox */
        }
        ::-ms-input-placeholder { /* Edge 12 -18 */
            color: white;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 10px;
        }
        .btn-block {
            display: block;
        }
        .btn-light {
            padding: 10px 25px;
        }
        .google-btn {
            background-color: white;
            color: rgb(184, 117, 20);
            border-color: rgb(184, 117, 20);
        }
        .register-btn {
            background-color: #f1c40f;
            color: white;
            padding: 10px 25px;
            border-radius: 10px;
            border: none;
            opacity: 0.9;
        }
        .col-6 {
            margin-right: 1px;
            margin-left: 1px;
        }
    </style>
</head>
<body class="body-img">
    <div class="div-form d-flex align-items-center">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 col-xl-4 text-center">
                    <h2>Welcome to <img src="assets/images/dog-foot.png" alt="img" height="50px"></h2>
                    <h1>SE Draft petshop!</h1>  
                    <div class="inputWithIcon mt-5 ">
                        <h5 align="left">Enter your username or email address</h5>
                        <input type="text" name="username" class="cus-input pt-2 pb-2 ps-4 mt-2" 
                            placeholder="Username or Email address">
                    </div>   
                    <div class="inputWithIcon mt-3">
                        <h5 align="left">Enter your Password</h5>
                        <input type="password" class="cus-input pt-2 pb-2 ps-4" 
                            placeholder="Password">
                            <i class="fa-solid fa-eye fa-lg  fa-fw" aria-hidden="true" id="toggle-password"></i>
                    </div>         
                </div>
            </div>
            <div class="row d-flex justify-content-center flex-column">
                <div class="col-12 col-md-6 col-xl-4 mx-auto text-end mt-2">
                    <a href="#" class="text-white">Forgot Password</a>
                </div>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-6 col-xl-4 text-center mt-4">
                            <button class="btn btn-danger w-50">Sign in</button>
                        </div>
                        <div class="col-6 col-md-6 col-xl-4 text-center mt-4">
                            <button class="btn register-btn w-50">Register</button>
                        </div>
                    </div>
                    <p class="mt-3">OR</p>
                    <div class="d-flex justify-content-center">
                        <button class="btn google-btn me-2 border" style="background-color: #ffffff;">
                            <img src="https://logos-world.net/wp-content/uploads/2020/09/Google-Symbol.png" alt="Google" width="35" class="me-2">
                            Sign in with Google
                        </button>
                        <button class="btn btn-light me-2 border">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button class="btn btn-light border">
                            <i class="fab fa-apple"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('main_footer.php'); ?>
</body>
</html>