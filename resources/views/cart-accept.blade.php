@extends('layout.email-token-layout')

@section('section-body')
<section>
    <link rel="stylesheet" href="css/cart-accept.css">
    <script src="js/count-down-to-home.js"></script>
    <div class="body-content">
        <div class="message-content">
            <div class="message-title">
                <h4>Bạn đã mượn sách thành công</h4>
            </div>
            <div class="message-body">
                <p>Trong vòng 7 ngày, <span id="from-date"></span> tới <span id="to-date"></span> bạn có thể tới gặp câu lạc bộ để nhận sách.</p>
                <p>Địa chỉ nhận sách : <span id="address-get-books"></span></p>
                <p>Nếu quá thời hạn bạn vẫn chưa lấy sách thì thông tin mượn sách này sẽ bị hủy bỏ.</p>
                <p id="ending-body">Have fun with reading books !!</p>
            </div>
            <div class="redirect-10-sec">
                <p>Trang sẽ tự chuyển hướng trong <span class="second">10</span> giây</p>
                <a href="/">Hoặc nhấp vào link để về trang chủ</a>
            </div>
        </div>
    </div>
</section>
@endsection