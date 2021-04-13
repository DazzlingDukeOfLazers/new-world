<?php

/*

type: layout
content_type: static
name: Account - Orders
position: 3
description: Account - Orders

*/


?>
<?php include template_dir() . "header.php"; ?>

<module type="breadcrumb"/>

<div class="x-edit main-content" rel="content" field="new_world_content">
    <section class="section account-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="title">
                        <h2><?php echo _lang('Orders history', 'template/new-world'); ?></h2>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <div class="account-header">
                            <ul>
                                <li class="active">
                                    <a href="javascript:;"><?php echo _lang('Orders history', 'template/new-world'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('account'); ?>"><?php echo _lang('Personal info', 'template/new-world'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('address'); ?>"><?php echo _lang('Delivery address', 'template/new-world'); ?></a>
                                </li>
                            </ul>
                        </div>

                        <h3><?php echo _lang('Current orders', 'template/new-world'); ?></h3>

                        <module type="users/orders" template="orders_inside" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
