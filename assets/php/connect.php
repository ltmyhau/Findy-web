<?php
    include "database.php"
?>

<?php
    class connect{
        private $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function insert_register(){
            $hoTen = $_POST['hoTen'];
            $Email = $_POST['Email'];
            $matKhau = $_POST['matKhau'];
            $repeatmatKhau = $_POST['repeatmatKhau'];

            $query = "INSERT INTO users(username,email,password,role) VALUES ('$hoTen','$Email','$matKhau','$repeatmatKhau')";
            $result = $this-> db ->insert($query);
            return $result;
        }

        public function select_register(){
            $query = "SELECT * FROM register where Email='$mail'";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function login(){
            $query = "SELECT * FROM register WHERE Email='$Email' AND matKhau='$matKhau'";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function select_registerall(){
            $query = "SELECT * FROM register";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function insert_userphotoup(){
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenCongViec = $_POST['tenCongViec'];
            $moTa = $_POST['moTa'];
            $congCu = $_POST['congCu'];
            $query = "INSERT INTO user_up(hinhAnh, tenCongViec, moTa, congCu) values ('$hinhAnh','$tenCongViec','$moTa','$congCu')";
            $result = $this->db->insert($query);
            return $result;
        }

        public function select_userphotoup(){
            $query = "SELECT * FROM user_up";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function insert_usermakeupup(){
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenCongViec = $_POST['tenCongViec'];
            $moTa = $_POST['moTa'];
            $congCu = $_POST['congCu'];
            $query = "INSERT INTO usermakeup_up(hinhAnh, tenCongViec, moTa, congCu) values ('$hinhAnh','$tenCongViec','$moTa','$congCu')";
            $result = $this->db->insert($query);
            return $result;
        }

        public function select_usermakeupup(){
            $query = "SELECT * FROM usermakeup_up";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function insert_profilephoto(){
            
            $anhTho = $_FILES['anhTho']['name']; // File name
            $namephoto = $_POST['namephoto'];
            $vitriungtuyen = $_POST['vitriungtuyen'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $fb = $_POST['fb'];
            $diachi = $_POST['diachi'];
            $nameskill = $_POST['nameskill'];
            $motaskill = $_POST['motaskill'];
            $award = $_POST['award'];

            $ac1 = $_FILES['ac1']['name'];
            $ac2 = $_FILES['ac2']['name'];
            $ac3 = $_FILES['ac3']['name'];
            $ac4 = $_FILES['ac4']['name'];
            $hd1 = $_FILES['hd1']['name'];
            $hd2 = $_FILES['hd2']['name'];
            $hd3 = $_FILES['hd3']['name'];
            $hd4 = $_FILES['hd4']['name'];
            $sn1 = $_FILES['sn1']['name'];
            $sn2 = $_FILES['sn2']['name'];
            $sn3 = $_FILES['sn3']['name'];
            $sn4 = $_FILES['sn4']['name'];
            $gd1 = $_FILES['gd1']['name'];
            $gd2 = $_FILES['gd2']['name'];
            $gd3 = $_FILES['gd3']['name'];
            $gd4 = $_FILES['gd4']['name'];
            $at1 = $_FILES['at1']['name'];
            $at2 = $_FILES['at2']['name'];
            $at3 = $_FILES['at3']['name'];
            $at4 = $_FILES['at4']['name'];
            $ky1 = $_FILES['ky1']['name'];
            $ky2 = $_FILES['ky2']['name'];
            $ky3 = $_FILES['ky3']['name'];
            $ky4 = $_FILES['ky4']['name'];
           

            $query = "INSERT INTO profilephoto (hinhAnh, ten, vitri, mail, sdt, fb, diachi, tenkynang, motakynang, tengiaithuong, ac1, ac2, ac3, ac4, hd1, hd2, hd3, hd4, sn1, sn2, sn3, sn4, gd1, gd2, gd3, gd4, at1, at2, at3, at4, ky1, ky2, ky3, ky4)
            VALUES ('$anhTho', '$namephoto', '$vitriungtuyen', '$email', '$phone', '$fb', '$diachi', '$nameskill', '$motaskill', '$award', '$ac1', '$ac2', '$ac3', '$ac4', '$hd1', '$hd2', '$hd3', '$hd4', '$sn1', '$sn2', '$sn3', '$sn4', '$gd1', '$gd2', '$gd3', '$gd4', '$at1', '$at2', '$at3', '$at4', '$ky1', '$ky2', '$ky3', '$ky4')";


            $result = $this->db->insert($query);
            
            return $result;
        }

        public function select_profilephoto(){
            $query = "SELECT *FROM profilephoto";
            $result = $this->db->select($query);
            return $result;
        }

        public function select_request(){
            $query = "SELECT *FROM request";
            $result = $this->db->select($query);
            return $result;
        }

        public function insert_postjob(){
            $mathongtinthue = $_POST["post-job__form-ma"];
            $name = $_POST["post-job__form-name"];
            $place = $_POST["post-job__form-place"];
            $time = $_POST["post-job__form-time"];
            $price = $_POST["post-job__form-price"];
            $event = $_POST["post-job__form-event"];
            $style = $_POST["post-job__form-style"];
            $hinh = $_FILES["hinhanh"]['name'];
            $description = $_POST["post-job__form-description"];
            $query = "INSERT INTO post_timtho (mathongtinthue,tenposttimtho, diadiem, thoigian, gia, sukien, phongcach, anhmau, motachitiet) VALUES ('$mathongtinthue','$name', '$place', '$time', '$price', '$event', '$style', '$hinh', '$description')";
            $result = $this->db->insert($query);
            return $result;
        }
        public function select_postjob(){
            $query = "SELECT *FROM post_timtho";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function insert_accountthue(){
            $hoTen = $_POST['hoTen'];
            $Email = $_POST['Email'];
            $matKhau = $_POST['matKhau'];
    

            $query = "INSERT INTO account_thue(hoTen,gmail,matkhau,role) VALUES ('$hoTen','$Email','$matKhau','nguoi_thue')";
            $result = $this-> db ->insert($query);
            return $result;
        }

        public function insert_accounttho(){
            $hoTen = $_POST['hoTen2'];
            $Email = $_POST['Email2'];
            $matKhau = $_POST['matKhau2'];
            $query = "INSERT INTO account_tho(hoTen,gmail,matkhau, role) VALUES ('$hoTen','$Email','$matKhau','nguoi_tho')";
            $result = $this-> db ->insert($query);
            return $result;
        }

        public function select_profile(){
            $query = "SELECT *FROM profile";
            $result = $this->db->select($query);
            return $result;
        }
       
    }
?>