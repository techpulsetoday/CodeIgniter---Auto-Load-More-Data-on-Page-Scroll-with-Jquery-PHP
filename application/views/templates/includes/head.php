<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <title><?php echo $this->lang->line('title'); ?></title>
    <?php if (!empty($styles) && count($styles) > 0): ?>
        <?php foreach ($styles as $style): ?>
            <?php if (!empty($style) && file_exists($style)): ?>
                <?php echo link_tag($style); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>