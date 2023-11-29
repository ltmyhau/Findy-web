// Tự động tăng height của iframe
var iframe = document.getElementById("myiframe");
iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';


// Đặt sự kiện click cho mỗi liên kết
const iconLinks = document.querySelectorAll(".process__step");
iconLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
        // Ngăn chặn hành vi mặc định của liên kết
       

        // Loại bỏ lớp "active" từ tất cả các liên kết khác
        iconLinks.forEach((otherLink) => {
            otherLink.classList.remove("active");
        });

        // Thêm lớp "active" cho liên kết hiện tại
        link.classList.add("active");
    });
});