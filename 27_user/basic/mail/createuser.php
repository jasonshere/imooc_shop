<p>恭喜您，您的账号的已经申请成功！</p>

<p>欢迎加入慕课商城！</p>

<p>您的用户名为：<span style="color:red;font-weight:700"><?php echo $username; ?></span></p>

<p>您的密码为：<span style="color:red;font-weight:700"><?php echo $userpass; ?></span></p>

<p>您可以通过改收件箱邮箱地址或者用户名进行登录！</p>

<p>登录地址：<?php echo Yii::$app->urlManager->createAbsoluteUrl(['manage/auth']); ?></p>

<p>该邮件是系统自动发送，请勿回复！</p>
