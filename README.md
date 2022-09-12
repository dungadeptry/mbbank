<h2><a class="anchor" href="#user-content-c%C3%A0i-%C4%91%E1%BA%B7t" rel="nofollow noindex noopener external ugc"></a>Cài đặt</h2>
<p>Sử dụng Composer để cài đặt:</p>
<pre>composer require datlechin/momo</pre>
<p>Hoặc bạn cũng có thể tải/copy mã code trong tệp <code>src/Momo.php</code> để sử dụng lại code.</p>
<h2><a class="anchor" href="#user-content-s%E1%BB%AD-d%E1%BB%A5ng" rel="nofollow noindex noopener external ugc"></a>Sử dụng</h2>
<p>Nếu bạn cài đặt bằng Composer, bạn cần phải <code>require</code> file <code>vendor/autoload.php</code> để sử dụng thư viện.</p>
<pre><span class="pl-k">require</span> <span class="pl-s">'vendor/autoload.php'</span>;</pre>
<p>Sau đó, bạn có thể sử dụng thư viện như sau:</p>
<pre><span class="pl-k">use</span> <span class="pl-v">DatLeChin</span>\<span class="pl-v">Momo</span>\<span class="pl-v">Momo</span>;

<span class="pl-c">// Khởi tạo đối tượng</span>
<span class="pl-s1"><span class="pl-c1">$</span>momo</span> = <span class="pl-k">new</span> <span class="pl-v">Momo</span>(<span class="pl-s">'phone'</span>, <span class="pl-s">'password'</span>);</pre>
<h3><a class="anchor" href="#user-content-g%E1%BB%ADi-m%C3%A3-otp-v%E1%BB%81-%C4%91i%E1%BB%87n-tho%E1%BA%A1i" rel="nofollow noindex noopener external ugc"></a>Gửi mã OTP về điện thoại</h3>
<p>Để lấy mã OTP, bạn cần gọi phương thức <code>sendOTP()</code>, sau đó Momo sẽ gọi tới số điện thoại của bạn và gửi mã OTP về.</p>
<pre><span class="pl-s1"><span class="pl-c1">$</span>momo</span>-&gt;<span class="pl-en">sendOTP</span>();</pre>
<h3><a class="anchor" href="#user-content-x%C3%A1c-nh%E1%BA%ADn-m%C3%A3-otp-tr%C3%AAn-thi%E1%BA%BFt-b%E1%BB%8B-m%E1%BB%9Bi" rel="nofollow noindex noopener external ugc"></a>Xác nhận mã OTP trên thiết bị mới</h3>
<p>Sau khi có mã OTP, bạn cần gọi phương thức <code>regDevice()</code> để xác nhận mã OTP trên thiết bị mới.</p>
<pre><span class="pl-s1"><span class="pl-c1">$</span>momo</span>-&gt;<span class="pl-en">regDevice</span>(<span class="pl-s">'mã otp'</span>);</pre>
<blockquote>
<p><span class="color-fg-accent">Note</span>
Bạn có thể mở file <code>index.php</code> để xem code mẫu bên trong.</p>
</blockquote>
<h2><a class="anchor" href="#user-content-%C4%91%C3%B3ng-g%C3%B3p" rel="nofollow noindex noopener external ugc"></a>Đóng góp</h2>
<p>Rất vui nếu bạn có thể đóng góp cho dự án này. Bạn có thể tạo một Pull Request hoặc tạo một Issue để báo lỗi.</p>
<h3><a id="user-content-donate" class="anchor" href="#user-content-donate" rel="nofollow noindex noopener external ugc"></a>Donate</h3>
<p>Nếu bạn thấy dự án này hữu ích, bạn có thể donate cho tôi qua các ví hoặc ngân hàng sau:</p>
<ul>
<li>Momo: 0372124043 (Ngô Quốc Đạt)</li>
<li>Vietcombank: 1017595600 (NGO QUOC DAT)</li>
</ul>