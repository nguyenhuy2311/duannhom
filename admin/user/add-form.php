<?php
session_start();
require_once './../layout/start.php';
?>



<span style="color:red">
    <?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</span>
<div class="boxcenter">
    <div class="container">
    <div class="row">

<div class="row frmtitle">
    <h1 class="display-4">Thêm Khách Hàng</h1>
</div>


</div>
<form action="save-add.php" method="post" class="col-md-6">
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" class="form-control" id="pass">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="1">User</option>
                <option value="2">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="http://localhost/pro1014_duan1/Admin/user/index.php" class="btn btn-danger">Hủy</a>
        </div>
    </div>
</form> 
</div>
</div>
 </div>
   

<?php
require_once './../layout/end.php';
?>
