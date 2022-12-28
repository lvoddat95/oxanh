<?php
$attr_menu = '';
$arr_menu = array();
if (!empty($GLOBALS["menu"])) {
    $attr_menu = $GLOBALS["menu"];
    $arr_menu = explode(",", $attr_menu);
}
?>
<div id="ci-header" class="ci-header">
    <nav class="navbar px-3 p-xl-0 ">
        <div class="container">
            <button class="navbar-toggle d-block d-xl-none" type="button">
                <b class="icon-bar"></b>
                <b class="icon-bar"></b>
                <b class="icon-bar"></b>
            </button>

            <a class="navbar-brand ms-5 ms-sm-0" href="<?php echo HTTP_PATH; ?>/">
                <img class="img-fluid" src="<?php echo HTTP_PATH; ?>/assets/img/logo/logo-text.png" alt="Logo" width="130px">
            </a>

            <ul id="main-menu" class="nav navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array('home', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/">Trang chủ</a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a class="nav-link <?php echo in_array('san-pham', $arr_menu) ? " active " : ""; ?>
                    " aria-current="page" href="<?php echo HTTP_PATH; ?>/">Lựa chọn kế hoạch tham gia</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo in_array('g1', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/san-pham/g1.php">Kế hoạch tương trợ G1</a></li>
                        <li><a class="dropdown-item <?php echo in_array('g2', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/san-pham/g2.php">Kế hoạch tương trợ G2</a></li>
                        <li><a class="dropdown-item <?php echo in_array('g3', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/san-pham/g3.php">Kế hoạch tương trợ G3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array('giai-quyet-quyen-loi-bao-hiem', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/giai-quyet-quyen-loi-bao-hiem.php">Giải quyết quyền lợi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array('ho-tro-khach-hang', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/ho-tro-khach-hang.php">Hỗ trợ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array('gioi-thieu-ve-cong-ty', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/gioi-thieu-ve-cong-ty.php">Giới thiệu</a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a class="nav-link <?php echo in_array('blog', $arr_menu) ? " active " : ""; ?>" href="<?php echo HTTP_PATH; ?>/pages/blog.php">Tin tức</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo HTTP_PATH; ?>/pages/tin-thanh-vien.php">Tin thành viên Oxanh</a></li>
                        <li><a class="dropdown-item" href="<?php echo HTTP_PATH; ?>/pages/manh-thuong-quan.php">Mạnh thường quân</a></li>
                        <li><a class="dropdown-item" href="<?php echo HTTP_PATH; ?>/pages/ngoi-nha-chung.php">Ngôi nhà chung</a></li>
                        <li><a class="dropdown-item" href="<?php echo HTTP_PATH; ?>/pages/tin-tong-hop.php">Tin tổng hợp</a></li>
                        <li><a class="dropdown-item" href="<?php echo HTTP_PATH; ?>/pages/tai-khoan.php">Tài khoản</a></li>
                        <li><a class="dropdown-item" href="<?php echo HTTP_PATH; ?>/pages/thanh-toan.php">Thanh toán</a></li>
                    </ul>
                </li>

                <!-- Hien thi mobile -->
                <li class="nav-ỉtem-form d-block d-xl-none">
                    <div class="d-block">
                        <div class="ci-header-phone">
                            <a class="ci-btn ci-btn-main" href="tel:0339869338">
                                <i class="fal fa-phone-volume fz-20 me-3"></i>0339.869.338
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="navbar-right d-flex align-items-center">

                <div class="navbar-nu navbar-notification">
                    <div class="dropdown">
                        <button class="dropdown-toggle dropdown-hide-arrow navbar-icon" data-bs-toggle="dropdown">
                            <i class="fal fa-bell position-relative">
                                <span class="navbar-pill" class="fz-10 fw-normal ff-roboto"></span>
                            </i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <h3 class="notifi-top">Tin nhắn hệ thông</h3>
                            <div class="notifi-middle">
                                <a class="notifi-item" href="">
                                    <p>Cập nhật đối với tài khoản Lê Văn A </p>
                                    <span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
                                </a>
                                <a class="notifi-item" href="">
                                    <p>Cập nhật đối với tài khoản Lê Văn A </p>
                                    <span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
                                </a>
                                <a class="notifi-item" href="">
                                    <p>Cập nhật đối với tài khoản Lê Văn A </p>
                                    <span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
                                </a>
                                <a class="notifi-item" href="">
                                    <p>Cập nhật đối với tài khoản Lê Văn A </p>
                                    <span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
                                </a>
                            </div>
                            <a class="notifi-bottom" href="">
                                Xem tất cả
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-nu navbar-user">
                    <div class="dropdown d-flex align-items-center">
                        <button class="dropdown-toggle dropdown-hide-arrow navbar-icon" data-bs-toggle="dropdown">
                            <i class="fal fa-circle-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end ">
                            <li>
                                <a class="dropdown-item" href="<?php echo HTTP_PATH . '/pages/tai-khoan.php'; ?>">
                                    <i class="far fa-user me-3"></i>Quản lý tài khoản
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo HTTP_PATH . '/pages/dang-nhap2.php'; ?>">
                                    <i class="far fa-lock-keyhole me-3"></i>Đăng nhập
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo HTTP_PATH . '/pages/dang-ky2.php'; ?>">
                                    <i class="far fa-key-skeleton me-3"></i>Đăng kí
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="tel:0339869338">Hotline: 0339.869.338</a></li>
                        </ul>
                    </div>
                </div>

                <div class="ci-header-phone d-none d-xl-block ms-4">
                    <a class="ci-btn ci-btn-main" href="tel:0978240990">
                        <i class="fal fa-phone-volume fz-20 me-3"></i>0978 240 990
                    </a>
                </div>

            </div>

        </div>
    </nav>
</div>