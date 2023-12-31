<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <?php if(config('admin.show_environment')): ?>
            <strong>Env</strong>&nbsp;&nbsp; <?php echo config('app.env'); ?>

        <?php endif; ?>

        &nbsp;&nbsp;&nbsp;&nbsp;

        <?php if(config('admin.show_version')): ?>
        <strong>Version</strong>&nbsp;&nbsp; <?php echo \Encore\Admin\Admin::VERSION; ?>

        <?php endif; ?>

    </div>
    <!-- Default to the left -->
    <strong>Powered by <a href="" target="_blank">化城</a></strong>
</footer><?php /**PATH /www/wwwroot/chatty.codemain.top/vendor/encore/laravel-admin/src/../resources/views/partials/footer.blade.php ENDPATH**/ ?>