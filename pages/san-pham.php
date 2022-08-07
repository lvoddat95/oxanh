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

                <div class="ci-block ci-sanpham" id="ke-hoach">
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
                        <div class="mb-3">
                            <p class="mb-3">Chương trình này không phải là bảo hiểm và chúng tôi không hứa rằng bệnh trạng nào của bạn cũng được bảo vệ.</p>
                            <p class="mb-3">Tại một thời điểm với kế hoạch trợ giúp lẫn nhau này, mỗi thành viên chỉ có thể tham gia một lần với 01 gói và/hoặc nộp 01 đơn xin tương trợ cho 01 sự kiện cần tương trợ.</p>
                            <p class="mb-3">Trong mọi trường hợp, sự hỗ trợ của Ô Xanh với mỗi thành viên không vượt quá Mức tương trợ tối đa của 01 gói tương trợ.</p>
                            <p class="mb-3">Việc tham gia nhiều lần hoặc nhiều gói, nộp nhiều đơn cho nhiều sự kiện tuơng trợ khác nhau cũng sẽ không thể nhận được nhiều hỗ trợ lẫn nhau.</p>
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



            <div class="ci-block pb-0">
                <div class="container">
                    <div class="position-relative">
                        <dic class="ci-icon">
                            <i class="fad fa-hourglass-clock text-warning op10"></i>
                        </dic>
                        <div class="ci-heading mb-3 mb-md-5">
                            <h2 class="ci-heading__main">Thời gian chờ là <span class="main-color">90 ngày</span></h2>
                        </div>
                        <div class="mb-3">
                            <div class="row gx-5 mb-3">
                                <div class="col-md-6" style="text-align: justify;">
                                    <p class="">Thời gian chờ sẽ trong vòng 90 ngày (bao gồm cả ngày thứ 90) tính từ 0h00 ngày hôm sau kể từ khi thành viên tham gia chương trình thành công.
                                        Trong thời gian chờ đợi, chẩn đoán ban đầu của thành viên phát hiện ra bệnh nghiêm trọng như được xác định trong kế hoạch này hoặc do thương tật tai nạn,
                                        sẽ không thể nhận được sự hỗ trợ lẫn nhau, tư cách thành viên chấm dứt và sẽ tự động rút khỏi chương trình,
                                        nhưng chúng tôi sẽ hoàn lại mà không tính lãi Số phí thành viên đã đóng trong chương trình này.</p>
                                    <i class="gray-color">Nếu hết thơi gian chờ mà thành viên vẫn chưa nộp hồ sơ đã tham gia khám chữa bệnh thì thời gian chờ sẽ tự động mở rộng cho đến khi thành viên nộp thành công.</i>
                                </div>
                                <div class="col-md-6" style="text-align: justify;">
                                    <p class="mb-0" style="background: rgb(238 249 248 / 95%); padding: 20px; border-radius: 30px;">
                                        Ví dụ: Trước khi hết thời gian chờ đợi, thành viên tìm thấy khối u nghi ngờ ác tính hoặc bắt đầu điều trị khối u ác tính thông qua bất kỳ phương tiện chẩn đoán nào và
                                        được chẩn đoán là có khối u ác tính trong vòng 90 ngày (kể cả ngày thứ 90) sau khi thời gian chờ kết thúc, thành viên sẽ không thể nhận được sự hỗ trợ lẫn nhau,
                                        chấm dứt tư cách thành viên và tự động rút khỏi gói này. Tuy nhiên, chúng tôi sẽ hoàn lại số phí thành viên đã đóng trong kế hoạch này mà không tính lãi suất.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ci-block pb-0">
                <div class="container">
                    <div class="position-relative">
                        <dic class="ci-icon">
                            <i class="fad fa-quote-left text-info op10"></i>
                        </dic>
                        <div class="ci-heading mb-3 mb-md-5">
                            <h2 class="ci-heading__main">Nội dung tương trợ </h2>
                        </div>
                        <div class="mb-3">
                            <p class="mb-3">SAU THỜI GIAN CHỜ 90 NGÀY và trong thời gian là thành viên của chương trình, một thành viên bị tai nạn và/hoặc được chẩn đoán ban đầu (lần đầu tiên được chẩn đoán)
                                là mắc bệnh nặng trong danh mục bệnh hiểm nghèo được xác định trong chương trình này VÀ SỐNG SÓT SAU 7 NGÀY kể từ ngày bị tai nạn và/hoặc được chẩn đoán mắc bệnh hiểm nghèo, thành viên bị bệnh có thể gửi đơn xin Trợ giúp lẫn nhau cho chúng tôi. </p>
                            <p class="mb-3">Sau khi kết thúc điều tra sự cố tương trợ của thành viên, chúng tôi sẽ bắt đầu phân bổ viện trợ lẫn nhau cho các thành viên trong
                                kế hoạch này và thanh toán quỹ trợ giúp lẫn nhau cho các thành viên bị bệnh nếu xác định được thông qua các thủ tục liên quan rằng việc Trợ giúp lẫn nhau cần được thực hiện.
                                Việc thanh toán được thực hiện 1 lần toàn bộ số tiền tương trợ thành viên.</p>
                            <p class="mb-3"> Trừ những trường hợp đặc biệt, Ô Xanh có thể tạm ứng trước (nhưng không quá 50%) để thành viên có thời gian hoàn thiện hồ sơ xin tương trợ.</p>
                            Các bệnh hiểm nghèo được định nghĩa trong kế hoạch này đề cập đến các bệnh, trạng thái bệnh hoặc các hoạt động được quy định trong <a title="Xem danh mục" href="#ke-hoach">Các bệnh hiểm nghèo</a>.

                        </div>
                    </div>
                </div>
            </div>



            <div class="ci-block pb-0">
                <div class="container">
                    <div class="position-relative">
                        <dic class="ci-icon">
                            <i class="fad fa-octagon-exclamation text-danger op10"></i>
                        </dic>
                        <div class="ci-heading mb-3 mb-md-5">
                            <h2 class="ci-heading__main">Chấm dứt kế hoạch</h2>
                        </div>
                        <div class="mb-3">
                            <p><i class="far fa-circle-1 sub-color2 me-2"></i>Khi các điều kiện chấm dứt được liệt kê trong "Quy ước thành viên " được đáp ứng,
                                chẳng hạn như các yếu tố bất khả kháng hoặc chính sách của nhà nước, chúng tôi có quyền tự động chấm dứt các kế hoạch trợ giúp lẫn nhau này.</p>
                            <p><i class="far fa-circle-2 sub-color2 me-2"></i>Để đảm bảo kế hoạch hoạt động liên tục, lành mạnh và duy trì sự công bằng, quyền và
                                lợi ích của các thành viên, khi số lượng thành viên của phương án dưới 100.000 thành viên, chúng tôi có quyền chấm dứt hoặc điều chỉnh
                                kế hoạch (không giới hạn ở việc điều chỉnh phương thức chi trả như Mục 3 - Yêu câù hỗ trợ và phân bổ dưới đây)
                                Chúng tôi có quyền xây dựng, chấm dứt hoặc điều chỉnh kế hoạch và thực hiện công bố cho các thành viên. Trong thời gian công khai,
                                các thành viên của kế hoạch có thể đưa ra ý kiến và đề xuất về kế hoạch.
                                Chúng tôi sẽ lắng nghe cẩn thận và thực hiện điều chỉnh nếu thấy thích hợp.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ci-block pb-0">
                <div class="container">
                    <div class="position-relative">
                        <dic class="ci-icon">
                            <i class="fad fa-handshake-simple-slash text-danger op10"></i>
                        </dic>
                        <div class="ci-heading mb-3 mb-md-5">
                            <h2 class="ci-heading__main">Hoàn cảnh không có sự hỗ trợ lẫn nhau</h2>
                        </div>

                        <div>

                            <p class="ci-list">
                                <span class="fw-medium"><i class="far fa-circle-1 sub-color2 me-2"></i> Nếu một thành viên bị bệnh nặng như được xác định trong chương trình này nhưng do các trường hợp sau thì sẽ không thể nhận được sự hỗ trợ lẫn nhau</span>
                                <span class="d-block my-3 ms-4">+ Thành viên bị người trả tiền (phí thành viên) cố ý giết hoặc bị thương;</span>
                                <span class="d-block my-3 ms-4">+ Thành viên phạm tội cố ý hoặc chống lại các biện pháp cưỡng chế hình sự theo quy định của pháp luật</span>
                                <span class="d-block my-3 ms-4">+ Các hành động khiêu khích hoặc cố ý của các thành viên dẫn đến đánh nhau hoặc bị tấn công;</span>
                                <span class="d-block my-3 ms-4">+ Các thành viên chủ động uống hoặc tiêm thuốc (không theo chỉ dẫn của bác sỹ);</span>
                                <span class="d-block my-3 ms-4">+ Thành viên lái xe có động cơ trong khi say rượu, hoặc lái xe không có động cơ trong khi say;</span>
                                <span class="d-block my-3 ms-4">+ Lái xe mà không có giấy phép lái xe hợp pháp, hoặc điều khiển xe cơ giới mà không có giấy phép lái xe hợp pháp;</span>
                                <span class="d-block my-3 ms-4">+ Thành viên tự sát hoặc cố ý gây thương tích;</span>
                                <span class="d-block my-3 ms-4">+ Các thành viên bị nhiễm HIV hoặc AIDS, trừ khi có thỏa thuận khác trong kế hoạch này?;</span>
                                <span class="d-block my-3 ms-4">+ Các bệnh di truyền, dị tật bẩm sinh, dị tật hoặc bất thường nhiễm sắc thể, trừ khi có thỏa thuận khác trong kế hoạch này.</span>
                            </p>

                            <p class="ci-list">
                                <span class="fw-medium"><i class="far fa-circle-2 sub-color2 me-2"></i> Bệnh/tình trạng hiểm nghèo của thành viên được gây ra, toàn bộ hoặc một phần, bởi bất kỳ một trong những nguyên nhân dưới đây</span>
                                <span class="d-block my-3 ms-4">+ Bệnh tật hoặc thương tật khác với chẩn đoán bệnh/tình trạng hiểm nghèo theo định nghĩa tại Mục 7.1 dưới đây;</span>
                                <span class="d-block my-3 ms-4">+ Bệnh/tình trạng hiểm nghèo mà thành viên có triệu chứng, đã được xác minh, hoặc được chẩn đoán trước hoặc trong thời gian chờ trừ khi có thỏa thuận khác trong kế hoạch này;</span>
                                <span class="d-block my-3 ms-4">+ Bệnh/tình trạng hiểm nghèo phát sinh, trực tiếp từ một khuyết tật hoặc bệnh bẩm sinh đã xuất hiện hoặc được chẩn đoán trước thi tham gia thành viên;</span>
                                <span class="d-block my-3 ms-4">+ Thành viên không còn sống trong ít nhất bảy (7) ngày sau khi chẩn đoán bệnh/tình trạng hiểm nghèo;</span>
                                <span class="d-block my-3 ms-4">+ Bức xạ ion hóa hoặc ô nhiễm bởi phóng xạ từ bất kỳ nhiên liệu hạt nhân hoặc từ bất kỳ chất thải hạt nhân do đốt nhiên liệu hạt nhân;</span>
                            </p>

                            <p class="ci-list">
                                <span class="fw-medium">
                                    <i class="far fa-circle-3 sub-color2 me-2"></i>
                                    Khi tham gia chương trình một thành viên không đáp ứng các yêu cầu về sức khỏe, hoặc mắc bệnh nặng theo quy định của chương trình, thành viên sẽ không thể nhận được sự Trợ giúp lẫn nhau và tư cách thành viên của thành viên sẽ bị chấm dứt và thành viên sẽ tự động rút khỏi chương trình thì được hoàn lại phí thành viên còn lại đến thời điểm rút khỏi chương trình.
                                </span>
                            </p>
                            <p class="ci-list">
                                <span class="fw-medium"><i class="far fa-circle-4 sub-color2 me-2"></i>
                                    Thành viên đáp ứng các yêu cầu về sức khỏe khi tham gia chương trình và không mắc bệnh hiểm nghèo như đã xác định trong kế hoạch. Nhưng khi thay đổi chương trình tương trợ, lại không đáp ứng các yêu cầu về sức khỏe của chương trình mới.
                                    Vì vậy khi bênh nặng thành viên đăng ký tham gia chương trình hỗ trợ lẫn nhau với chương trình mới sẽ không phù hợp mà </span>
                            </p>
                            <p class="ci-list">
                                <span class="fw-medium"><i class="far fa-circle-5 sub-color2 me-2"></i>
                                    Đặc biệt lưu ý: Thành viên mắc bệnh hiểm nghèo quy định tại Điều 7.1 của kế hoạch này, nhưng là đối tượng không tương trợ quy định tại Điều 7.1 của kế hoạch này thì thành viên đó không được tương trợ.
                                    Vui lòng đọc kỹ toàn bộ nội dung của Điều 7.1, đặc biệt là phần in đậm.</span>
                            </p>
                            <p class="ci-list">
                                <span class="fw-medium"><i class="far fa-circle-6 sub-color2 me-2"></i>
                                    Thành viên tham gia các hoạt động hàng không (trừ khi với tư cách là hành khách), tham gia các cuộc diễn tập, huấn luyện quân sự, tham gia chiến đấu của các lực lượng vũ trang.
                                    Điều trị thuốc không theo chỉ dẫn của cơ quan y tế.
                                    Do động đất, núi lửa, sóng thần, nhiễm phóng xạ, chiến tranh, nội chiến, đình công, thiên tai, dịch bệnh, các trường hợp bất khả kháng.</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ci-block">
                <div class="container">
                    <div class="ci-heading">
                        <h2 class="ci-heading__main">Đề nghị tương trợ và quy tắc phân bổ</h2>
                    </div>
                    <div class="ci-faq">
                        <div id="ci-faq-accordion" class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapseOne">
                                        Các mốc thời gian
                                    </button>
                                </div>
                                <div id="collapse0" class="accordion-collapse collapse" data-bs-parent="#ci-faq-accordion">
                                    <p class="ci-list mb-3">
                                        <span class="fw-medium d-block"><i class="far fa-circle-1 sub-color2 me-2"></i>Thông báo về các sự cố tương trợ</span>
                                        Các thành viên hoặc vợ /chồng, cha mẹ và con cái của họ có thể thông báo về các tai nạn, bênh tật và xin Trợ giúp lẫn nhau cho chúng tôi.
                                        Chúng tôi sẽ phải được thông báo trong vòng 30 ngày kể từ ngày sự cố tương trợ xẩy ra.
                                        Những người cố tình hoặc không thông báo kịp thời do sơ suất sẽ khó xác định bản chất,
                                        nguyên nhân và hậu quả của tai nạn tương trợ và họ sẽ không thể có được sự hỗ trợ lẫn nhau.
                                        Trừ khi, nếu chúng tôi đã biết hoặc biết kịp thời về việc xảy ra sự cố tương trợ lẫn nhau thông qua các phương tiện khác,
                                        hoặc nếu không thông báo kịp thời cho chúng tôi nhưng chúng tôi xác định được việc đó không ảnh hưởng đến việc xác định bản chất,
                                        nguyên nhân và kết quả của sự cố tương trợ lẫn nhau.
                                    </p>
                                    <p class="ci-list mb-3">
                                        <span class="fw-medium d-block"><i class="far fa-circle-6 sub-color2 me-2"></i>Thời gian được quyền gửi đơn và hồ sơ yêu cầu trợ giúp.</span>
                                        Thời gian để các thành viên nằm trong kế hoạch Trợ giúp lẫn nhau nộp đơn xin
                                        Trợ giúp lẫn nhau là trong vòng 180 ngày (bao gồm cả ngày thứ 180) kể từ ngày được bệnh viện chẩn đoán ban đầu hoặc xẩy ra tai nạn..
                                    </p>
                                    <p class="ci-list mb-3">
                                        <span class="fw-medium"><i class="far fa-circle-6 sub-color2 me-2"></i></span>
                                        Đối với các trường hợp có thể tiến hành trợ giúp lẫn nhau do kết quả của việc điều tra và xem xét, chúng tôi sẽ công khai,
                                        công bố rộng rãi và chấp nhận sự giám sát của xã hội: Thời hạn công khai là 07 ngày.
                                        Trong thời gian thông báo công khai, chúng tôi sẽ chấp nhận các báo cáo giám sát, phản biện và tiến hành các cuộc điều tra bổ sung.
                                    </p>
                                    <p class="ci-list mb-3">
                                        <span class="fw-medium"><i class="far fa-circle-6 sub-color2 me-2"></i></span>
                                        Hết thời hạn công khai, thành viên bị ốm có thể nhận được sự trợ giúp lẫn nhau trong vòng 03 ngày đối với những trường hợp
                                        không có phản đối sau khi công khai.
                                    </p>

                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                        Quy tắc tương trợ (phân bổ)
                                    </button>
                                </div>
                                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#ci-faq-accordion">
                                    <div class="accordion-body">

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed button-hidden">
                                        III.
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed button-hidden">
                                        IV. Thành viên đáp ứng các yêu cầu về sức khỏe khi tham gia chương trình và không mắc bệnh hiểm nghèo như đã xác định trong kế hoạch. Nhưng khi thay đổi chương trình tương trợ, lại không đáp ứng các yêu cầu về sức khỏe của chương trình mới. Vì vậy khi bênh nặng thành viên đăng ký tham gia chương trình hỗ trợ lẫn nhau với chương trình mới sẽ không phù hợp mà chỉ có thể làm theo chương trình viện trợ lẫn nhau ban đầu.
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed button-hidden">
                                        V. Đặc biệt lưu ý: Thành viên mắc bệnh hiểm nghèo quy định tại Điều 7.1 của kế hoạch này, nhưng là đối tượng không tương trợ quy định tại Điều 7.1 của kế hoạch này thì thành viên đó không được tương trợ. Vui lòng đọc kỹ toàn bộ nội dung của Điều 7.1, đặc biệt là phần in đậm.
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed button-hidden">
                                        VI. Thành viên tham gia các hoạt động hàng không (trừ khi với tư cách là hành khách), tham gia các cuộc diễn tập, huấn luyện quân sự, tham gia chiến đấu của các lực lượng vũ trang. Điều trị thuốc không theo chỉ dẫn của cơ quan y tế. Do động đất, núi lửa, sóng thần, nhiễm phóng xạ, chiến tranh, nội chiến, đình công, thiên tai, dịch bệnh, các trường hợp bất khả kháng.
                                    </button>
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