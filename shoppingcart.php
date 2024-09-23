<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
   
    <style>
        body {
            background-color: #f4e7de;
            font-family: 'IBM Plex Sans Thai', sans-serif;
          }
       
        /* Navbar custom styling */
        .navbar {
            background-color: #f8b8b4;
        }
 
        .navbar-nav a {
            color: rgb(0, 0, 0);
            font-weight: bold;
            margin-right: 10px;
        }
 
        .navbar-nav a:hover {
            text-decoration: none;
            color: #ffe7ed;
        }
 
        .dropdown-menu {
            background-color: #f8b8b4;
        }
 
        .dropdown-item:hover {
            background-color: #e01b4c;
            color: white;
        }
 
        /* Custom search bar */
        .search-bar {
            border-radius: 50px;
            border: none;
            padding: 5px 15px;
            width: 200px;
        }
 
        .btn-lang {
            border-radius: 50px;
            padding: 5px 15px;
            font-weight: bold;
        }
 
        .btn-lang.en {
            background-color: #ffcc00;
        }
 
        .btn-lang.th {
            background-color: #d4173d;
        }
 
        .navbar-icons img {
            margin-left: 10px;
        }
 
        .navbar-icons {
            display: flex;
            align-items: center;
        }
        .cart-header a:hover {
      text-decoration: none;
      color: #e01b4c;
    }
 
    .cart-title {
      font-size: 36px;
      font-weight: bold;
      margin-top: 20px;
    }
 
    .cart-item {
      background-color: white;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
    }
 
    .cart-item img {
      width: 100px;
    }
 
    .cart-summary {
      background-color: #2e2e2e;
      color: white;
      padding: 20px;
      border-radius: 10px;
    }
 
    .summary-title {
      font-size: 20px;
      font-weight: bold;
    }
 
    .checkout-btn {
      background-color: #e01b4c;
      color: white;
    }
 
    .checkout-btn:hover {
      background-color: #d4173d;
    }
   
    </style>
</head>
 
<body>
 
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
       
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> หมวดหมู่ผลิตภัณฑ์ </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="#">อาหารสุนัข</a></li>
                            <li><a class="dropdown-item" href="#">อาหารแมว</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">รถเข็นสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สั่งซื้อ / ชำระเงิน</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="statusDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> สถานะการสั่งซื้อ </a>
                        <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                            <li><a class="dropdown-item" href="#">สถานะที่ 1</a></li>
                            <li><a class="dropdown-item" href="#">สถานะที่ 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">รีวิวและให้คะแนน</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <input type="text" class="form-control search-bar" placeholder="Search">
                    <div class="navbar-icons ms-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="cart" width="24">
                        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="user" width="24">
 
                    </div>
                    <button class="btn btn-lang en ms-2">EN</button>
                    <button class="btn btn-lang th ms-1">TH</button>
                </div>
            </nav>
            <div class="container">
                <div class="cart-title text-center mt-4">รถเข็นสินค้า</div>
                <p class="text-center">You have 3 items in your cart</p>
           
                <div class="row">
                  <!-- Cart Items Section -->
                  <div class="col-lg-8">
                    <!-- Item 1 -->
                    <div class="cart-item d-flex align-items-center">
                      <img src="https://www.petnme.co.th/wp-content/uploads/2024/05/1101040030002-1_1.jpg" alt="item1" class="img-fluid">
                      <div class="ms-4">
                        <h5>Hill’s ฮิลส์ อาหารเม็ด
                            สำหรับสุนัขสูงอายุ 7 ขึ้นไป 5.67 kg</h5>
                        <p>Size: 5.67 kg</p>
                        <h6>฿2,400.00</h6>
                      </div>
                      <div class="ms-auto d-flex align-items-center">
                        <button class="btn btn-outline-secondary">-</button>
                        <input type="text" value="1" class="form-control mx-2 text-center" style="width: 50px;">
                        <button class="btn btn-outline-secondary">+</button>
                      </div>
                    </div>
           
                    <!-- Item 2 -->
                    <div class="cart-item d-flex align-items-center">
                      <img src="https://www.petnme.co.th/wp-content/uploads/2024/05/1101011740002-2.jpg" alt="item2" class="img-fluid">
                      <div class="ms-4">
                        <h5>Royal Canin โรยัล คานิน อาหารเม็ด สำหรับสุนัขโต สายพันธุ์เล็ก เลี้ยงในบ้าน อายุ 10 เดือน – 8 ปี 500 g</h5>
                        <p>Size: 500 g</p>
                        <h6>฿199.00</h6>
       
                      </div>
                      <div class="ms-auto d-flex align-items-center">
                        <button class="btn btn-outline-secondary">-</button>
                        <input type="text" value="1" class="form-control mx-2 text-center" style="width: 50px;">
                        <button class="btn btn-outline-secondary">+</button>
                      </div>
                    </div>
           
                    <!-- Item 3 -->
                    <div class="cart-item d-flex align-items-center">
                      <img src="https://www.petnme.co.th/wp-content/uploads/2024/05/2103110050002-1.jpg" alt="item3" class="img-fluid">
                      <div class="ms-4">
                        <h5>Royal Canin โรยัล คานิน อาหารเม็ด สำหรับแมวโตรูปร่างดี อายุ 1 ปีขึ้นไป 2 kg</h5>
                        <p>Size: 2 kg</p>
                        <h6>฿499.00</h6>
                      </div>
                      <div class="ms-auto d-flex align-items-center">
                        <button class="btn btn-outline-secondary">-</button>
                        <input type="text" value="1" class="form-control mx-2 text-center" style="width: 50px;">
                        <button class="btn btn-outline-secondary">+</button>
                      </div>
                    </div>
                  </div>
           
                  <!-- Order Summary Section -->
                  <div class="col-lg-4">
                    <div class="cart-summary">
                      <div class="summary-title">สรุปรายการสั่งซื้อ</div>
                      <ul class="list-unstyled">
                        <li>Hill's: ฿2,400.00</li>
                        <li>Royal Canin (500g): ฿199.00</li>
                        <li>Royal Canin (2kg): ฿499.00</li>
                      </ul>
                      <hr>
                      <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>฿3,098.00</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <span>Shipping</span>
                        <span>฿4.00</span>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-between">
                        <strong>Total (Tax incl.)</strong>
                        <strong>฿3,102.00</strong>
                      </div>
                      <button class="btn checkout-btn w-100 mt-3">Checkout</button>
                    </div>
                  </div>
                </div>
              </div>
             
 
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
 
</html>