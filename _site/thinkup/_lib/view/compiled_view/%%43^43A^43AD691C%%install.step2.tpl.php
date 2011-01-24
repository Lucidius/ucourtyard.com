<?php /* Smarty version 2.6.26, created on 2011-01-06 07:26:02
         compiled from install.step2.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_install.header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="container">
    <div id="thinkup-tabs">
      <div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
          <li id="step-tab-1" class="ui-state-default ui-corner-top">
            <div class="key-stat install_step">
            <h1><span class="pass_step" id="pass-step-1">1</span></h1>
            <h3>Check System Requirements</h3>
            </div>  
          </li>
          <li id="step-tab-2" class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
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
    <img id="dart2" class="dart" alt="" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png">
    <div class="clearfix prepend_20 append_20">
      <div class="grid_22 push_1 clearfix">
        <form class="input" name="form1" method="post" action="index.php?step=3">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_usermessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <h2 class="clearfix step_title">Create Your ThinkUp Account</h2>
          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>Name</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="text" name="full_name" id="full_name"<?php if (isset ( $this->_tpl_vars['full_name'] )): ?> value="<?php echo $this->_tpl_vars['full_name']; ?>
"<?php endif; ?>>
            </div>
          </div>
          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>Email&nbsp;Address</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="text" name="site_email" id="site_email"<?php if (isset ( $this->_tpl_vars['site_email'] )): ?> value="<?php echo $this->_tpl_vars['site_email']; ?>
"<?php endif; ?>>
            </div>
          </div>

          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>Choose&nbsp;Password</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="password" name="password" id="password"<?php if (isset ( $this->_tpl_vars['password'] )): ?> value="<?php echo $this->_tpl_vars['password']; ?>
"<?php endif; ?>>
            </div>
          </div>

          <div class="clearfix append_20">
            <div class="grid_6 prefix_2 right">
              <label>Confirm Password</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="password" name="confirm_password" id="confirm_password"<?php if (isset ( $this->_tpl_vars['confirm_password'] )): ?> value="<?php echo $this->_tpl_vars['confirm_password']; ?>
"<?php endif; ?>>
            </div>
          </div>

          <div class="clearfix append_20">
            <div class="grid_6 prefix_2 right">
              <label>Your Time Zone</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <select name="timezone" id="timezone" style="margin-top:1.25em">
                <?php $_from = $this->_tpl_vars['tz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_name'] => $this->_tpl_vars['group']):
?>
                  <optgroup label='<?php echo $this->_tpl_vars['group_name']; ?>
'>
                    <?php $_from = $this->_tpl_vars['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tz']):
?>
                      <option value='<?php echo $this->_tpl_vars['tz']['val']; ?>
'<?php if ($this->_tpl_vars['current_tz'] == $this->_tpl_vars['tz']['val']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['tz']['display']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                  </optgroup>
                <?php endforeach; endif; unset($_from); ?>
              </select>
              <span class="input_information">Choose the location closest to you.</span>
            </div>
          </div>

          <h2 class="clearfix step_title">Connect ThinkUp to Your Database</h2>

          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>Database Host</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="text" name="db_host" id="db_host"<?php if (isset ( $this->_tpl_vars['db_host'] )): ?> value="<?php echo $this->_tpl_vars['db_host']; ?>
"<?php endif; ?>>
              <span class="input_information">This is usually <strong>localhost</strong> or a host name specified by 
              your hosting provider.</span>
            </div>
          </div>
          

          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>Database Name</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="text" name="db_name" id="db_name"<?php if (isset ( $this->_tpl_vars['db_name'] )): ?> value="<?php echo $this->_tpl_vars['db_name']; ?>
"<?php endif; ?>>
              <span class="input_information">If the database does not exist, ThinkUp will attempt to create it.</span>
            </div>
          </div>
          
          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>User Name</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="text" name="db_user" id="db_user"<?php if (isset ( $this->_tpl_vars['db_user'] )): ?> value="<?php echo $this->_tpl_vars['db_user']; ?>
"<?php endif; ?>>
              <span class="input_information">Your MySQL username.</span>
            </div>
          </div>
          
          <div class="clearfix append_20">
            <div class="grid_5 prefix_3 right">
              <label>Password</label>
            </div>
            <div class="grid_10 prefix_1 left">
              <input type="password" name="db_passwd" id="db_passwd"<?php if (isset ( $this->_tpl_vars['db_passwd'] )): ?> value="<?php echo $this->_tpl_vars['db_passwd']; ?>
"<?php endif; ?>>
              <span class="input_information">Your MySQL password.</span>
            </div>
          </div>

          <h2 class="clearfix step_title toggle-advanced-options">
            <a href="#">Advanced Options<span class="ui-icon ui-icon-circle-triangle-e"></span></a>
          </h2>
          <div id="database-advance-options">
              <div class="ui-state-highlight ui-corner-all" style="margin-top: 10px; padding: 0.5em 0.7em;">
                <p>
                  <span class="ui-icon ui-icon-info" style="float: left; margin: 0.3em 0.3em 0pt 0pt;"></span>
                  These options are only necessary for some sites. If you're not sure what you should enter here,
                  leave the default settings or check with your hosting provider.
                </p>
             </div>

              <div class="clearfix append_20">
                <div class="grid_5 prefix_3 right">
                  <label>Database Socket</label>
                </div>
                <div class="grid_10 prefix_1 left">
                  <input type="text" name="db_socket" id="db_socket"<?php if (isset ( $this->_tpl_vars['db_socket'] )): ?> value="<?php echo $this->_tpl_vars['db_socket']; ?>
"<?php endif; ?>>
                  <span class="input_information">If you're not sure about this, leave it blank.</span>
                </div>
              </div>

              <div class="clearfix append_20">
                <div class="grid_5 prefix_3 right">
                  <label>Database Port</label>
                </div>
                <div class="grid_10 prefix_1 left">
                  <input type="text" name="db_port" id="db_port"<?php if (isset ( $this->_tpl_vars['db_port'] )): ?> value="<?php echo $this->_tpl_vars['db_port']; ?>
"<?php endif; ?>>
                  <span class="input_information">If you're not sure about this, leave it blank.</span>
                </div>
              </div>

              <div class="clearfix append_20">
                <div class="grid_5 prefix_3 right">
                  <label>Table Prefix</label>
                </div>
                <div class="grid_10 prefix_1 left">
                  <input type="text" name="db_prefix" id="db_prefix"<?php if (isset ( $this->_tpl_vars['db_prefix'] )): ?> value="<?php echo $this->_tpl_vars['db_prefix']; ?>
"<?php endif; ?>>
                  <span class="input_information">Optional prefix for your ThinkUp tables.</span>
                </div>
              </div>
          </div>
          
          <div class="clearfix append_20">
            <div class="grid_10 prefix_9 left">
              <input type="submit" name="Submit" class="next_step tt-button ui-state-default ui-priority-secondary ui-corner-all" value="Next Step &raquo">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_install.footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>