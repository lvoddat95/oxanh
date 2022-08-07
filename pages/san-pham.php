<?php require_once "../config.php"; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'san-pham'; ?>

<body>
    <div id="ci-content" class="ci-content">

        <?php include_once NAVBAR; ?>

        <!-- <div class="ci-breadcrumb" style="background-image: url(<?php echo SOURCE; ?>assets/img/san-pham/cham-soc.jpg);">
            <div class="container">
                <div class="ci-breadcrumb-inner">
                    <h1 class="ci-breadcrumb-title">Giải quyết quyền lợi tương trợ</h1>
                    <div class="ci-breadcrumb-desc">
                        Các bước yêu cầu tương trợ vì bệnh hiểm nghèo
                    </div>
                </div>
            </div>
        </div> -->

        <main>


            <div class="">

                <div class="ci-block ci-sanpham">
                    <div class="container">
                        <div class="row gx-lg-5 align-items-center">
                            <div class="col-md-7">
                                <div class="ci-heading">
                                    <h2 class="ci-heading__main main-color">Kế hoạch tương trợ <span>G1</span></h2>
                                </div>
                                <div class="fz-16 text-sanpham" style="text-align: justify;">
                                    Với tỷ lệ mắc Bệnh ung thư gia tăng mỗi năm <br>
                                    Oxanh xin giới thiệu <span class="fw-medium">Kế hoạch tương trợ G1</span> sẽ giúp bạn giảm bớt lo âu với những quyền lợi ưu việt, mang lại sự chuẩn bị tốt nhất trước những rủi ro bất ngờ.
                                </div>
                            </div>
                            <div class="col-md-5 ">
                                <div class="ps-lg-5 img-sanpham">
                                    <img class="radius-16 overflow-hidden of-cover" width="100%" height="300px" src="<?php echo SOURCE; ?>assets/img/san-pham/cham-soc.jpg" alt="Ô Xanh">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ci-block text-center">
                    <div class="container">
                        <div class="ci-heading mb-3 mb-md-5">
                            <h2 class="ci-heading__main ">Danh mục các bệnh hiểm nghèo</h2>
                        </div>
                        <div class="fz-16 mb-3">
                            Các bệnh nghiêm trọng được định nghĩa trong kế hoạch này đề cập đến các bệnh. <br> Trạng thái bệnh được quy định chi tiết tại đây:
                        </div>

                        <a href="javascript:void(0);" onclick="fancybox_modal('#danh-muc-benh');" class="ci-docs__link">
                            <i class="fa-solid fa-book-medical me-2"></i>
                            <span>Xem bảng danh mục</span>
                        </a>

                    </div>
                </div>
            </div>

            <div class="ci-block text-center bg-color1">
                <div class="container">
                    <div class="ci-heading mb-3 mb-md-5">
                        <h2 class="ci-heading__main ">Mức tương trợ tối đa và phí thành viên</h2>
                    </div>
                    <div class="fz-16 mb-3 text">
                        Với gói G1 này, mức tương trợ tối đa cho thành viên lên tới <span class="fw-medium main-color">200.000.000</span> đồng.
                        <br> Tùy theo các nhóm tuổi phí thành viên cụ thể như sau:

                    </div>
                    <div class="">
                        <table class="table table-style">
                            <thead>
                                <tr>
                                    <th style="border-right: 1px solid #fff;" rowspan="2">Độ tuổi</th>
                                    <th>Tên Gói và Mức tương trợ tối đa</th>
                                <tr>
                                    <th>G1 – 200.000.000</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Từ 1 -18 (1 tính từ 30 ngày)</td>
                                    <td>500.000</td>
                                </tr>
                                <tr>
                                    <td>Từ 19-29</td>
                                    <td>1.000.000</td>
                                </tr>
                                <tr>
                                    <td>Từ 30 - 39</td>
                                    <td>1.500.000</td>
                                </tr>
                                <tr>
                                    <td>Từ 40 - 49</td>
                                    <td>2.000.000</td>
                                </tr>
                                <tr>
                                    <td>Từ 50 - 59</td>
                                    <td>2.500.000</td>
                                </tr>
                                <tr>
                                    <td>Từ 60 -65 (chỉ dành cho người đã là thành viên)</td>
                                    <td>3.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mt-3 fw-medium">
                            <div class="col-md-6 text-start">
                                <i>Phụ lục 1: Bảng mức tương trợ và Phí thành viên</i>
                            </div>
                            <div class="col-md-6 text-end">
                                <i>Đơn vị: Đồng</i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="ci-block ">
                <div class="container">
                    <div class="position-relative">
                        <dic class="ci-icon">
                            <i class="fa-solid fa-quote-left"></i>
                        </dic>
                        <div class="ci-heading mb-3 mb-md-5">
                            <h2 class="ci-heading__main">Lưu ý cơ bản</h2>
                        </div>
                        <div class="fz-16 mb-3">
                            <p class="mb-2">Chương trình này không phải là bảo hiểm và chúng tôi không hứa rằng bệnh trạng nào của bạn cũng được bảo vệ.</p>
                            <p class="mb-2">Tại một thời điểm với kế hoạch trợ giúp lẫn nhau này, mỗi thành viên chỉ có thể tham gia một lần với 01 gói và/hoặc nộp 01 đơn xin tương trợ cho 01 sự kiện cần tương trợ.</p>
                            <p class="mb-2">Trong mọi trường hợp, sự hỗ trợ của Ô Xanh với mỗi thành viên không vượt quá Mức tương trợ tối đa của 01 gói tương trợ.</p>
                            <p class="mb-2">Việc tham gia nhiều lần hoặc nhiều gói, nộp nhiều đơn cho nhiều sự kiện tuơng trợ khác nhau cũng sẽ không thể nhận được nhiều hỗ trợ lẫn nhau.</p>
                            Các thành viên chia sẻ trách nhiệm Trợ giúp lẫn nhau trong hành động đóng góp và số tiền đã được phân bổ không thể bị thu hồi.
                        </div>
                    </div>
                </div>
            </div>

            <div class="ci-block ci-style bg-color1">
                <div class="container">
                    <div class="ci-heading mb-3 mb-md-5">
                        <h2 class="ci-heading__main">Cách thức tham gia thành viên</h2>
                    </div>
                    <div class="ci-claim-desc fz-16 mb-3">
                        Người dùng vào khai báo thông tin theo hướng dẫn trên web và app. Nếu đáp ứng yêu cầu của nền tảng,
                        người dùng nộp hồ sơ mới nhất đã tham gia khám bệnh trong vòng 1 năm (tờ phiếu khám và chuẩn đoán của bác sỹ) và
                        đóng phí thành viên để trở thành thành viên tương trợ của nền tảng. <br>
                        Cụ thể theo 5 bước như sau:
                    </div>

                    <div class="ci-flow">
                        <div>
                            <a href="javascript:void(0);" onclick="fancybox_modal('#step-1');" title="Đăng ký">
                                <img class="ci-flow__icon" src="<?php echo SOURCE; ?>assets/img/signup.png" alt="Oxanh">
                                <span class="ci-flow__link">Bước 1: <br>Đăng ký</span>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);" onclick="fancybox_modal('#step-2');" title="Đăng nhập">
                                <img class="ci-flow__icon" src="<?php echo SOURCE; ?>assets/img/login.png" alt="Oxanh">
                                <span class="ci-flow__link">Bước 2: <br>Đăng nhập</span>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);" onclick="fancybox_modal('#step-3');" title="Kê khai thông tin">
                                <img class="ci-flow__icon" src="<?php echo SOURCE; ?>assets/img/register.png" alt="Oxanh">
                                <span class="ci-flow__link">Bước 3: <br>Kê khai thông tin</span>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);" onclick="fancybox_modal('#step-4');" title="Chọn gói tương trợ">
                                <img class="ci-flow__icon" src="<?php echo SOURCE; ?>assets/img/product.png" alt="Oxanh">
                                <span class="ci-flow__link">Bước 4: <br>Chọn gói tương trợ</span>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);" onclick="fancybox_modal('#step-5');" title="Thanh toán" class="last">
                                <img class="ci-flow__icon" src="<?php echo SOURCE; ?>assets/img/pay.png" alt="Oxanh">
                                <span class="ci-flow__link">Bước 5: <br>Thanh toán</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ci-block">
                <div class="container">
                    <div class="ci-heading">
                        <h2 class="ci-heading__main">5. Câu hỏi thường gặp</h2>
                    </div>
                    <div class="ci-faq">
                        <div id="ci-faq-accordion" class="accordion">

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapseOne">
                                        5.1 Trường hợp nào không được tương trợ?
                                    </button>
                                </div>
                                <div id="collapse0" class="accordion-collapse collapse" data-bs-parent="#ci-faq-accordion">
                                    <div class="accordion-body">
                                        <p><strong>5.1.1</strong> Nếu một&nbsp;th&agrave;nh vi&ecirc;n bị bệnh nặng như được x&aacute;c định trong chương tr&igrave;nh n&agrave;y nhưng do c&aacute;c trường hợp sau th&igrave; sẽ kh&ocirc;ng thể nhận được sự hỗ trợ lẫn nhau:</p>

                                        <p>(1) Th&agrave;nh vi&ecirc;n bị người trả tiền (ph&iacute; th&agrave;nh vi&ecirc;n) cố &yacute; giết hoặc bị thương;</p>

                                        <p>(2) Th&agrave;nh vi&ecirc;n phạm tội cố &yacute; hoặc chống lại c&aacute;c biện ph&aacute;p cưỡng chế h&igrave;nh sự theo quy định của ph&aacute;p luật;</p>

                                        <p>(3) C&aacute;c h&agrave;nh động khi&ecirc;u kh&iacute;ch hoặc cố &yacute; của c&aacute;c th&agrave;nh vi&ecirc;n dẫn đến đ&aacute;nh nhau hoặc bị tấn c&ocirc;ng;</p>

                                        <p>(4) C&aacute;c th&agrave;nh vi&ecirc;n chủ động uống hoặc ti&ecirc;m thuốc<s>;</s></p>

                                        <p>(5) Th&agrave;nh vi&ecirc;n l&aacute;i xe c&oacute; động cơ trong khi say rượu, hoặc l&aacute;i xe kh&ocirc;ng c&oacute; động cơ trong khi say;</p>

                                        <p>(6) L&aacute;i xe m&agrave; kh&ocirc;ng c&oacute; giấy ph&eacute;p l&aacute;i xe hợp ph&aacute;p, hoặc điều khiển xe cơ giới m&agrave; kh&ocirc;ng c&oacute; giấy ph&eacute;p l&aacute;i xe hợp ph&aacute;p;</p>

                                        <p>(7) Th&agrave;nh vi&ecirc;n tự s&aacute;t hoặc cố &yacute; g&acirc;y thương t&iacute;ch;</p>

                                        <p>(8) C&aacute;c th&agrave;nh vi&ecirc;n bị nhiễm HIV hoặc AIDS, trừ khi c&oacute; thỏa thuận kh&aacute;c trong kế hoạch n&agrave;y?;</p>

                                        <p>(9) C&aacute;c bệnh di truyền, dị tật bẩm sinh, dị tật hoặc bất thường nhiễm sắc thể, trừ khi c&oacute; thỏa thuận kh&aacute;c trong kế hoạch n&agrave;y?.</p>

                                        <p><strong>5.1.2</strong> Khi một&nbsp;th&agrave;nh vi&ecirc;n kh&ocirc;ng đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về sức khỏe khi tham gia chương tr&igrave;nh, hoặc mắc bệnh nặng theo quy định của chương tr&igrave;nh, th&agrave;nh vi&ecirc;n sẽ kh&ocirc;ng thể nhận được sự Trợ gi&uacute;p lẫn nhau v&agrave; tư c&aacute;ch th&agrave;nh vi&ecirc;n của thanh vi&ecirc;n sẽ bị chấm dứt v&agrave; thanh vi&ecirc;n sẽ tự động r&uacute;t khỏi chương tr&igrave;nh th&igrave; được&nbsp; ho&agrave;n lại ph&iacute; th&agrave;nh vi&ecirc;n c&ograve;n lại đến thời điểm r&uacute;t khỏi chương tr&igrave;nh.</p>

                                        <p><strong>5.1.3</strong>&nbsp;Th&agrave;nh vi&ecirc;n đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về sức khỏe khi tham gia chương tr&igrave;nh v&agrave; kh&ocirc;ng mắc&nbsp;bệnh hiểm ngh&egrave;o như đ&atilde; x&aacute;c định trong kế hoạch. Nhưng khi thay đổi chương tr&igrave;nh tương trợ, lại&nbsp;kh&ocirc;ng đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về sức khỏe của chương tr&igrave;nh mới. V&igrave; vậy khi b&ecirc;nh nặng th&agrave;nh vi&ecirc;n đăng k&yacute; tham gia chương tr&igrave;nh hỗ trợ lẫn nhau với&nbsp;chương tr&igrave;nh mới sẽ kh&ocirc;ng ph&ugrave; hợp m&agrave; chỉ c&oacute; thể l&agrave;m theo&nbsp;chương tr&igrave;nh viện trợ lẫn nhau ban đầu.</p>

                                        <p><strong>5.1.4</strong>&nbsp;Đặc biệt lưu &yacute;: Th&agrave;nh vi&ecirc;n mắc bệnh hiểm ngh&egrave;o quy định tại Điều 7.1 của kế hoạch n&agrave;y, nhưng l&agrave; đối tượng kh&ocirc;ng được tương trợ quy định tại Điều 7.1 của kế hoạch n&agrave;y th&igrave; th&agrave;nh vi&ecirc;n đ&oacute; kh&ocirc;ng được tương trợ.&nbsp;</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                        5.2 Thời gian chờ là gì?
                                    </button>
                                </div>
                                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#ci-faq-accordion">
                                    <div class="accordion-body">
                                        <div class="ci-list">
                                            <p><strong>5.2.1 </strong>Khi tham gia kế hoạch tương trợ bệnh hiểm ngh&egrave;o, th&agrave;nh&nbsp; vi&ecirc;n phải trải qua thời gian chờ trong v&ograve;ng 90 ng&agrave;y (bao gồm cả ng&agrave;y thứ 90) kể từ 0h00 ng&agrave;y h&ocirc;m sau kể từ khi th&agrave;nh vi&ecirc;n tham gia chương tr&igrave;nh th&agrave;nh c&ocirc;ng v&agrave; V&Agrave; SỐNG S&Oacute;T SAU 7 NG&Agrave;Y kể từ ng&agrave;y bị tai nạn v&agrave; hoặc được chẩn đo&aacute;n mắc bệnh hiểm ngh&egrave;o.</p>

                                            <p><strong>5.2.2&nbsp;</strong>Nếu một th&agrave;nh vi&ecirc;n mắc bệnh trong thời gian chờ hoặc kh&ocirc;ng qua khỏi trong v&ograve;ng 7 ng&agrave;y kể từ khi bị tai nạn hoặc được chẩn đo&aacute;n mắc bệnh hiểm ngh&egrave;o th&igrave; th&agrave;nh vi&ecirc;n đ&oacute; kh&ocirc;ng thuộc đối tượng được tương trợ trong kế hoạch n&agrave;y.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                                        5.3 Thời gian xin tương trợ mất bao lâu?
                                    </button>
                                </div>
                                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#ci-faq-accordion">
                                    <div class="accordion-body">
                                        <p>Trong v&ograve;ng 180 ng&agrave;y (bao gồm cả ng&agrave;y thứ 180) kể từ ng&agrave;y được bệnh viện chẩn đo&aacute;n ban đầu hoặc xẩy ra tai nạn.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                                        5.4 Các câu hỏi khác?
                                    </button>
                                </div>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#ci-faq-accordion">
                                    <div class="accordion-body">
                                        <p><a href="https://oxanh.vn">Xem phần 100 c&acirc;u hỏi v&agrave; trả lời về Bệnh hiểm ngh&egrave;o.</a></p>

                                        <p><b><i>Th&agrave;nh vi&ecirc;n cam kết đ&atilde; đọc, hiểu v&agrave; đồng &yacute; với c&aacute;c nội dung của Quy ước th&agrave;nh vi&ecirc;n, Điều khoản, Quy tắc v&agrave; c&aacute;c điều kiện tham gia Nền tảng trợ gi&uacute;p &Ocirc; Xanh</i></b></p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


    </div>
    </main>

    <?php include_once FOOTER; ?>

    </div>
</body>
<?php include_once POPUP; ?>
<?php include_once SCRIPTS; ?>