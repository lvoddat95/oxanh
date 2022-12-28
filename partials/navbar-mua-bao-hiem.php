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

            <a class="navbar-brand" href="<?php echo HTTP_PATH; ?>/">
                <img class="img-fluid" src="<?php echo HTTP_PATH; ?>/assets/img/logo/logo-text.png" alt="Logo" width="130px">
            </a>

            <div class="navbar-user d-block d-xl-none">
                <div class="dropdown">
                    <button class="dropdown-toggle dropdown-hide-arrow" data-bs-toggle="dropdown">
                        <i class="fal fa-circle-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
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

            <ul id="main-menu" class="nav navbar-nav me-auto">
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
                    <form class="d-block">
                        <div class="ci-menu-link d-flex align-items-center me-0 mb-4">
                            <svg class="ci-menu-user-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ci-menu-link__item">
                                <a href="<?php echo HTTP_PATH . '/pages/dang-nhap2.php'; ?>">
                                    Đăng nhập
                                </a>
                            </div>
                            <span class="ci-menu-link__separator"></span>
                            <div class="ci-menu-link__item">
                                <a href="<?php echo HTTP_PATH . '/pages/dang-ky2.php'; ?>">
                                    Đăng kí
                                </a>
                            </div>
                        </div>
                        <div class="ci-header-phone">
                            <a class="ci-btn ci-btn-main" href="tel:0978240990">
                                <i class="fal fa-phone-volume fz-20 me-3"></i>0978 240 990
                            </a>
                        </div>
                        <!-- <button class="ci-btn ci-btn-main ci-btn-mua-bh d-block w-100" type="button">MUA </button> -->
                    </form>
                </li>

            </ul>

            <div class="navbar-right d-none d-xl-block">
                <form class="d-flex align-items-center">
                    <div class="ci-menu-link d-flex align-items-center me-5">
                        <div class="ci-menu-link__item">
                            <svg class="ci-menu-user-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ci-menu-link__item">
                                <a href="<?php echo HTTP_PATH . '/pages/dang-nhap2.php'; ?>">
                                    Đăng nhập
                                </a>
                            </div>
                        </div>

                        <span class="ci-menu-link__separator"></span>
                        <div class="ci-menu-link__item">
                            <a href="<?php echo HTTP_PATH . '/pages/dang-ky2.php'; ?>">
                                Đăng kí
                            </a>
                        </div>
                    </div>
                    <div class="ci-header-phone">
                        <a class="ci-btn ci-btn-main" href="tel:0978240990">
                            <i class="fal fa-phone-volume fz-20 me-3"></i>0978 240 990
                        </a>
                    </div>
                    <!-- <button class="ci-btn ci-btn-main ci-btn-mua-bh" type="button">MUA </button> -->
                </form>
            </div>

        </div>
    </nav>
</div>