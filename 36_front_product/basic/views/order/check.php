<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= CONTENT ========================================= -->

<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            <section id="shipping-address" style="margin-bottom:100px;margin-top:-10px">
                <h2 class="border h1">收货地址</h2>
                    <a href="#" id="createlink">新建联系人</a>
                <form>
                    <div class="row field-row" style="margin-top:10px">
                        <div class="col-xs-12">
                            <input  class="le-radio big" type="radio" name="address" />
                            <a class="simple-link bold" href="#">北京市朝阳区酒仙桥北路</a>
                        </div>
                    </div><!-- /.field-row -->
                    <div class="row field-row" style="margin-top:10px">
                        <div class="col-xs-12">
                            <input  class="le-radio big" type="radio" name="address"  />
                            <a class="simple-link bold" href="#">北京市朝阳区酒仙桥北路</a>
                        </div>
                    </div><!-- /.field-row -->
                
                </form>
            </section><!-- /#shipping-address -->
            
            <div class="billing-address" style="display:none;">
                <h2 class="border h1">新建联系人</h2>
                <form>
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>姓*</label>
                            <input class="le-input" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>名*</label>
                            <input class="le-input" >
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12">
                            <label>公司名称</label>
                            <input class="le-input" >
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>地址*</label>
                            <input class="le-input" data-placeholder="例如：北京市朝阳区" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>&nbsp;</label>
                            <input class="le-input" data-placeholder="例如：酒仙桥北路" >
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>邮编</label>
                            <input class="le-input"  >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>电子邮箱地址*</label>
                            <input class="le-input" >
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <label>联系电话*</label>
                            <input class="le-input" >
                        </div>
                    </div><!-- /.field-row -->

                    <!--<div class="row field-row">
                        <div id="create-account" class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">新建联系人？</a>
                        </div>
                    </div>--><!-- /.field-row -->

                    <div class="place-order-button">
                        <button class="le-button small">新建</button>
                    </div><!-- /.place-order-button -->
                </form>
            </div><!-- /.billing-address -->


            <section id="your-order">
                <h2 class="border h1">您的订单详情</h2>
                <form>
                    <div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="#" class="qty">1 x</a>
                        </div>

                        <div class="col-xs-12 col-sm-9 ">
                            <div class="title"><a href="#">white lumia 9001 </a></div>
                            <div class="brand">sony</div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">$2000.00</div>
                        </div>
                    </div><!-- /.order-item -->

                    <div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="#" class="qty">1 x</a>
                        </div>

                        <div class="col-xs-12 col-sm-9 ">
                            <div class="title"><a href="#">white lumia 9001 </a></div>
                            <div class="brand">sony</div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">$2000.00</div>
                        </div>
                    </div><!-- /.order-item -->

                    <div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="#" class="qty">1 x</a>
                        </div>

                        <div class="col-xs-12 col-sm-9 ">
                            <div class="title"><a href="#">white lumia 9001 </a></div>
                            <div class="brand">sony</div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">$2000.00</div>
                        </div>
                    </div><!-- /.order-item -->
                </form>
            </section><!-- /#your-order -->

            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <div id="subtotal-holder">
                        <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>商品总价</label>
                                <div style="width:100%;text-align:right" class="value ">$8434.00</div>
                            </li>
                            <li>
                                <label>选择快递</label>
                                <div style="width:100%;text-align:right" class="value">
                                    <div class="radio-group">
                                        <input class="le-radio" type="radio" name="group1" value="free"> <div class="radio-label bold">中通快递<span class="bold"> $15</span></div><br>
                                        <input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">顺丰快递<span class="bold"> $15</span></div>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <ul id="total-field" class="tabled-data inverse-bold ">
                            <li>
                                <label>订单总额</label>
                                <div class="value" style="width:100%;text-align:right">$8434.00</div>
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->

            <div id="payment-method-options">
                <form>
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="Direct">
                        <div class="radio-label bold ">微信支付</div>
                    </div><!-- /.payment-method-option -->
                    
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="cheque">
                        <div class="radio-label bold ">支付宝支付</div>
                    </div><!-- /.payment-method-option -->
                    
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="paypal">
                        <div class="radio-label bold ">网银支付</div>
                    </div><!-- /.payment-method-option -->
                </form>
            </div><!-- /#payment-method-options -->
            
            <div class="place-order-button">
                <button class="le-button big">确认订单</button>
            </div><!-- /.place-order-button -->

        </div><!-- /.col -->
    </div><!-- /.container -->    
</section><!-- /#checkout-page -->
<!-- ========================================= CONTENT : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->

