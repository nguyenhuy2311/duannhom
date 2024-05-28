<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Thể Loại</title>
    <!-- Thêm Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/style.css">
</head>

<body>
    <div class="boxcenter"> 
         <div class="container">
        <div class="row">

                <h1 class="display-4">DANH SÁCH THỂ LOẠI</h1>

            <div class="col-12 frmcontent">
                <div class="row mb frmdsloai">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Mã Loại</th>
                                <th scope="col">Tên Loại</th>
                                <th scope="col">Thao Tác</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm = "index.php?act=suadm&id=" . $id;
                                $xoadm = "index.php?act=xoadm&id=" . $id;

                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>' . $id . '</td>
                                        <td>' . $name . '</td>
                                        <td><a href="' . $suadm . '"><button type="button" class="btn btn-primary">Sửa</button></a> <a href="' . $xoadm . '"><button type="button" class="btn btn-danger">Xóa</button></a></td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb">
                    <button type="button" class="btn btn-secondary">CHỌN TẤT CẢ</button>
                    <button type="button" class="btn btn-secondary">BỎ CHỌN TẤT CẢ</button>
                    <button type="button" class="btn btn-danger">XÓA CÁC MỤC ĐÃ CHỌN</button>
                    <a href="index.php?act=adddm"><button type="button" class="btn btn-success">NHẬP THÊM</button></a>
                </div>
            </div>
        </div>
    </div> </div>
  

    <!-- Thêm Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>