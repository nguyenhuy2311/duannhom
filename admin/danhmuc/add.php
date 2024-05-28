<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Sản Phẩm</title>
    <!-- Thêm Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/style.css">
</head>

<body>
    <div class="boxcenter">
    <div class="container">
        <div class="row">

                <h1 class="display-4">THÊM MỚI LOẠI HÀNG HÓA</h1>

            <div class="col-6 frmcontent">
                <form action="index.php?act=adddm" method="post">

                    <div class="form-group row">
                        <label for="tenloai" class="col-sm-3 col-form-label">Tên Loại</label>
                        <div class="col-sm-9">
                            <input type="text" name="tenloai" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3">
                            <input type="submit" name="themmoi" value="THÊM MỚI" class="btn btn-primary">
                            <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                            <a href="index.php?act=lisdm" class="btn btn-info">DANH SÁCH</a>
                        </div>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-info" role="alert">' . $thongbao . '</div>';
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