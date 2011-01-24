<?php /* Smarty version 2.6.26, created on 2011-01-06 07:25:56
         compiled from install.step1.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_install.header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="container">
    <div id="thinkup-tabs">
      <div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
          <li id="step-tab-1" class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
            <div class="key-stat install_step">
            <h1>1</h1>
            <h3>Check System Requirements</h3>
            </div>  
          </li>
          <li id="step-tab-2" class="ui-state-default ui-corner-top">
            <div class="key-stat install_step">
            <h1>2</h1>
            <h3>Configure ThinkUp</h3>
            </div>
          </li>
          <li id="step-tab-3" class="no-border ui-state-default ui-corner-top">
            <div class="key-stat install_step">
            <h1>3</h1>
            <h3>Finish</h3>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div id="installer-page" class="container_24 round-all">
    <img id="dart1" class="dart" alt="" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png">
    <div class="clearfix append_20">
      <div class="grid_22 push_1 clearfix">
        <h2 class="clearfix step_title">Check System Requirements</h2>
        <?php if ($this->_tpl_vars['permission']['compiled_view'] && $this->_tpl_vars['permission']['cache'] && $this->_tpl_vars['php_compat'] && $this->_tpl_vars['libs']['curl'] && $this->_tpl_vars['libs']['gd'] && $this->_tpl_vars['libs']['pdo'] && $this->_tpl_vars['libs']['pdo_mysql']): ?>
        <p class="success" style="margin-bottom: 30px">
             <strong>Great!</strong> Your system has everything it needs to run ThinkUp.
             You may proceed to the next step.
        </p>
        <?php else: ?>
        <div class="ui-state-error ui-corner-all" style="margin-bottom: 20px; padding: 0.5em 0.7em;">
             <p>
               <span class="ui-icon ui-icon-alert" style="float: left; margin:.3em 0.3em 0 0;"></span>
               <strong>Oops!</strong> Your system requirements didn't check out. Details below.  
             </p>
        </div>
        <?php endif; ?>
        <div class="clearfix append_20">
          <div class="grid_6 prefix_5 right">
            <span class="label<?php if (! $this->_tpl_vars['php_compat']): ?> no<?php endif; ?>">PHP Version >= 5.2</span>
          </div>
          <div class="grid_8 prefix_1 left">
            <?php if ($this->_tpl_vars['php_compat']): ?>
            <span class="value yes">Yes</span>
            <?php else: ?>
            <span class="value no">No</span>
            <?php endif; ?>
          </div>
        </div>
        <?php if (! $this->_tpl_vars['php_compat']): ?>
        <div class="clearfix append_20 info_message">
          <p>thinkup needs PHP version greater or equal to v.<?php echo $this->_tpl_vars['php_required_version']; ?>
</p>
        </div>
        <?php endif; ?>
        
        <div class="clearfix append_20">
          <div class="grid_6 prefix_5 right">
            <span class="label<?php if (! $this->_tpl_vars['libs']['curl']): ?> no<?php endif; ?>">cURL installed</span>
          </div>
          <div class="grid_8 prefix_1 left">
            <?php if ($this->_tpl_vars['libs']['curl']): ?>
            <span class="value yes">Yes</span>
            <?php else: ?>
            <span class="value no">No</span>
            <?php endif; ?>
          </div>
        </div>
        <?php if (! $this->_tpl_vars['libs']['curl']): ?>
        <div class="clearfix append_20 info_message">
          <p>ThinkUp needs the <a href="http://www.php.net/manual/en/book.curl.php" target="_blank">cURL PHP library</a> installed on your system.</p>
        </div>
        <?php endif; ?>
        
        <div class="clearfix append_20">
          <div class="grid_6 prefix_5 right">
            <span class="label <?php if (! $this->_tpl_vars['libs']['gd']): ?> no<?php endif; ?>">GD installed</span>
          </div>
          <div class="grid_8 prefix_1 left">
            <?php if ($this->_tpl_vars['libs']['gd']): ?>
            <span class="value yes">Yes</span>
            <?php else: ?>
            <span class="value no">No</span>
            <?php endif; ?>
          </div>
        </div>
        <?php if (! $this->_tpl_vars['libs']['gd']): ?>
        <div class="clearfix append_20 info_message">
          <p>ThinkUp needs the <a href="http://www.php.net/manual/en/book.image.php" target="_blank">GD PHP library</a> installed on your system.</p>
        </div>
        <?php endif; ?>
        
        <div class="clearfix append_20">
          <div class="grid_6 prefix_5 right">
            <span class="label <?php if (! $this->_tpl_vars['libs']['pdo'] || ! $this->_tpl_vars['libs']['pdo_mysql']): ?> no<?php endif; ?>">PDO installed</span>
          </div>
          <div class="grid_8 prefix_1 left">
            <?php if ($this->_tpl_vars['libs']['pdo'] && $this->_tpl_vars['libs']['pdo_mysql']): ?>
            <span class="value yes">Yes</span>
            <?php else: ?>
            <span class="value no">No</span>
            <?php endif; ?>
          </div>
        </div>
        <?php if (! $this->_tpl_vars['libs']['pdo'] || ! $this->_tpl_vars['libs']['pdo_mysql']): ?>
        <div class="clearfix append_20 info_message">
          <p>ThinkUp needs the <a href="http://www.php.net/manual/en/pdo.installation.php" target="_blank">PDO extension</a> and the <a href="http://php.net/manual/en/ref.pdo-mysql.php" target="_blank">MySQL driver</a> installed on your system.</p>
        </div>
        <?php endif; ?>

        <div class="clearfix append_20">
          <div class="grid_6 prefix_5 right">
            <?php if ($this->_tpl_vars['permissions_compat']): ?>
            <span class="label">Template and cache directories are writeable</span>
            <?php else: ?>
            <span class="label no">Template and cache directories are writeable?</span>
            <?php endif; ?>
          </div>
          <div class="grid_8 prefix_1 left">
            <?php if ($this->_tpl_vars['permissions_compat']): ?>
            <span class="value yes">Yes</span>
            <?php else: ?>
            <span class="value no">No</span>
            <?php endif; ?>
          </div>
        </div>
        <?php if (! $this->_tpl_vars['permissions_compat']): ?>
        <div class="clearfix append_20 info_message">
          <p>Make sure the following directories are writeable by the web server:</p>
          <p><code><?php echo $this->_tpl_vars['writeable_directories']['logs']; ?>
</code></p>
          <p><code><?php echo $this->_tpl_vars['writeable_directories']['compiled_view']; ?>
</code></p>
          <p><code><?php echo $this->_tpl_vars['writeable_directories']['cache']; ?>
</code></p>
          <p class="prepend_20">If you have terminal (SSH) access to your web server then you can simply copy and paste the following command into your terminal:</p>
          <p>As root: <code>chown -R apache <?php echo $this->_tpl_vars['writeable_directories']['logs']; ?>
 <?php echo $this->_tpl_vars['writeable_directories']['compiled_view']; ?>
 <?php echo $this->_tpl_vars['writeable_directories']['cache']; ?>
</code></p>
          <p>Or if you don't have root access: <code>chmod -R 777 <?php echo $this->_tpl_vars['writeable_directories']['logs']; ?>
 <?php echo $this->_tpl_vars['writeable_directories']['compiled_view']; ?>
 <?php echo $this->_tpl_vars['writeable_directories']['cache']; ?>
</code></p>
        </div>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['requirements_met']): ?>
        <div class="clearfix">
          <div class="grid_10 prefix_8 left">
            <div class="next_step tt-button ui-state-default ui-priority-secondary ui-corner-all">
              <a href="index.php?step=2" style="color:black" id="nextstep">Next Step &raquo;</a>
            </div>
          </div>
        </div>
        <?php endif; ?>
        
      </div>
    </div>
  </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_install.footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>