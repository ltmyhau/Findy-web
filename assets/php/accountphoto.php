<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./accountphoto.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>
<body>
<?php
    include "id_tho.php";
?>

<?php

$id_thue = $_SESSION['id_tho'];
$hoTen = $_SESSION['hoTen'];
$gmail = $_SESSION['gmail'];
// Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
include "db_connection.php";

// Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
$sql = "SELECT * FROM thongtintho WHERE id_tho = $id_tho";
$result = $conn->query($sql);

// Kiểm tra nếu có kết quả
if ($result->num_rows > 0) {
    // Lặp qua từng dòng kết quả
    while ($row = $result->fetch_assoc()) {
        // Lấy thông tin từ cột cần thiết
        $mathongtintho = $row['mathongtintho'];
        $tentho = $row['tentho'];
        $diachi = $row['diachi'];
        $ngaysinh = $row['ngaysinh'];
        $socccd = $row['socccd'];
        $gioitinh = $row['gioitinh'];
        $email = $row['email'];
        $sdt = $row['sdt'];

        
    }
} else {
    $mathongtintho = "";
   // You may set a default image path or leave it empty
    $tentho = "";
    $diachi = "";
    $ngaysinh = "";
    $socccd = "";
    $gioitinh = ""; // Set a default value or leave it empty
    $email = "";
    $sdt = "";

    // Thông báo không tìm thấy thông tin
    echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
}

// Đóng kết nối
$conn->close();
// Lấy thông tin người dùng từ session
echo "ID của Thợ: " . $id_tho;
echo "ID của Thợ: " . $hoTen;
// Hiển thị thông tin người dùng

?> 

    <div class="main">
       <?php
            include "headerphoto1.php";
       ?>

        <div class="container">
            <div class="grid wide">
                <div class="content">
                    <div class="account__header">
                        <div class="account__header-avatar">
                            <img src="./img/avatar-16.png" alt="Ảnh đại diện" class="account__header-avatar-img">
                            <p class="account__header-verified">Đã xác thực</p>
                        </div>
                        <div class="account__header-info">
                            <h1 class="account__header-name"><?php echo $hoTen ?></h1>
                            <h3 class="account__header-address"><?php echo $diachi ?></h3>
                        </div>
                    </div>

                    <div class="account__container">
                        <div class="row">
                            <div class="col l-7 m-12 c-12">
                                <div class="account__personal">
                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Quản lý tài khoản</h2>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Tài khoản</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="<?php echo $gmail ?>" readonly>
                                        </div>
                                    </div>
                                    <a href="#" class="account__personal-change-password">Đổi mật khẩu</a>
                                    
                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Thông tin cá nhân</h2>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Ngày sinh</p>
                                            <input type="date" name="" id="" class="account__personal-input" value="<?php echo $ngaysinh ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Số CCCD</p>
                                            <input type="text" name="" id="" class="account__personal-input" value ="<?php echo $socccd ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Giới tính</p>
                                            <div class="account__personal-gender">
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="male" class="account__gender-input">
                                                    <label for="male">Nam</label>
                                                </div>
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="female" class="account__gender-input" checked>
                                                    <label for="female">Nữ</label>
                                                </div>
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="other" class="account__gender-input">
                                                    <label for="other">Khác</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Email</p>
                                            <input type="email" name="" id="" class="account__personal-input" value = "<?php echo  $email ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Điện thoại</p>
                                            <input type="text" name="" id="" class="account__personal-input" value = "<?php echo $sdt ?>">
                                        </div>
                                    </div>

                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Vô hiệu hóa và khóa tài khoản</h2>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Vô hiệu hóa</h4>
                                                <p>Tạm thời ẩn hồ sơ</p>
                                            </span>
                                            <button class="btn account__personal-btn">Vô hiệu hóa tài khoản</button>                                            
                                        </div>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Xóa </h4>
                                                <p>Xóa hồ sơ vĩnh viễn</p>
                                            </span>
                                            <button class="btn account__personal-btn">Xóa tài khoản</button>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-5 m-12 c-12">
                                <div class="account__history">
                                    <div class="account__history-save">
                                        <div class="account__history-save-content">
                                            Đã lưu tin
                                        </div>
                                        <div class="account__history-save-items">
                                            <div class="jobbest-mid">
                                                <div class="row">
                                                    <a href="<?php echo $detailLink; ?>" class="col c-12 m-12 l-12">
                                                        <div class="jobbest-items ">
                                                            <div class="jobbest-mid-top">
                                                                <div class="row">
                                                                    <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                                        <img src="./img/avatar-1.png" alt="">
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right col c-9 m-9 l-9" >
                                                                        chụp ảnh cưới
                                                                        <p>Trần Thanh VIệt</p>
                                                                        <p>Giá: 500.000</p>
                                                                        <p>Photoshop</p>
                                                                        <p>TP.HCM</p>
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right2 col c-1 m-1 l-1">
                                                                            <i class="fa-regular fa-heart"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>   
                                                    <a href="<?php echo $detailLink; ?>" class="col c-12 m-12 l-12">
                                                        <div class="jobbest-items ">
                                                            <div class="jobbest-mid-top">
                                                                <div class="row">
                                                                    <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                                        <img src="./img/avatar-2.png" alt="">
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right col c-9 m-9 l-9" >
                                                                        chụp ảnh cưới
                                                                        <p>Trần Thanh VIệt</p>
                                                                        <p>Giá: 500.000</p>
                                                                        <p>Photoshop</p>
                                                                        <p>TP.HCM</p>
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right2 col c-1 m-1 l-1">
                                                                            <i class="fa-regular fa-heart"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> 
                                                    <a href="<?php echo $detailLink; ?>" class="col c-12 m-12 l-12">
                                                        <div class="jobbest-items ">
                                                            <div class="jobbest-mid-top">
                                                                <div class="row">
                                                                    <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                                        <img src="./img/avatar-3.png" alt="">
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right col c-9 m-9 l-9" >
                                                                        chụp ảnh cưới
                                                                        <p>Trần Thanh VIệt</p>
                                                                        <p>Giá: 500.000</p>
                                                                        <p>Photoshop</p>
                                                                        <p>TP.HCM</p>
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right2 col c-1 m-1 l-1">
                                                                            <i class="fa-regular fa-heart"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> 
                                                                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="footer">
            <div class="grid wide">
                <div class="footer_container row">
                    <div class="footer_logo col c-2 m-2 l-2">
                        <div class="footer_logo-logo">
                            <img src="./assets/img/381365316_305905915351952_8433167268195273607_n.png" alt="">
                            FINDY
                        </div>
                        <div class="footer_logo-english">
                            <i class="fa-solid fa-earth-asia"></i>
                            <a href="">VietNam</a>/ <a href="">Tiếng Việt</a>
                        </div>
                        <div class="footer_logo-help">
                            <i class="fa-solid fa-circle-question"></i>
                            Giúp đỡ & Hỗ trợ
                        </div>
                        <div class="footer_logo-accessibility">
                            <i class="fa-solid fa-universal-access"></i>
                            Trợ năng
                        </div>
                    </div>
                    <div class="footer_findy col c-2 m-2 l-2">
                        <h1>Findy</h1>
                        <ul>
                            <a href=""><li>Dự án</li></a>
                            <a href=""><li>Cuộc thi</li></a>
                            <a href=""><li>Thành viên</li></a>
                            <a href=""><li>Quản lý dự án</li></a>
                            <a href=""><li>Hình ảnh khắp nơi</li></a>
                            <a href=""><li>Xác thực</li></a>
                        </ul>

                    </div>
                    <div class="footer_introduce col c-2 m-2 l-2">
                        <h1>Giới thiệu</h1>
                        <ul>
                            <a href=""><li>Về chúng tôi</li></a>
                            <a href=""><li>Cách thức hoạt động</li></a>
                            <a href=""><li>Bảo mật</li></a>
                            <a href=""><li>Nhà đầu tư</li></a>
                            <a href=""><li>Sơ đồ trang</li></a>
                            <a href=""><li>Tin tức</li></a>
                            <a href=""><li>Đội ngũ</li></a>
                            <a href=""><li>Công việc</li></a>
                        </ul>
                    </div>
                    <div class="footer_rules col c-2 m-2 l-2">
                        <h1>Điều khoản</h1>
                        <ul>
                            <a href=""><li>Chính sách bảo mật</li></a>
                            <a href=""><li>Điều khoản và điều kiện</li></a>
                            <a href=""><li>Chính sách bản quyền</li></a>
                            <a href=""><li>Quy tắc ứng xử</li></a>
                            <a href=""><li>Các loại phí</li></a>
                        </ul>
                    </div>
                    <div class="footer_bussiness col c-2 m-2 l-2">
                        <h1>Đối tác</h1>
                        <ul>
                            <a href=""><li>Escrow.com</li></a>
                            <a href=""><li>Loadshift</li></a>
                            <a href=""><li>Warrior Forum</li></a>
                        </ul>
                    </div>
                    <div class="footer_app col c-2 m-2 l-2">
                        <h1>Ứng dụng</h1>
                        <ul>
                            <a href=""><li><img src="./assets/img/app-store.svg" alt=""></li></a>
                            <a href=""><li><img src="./assets/img/google-play.svg" alt=""></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</body>
</html>