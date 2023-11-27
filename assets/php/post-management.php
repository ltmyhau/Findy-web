<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./post-management.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>
<body>
<?php
    include "id_thue.php";
?>
<?php

// Các công việc khác cần làm trên trang mainphoto.php

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
                    <div class="post">
                        <h1 class="post-heading">Danh sách bài đăng</h1>
                        <div class="row">
                            <div class="col l-6 m-12 c-12">
                                <div class="post-content">
                                    <h3 class="post-content__title">Tìm thợ chụp ảnh sinh nhật</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Lê Thị Mỹ Hậu</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">1.000.000 đ - 2.000.000 đ</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <p class="post-content__text">
                                        Tôi muốn ghi lại những khoảnh khắc đáng nhớ cho bộ ảnh cưới của mình. Tôi cần thợ chụp ảnh có kinh nghiệm chụp ngoại cảnh để làm album Wedding. Dưới đây là một số yêu cầu mà tôi đang tìm kiếm ở một thợ chụp ảnh.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Photographer</a>
                                        <a href="#" class="post-content__detail">Ảnh cưới</a>
                                    </div>
                                </div>
                                <div class="candidate">
                                    <h2 class="candidate__heading">Danh sách thợ đã ứng tuyển</h2>
                                    <div class="candidate__list">
                                        <div class="candidate__resume">
                                            <div class="candidate__resume-warp">
                                                <div class="candidate__avatar">
                                                    <img src="./img/avatar-1.png" alt="Ảnh đại diện" class="candidate__avatar-img">
                                                    <p class="candidate__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="candidate__info">
                                                    <span class="candidate__title">
                                                        Trần Minh Khánh
                                                    </span>
                                                    <span class="candidate__text">
                                                        Nhiếp ảnh gia tự do
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="candidate__rating">
                                                        <strong>4.9</strong>
                                                        <span>(234 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="candidate__control">
                                                <a href="./order-management.php">
                                                    <button class="btn btn--primary candidate__control-btn">Chấp nhận</button>
                                                </a>
                                                <button class="btn btn--primary candidate__control-btn">Từ chối</button>
                                            </div>
                                        </div>
                                        <div class="candidate__resume">
                                            <div class="candidate__resume-warp">
                                                <div class="candidate__avatar">
                                                    <img src="./img/avatar-3.png" alt="Ảnh đại diện" class="candidate__avatar-img">
                                                    <p class="candidate__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="candidate__info">
                                                    <span class="candidate__title">
                                                        Nguyễn Văn Nam
                                                    </span>
                                                    <span class="candidate__text">
                                                        Chuyên ảnh cưới
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                                    </div>
                                                    <div class="candidate__rating">
                                                        <strong>4.6</strong>
                                                        <span>(120 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="candidate__control">
                                                <a href="order-management.php">
                                                    <button class="btn btn--primary candidate__control-btn">Chấp nhận</button>
                                                </a>
                                                <button class="btn btn--primary candidate__control-btn">Từ chối</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="post-content">
                                    <h3 class="post-content__title">Tìm thợ make-up cô dâu đám cưới</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Lê Thị Mỹ Hậu</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">3.000.000 đ - 5.000.000 đ</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <p class="post-content__text">
                                        Tôi muốn thật xinh đẹp trong chính đám cưới của mình. Tôi cần thợ make-up có kinh nghiệm make-up cô dâu giúp tôi thật lộng lẫy trong khoảnh khắc quý giá ấy. Dưới đây là một số yêu cầu mà tôi đang tìm kiếm ở một thợ chụp ảnh.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Make-up</a>
                                        <a href="#" class="post-content__detail">Cô dâu</a>
                                    </div>
                                </div>
                                <div class="candidate">
                                    <h2 class="candidate__heading">Danh sách thợ đã ứng tuyển</h2>
                                    <div class="candidate__list">
                                        <div class="candidate__resume">
                                            <div class="candidate__resume-warp">
                                                <div class="candidate__avatar">
                                                    <img src="./img/avatar-2.png" alt="Ảnh đại diện" class="candidate__avatar-img">
                                                    <p class="candidate__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="candidate__info">
                                                    <span class="candidate__title">
                                                        Trương Thị Thu Trang
                                                    </span>
                                                    <span class="candidate__text">
                                                        Make-up cô dâu
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="candidate__rating">
                                                        <strong>4.9</strong>
                                                        <span>(108 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="candidate__control">
                                                <a href="order-management.php">
                                                    <button class="btn btn--primary candidate__control-btn">Chấp nhận</button>
                                                </a>
                                                <button class="btn btn--primary candidate__control-btn">Từ chối</button>
                                            </div>
                                        </div>
                                        <div class="candidate__resume">
                                            <div class="candidate__resume-warp">
                                                <div class="candidate__avatar">
                                                    <img src="./img/avatar-6.png" alt="Ảnh đại diện" class="candidate__avatar-img">
                                                    <p class="candidate__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="candidate__info">
                                                    <span class="candidate__title">
                                                        Hoàng Thị Diệu Linh
                                                    </span>
                                                    <span class="candidate__text">
                                                        Make-up sự kiện
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                                    </div>
                                                    <div class="candidate__rating">
                                                        <strong>4.6</strong>
                                                        <span>(93 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="candidate__control">
                                                <a href="order-management.php">
                                                    <button class="btn btn--primary candidate__control-btn">Chấp nhận</button>
                                                </a>
                                                <button class="btn btn--primary candidate__control-btn">Từ chối</button>
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
                            <a href=""><li><img src="./img/app-store.svg" alt=""></li></a>
                            <a href=""><li><img src="./img/google-play.svg" alt=""></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
</body>
</html>