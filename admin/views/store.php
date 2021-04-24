<?php if (!defined('EMLOG_ROOT')) {
	exit('error!');
} ?>
<?php if (isset($_GET['active'])): ?>
    <div class="alert alert-success">安装成功</div><?php endif; ?>
<?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger">商店暂不可用，可能是网络问题</div><?php endif; ?>
<?php if (isset($_GET['error_unreg'])): ?>
    <div class="alert alert-danger">您的emlog pro尚未注册，请先完成注册</div><?php endif; ?>
<?php if (isset($_GET['error_param'])): ?>
    <div class="alert alert-danger">安装失败</div><?php endif; ?>
<?php if (isset($_GET['error_down'])): ?>
    <div class="alert alert-danger">安装失败</div><?php endif; ?>
<?php if (isset($_GET['error_dir'])): ?>
    <div class="alert alert-danger">安装失败</div><?php endif; ?>
<?php if (isset($_GET['error_zip'])): ?>
    <div class="alert alert-danger">安装失败</div><?php endif; ?>


<?php if (!empty($templates) || !empty($plugins)): ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">扩展商店</h1>
    </div>

    <div class="card-columns">
		<?php foreach ($templates as $k => $v):
			$icon = $v['icon'] ?: "./views/images/theme.png";
            ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo $icon; ?>" style="height: 150px;object-fit: cover;"/>
                <div class="card-body">
                    <p class="card-text"><?php echo $v['name']; ?></p>
                    <p class="card-text text-muted small">
                        <span class="small"><?php echo $v['info']; ?></span><br>
                        更新时间：<?php echo $v['update_time']; ?><br>
                        <span class="badge badge-pill badge-warning">模板</span>
                    </p>
                    <p class="card-text text-right">
                        <a href="./store.php?action=install&source=<?php echo $v['source']; ?>&type=tpl" class="btn btn-success btn-sm">下载安装</a>
                    </p>
                </div>
            </div>
		<?php endforeach; ?>
    </div>

    <div class="card-columns">
		<?php foreach ($plugins as $k => $v):
			$icon = $v['icon'] ?: "./views/images/plugin.png";
            ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo $icon; ?>" style="height: 150px;object-fit: cover;"/>
                <div class="card-body">
                    <p class="card-text"><?php echo $v['name']; ?></p>
                    <p class="card-text text-muted small">
                        <?php echo $v['info']; ?><br>
                        更新时间：<?php echo $v['update_time']; ?><br>
                        <span class="badge badge-pill badge-primary">插件</span>
                    </p>
                    <p class="card-text text-right">
                        <a href="./store.php?action=install&source=<?php echo $v['source']; ?>&type=plugin" class="btn btn-success btn-sm">下载安装</a>
                    </p>
                </div>
            </div>
		<?php endforeach; ?>
    </div>
<?php endif; ?>

<script>
    $("#menu_store").addClass('active');
    setTimeout(hideActived, 3600);
</script>
