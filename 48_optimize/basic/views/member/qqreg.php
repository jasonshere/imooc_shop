<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
                    <h2 class="bordered">
                        <img src="<?php echo Yii::$app->session['userinfo']['figureurl_1'] ?>">
                        完善您的信息
                    </h2>
					<p>请填写一个用户名和密码</p>

					<div class="social-auth-buttons">
					</div>
                    <?php $form = ActiveForm::begin([
                        'fieldConfig' => [
                            'template' => '<div class="field-row">{label}{input}</div>{error}'
                        ],
                        'options' => [
                            'class' => 'login-form cf-style-1',
                            'role' => 'form',
                        ],
                        //'action' => ['member/auth'],
                    ]); ?>
                        <input type="text" value="<?php echo Yii::$app->session['userinfo']['nickname'] ?>" class="le-input"><br>
                        <?php echo $form->field($model, 'username')->textInput(['class' => 'le-input']); ?>
                        <?php echo $form->field($model, 'userpass')->passwordInput(['class' => 'le-input']); ?>
                        <?php echo $form->field($model, 'repass')->passwordInput(['class' => 'le-input']); ?>
                        <div class="field-row clearfix">
                        </div>

                        <div class="buttons-holder">
                            <?php echo Html::submitButton('完善信息', ['class' => 'le-button huge']); ?>
                        </div><!-- /.buttons-holder -->

                    <?php ActiveForm::end(); ?><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
<script>
    var qqbtn = document.getElementById("login_qq");
    qqbtn.onclick = function(){
        window.location.href="<?php echo yii\helpers\Url::to(['member/qqlogin']) ?>";
    }
</script>





