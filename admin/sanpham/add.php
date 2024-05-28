<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="csss/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="boxcenter">

    <div class="container">
        <div class="row">

                <h1 class="display-4">THÊM MỚI SẢN PHẨM</h1>


            <div class="row frmcontent mb-3">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="form-group row mb-3">
                        <label for="iddm" class="col-sm-2 col-form-label">Danh mục</label>
                        <div class="col-sm-10">
                            <select name="iddm" class="form-control">
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="' . $id . '">' . $name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="namesp" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" name="namesp" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="amount" class="col-sm-2 col-form-label">Số Lượng</label>
                        <div class="col-sm-10">
                            <input type="number" name="amount" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tacgia" class="col-sm-2 col-form-label">Tác giả</label>
                        <div class="col-sm-10">
                            <input type="text" name="tacgia" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="sell_price" class="col-sm-2 col-form-label">Giảm giá</label>
                        <div class="col-sm-10">
                            <input type="text" name="sell_price" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="img" class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" name="img" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="luotxem" class="col-sm-2 col-form-label">Lượt xem</label>
                        <div class="col-sm-10">
                            <input type="number" name="luotxem" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="mota" class="col-sm-2 col-form-label">Mô tả</label>
                        <div class="col-sm-10">
                            <textarea name="mota" class="form-control" cols="150" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="submit" name="themmoi" value="THÊM MỚI" class="btn btn-primary">
                            <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" class="btn btn-info"></a>
                        </div>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>