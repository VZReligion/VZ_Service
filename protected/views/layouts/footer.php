  <!--=== Footer ===-->
    <div class="footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span4">
                    <!-- About -->
                    <div class="headline"><h3>关于</h3></div>
                    <p class="margin-bottom-25">在给你一快蛋糕前，我会在上面放颗樱桃，因为我喜欢这种方式.By：Vanzer</p>
                    <!-- Monthly Newsletter -->
                    <div class="headline"><h3>订阅VZone动态</h3></div>
                    <p>输入您的邮箱点击订阅【按钮】，您将会收到我们精心为您制作的站内动态通知。</p>
                    <form class="form-inline" />
                    <div class="input-append">
                        <input type="text" placeholder="订阅邮箱" class="input-medium" />
                        <button class="btn-u">订阅</button>
                    </div>
                    </form>
                </div><!--/span4-->

                <div class="span4">
                    <div class="posts">
                        <div class="headline"><h3>最新相关动态</h3></div>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">最新响应式动画设计</a></p>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">最新响应式设计————Banner兼容</a></p>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">最新响应式设计，新信息展示</a></p>
                            </dd>
                        </dl>
                    </div>
                </div><!--/span4-->
                <div class="span4">
                    <!-- Monthly Newsletter -->
                    <div class="headline"><h3>交流</h3></div>
                    <address>
                        地址： 木有地址<br />
                        （你就找不到我？） <br />
                        QQ: 在某个不起眼的地方 <br />

                        邮箱: <a href="mailto:info@anybiz.com" class="">木有邮箱</a>
                    </address>
                    <!-- Stay Connected -->
                    <div class="headline"><h3>关注一下</h3></div>
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    </ul>
                </div><!--/span4-->
            </div><!--/row-fluid-->
        </div><!--/container-->
    </div><!--/footer-->
    <!--=== End Footer ===-->
    <!--=== Copyright ===-->
    <div class="copyright">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">
                    <p>2014 &copy; Van. ALL Rights Reserved. <a href="#">Vanzer</a> | <a href="#">Site Version：v0.0.1Bate</a></p>
                </div>

            </div><!--/row-fluid-->
        </div><!--/container-->
    </div><!--/copyright--><!--=== End Copyright ===-->
<!-- JS Global Compulsory -->			

<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/modernizr.custom.js"></script>		
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/bootstrap/js/bootstrap.min.js"></script>	
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/parallax-slider/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
    <script src="<?php echo $this->_theme->baseUrl;?>/js/respond.js"></script>
<![endif]-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>	