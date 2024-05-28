<?php
session_start();
require_once './../layout/start.php';
require_once './../../model/functions.php';
$id = $_GET['id'];
$taikhoan = select_one('taikhoan', $id);
?>
<h3>Sửa thông tin khách hàng</h3>
<span style="color:red">
<?php
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
</span>
<form action="save-edit.php" method="post" class="col-md-6">
    <div class="box-body">
        <div class="form-group">
            <input type="hidden" value="<?= $taikhoan['id']?>" name="id">
            <label for="">Name</label>
            <input type="text" name="user" value="<?= $taikhoan['user'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Pass</label>
            <input type="password" name="pass" value="<?= $taikhoan['pass']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="<?= $taikhoan['email']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Role</label>
            <select name="role" id="" class="form-control">
                <option value="1" <?=intval($taikhoan['role']) == 1 ? "selected" : "" ?>>user</option>
                <option value="2" <?=intval($taikhoan['role']) == 2 ? "selected" : "" ?>>admin</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="http://localhost/pro1014_duan1/Admin/user/index.php" class="btn btn-danger"></i>Hủy</a>
        </div>
    </div>
</form>
<?php
require_once './../layout/end.php';
?>