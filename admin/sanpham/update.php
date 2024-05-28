<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Sản Phẩm</title>
    <link rel="stylesheet" href="csss/style.css">

</head>

<body>
    <div class="boxcenter">
      
        <?php

        if (is_array($sanpham)) {
            extract($sanpham);
        }
        $hinhpart = "../upload/" . $img;
        if (is_file($hinhpart)) {
            $img = "<img src='" . $hinhpart . "' height='80'>";
        } else {
            $img = "no photo";
        }
        ?>

        <div class="row">
         
                <h1 class="display-4">CẬP NHẬT SẢN PHẨM</h1>
         
            <div class="row frmcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                if ($iddm == $id) $s = "selected";
                                else $s = "";
                                echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm<br>
                        <input type="text" name="namesp" value="<?= $namesp ?>">
                    </div>
                    <div class="row mb">
                        Số Lượng<br>
                        <input type="number" name="amount" value="<?= $amount ?>">
                    </div>
                    <div class="row mb">
                        Tác giả<br>
                        <input type="text" name="tacgia" value="<?= $tacgia ?>">
                    </div>
                    <div class="row mb">
                        Giá<br>
                        <input type="number" name="price" value="<?= $price ?>">
                    </div>
                    <div class="row mb">
                        Khuyến mãi<br>
                        <input type="number" name="sell_price" value="<?= $sell_price ?>">
                    </div>
                    <div class="row mb">
                        Hình<br>
                        <input type="file" name="img">
                        <?= $img ?>
                    </div>
                    <div class="row mb">
                        Lượt xem<br>
                        <input type="number" name="luotxem" value="<?= $luotxem ?>">
                    </div>
                    <div class="row mb">
                        Mô tả<br>
                        <textarea name="mota" cols="150" rows="10" value="<?= $mota ?>"></textarea>
                    </div>
                    <div class="row mb">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lissp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>