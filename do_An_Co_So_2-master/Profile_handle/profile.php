<?php
require_once("../Profile_handle/findUserCV.php");
require_once("../navigation.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JOB SEARCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</head>
<style>
    .bg {
        background-image: url('../images/bgCV.png');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <div class="bg py-5">
        <div class="container">
            <?php if (isset($_SESSION['cv_id'])) { ?>
                <div class="card border border border-dark rounded">
                    <div class="card-body m-3">
                        <form class="row g-4">
                            <h1 class="text-center mb-5">HỒ SƠ CÁ NHÂN</h1>
                            <div class="row d-flex mx-3">
                                <div class="col-12 col-md-2 mb-2 mx-5"><img src="../images/ava-profile.PNG" height="10%" width="80%" alt="ava-profile" class="img-fluid rounded-circle"></div>
                                <div class="col-12 col-md-8">
                                    <p class="text-black mw-100 fs-1"><?php if (isset($_SESSION['name'])) {
                                                                            echo $_SESSION['name'];
                                                                        } ?></p> <!-- Load tên từ cv -->
                                </div>
                                <div class="col-12 col-md-2 my-2 mx-5" style="height: auto;">
                                    <div class="p-3 py-3" style="height: 100%; background-color: #2C5D63;align-items: stretch;">
                                        <div class="d-flex">
                                            <p class="text-light mw-100">Họ và tên</p>

                                        </div>
                                        <div class="d-flex">
                                            <p class="text-light mw-100">Năm sinh</p>

                                        </div>
                                        <div class="d-flex">
                                            <p class="text-light m-100">Giới tính</p>

                                        </div>
                                        <div class="d-flex">
                                            <p class="text-light m-100">Số CMND</p>

                                        </div>
                                        <div class="d-flex">
                                            <p class="text-light m-100">Số điện thoại</p>

                                        </div>
                                        <div class="d-flex">
                                            <p class="text-light m-100">Email</p>

                                        </div>
                                        <div class="d-flex">
                                            <p class="text-light mw-100">Địa chỉ</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-8 my-2">
                                    <div class="p-3 py-3" style="height: 100%; color: #2C5D63;align-items: stretch;">
                                        <div class="d-flex">

                                            <p class=" mw-100 "><?php if (isset($_SESSION['name'])) {
                                                                    echo $_SESSION['name'];
                                                                } ?></p> <!-- Load tên từ cv -->
                                        </div>
                                        <div class="d-flex">

                                            <p class=" mw-100 "><?php if (isset($_SESSION['birthday'])) {
                                                                    echo $_SESSION['birthday'];
                                                                } ?></p> <!-- Load năm sinh từ cv -->
                                        </div>
                                        <div class="d-flex">

                                            <p class=" mw-100 "><?php if (isset($_SESSION['gender'])) {
                                                                    echo $_SESSION['gender'];
                                                                } ?></p> <!-- Load giới tính từ cv -->
                                        </div>
                                        <div class="d-flex">

                                            <p class=" mw-100 "><?php if (isset($_SESSION['cccd'])) {
                                                                    echo $_SESSION['cccd'];
                                                                } ?></p> <!-- Load CMND từ cv -->
                                        </div>
                                        <div class="d-flex">

                                            <p class=" mw-100 "><?php if (isset($_SESSION['phone'])) {
                                                                    echo $_SESSION['phone'];
                                                                } ?></p> <!-- Load SĐT từ cv -->
                                        </div>
                                        <div class="d-flex">

                                            <p class=" mw-100"><?php if (isset($_SESSION['email'])) {
                                                                    echo $_SESSION['email'];
                                                                } ?></p> <!-- Load Email từ cv -->
                                        </div>
                                        <div class="d-flex">

                                            <p class="mw-100 "><?php if (isset($_SESSION['address'])) {
                                                                    echo $_SESSION['address'];
                                                                } ?></p> <!-- Load địa chỉ từ cv -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-5 py-3 mx-5 my-2 " style="height: auto;">
                                    <div>
                                        <h2 class="p-0 m-0" style="color: #2C5D63;">HỌC VẤN</h2>
                                        <hr style="color: #033036; height: 2px;">
                                        </hr>
                                        <p><?php if (isset($_SESSION['study'])) {
                                                echo $_SESSION['study'];
                                            } ?></p><!-- Load Học vấn từ cv -->
                                    </div>


                                </div>
                                <div class="col-12 col-md-5 py-3 mx-4 my-2 " style="height: auto;">

                                    <div>
                                        <h2 class="p-0 m-0" style="color: #2C5D63;">KINH NGHIỆM LÀM VIỆC</h2>
                                        <hr style="color: #033036; height: 2px;">
                                        </hr>
                                        <p><?php if (isset($_SESSION['experience'])) {
                                                echo $_SESSION['experience'];
                                            } ?></p><!-- Load kinh nghiệm từ cv -->
                                    </div>

                                </div>
                                <div class="col-12 col-md-5 py-3 mx-5 " style="height: auto;">
                                    <div>
                                        <h2 class="p-0 m-0" style="color: #2C5D63;">CHỨNG CHỈ</h2>
                                        <hr style="color: #2C5D63; height: 2px;">
                                        </hr>
                                        <p><?php if (isset($_SESSION['certificate'])) {
                                                echo $_SESSION['certificate'];
                                            } ?></p><!-- Load chứng chỉ từ cv -->
                                    </div>

                                </div>
                                <div class="col-12 col-md-5 py-3 mx-4 " style="height: auto;">

                                    <div>
                                        <h2 class="p-0 m-0" style="color: #2C5D63;">GIẢI THƯỞNG</h2>
                                        <hr style="color: #2C5D63; height: 2px;">
                                        </hr>
                                        <p><?php if (isset($_SESSION['award'])) {
                                                echo $_SESSION['award'];
                                            } ?></p><!-- Load Giải thưởng từ cv -->
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary" style="background-color:#2C5D63;"><a class="text-decoration-none text-light" href="../CV_handle/formCV.php">Hoàn thiện hồ sơ cá nhân</a> </button>
                            </div>
                            <small class="text-end">Nhấn vào đây để sửa hồ sơ cá nhân</small>
                        </form>
                    </div>
                </div>
            <?php } ?>

            <?php if (!isset($_SESSION['cv_id'])) { ?>
                <p class="mh-100 fw-bold text-dark text-center">Bạn chưa có hồ sơ cá nhân?</p>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary" style="background-color:#2C5D63;"><a class="text-decoration-none text-light" href="../CV_handle/createCV.php">Tạo hồ sơ cá nhân ngay!</a> </button>
                </div>
            <?php } ?>
        </div>

    </div>

    <?php
    require_once("../footer.php");
    ?>
</body>

</html>