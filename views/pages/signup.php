<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-8 col-lg-7">
            <form name="Signup" method="POST" action="controllers/signup.php">
                <?php
                if (isset($_SESSION["error"])) {
                    ?>
                    <div class="container" style="background-color:red;padding: 14px 20px;text-align: center;color:white">
                        <?php echo $_SESSION["error"]; ?>
                    </div>
                <?php
                    unset($_SESSION["error"]);
                }
                ?>
                <br>
                <div class="container">
                    <label for="Hoten"><b>Họ tên *</b></label>
                    <input type="text" placeholder="Nhập họ và tên" name="Hoten" required>
                    <br><br>
                    <label for="Diachi"><b>Địa chỉ *</b></label>
                    <input type="text" placeholder="Nhập địa chỉ" name="Diachi" required>
                    <br><br>
                    <label for="sdt"><b>Số điện thoại *</b></label>
                    <input type="number" placeholder="Nhập số điện thoại" name="sdt" required>
                    <br><br>
                    <label for="Ngaysinh"><b>Ngày sinh</b></label>
                    <input type="date" data-date="" data-date-format="YYYYMMDD" placeholder="Nhập ngày sinh" name="Ngaysinh">
                    <br><br>
                    <label for="email"><b>Email *</b></label>
                    <input type="email" placeholder="Nhập email" name="email" required>
                    <br><br>
                    <label for="Gioitinh"><b>Giới tính</b></label>
                    <input type="text" placeholder="Nhập giới tính" name="Gioitinh">
                    <br><br>
                    <label for="uname"><b>Username * </b></label>
                    <input type="text" placeholder="Nhập Username" name="uname" required>
                    <br><br>
                    <label for="psw"><b>Password *</b></label>
                    <input type="password" placeholder="Nhập Password" name="psw" required>

                    <button type="submit" name="btnSignup" style="margin-top: 25px" class="loginbtn"><b>SIGN UP</b></button>
                </div>
            </form>
        </div>
        <div class="d-none d-md-flex col-md-4 col-lg-5 bg-image" style="background-image: url('assets/img/signup.jpeg');"></div>
    </div>
</div>