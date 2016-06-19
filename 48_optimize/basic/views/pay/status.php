<!-- ============================================================= HEADER : END ============================================================= -->		<div id="single-product">
<div class="container" style="padding-top:10px">
    <div style="width:100%;margin:0 auto;text-align:center;height:300px;line-height:300px;font-weight:bold;font-size:20px;color:green">
        <?php if ($status == 'ok'): ?>
        <p style="color:green"><i class="fa fa-check-square"></i> 支付成功</p>
        <?php else: ?>
        <p style="color:#e74c3c"><i class="fa fa-warning"></i> 支付失败</p>
        <?php endif; ?>
    </div>
</div>
