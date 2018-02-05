<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="jumbotron text-center">
    <?php echo heading($this->lang->line('title'), 1); ?>
    <?php echo anchor('https://www.techpulsetoday.com/', $this->lang->line('techpulsetoday')); ?>
</div>
<div class="container">
    <div class="row" id="load_data"></div>
    <div id="load_data_message"></div>
</div>