@extends('layouts.client')

@section('title', 'Dịch vụ')

@section('breadcrumb', 'Dịch vụ')
    
@section('content')
<!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                            <img src="{{ asset('assets/clients/img/service/11.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ ĐÁNG TIN CẬY</h6>
                                <h1 class="section-title">Chúng tôi là những người
                                    chuyên nghiệp & giàu kinh nghiệm<span>.</span></h1>
                                <p>Chúng tôi luôn cam kết mang đến dịch vụ tốt nhất, đáp ứng mọi nhu cầu của khách hàng
        một cách nhanh chóng và hiệu quả.</p>
                            </div>
                            <div class="about-us-info-wrap-inner about-us-info-devide">
                                <p>Với đội ngũ nhân viên tận tâm và trang thiết bị hiện đại, chúng tôi tự tin cung cấp
        các sản phẩm và dịch vụ chất lượng cao, đảm bảo sự hài lòng của khách hàng.</p>
                                <div class="list-item-with-icon">
                                    <ul>
                                        <li><a href="contact.html">Giao hàng tận nơi 24/7 miễn phí</a></li>
                                        <li><a href="team.html">Đội ngũ chuyên gia giàu kinh nghiệm</a></li>
                                        <li><a href="service-details.html">Thiết bị hiện đại, đảm bảo an toàn</a></li>
                                        <li><a href="shop.html">Hàng hóa phong phú, đa dạng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- SERVICE AREA START (Service 1) -->
        <div class="ltn__service-area section-bg-1 pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title white-color---">Dịch vụ của chúng tôi</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__service-item-1">
                            <div class="service-item-img">
                                <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}" alt="#"></a>
                            </div>
                            <div class="service-item-brief">
                                <h3><a href="service-details.html">Rau củ hữu cơ</a></h3>
                                <p>Chúng tôi cung cấp rau củ sạch, không hóa chất, đảm bảo an toàn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__service-item-1">
                            <div class="service-item-img">
                                <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}" alt="#"></a>
                            </div>
                            <div class="service-item-brief">
                                <h3><a href="service-details.html">Giao hàng tận nơi</a></h3>
                                <p>Dịch vụ giao hàng nhanh chóng, đúng hẹn, đảm bảo rau củ luôn tươi ngon để đến tay khách hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__service-item-1">
                            <div class="service-item-img">
                                <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="#"></a>
                            </div>
                            <div class="service-item-brief">
                                <h3><a href="service-details.html">Canh tác tự nhiên</a></h3>
                                <p>Rau củ được trồng theo phương thức hữu cơ, không sử dụng thuốc trừ sâu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__service-item-1">
                            <div class="service-item-img">
                                <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="#"></a>
                            </div>
                            <div class="service-item-brief">
                                <h3><a href="service-details.html">Hỗ trợ khách hàng</a></h3>
                                <p>Đội ngũ tư vấn luôn sẵn sàng hỗ trợ bạn trong việc lựa chọn sản phẩm phù hợp</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__service-item-1">
                            <div class="service-item-img">
                                <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}" alt="#"></a>
                            </div>
                            <div class="service-item-brief">
                                <h3><a href="service-details.html">Đóng gói an toàn</a></h3>
                                <p>Sản phẩm được đóng gói kỹ lưỡng, sạch sẽ, giữ nguyên độ tươi ngon, giá trị dinh dưỡng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__service-item-1">
                            <div class="service-item-img">
                                <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}" alt="#"></a>
                            </div>
                            <div class="service-item-brief">
                                <h3><a href="service-details.html">Sản phẩm đa dạng</a></h3>
                                <p>Chúng tôi cung cấp nhiều loại rau củ theo mùa, phù hợp cho mọi nhu cầu nấu nướng hằng ngày.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE AREA END -->

        <!-- OUR JOURNEY AREA START -->
<div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9"
    data-bg="img/bg/8.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__our-journey-wrap ">
                    <ul>
                        <li><span class="ltn__journey-icon">1900</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Khởi đầu hành trình</h3>
                                            <p>Chúng tôi bắt đầu với sứ mệnh mang đến những sản phẩm nông sản sạch, an toàn và chất lượng cho mọi gia đình.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="active"><span class="ltn__journey-icon">1950</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Mở rộng quy mô</h3>
                                            <p>Không ngừng phát triển và mở rộng hệ thống cung ứng nhằm phục vụ khách hàng với chất lượng tốt nhất.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">1994</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Khẳng định chất lượng</h3>
                                            <p>Sản phẩm được nhiều khách hàng tin tưởng lựa chọn nhờ nguồn gốc rõ ràng và quy trình kiểm định nghiêm ngặt.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2010</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Phát triển dịch vụ</h3>
                                            <p>Ra mắt nhiều dịch vụ tiện ích như giao hàng tận nơi, tư vấn trực tuyến và chăm sóc khách hàng chuyên nghiệp.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2020</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Hướng tới tương lai</h3>
                                            <p>Tiếp tục đổi mới, nâng cao chất lượng sản phẩm và mang đến trải nghiệm mua sắm hiện đại, an toàn cho mọi khách hàng.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OUR JOURNEY AREA END -->
@endsection