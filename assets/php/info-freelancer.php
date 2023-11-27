<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./info-freelancer.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>
<body>
<?php
    include "id_thue.php";
?>
<?php



// Retrieve data from session variables
$ma_profile = $_SESSION['ma_profile'];
$anhtho = $_SESSION['anhtho'];
$ten = $_SESSION['ten'];
$nghenghiep = $_SESSION['nghenghiep'];
$sdt = $_SESSION['sdt'];
$email = $_SESSION['email'];
$diachi = $_SESSION['diachi'];
$gioithieu = $_SESSION['gioithieu'];

// Clear session variables after retrieving data
session_unset();
session_destroy();
// Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
include "db_connection.php";

// Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
$sql = "SELECT * FROM thongtinthue WHERE id_thue = $id_thue";
$result = $conn->query($sql);

// Kiểm tra nếu có kết quả
if ($result->num_rows > 0) {
    // Lặp qua từng dòng kết quả
    while ($row = $result->fetch_assoc()) {
        // Lấy thông tin từ cột cần thiết
        $mathongtinthue = $row['mathongtinthue'];
        $hinhanhthue = $row['hinhanhthue'];
        $ten = $row['ten'];
        $diachi = $row['diachi'];
        $ngaysinh = $row['ngaysinh'];
        $cccd = $row['cccd'];
        $gioitinh = $row['gioitinh'];
        $email = $row['email'];
        $sdt = $row['sdt'];

        
    }
} else {
    $mathongtinthue = "";
    $hinhanhthue = ""; // You may set a default image path or leave it empty
    $ten = "";
    $diachi = "";
    $ngaysinh = "";
    $cccd = "";
    $gioitinh = ""; // Set a default value or leave it empty
    $email = "";
    $sdt = "";

    // Thông báo không tìm thấy thông tin
    echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
}

echo "ID của Thợ: " . $id_thue;
echo "ID của Thợ: " . $hoTen;
echo "Ima thong tin Thợ: " . $mathongtinthue;
echo "ID của Thợ: " . $diachi;


echo "ID của Thợ: " . $ma_profile;
echo "ID của Thợ: " . $ten;


echo "ID của Thợ: " . $nghenghiep;
echo "ID của Thợ: " . $diachi;



echo "ID của Thợ: " . $id_thue;
echo "ID của Thợ: " . $hoTen;

?>
    <div class="main">
    <?php
            include "headercustomer.php";
        ?>

        <div class="container">
            <div class="grid wide">
                <div class="content">
                    <div class="freelancer">
                        <div class="row">
                            <div class="col l-3 m-5 c-12">
                                <div class="freelancer-info">
                                    <div class="personal-info">
                                        <div class="personal-info__avatar">
                                            <img src="./img/avatar-1.png" alt="Ảnh đại diện" class="personal-info__avatar-img">
                                        </div>
                                        <h1 class="personal-info__name">
                                            Trần Minh Khánh
                                        </h1>
                                        <p class="personal-info__title">
                                            Nhiếp ảnh gia tự do
                                        </p>
                                        <div class="personal-info__rating">
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </div>
                                            <span class="personal-info__rating-number">4.9</span>
                                            <span class="personal-info__rating-reviews">(234 đánh giá)</span>
                                        </div>
                                    </div>

                                    <button class="btn btn--primary freelancer-info-btn">Liên hệ</button>

                                    <div class="contact-info">
                                        <div class="contact-info__info">
                                            <i class="contact-info__info-icon fa-solid fa-phone"></i>
                                            <span class="contact-info__info-text">090 **** ***</span>
                                        </div>
                                        <div class="contact-info__info">
                                            <i class="contact-info__info-icon fa-solid fa-envelope"></i>
                                            <span class="contact-info__info-text">t*******@gmail.com</span>
                                        </div>
                                        <div class="contact-info__info">
                                            <i class="contact-info__info-icon fa-solid fa-location-dot"></i>
                                            <span class="contact-info__info-text">Bình Thạnh, Hồ Chí Minh</span>
                                        </div>                                
                                    </div>
                                </div>
                            </div>

                            <div class="col l-9 m-7 c-12">
                                <div class="freelancer-description">
                                    <h4 class="freelancer-description__heading">Giới thiệu</h4>
                                    <p class="freelancer-description__introduce">
                                        <?php echo $gioithieu ?>
                                    </p>
                                </div>
                                <h4 class="freelancer-title">Tác phẩm của tôi</h4>
                                <div class="freelancer-artwork">
                                    <div class="row">
                                        <div class="col l-4 m-12 c-12">
                                            <div class="artwork-collection">
                                                <h5 class="artwork-collection__name">Việt phục</h5>
                                                <div class="artwork-collection__list">
                                                    <img src="./img/concept-1-1.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-1-2.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-1-3.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-1-4.png" alt="" class="artwork-collection__img">
                                                </div>
                                                <p class="artwork-collection__price">1.990.000 đ - 2.990.000 đ</p>
                                                <div class="artwork-collection__info">
                                                    <p class="artwork-collection__info-text">Đã thực hiện: 17 dự án</p>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="artwork-collection__control">
                                                    <!-- <a href="#" class="btn artwork-collection__control-btn">Xem chi tiết</a> -->
                                                    <button class="btn btn--primary artwork-collection__control-btn" onclick="showRequireForm()">Gửi yêu cầu</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l-4 m-12 c-12">
                                            <div class="artwork-collection">
                                                <h3 class="artwork-collection__name">Gia đình</h3>
                                                <div class="artwork-collection__list">
                                                    <img src="./img/concept-2-1.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-2-2.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-2-3.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-2-4.png" alt="" class="artwork-collection__img">
                                                </div>
                                                <p class="artwork-collection__price">1.690.000 đ - 2.290.000 đ</p>
                                                <div class="artwork-collection__info">
                                                    <p class="artwork-collection__info-text">Đã thực hiện: 37 dự án</p>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="artwork-collection__control">
                                                    <!-- <a href="#" class="btn artwork-collection__control-btn">Xem chi tiết</a> -->
                                                    <button class="btn btn--primary artwork-collection__control-btn" onclick="showRequireForm()">Gửi yêu cầu</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l-4 m-12 c-12">
                                            <div class="artwork-collection">
                                                <h3 class="artwork-collection__name">Sinh nhật</h3>
                                                <div class="artwork-collection__list">
                                                    <img src="./img/concept-3-1.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-3-2.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-3-3.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-3-4.png" alt="" class="artwork-collection__img">
                                                </div>
                                                <p class="artwork-collection__price">800.000 đ - 1.200.000 đ</p>
                                                <div class="artwork-collection__info">
                                                    <p class="artwork-collection__info-text">Đã thực hiện: 23 dự án</p>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="artwork-collection__control">
                                                    <!-- <a href="#" class="btn artwork-collection__control-btn">Xem chi tiết</a> -->
                                                    <button class="btn btn--primary artwork-collection__control-btn" onclick="showRequireForm()">Gửi yêu cầu</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l-4 m-12 c-12">
                                            <div class="artwork-collection">
                                                <h3 class="artwork-collection__name">Ngoại cảnh</h3>
                                                <div class="artwork-collection__list">
                                                    <img src="./img/concept-4-1.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-4-2.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-4-3.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-4-4.png" alt="" class="artwork-collection__img">
                                                </div>
                                                <p class="artwork-collection__price">490.000 đ - 590.000 đ</p>
                                                <div class="artwork-collection__info">
                                                    <p class="artwork-collection__info-text">Đã thực hiện: 19 dự án</p>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="artwork-collection__control">
                                                    <!-- <a href="#" class="btn artwork-collection__control-btn">Xem chi tiết</a> -->
                                                    <button class="btn btn--primary artwork-collection__control-btn" onclick="showRequireForm()">Gửi yêu cầu</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l-4 m-12 c-12">
                                            <div class="artwork-collection">
                                                <h3 class="artwork-collection__name">Học đường</h3>
                                                <div class="artwork-collection__list">
                                                    <img src="./img/concept-5-1.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-5-2.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-5-3.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-5-4.png" alt="" class="artwork-collection__img">
                                                </div>
                                                <p class="artwork-collection__price">150.000 đ - 290.000 đ</p>
                                                <div class="artwork-collection__info">
                                                    <p class="artwork-collection__info-text">Đã thực hiện: 09 dự án</p>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="artwork-collection__control">
                                                    <!-- <a href="#" class="btn artwork-collection__control-btn">Xem chi tiết</a> -->
                                                    <button class="btn btn--primary artwork-collection__control-btn" onclick="showRequireForm()">Gửi yêu cầu</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l-4 m-12 c-12">
                                            <div class="artwork-collection">
                                                <h3 class="artwork-collection__name">Tết Tết Tết</h3>
                                                <div class="artwork-collection__list">
                                                    <img src="./img/concept-6-1.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-6-2.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-6-3.png" alt="" class="artwork-collection__img">
                                                    <img src="./img/concept-6-4.png" alt="" class="artwork-collection__img">
                                                </div>
                                                <p class="artwork-collection__price">1.000.000 đ - 1.500.000 đ</p>
                                                <div class="artwork-collection__info">
                                                    <p class="artwork-collection__info-text">Đã thực hiện: 23 dự án</p>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="artwork-collection__control">
                                                    <!-- <a href="#" class="btn artwork-collection__control-btn">Xem chi tiết</a> -->
                                                    <button class="btn btn--primary artwork-collection__control-btn" onclick="showRequireForm()">Gửi yêu cầu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hiển thị số trang -->
                                <ul class="pagination">
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">
                                            <i class="pagination-item__icon fa-solid fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="pagination-item pagination-item--active">
                                        <a href="" class="pagination-item__link">1</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">2</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">3</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">
                                            <i class="pagination-item__icon fa-solid fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="review">
                        <h1 class="review__heading">Đánh giá</h1>
                        <div class="row">
                            <div class="col l-6 m-12 c-12">
                                <div class="review-item">
                                    <div class="review-item__avatar">
                                        <img src="./img/avatar-10.png" alt="" class="review-item__avatar-img">
                                    </div>

                                    <div class="review-item__content">
                                        <h5 class="review-item__content-name">Nguyễn Ngọc Diễm</h5>
                                        <p class="review-item__content-time">08/10/2023 10:08</p>
                                        <div class="star-rating">
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                        </div>
                                        <p class="review-item__content-text">
                                            Tôi đã thuê nhiếp ảnh gia này để chụp ảnh gia đình và tôi rất hài lòng với kết quả. Anh ấy đã tạo ra những bức ảnh tuyệt đẹp, ghi lại khoảnh khắc đáng nhớ của gia đình chúng tôi. Chúng tôi không thể hạnh phúc hơn với bộ ảnh gia đình này.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="review-item">
                                    <div class="review-item__avatar">
                                        <img src="./img/avatar-11.png" alt="" class="review-item__avatar-img">
                                    </div>

                                    <div class="review-item__content">
                                        <h5 class="review-item__content-name">Ngô Đức Tùng</h5>
                                        <p class="review-item__content-time">08/10/2023 09:53</p>
                                        <div class="star-rating">
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                        </div>
                                        <p class="review-item__content-text">
                                            Tôi đã chụp ảnh trong trang phục truyền thống Việt Nam cùng với anh này. Anh ấy đã tạo ra những bức ảnh đẹp và ấn tượng, thể hiện sự tôn trọng và đẹp của trang phục truyền thống. Tôi rất hạnh phúc với bộ ảnh này.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="review-item">
                                    <div class="review-item__avatar">
                                        <img src="./img/avatar-12.png" alt="" class="review-item__avatar-img">
                                    </div>

                                    <div class="review-item__content">
                                        <h5 class="review-item__content-name">Vũ Quốc Hùng</h5>
                                        <p class="review-item__content-time">07/10/2023 21:37</p>
                                        <div class="star-rating">
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                        </div>
                                        <p class="review-item__content-text">
                                            Nhiếp ảnh gia này thực sự xuất sắc! Anh ta đã tạo ra những bức ảnh đẹp và tạo điểm nhấn cho từng khoảnh khắc quan trọng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="review-item">
                                    <div class="review-item__avatar">
                                        <img src="./img/avatar-13.png" alt="" class="review-item__avatar-img">
                                    </div>

                                    <div class="review-item__content">
                                        <h5 class="review-item__content-name">Lê Dương Nhiên</h5>
                                        <p class="review-item__content-time">07/10/2023 19:02</p>
                                        <div class="star-rating">
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                        </div>
                                        <p class="review-item__content-text">
                                            Anh ấy đã nắm bắt tốt không gian và tạo nên những bức hình thú vị. Sự chuyên nghiệp và sáng tạo của anh ấy làm cho buổi chụp trở thành một trải nghiệm tuyệt vời.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="review-item">
                                    <div class="review-item__avatar">
                                        <img src="./img/avatar-14.png" alt="" class="review-item__avatar-img">
                                    </div>

                                    <div class="review-item__content">
                                        <h5 class="review-item__content-name">Nguyễn Hạnh Linh</h5>
                                        <p class="review-item__content-time">07/10/2023 20:10</p>
                                        <div class="star-rating">
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                        </div>
                                        <p class="review-item__content-text">
                                            Anh ấy đã chọn được không gian và góc chụp tốt, tạo ra những bức hình đẹp và truyền đạt được tinh thần của học đường. Tôi rất hài lòng với kết quả và sẽ chắc chắn thuê anh ấy lần nữa trong tương lai.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="review-item">
                                    <div class="review-item__avatar">
                                        <img src="./img/avatar-15.png" alt="" class="review-item__avatar-img">
                                    </div>

                                    <div class="review-item__content">
                                        <h5 class="review-item__content-name">Trương Minh Phát</h5>
                                        <p class="review-item__content-time">07/10/2023 13:17</p>
                                        <div class="star-rating">
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                        </div>
                                        <p class="review-item__content-text">
                                            Anh ấy đã tạo ra những bức ảnh sáng tạo và chất lượng cao, thể hiện được tinh thần và không gian. Sự chuyên nghiệp và sự quan tâm đến chi tiết của anh ấy thực sự ấn tượng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="modal__container">
            <div id="send-require-form" class="require-form">
                <div class="require-form__header">
                    <div class="require-form__close" onclick="hideRequireForm()">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <h3 class="require-form__heading">Yêu cầu của bạn</h3>
                </div>
                <?php
                    include "connect.php";
                ?>
                <?php
                    $connect = new connect;
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                        $insert_postjob = $connect -> insert_postjob();
                    }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="require-form__form">

                        <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-name" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-file-signature"></i>
                                                Mã thông tin người thuê
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-ma" id="post-job__form-name" type="text" class="post-job__form-input" placeholder="Tên buổi chụp ảnh/makeup" value="<?php echo $mathongtinthue ?>">
                                        </div>
                        </div>
                        <div class="row require-form__item">
                            <div class="col l-4 m-6 c-12">
                                <label for="require-form__name" class="require-form__text">
                                    <i class="require-form__icon fa-solid fa-file-signature"></i>
                                    Tên buổi chụp ảnh/makeup
                                </label>
                            </div>
                            <div class="col l-8 m-6 c-12">
                                <input name="post-job__form-name" id="require-form__name" type="text" class="require-form__input" placeholder="Tên buổi chụp ảnh/makeup">
                            </div>
                        </div>

                        <div class="row require-form__item">
                            <div class="col l-4 m-6 c-12">
                                <label for="require-form__place" class="require-form__text">
                                    <i class="require-form__icon fa-solid fa-location-dot"></i>
                                    Địa điểm
                                </label>
                            </div>
                            <div class="col l-8 m-6 c-12">
                                <input name="post-job__form-place" id="require-form__place" type="text" class="require-form__input" placeholder="Địa điểm">
                            </div>
                        </div>

                        <div class="row require-form__item">
                            <div class="col l-4 m-6 c-12">
                                <label for="require-form__time" class="require-form__text">
                                    <i class="require-form__icon fa-solid fa-calendar-days"></i>
                                    Thời gian
                                </label>
                            </div>
                            <div class="col l-8 m-6 c-12">
                                <input name="post-job__form-time" id="require-form__time" type="date" class="require-form__input">
                            </div>
                        </div>

                        <div class="row require-form__item">
                            <div class="col l-4 m-6 c-12">
                                <label for="require-form__price" class="require-form__text">
                                    <i class="require-form__icon fa-solid fa-sack-dollar"></i>
                                    Mức giá
                                </label>
                            </div>
                            <div class="col l-8 m-6 c-12">
                                <div class="require-form__price-input">
                                <input name="post-job__form-price" id="post-job__form-price" type="text" class="post-job__form-input" placeholder="Giá (khoảng bao nhiêu)">

                                </div>
                            </div>
                        </div>

                        <div class="row require-form__item">
                            <div class="col l-4 m-6 c-12">
                                <label for="require-form__style" class="require-form__text">
                                    <i class="require-form__icon fa-solid fa-wand-magic-sparkles"></i>
                                    Phong cách
                                </label>
                            </div>
                            <div class="col l-8 m-6 c-12">
                                <input name="post-job__form-style" id="require-form__style" type="text" class="require-form__input" placeholder="Phong cách">
                            </div>
                        </div>

                        <div class="row require-form__item">
                            <div class="col l-4 m-6 c-12">
                                <label for="require-form__event" class="require-form__text">
                                    <i class="require-form__icon fa-solid fa-holly-berry"></i>
                                    Sự kiện
                                </label>
                            </div>
                            <div class="col l-8 m-6 c-12">
                                <input name="post-job__form-event" id="require-form__event" type="text" class="require-form__input" placeholder="Sự kiện">
                            </div>
                        </div>
                        <div class="row require-form__item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-upload" class="require-form__text">
                                                <i class="require-form__icon fa-solid fa-upload"></i>
                                                Tải ảnh mẫu (phong cách muốn chụp)
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="hinhanh" id="post-job__form-upload" type="file" class="post-job__form-input">
                                        </div>
                        </div>

                        <div class="row require-form__item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-description" class="prequire-form__text">
                                                <i class="require-form__icon fa-regular fa-pen-to-square"></i>
                                                Mô tả chi tiết các yêu cầu
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <textarea name="post-job__form-description" id="post-job__form-description" class="post-job__form-input" cols="1" rows="5"></textarea>
                                        </div>
                        </div>
                    </div>

                    <div class="require-form__control">
                        <button type="submit" class="btn btn--primary artwork-collection__control-btn require-form-btn">Gửi yêu cầu</button>
                        <!-- <button class="btn require-form-btn require-form__control-btn">Lưu bản nháp</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const modal = document.querySelector('.modal');
        const modalContainer = document.querySelector('.modal__container')

        function showRequireForm() {
            modal.classList.add('open');
        }

        function hideRequireForm() {
            modal.classList.remove('open');
        }

        modal.addEventListener('click', hideRequireForm)

        modalContainer.addEventListener('click', function (event) {
            event.stopPropagation()
        })
    </script>
</body>
</html>