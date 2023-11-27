<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <title>Findy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./find-timtho.css">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
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
    <?php
            include "headercustomer.php";
        ?>
    <div class="main">
        

        <div class="container">
            <div class="grid wide">
                <div class="row content">
                    <div class="col l-3 m-4 c-0">
                        <div class="filter">
                            <h3 class="filter__heading">
                                Lọc
                            </h3>

                            <div class="filter__list">
                                <div class="filter__item-warp">
                                    <div id="filter__place-item" class="filter__item">
                                        Địa điểm
                                        <i id="filter__place-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__place-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__place-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-1" class="">
                                            <label for="place-1" class="filter__menu-name">Hồ Chí Minh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-2" class="">
                                            <label for="place-2" class="filter__menu-name">Hà Nội</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-3" class="">
                                            <label for="place-3" class="filter__menu-name">Đà Nẵng</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-4" class="">
                                            <label for="place-4" class="filter__menu-name">Đà Lạt</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-5" class="">
                                            <label for="place-5" class="filter__menu-name">Phú Quốc</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-6" class="">
                                            <label for="place-6" class="filter__menu-name">Khác</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__price-item" class="filter__item">
                                        Giá
                                        <i id="filter__price-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__price-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__price-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="text" name="" id="" class="filter__price-input" placeholder="₫ TỪ">
                                            <span class="filter__menu-name">-</span>
                                            <input type="text" name="" id="" class="filter__price-input" placeholder="₫ ĐẾN">
                                        </div>
                                        <button class="btn btn--primary filter__menu-btn">ÁP DỤNG</button>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__experience-item" class="filter__item">
                                        Kinh nghiệm
                                        <i id="filter__experience-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__experience-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__experience-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-1" class="">
                                            <label for="exp-1" class="filter__menu-name">Dưới 1 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-2" class="">
                                            <label for="exp-2" class="filter__menu-name">1 - 3 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-3" class="">
                                            <label for="exp-3" class="filter__menu-name">3 - 5 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-4" class="">
                                            <label for="exp-4" class="filter__menu-name">Trên 5 năm</;>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__skill-item" class="filter__item">
                                        Kỹ năng
                                        <i id="filter__skill-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__skill-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__skill-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-1" class="">
                                            <label for="skill-1" class="filter__menu-name">Chụp ảnh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-2" class="">
                                            <label for="skill-2" class="filter__menu-name">Quay video</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-3" class="">
                                            <label for="skill-3" class="filter__menu-name">Edit ảnh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-4" class="">
                                            <label for="skill-4" class="filter__menu-name">Edit video</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__rating-item" class="filter__item">
                                        Đánh giá
                                        <i id="filter__rating-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__rating-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__rating-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-1" class="">
                                            <label for="rating-1" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-2" class="">
                                            <label for="rating-2" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-3" class="">
                                            <label for="rating-3" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-4" class="">
                                            <label for="rating-4" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-5" class="">
                                            <label for="rating-5" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-6" class="">
                                            <label for="rating-6" class="star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l-9 m-8 c-12">
                        <div class="freelancer">
                                <?php
                                include "connect.php"
                                ?>
                                <?php
                                    $connect = new connect;        
                                    $select_profile = $connect ->select_profile();
                                ?>
                            <div class="row">
                                <?php
                                    if($select_profile){
                                        while($result = $select_profile->fetch_assoc()){
                                            
                                            $_SESSION['ma_profile'] = $result['ma_profile'];
                                            $_SESSION['anhtho'] = $result['anhtho'];
                                            $_SESSION['ten'] = $result['ten'];
                                            $_SESSION['nghenghiep'] = $result['nghenghiep'];
                                            $_SESSION['sdt'] = $result['sdt'];
                                            $_SESSION['email'] = $result['email'];
                                            $_SESSION['diachi'] = $result['diachi'];
                                            $_SESSION['gioithieu'] = $result['gioithieu'];
                                ?>
                                    
                                    <div class="col l-4 m-6 c-12">
                                        <div class="freelancer-item">
                                            <a href="info-freelancer.php" class="freelancer-item-warp">
                                                <div class="freelancer-item__personal-info">
                                                    <div class="freelancer-item__avatar">
                                                        <img src="./img/avatar-1.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                        <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                    </div>
                                                    
                                                    <div class="freelancer-item__info">
                                                        <span class="freelancer-item__title">
                                                            <?php echo $result['ten'] ?>
                                                        </span>
                                                        <span class="freelancer-item__text">
                                                            <?php echo $result['nghenghiep'] ?>
                                                        </span>
                                                        <div class="star-rating">
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                    <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="freelancer-item__rating">
                                                            <strong>4.9</strong>
                                                            <span>(234 đánh giá)</span>
                                                        </div>
                                                    </div>     
                                                </div>

                                                <div class="freelancer-item__contact">
                                                    <div class="freelancer-item__contact-info">
                                                        <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                        <span class="freelancer-item__contact-text"><?php echo $result['sdt'] ?></span>
                                                    </div>
                                                    <div class="freelancer-item__contact-info">
                                                        <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                        <span class="freelancer-item__contact-text"><?php  echo $result['email'] ?></span>
                                                    </div>
                                                    <div class="freelancer-item__contact-info">
                                                        <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                        <span class="freelancer-item__contact-text"><?php echo $result['diachi'] ?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="slide-show-artwork">
                                                    <div class="freelancer-item__artwork-list">
                                                        <img src="./img/collection-1-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                        <img src="./img/collection-1-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                        <img src="./img/collection-1-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- <div class="freelancer-item__view-details">
                                                <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                <?php
                                    }
                                }
                                ?>      
                            </div>
                        </div>

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
                                <a href="" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">5</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">10</a>
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
        </div>
    </div>
    <section>
        <div class="footer">
            <div class="grid wide">
                <div class="footer_container row">
                    <div class="footer_logo col c-6 m-2 l-2">
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
                    <div class="footer_findy col c-6 m-2 l-2">
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
                    <div class="footer_introduce col c-6 m-2 l-2">
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
                    <div class="footer_rules col c-6 m-2 l-2">
                        <h1>Điều khoản</h1>
                        <ul>
                            <a href=""><li>Chính sách bảo mật</li></a>
                            <a href=""><li>Điều khoản và điều kiện</li></a>
                            <a href=""><li>Chính sách bản quyền</li></a>
                            <a href=""><li>Quy tắc ứng xử</li></a>
                            <a href=""><li>Các loại phí</li></a>
                        </ul>
                    </div>
                    <div class="footer_bussiness col c-6 m-2 l-2">
                        <h1>Đối tác</h1>
                        <ul>
                            <a href=""><li>Escrow.com</li></a>
                            <a href=""><li>Loadshift</li></a>
                            <a href=""><li>Warrior Forum</li></a>
                        </ul>
                    </div>
                    <div class="footer_app col c-6 m-2 l-2">
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
    <script src="./find-timtho.js"></script>
</body>
</php>