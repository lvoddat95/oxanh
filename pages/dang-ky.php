<?php require_once "../config.php"; ?>
<?php include_once HEADER; ?>
<?php
$GLOBALS["pScript"] = "assets/js/particles.js;assets/js/particles.app.js";
?>

<body>
    <div id="ci-content" class="ci-content">

        <div class="auth-wrapper" style="background-image: url(<?php echo SOURCE; ?>assets/img/auth/oxanh.png);">
            <div id="auth-particles" class="bg-overlay"></div>
            <div class="auth-page-content my-3 my-xl-5">
                <div class="card bg-white">
                    <div class="card-body p-3 p-xl-5">
                        <div class="text-center">
                            <a href="<?php echo HTTP_PATH; ?>">
                                <img class="img-fluid" src="<?php echo SOURCE; ?>assets/img/logo/logo-nav.png" alt="Logo" width="180px">
                            </a>
                        </div>
                        <div class="text-center mt-2 mb-5">
                            <h3 class="auth-title">Đăng ký tài khoản</h3>
                        </div>


                        <div class="p-2">
                            <form action="dong-y-chinh-sach.php">
                                <div class="auth-heading">
                                    <h4>
                                        <i class="fad fa-user me-2 main-color fz-24"></i>
                                        <span>Thông tin cá nhân</span>
                                    </h4>
                                    <div class="line"></div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="" class="form-label">Ngày Sinh</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                                    <i class="fad fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="" class="form-label">Giới tính</label>
                                                <select class="form-select" select2>
                                                    <option value="">Chọn giới tính</option>
                                                    <option value="1">Nam</option>
                                                    <option value="2">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="" class="form-label">Tỉnh/Thành phố</label>
                                        <select class="form-select" select2>
                                            <option value="">Chọn tỉnh/thành phố</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Quận/Huyện</label>
                                        <select class="form-select" select2>
                                            <option value="">Chọn quận/huyện</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Phường/Xã</label>
                                        <select class="form-select" select2>
                                            <option value="">Chọn phường/xã</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Ghi chú địa chỉ</label>
                                        <input type="text" class="form-control">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="" class="form-label">Điện thoại</label>
                                        <input type="text" class="form-control input-phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">CMTND/CCCD/Mã định danh</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- 
                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <label for="mattruoc_file">
                                                <img class="img-fluid" id="preview_mattruoc" src="<?php echo SOURCE; ?>assets/img/camera.svg">
                                            </label>
                                            <input type="file" name="" id="mattruoc_file" style="display:none" accept="image/*">
                                            <p class="tx-16">Ảnh mặt trước</p>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <label for="matsau_file">
                                                <img class="img-fluid" id="preview_matsau" src="<?php echo SOURCE; ?>assets/img/camera.svg">
                                            </label>
                                            <input type="file" name="" id="matsau_file" style="display:none" accept="image/*">
                                            <p class="tx-16">Ảnh mặt sau</p>
                                        </div>
                                    </div> -->

                                </div>

                                <div class="auth-heading">
                                    <h4>
                                        <i class="fad fa-shield-keyhole me-2 main-color fz-24"></i>
                                        <span>Thông tin đăng nhập</span>
                                    </h4>
                                    <div class="line"></div>

                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tên đăng nhập</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Mật khẩu</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nhập lại mật khẩu</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <button class="btn w-100 ci-btn ci-bg-sub-color " type="submit">Đăng ký</button>
                                </div>

                                <div class="mt-5 text-center">
                                    Quý khách đã có tài khoản <a href="dang-nhap.php">Đăng nhập</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auth-footer">
                <div class="container-fluid">
                    <div class="d-block d-xl-flex align-items-center justify-content-between">
                        <ul class="auth-footer-link list-unstyled my-4 my-xl-0">
                            <li>
                                <a href="">
                                    <i class="fal fa-headset fz-18 me-3"></i>
                                    <span>Liên hệ hỗ trợ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fal fa-circle-question fz-18 me-3"></i>
                                    <span>Câu hỏi thường gặp</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fal fa-user-shield fz-18 me-3"></i>
                                    <span>Miễn trừ trách nhiệm</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fal fa-shield-check fz-18 me-3"></i>
                                    <span>Chính sách bảo mật</span>
                                </a>
                            </li>
                        </ul>
                        <p class="mb-0">© 2022 Bản quyền thuộc về Công ty Cổ phần Công nghệ Internet Ô Xanh</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<?php include_once POPUP; ?>
<?php include_once SCRIPTS; ?>