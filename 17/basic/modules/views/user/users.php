    <link rel="stylesheet" href="assets/admin/css/compiled/user-list.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content">
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>会员列表</h3>
                    <div class="span10 pull-right">
                        <a href="<?php echo yii\helpers\Url::to(['user/reg']) ?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                            添加新用户
                        </a>
                    </div>
                </div>

                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span3 sortable">
                                    <span class="line"></span>用户名
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>真实姓名
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>昵称
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>性别
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>年龄
                                </th>
                                <th class="span3 sortable align-right">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php foreach($users as $user): ?>
                        <tr class="first">
                            <td>
                                <img src="assets/admin/img/contact-img.png" class="img-circle avatar hidden-phone" />
                                <a href="#" class="name"><?php echo $user->username; ?></a>
                                <span class="subtext"><?php echo $user->useremail; ?></span>
                            </td>
                            <td>
                                <?php echo $user->profile->realname; ?>
                            </td>
                            <td>
                                <?php echo $user->profile->nickname; ?>
                            </td>
                            <td>
                                <?php echo $user->profile->sex; ?>
                            </td>
                            <td>
                                <?php echo $user->profile->age; ?>
                            </td>
                            <td class="align-right">
                                删除
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination pull-right">
                    <ul>
                        <li><a href="#">&#8249;</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&#8250;</a></li>
                    </ul>
                </div>
                <!-- end users table -->
            </div>
        </div>
    </div>
    <!-- end main container -->
