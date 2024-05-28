<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/style.css">

</head>

<body>
    <div class="boxcenter">
       <div class="container">
       <div class="row">

                <h1 class="display-4">DANH SÁCH DƠN HÀNG </h1>


            <div class="row frmcontent">
                <div class="row mb frmdsbill">
                <div class="row frmcontent">
            <div class="row mb frmdsbill">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Mã Đơn Hàng</th>
                            <th>Khách Hàng</th>
                            <th>Số Lượng Hàng</th>
                            <th>Giá Trị Đơn Hàng</th>
                            <th>Tình Trạng Đơn Hàng</th>
                            <th>Ngày Đặt Hàng</th>
                            <th>Thao Tác</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $xoabill = "index.php?act=xoabill&id=" . $id;
                            $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                            $ttdh = get_ttdh($bill["bill_status"]);
                            $countsp = loadall_cart_count($bill["id"]);
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" value=""></td>
                                    <td>' . $bill["id"] . '</td>
                                    <td>' . $kh . '</td>
                                    <td>' . $countsp . '</td>
                                    <td><strong>' . $bill["total"] . '</strong>$</td>
                                    <td>' . $ttdh . '</td>
                                    <td>' . $bill["ngaydathang"] . '</td>
                                    <td><a href="' . $xoabill . '" class="btn btn-danger">Xóa</a></td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </div>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>