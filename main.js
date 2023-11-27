const modal = document.querySelector('.modal');
const modalContainer = document.querySelector('.modal__container')

function showRegisterForm() {
    modal.classList.add('open')
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('register-form').classList.remove('hidden');
}

function showLoginForm() {
    modal.classList.add('open')
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');
}

function closeForm() {
    modal.classList.remove('open')
}

modal.addEventListener('click', closeForm)

modalContainer.addEventListener('click', function (event) {
    event.stopPropagation()
})


// ---------------video-----------------
var video = document.getElementById("myVideo");
video.muted = true;
video.addEventListener("ended", function() {

    this.currentTime = 0;
  
    this.play();
    
});
var video = document.getElementById("myVideo");

function adjustVolume(step) {
var currentVolume = video.volume;
var newVolume = currentVolume + step;

if (newVolume >= 0 && newVolume <= 1) {
    video.volume = newVolume;
}
}

// -----js hover vào left sẽ hiện right-----
var item1 = document.querySelector('.photographer-left-item1');
    // Lấy ra phần tử photographer-right
    var right = document.querySelector('.photographer-right-item1');

    // Sử dụng sự kiện mouseover để hiển thị nội dung khi rê chuột vào item1
    item1.addEventListener('mouseover', function () {
        right.classList.remove('hidden');
    });

    // Sử dụng sự kiện mouseout để ẩn nội dung khi rê chuột ra khỏi item1
    item1.addEventListener('mouseout', function () {
        right.classList.add('hidden');
    });

    var item2 = document.querySelector('.photographer-left-item2')

    var right2 = document.querySelector('.photographer-right-item2')

    item2.addEventListener('mouseover',function(){
        right2.classList.remove('hidden');
    })

    item2.addEventListener('mouseout',function(){
        right2.classList.add('hidden');
    })

    var item3 = document.querySelector('.photographer-left-item3')
    var right3 = document.querySelector('.photographer-right-item3')

    item3.addEventListener('mouseover',function(){
        right3.classList.remove('hidden');
    })

    item3.addEventListener('mouseout',function(){
        right3.classList.add('hidden');
    })

    // ---------------slider-------------------
    const btnright = document.querySelector('.fa-chevron-right')
    const btnleft = document.querySelector('.fa-chevron-left')
    const imgbanner = document.querySelectorAll('.banner_img-img img')
    let index = 0


    btnright.addEventListener("click",function(){
        index=index+1
        if(index> imgbanner.length-1){
            index = 0
        }
        document.querySelector(".banner_img-img").style.right = index *100+"%"
        // console.log("ok")
    })


    btnleft.addEventListener("click",function(){
        index=index-1
        if(index<=0){
            index = imgbanner.length-1
        }
        document.querySelector(".banner_img-img").style.right = index *100+"%"
    })

    // --------------slider-auto---------------
    function imgauto(){
        index = index+1
        if(index > imgbanner.length-1){
            index = 0
        }
        document.querySelector(".banner_img-img").style.right = index *100+"%"
    }

    setInterval(imgauto,5000)

        // ---------translate
        var isVietnamese = true;
        function switchLanguage() {
            isVietnamese = !isVietnamese;
        
            if (isVietnamese) {
                document.getElementById("contentVi").style.display = "block";
                document.getElementById("contentEn").style.display = "none";
                document.getElementById("contentVi2").style.display = "block";
                document.getElementById("contentEn2").style.display = "none";
            } else {
                document.getElementById("contentVi").style.display = "none";
                document.getElementById("contentEn").style.display = "block";
                document.getElementById("contentVi2").style.display = "none";
                document.getElementById("contentEn2").style.display = "block";
            }

            
        }
        