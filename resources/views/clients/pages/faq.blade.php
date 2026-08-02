@extends('layouts.client')

@section('title', 'FAQ')

@section('breadcrumb', 'Những câu hỏi thường gặp')
    
@section('content')
<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
        <div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Làm thế nào để mua sản phẩm?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chỉ cần lựa chọn sản phẩm mong muốn, thêm vào giỏ hàng, tiến hành thanh toán và điền đầy đủ thông tin nhận hàng. Chúng tôi sẽ nhanh chóng xác nhận đơn và giao đến địa chỉ của bạn.</p>
                                </div>
                            </div>
                        </div>

                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                aria-expanded="true">
                                Tôi có thể yêu cầu hoàn tiền như thế nào?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{ asset('assets/clients/img/bg/17.jpg') }}" alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                            href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Nếu sản phẩm gặp lỗi hoặc không đúng với đơn đặt hàng, bạn có thể liên hệ bộ phận chăm sóc khách hàng để được hướng dẫn đổi hoặc hoàn tiền theo chính sách của cửa hàng.</p>
                                </div>
                            </div>
                        </div>

                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Tôi là khách hàng mới, nên bắt đầu từ đâu?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Bạn có thể tạo tài khoản miễn phí, duyệt danh mục sản phẩm, lựa chọn mặt hàng cần mua và thực hiện đặt hàng chỉ với vài bước đơn giản.</p>
                                </div>
                            </div>
                        </div>

                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Chính sách đổi trả sản phẩm
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi hỗ trợ đổi trả theo quy định đối với các sản phẩm bị lỗi, hư hỏng trong quá trình vận chuyển hoặc không đúng với đơn hàng đã đặt.</p>
                                </div>
                            </div>
                        </div>

                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Thông tin cá nhân của tôi có được bảo mật không?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Mọi thông tin cá nhân và giao dịch của khách hàng đều được bảo mật theo chính sách riêng tư và chỉ được sử dụng nhằm phục vụ quá trình mua sắm.</p>
                                </div>
                            </div>
                        </div>

                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Mã giảm giá không sử dụng được
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Vui lòng kiểm tra thời hạn sử dụng, điều kiện áp dụng và đảm bảo mã khuyến mãi được nhập chính xác trước khi thanh toán.</p>
                                </div>
                            </div>
                        </div>

                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-7" aria-expanded="false">
                                Tôi có thể thanh toán bằng thẻ tín dụng như thế nào?
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi hỗ trợ thanh toán bằng thẻ tín dụng, thẻ ghi nợ, chuyển khoản ngân hàng và nhiều phương thức thanh toán trực tuyến an toàn khác.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="need-support text-center mt-100">
                        <h2>Bạn vẫn cần hỗ trợ? Liên hệ với chúng tôi 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="contact.html" class="theme-btn-1 btn">Liên hệ ngay</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +0123-456-789</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">

                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// ĐĂNG KÝ</h6>
                        <h4 class="ltn__widget-title">Nhận bản tin mới nhất</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Tìm kiếm">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>

                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/banner-3.jpg') }}" alt="Banner Image"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
        <!-- FAQ AREA START -->

        <!-- COUNTER UP AREA START -->
        <div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="{{ asset('assets/clients/img/bg/5.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/2.png') }}" alt="#"> </div>
                            <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Active Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/3.png') }}" alt="#"> </div>
                            <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                    class="counterUp-icon">+</span> </h1>
                            <h6>Cup Of Coffee</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/4.png') }}" alt="#"> </div>
                            <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Get Rewards</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/5.png') }}" alt="#"> </div>
                            <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Country Cover</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA END -->
@endsection