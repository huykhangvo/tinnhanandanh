<?php include('../db/ketnoi.php'); ?>
<?php
//Thêm tin nhắn
    if(isset($_POST['themtn'])){
        $tn = $_POST['tn'];
        $sql_insert = mysqli_query($con,"INSERT INTO tbl_category(noidung) values ('$tn')");
        header('Location: tn.php');
        exit();
    }elseif(isset($_POST['capnhattn'])){
        $id_post = $_POST['id_tn'];
        $tn = $_POST['tn'];
        $sql_update = mysqli_query($con,"UPDATE tbl_category SET noidung='$tn' WHERE id = '$id_post'");
        header('Location: tn.php');
    }
    //Xóa tin nhắn
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_xoa = mysqli_query($con,"DELETE FROM tbl_category WHERE id ='$id'");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý tin nhắn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php include './menutop.php' ?>
    <div class="container">
        <div class="row">
            <?php
                if(isset($_GET['quanly'])=='capnhat'){
                    $id_capnhat = $_GET['id'];
                    $sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_category WHERE id = '$id_capnhat'");
                    $row_capnhat = mysqli_fetch_array($sql_capnhat);
                   ?>
            <div class="col-md-4">
                <h4>Cập nhật tin nhắn</h4>
                <label>Tên tin nhắn</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="tn" value="<?php echo $row_capnhat['noidung'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_tn" value="<?php echo $row_capnhat['id'] ?>">
                    <input type="submit" value="Cập nhật tin nhắn" class="btn btn-success" name="capnhattn">
                </form>
            </div>
                    <?php   
                }else{
                    ?>
                         <div class="col-md-4">
                <h4>Thêm Nội Dung Tin Nhắn</h4>
                <label>Nội Dung</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="tn" placeholder="Tên tin nhắn"><br>
                    <input type="submit" value="Thêm Nội Dung Tin Nhắn" class="btn btn-success" name="themtn">
                </form>
            </div>
                <?php
                }
                ?>
            <div class="col-md-12">
                <h4>Nội Dung Tin Nhắn</h4>
                <?php
                $sql_select = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY id ASC");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Nội Dung Tin Nhắn</th>
                        <th>Quản lý</th>
                    </tr>
                <?php
                    $i = 0;
                    while($row_category = mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_category['noidung'] ?></td>
                            <td><a href="?xoa=<?php echo $row_category['id'] ?>">Xóa</a>||<a href="?quanly=capnhat&id=<?php echo $row_category['id'] ?>">Cập Nhật</a></td>
                        </tr>
                        <?php
                    }
                    ?>
        </table>
            </div>
        </div>
    </div>
</body>
</html>