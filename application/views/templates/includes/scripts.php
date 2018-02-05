<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type='text/javascript'>
    /* <![CDATA[ */
    var CIURLS = {"siteurl": "<?php echo base_url(); ?>"};
    /* ]]> */
</script>
<?php if (!empty($scripts) && count($scripts) > 0): ?>
    <?php foreach ($scripts as $script): ?>
        <?php if (!empty($script) && file_exists($script)): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>