<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>
    <link rel="stylesheet" href="assets/admin/css/compiled/new-user.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content">
        <div class="container-fluid">
            <div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>添加新用户</h3>
                </div>
                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span9 with-sidebar">
                        <div class="container">
                                <?php
                                if (Yii::$app->session->hasFlash('info')) {
                                    echo Yii::$app->session->getFlash('info');
                                }
                                $form = ActiveForm::begin([
                                    'fieldConfig' => [
                                        'template' => '<div class="span12 field-box">{label}{input}</div>{error}',
                                    ],
                                    'options' => [
                                        'class' => 'new_user_form inline-input',
                                    ],
                                ]);
                                echo $form->field($model, 'username')->textInput(['class' => 'span9']);
                                echo $form->field($model, 'useremail')->textInput(['class' => 'span9']);
                                echo $form->field($model, 'userpass')->passwordInput(['class' => 'span9']);
                                echo $form->field($model, 'repass')->passwordInput(['class' => 'span9']);
                                ?>
                                <div class="span11 field-box actions">
                                    <?php echo Html::submitButton('添加', ['class' => 'btn-glow primary']); ?>
                                    <span>OR</span>
                                    <?php echo Html::resetButton('取消', ['class' => 'reset']); ?>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>

                    <!-- side right column -->
                    <div class="span3 form-sidebar pull-right">
                        <div class="alert alert-info hidden-tablet">
                            <i class="icon-lightbulb pull-left"></i>
                            请在左侧表单当中填入要添加的用户信息,包括用户名,密码,电子邮箱
                        </div>                        
                        <h6>商城用户说明</h6>
                        <p>可以在前台进行登录并且进行购物</p>
                        <p>前台也可以注册用户</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->
