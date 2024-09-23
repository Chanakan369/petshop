<?php 
$title = 'สินค้าแนะนำสำหรับแมว';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <?php require('main_header.php'); ?>
    <style>
        * {
            font-family: "Kanit";
        }  
        .cus-nav {
            background-color: #E19F9F;
        }
        .div1 {
            margin-top: 0px;
            height: 500px;
            background-color: #FFF3F3;
        }
        .div2 {
            margin-top: 0px;
            height: 550px;
            background-color: white;
        }
        .div3 {
            position: relative;
            margin-top: 0px;
            height: 1000px;
            background-color: white;
        }
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
        }
        .div3-img { 
            width: 100%;
            height: auto;
            opacity: 0.3;
        }
        .div4 {
            margin-top: 0px;
            height: auto;
            background-color: white;
        }
        .div4 {
            margin-top: 0px;
            height: 700px;
            background-color: white;
        }
        .div5 {
            margin-top: 0px;
            height: 750px;
            background-color: #E7E7E7;
        }
        .div6 {
            margin-top: 0px;
            height: 300px;
            background-color: #EFC3C4;
        }
        /* ปุ่มเปลี่ยนภาษา */
        .language-switcher {
            background-color: #ffd700;
            padding: 5px;
            border-radius: 5px;
            display: inline-flex;
        }

        .btn-custom {
            width: 37px;
            height: 30px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 13px;
            margin: 0 5px;
            color: white;
            border: none;
        }

        .btn-en {
            background-color: black;
        }

        .btn-th {
            background-color: red;
        }

        .btn:hover {
            opacity: 0.8;
        }

    </style>
</head>
<body>
    <!-- head -->
    <nav class="navbar navbar-expand-xl cus-nav">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">
                <img style="width: 35px;" src="assets/images/dog-foot.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">หมวดหมู่ผลิตภัณฑ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">รถเข็นสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">สั่งซื้อ / ชำระเงิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">สถานะการสั่งซื้อ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">รีวิวและให้คะแนน</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-5 search-bar" type="search" placeholder="Search" aria-label="Search">
                </form>
                <form class="d-flex">
                <i class="fa-solid fa-basket-shopping fs-6 ms-1 me-1"></i>
                <i class="fa-solid fa-user fs-6 ms-1 me-1"></i>
                </form>
                <div class="d-flex justify-content-center ms-3">
                    <div class="language-switcher">
                        <button class="btn btn-custom btn-en">EN</button>
                        <button class="btn btn-custom btn-th">TH</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- สินค้าแนะนำสำหรับแมว -->
    <div class="container-fluid div2.5 pt-5">
        <div class="container text-center">
            <h3>สินค้าแนะนำสำหรับแมว</h3>
            <div class="row mt-5">
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="row ms-1 me-1">
                        <div class="col-12">
                            <img class="w-100" src="assets/images/purina.png" alt="img">    
                        </div>
                        <div class="col-9 pt-3 pb-2 bg-warning">
                            <h6>เพียวริน่า วัน อาหารเม็ด</h6>
                            <p style="font-size: 9pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี</p>
                        </div> 
                        <div class="col-3 pt-3 pb-3 bg-black">
                            <h5 class="text-white">1.3 <br>กก.</h5>
                        </div>
                        <div class="col-12 text-start">
                            <p class="mt-2 mb-2" style="font-size: 10pt;">อาหารสูตรลูกแมวอายุ 3 สัปดาห์ถึง 1 ปี 1.3 kg</p>
                            <h6 class="mt-1">฿433.00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid div6 pt-4 mt-5">
        <div class="container text-start">
            <div class="row mt-4">
                <div class="col-4">
                    <h4 class="mb-4">เกี่ยวกับ WE LOVE PETSHOP</h4>
                    <p>เกี่ยวกับเรา</p>
                    <p>ข้อกำหนดและเงื่อนไง</p>
                    <p>นโยบายความเป็นส่วนตัว</p>
                    <p>นโนบายคุกกี้</p>
                </div>
                <div class="col-4">
                    <h4 class="mb-4">บริการลูกค้า</h4>
                    <p>ติดต่อเรา</p>
                    <p>บริการ Chat & Shop</p>
                    <p>คำถามที่พบบ่อย</p>
                    <p>ที่ตั้งบริษัท</p>
                </div>
                <div class="col-4">
                    <h4>WE LOVE PETSHOP</h4>
                    <p>ร้านขายอาหารสัตว์เลี้ยง</p>
                </div>
            </div>
        </div>
    </div>
    <?php require('main_footer.php'); ?>
</body>
</html>