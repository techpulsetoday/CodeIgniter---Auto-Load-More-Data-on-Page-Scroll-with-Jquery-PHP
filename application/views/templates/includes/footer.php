<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<button onclick="topFunction()" id="back-to-top" title="Go to top">Top</button>
<div class="container-fluid">
    <footer>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </footer>
</div>