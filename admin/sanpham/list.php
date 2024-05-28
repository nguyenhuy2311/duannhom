<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <!-- Thêm Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/style.css">
</head>
<body>
    <div class="boxcenter">
    <div class="container">
        <div class="row">

                <h1 class="display-4">DANH SÁCH SẢN PHẨM</h1>

            <form action="index.php?act=listsp" method="post" class="mb-3">
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm...">
                    </div>
                    <div class="col">
                        <select name="iddm" class="form-control">
                            <option value="0" selected>Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <input type="submit" name="listok" value="GO" class="btn btn-primary">
                    </div>
                </div>
            </form>
            <div class="row frmcontent">
                <div class="row mb-3 frmdsloai">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Mã sp</th>
                                <th scope="col">Tên sp</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Khuyến mãi</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=" . $id;
                                $xoasp = "index.php?act=xoasp&id=" . $id;
                                $hinhpart = "../upload/" . $img;
                                $imgHtml = is_file($hinhpart) ? '<img src="' . $hinhpart . '" height="80">' : 'No Photo';

                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>' . $id . '</td>
                                        <td>' . $namesp . '</td>
                                        <td>' . $amount . '</td>
                                        <td>' . $tacgia . '</td>
                                        <td>' . $price . '</td>
                                        <td>' . $sell_price . '</td>
                                        <td>' . $imgHtml . '</td>
                                        <td>' . $luotxem . '</td>
                                        <td><a href="' . $suasp . '"><button type="button" class="btn btn-primary">Sửa</button></a> 
                                            <a href="' . $xoasp . '"><button type="button" class="btn btn-danger">Xóa</button></a>
                                        </td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb-3">
                    <input type="button" value="CHỌN TẤT CẢ" class="btn btn-secondary">
                    <input type="button" value="BỎ CHỌN TẤT CẢ" class="btn btn-secondary">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN" class="btn btn-danger">
                    <a href="index.php?act=addsp"><button type="button" class="btn btn-success">NHẬP THÊM</button></a>
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
