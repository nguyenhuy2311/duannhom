<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Sản Phẩm</title>
    <!-- Thêm Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/style.css">
</head>

<body>
    <div class="boxcenter">
    <div class="container">
        <div class="row">

                <h1 class="display-4">CẬP NHẬT MẶT HÀNG</h1>
      
            <div class="col-12 frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="form-group row">
                        <label for="maloai" class="col-sm-2 col-form-label">Mã Loại</label>
                        <div class="col-sm-10">
                            <input type="text" name="maloai" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tenloai" class="col-sm-2 col-form-label">Tên Loại</label>
                        <div class="col-sm-10">
                            <input type="text" name="tenloai" class="form-control" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" name="capnhat" class="btn btn-primary">CẬP NHẬT</button>
                            <button type="reset" class="btn btn-secondary">NHẬP LẠI</button>
                            <a href="index.php?act=lisdm"><button type="button" class="btn btn-success">DANH SÁCH</button></a>
                        </div>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
    </div>
   

    <!-- Thêm Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
