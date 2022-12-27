<?php require_once "../config.php"; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = ''; ?>

<body>
    <div id="ci-content" class="ci-content">

        <?php include_once NAVBAR3; ?>
        <div class="pt-0 bg-grey overflow-visible">
            <div class="ci-breadcrumb-link bg-silver2 d-flex">
                <div class="container">
                    <ul class="list-unstyled">
                        <li class="home"><a href="<?php echo HTTP_PATH; ?>/">Trang chủ</a></li>
                        <li><a href="#">Quản lý thông báo</a></li>
                    </ul>
                </div>
            </div>

            <div class="ci-block">
                <div class="container">
                    <div class="ci-block-aside pb-5">
                        <aside class="ci-aside mb-3">
                            <div class="ci-user-box">
                                <svg class="ci-menu-user-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <div class="info">
                                    <span class="fz-12">Tài khoản của</span>
                                    <span class="fz-16 fw-medium d-block">Lê Văn A</span>
                                </div>
                            </div>
                            <ul class="account-menu-list">
                                <li class="item ">
                                    <a href="<?php echo HTTP_PATH; ?>/pages/tai-khoan.php" title="Thông tin tài khoản">
                                        <i class="fa fa-user fa-fw"></i>Thông tin tài khoản
                                    </a>
                                </li>

                                <!-- <li class="item ">
                                    <a href="<?php echo HTTP_PATH; ?>/pages/san-pham-quan-tam.php" title="Sản phẩm đang quan tâm">
                                        <i class="fa fa-inbox fa-fw"></i>Sản phẩm đang quan tâm
                                    </a>
                                </li>

                                <li class="item ">
                                    <a href="<?php echo HTTP_PATH; ?>/pages/ma-giam-gia.php" title="Mã giảm giá">
                                        <i class="fa fa-gift fa-fw"></i>Mã giảm giá
                                    </a>
                                </li> -->

                                <li class="item ">
                                    <a href="<?php echo HTTP_PATH; ?>/pages/quan-ly-don-hang.php" title="Quản lý đơn hàng">
                                        <i class="fa fa-box-circle-check fa-fw"></i>Quản lý đơn hàng
                                    </a>
                                </li>

                                <li class="item active">
                                    <a href="<?php echo HTTP_PATH; ?>/pages/quan-ly-thong-bao.php" title="Quản lý thông báo">
                                        <i class="fa fa-bell fa-fw"></i>Quản lý thông báo
                                    </a>
                                </li>

                                <li class="item ">
                                    <a href="<?php echo HTTP_PATH; ?>/pages/doi-mat-khau.php" title="Thay đổi mật khẩu">
                                        <i class="fa fa-lock-keyhole fa-fw"></i>Thay đổi mật khẩu
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <main class="ci-main">
                            <h2 class="fz-20 fw-normal mb-4">Quản lý thông báo</h2>
                            <div class="bg-white px-4 py-4 radius-8">
                                <div class="sp-tabs">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="khuyen-mai" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Khuyễn mãi</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="don-hang" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Đơn hàng</button>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1" role="tabpanel" aria-labelledby="khuyen-mai">1...</div>
                                        <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="don-hang">2...</div>
                                    </div>

                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once FOOTER; ?>

    </div>
</body>

<?php include_once SCRIPTS; ?>