       <div class="container">
           <div class="row">
               <div class="col-2">
                   <img src="view/images/usr.svg" width="25%">
               </div>
               <div class="col-2">
                   <div class="form-container">
                       <div class="form-btn">
                           <span onclick="login()">Đăng nhập</span>
                           <span onclick="register()">Đăng ký</span>
                           <hr id="Indicator">
                       </div>
                       <form id="RegForm" action="index.php?act=dangky" method="post"> <!--??? action  đăng kí ?-->
                           <input type="text" name="user" placeholder="Tên đăng nhập">
                           <input type="email" name="email" placeholder="Email">
                           <input type="password" name="pass" placeholder="Mật khẩu">
                           <input type="submit" class="btn" value="Đăng ký" name="dangky">
                           <p class="thongbao"></p>
                           <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                       </form>
                       <form id="LoginForm" action="index.php?act=dangnhap" method="post">
                           <input type="text" name="user" placeholder="Tên đăng nhập">
                           <input type="password" name="pass" placeholder="Mật khẩu">
                           <input type="submit" class="btn" value="Đăng nhập" name="dangnhap">
                           <a href="taikhoan/quenmatkhau.php">Quên mật khẩu</a>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       </div>
       <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function login() {
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

    function register() {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function validateForm(form) {
        var inputs = form.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value === "") {
                alert("Vui lòng nhập đầy đủ thông tin.");
                return false;
            }
        }
        return true;
    }

    document.getElementById("RegForm").addEventListener("submit", function (event) {
        if (!validateForm(this)) {
            event.preventDefault();
        }
    });

    document.getElementById("LoginForm").addEventListener("submit", function (event) {
        if (!validateForm(this)) {
            event.preventDefault();
        }
    });
</script>
