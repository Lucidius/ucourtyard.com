<?php /* Smarty version 2.6.26, created on 2011-01-06 07:25:47
         compiled from _statusbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '_statusbar.tpl', 47, false),array('modifier', 'capitalize', '_statusbar.tpl', 48, false),array('modifier', 'urlencode', '_statusbar.tpl', 54, false),array('modifier', 'relative_datetime', '_statusbar.tpl', 54, false),)), $this); ?>
<?php echo '
  <script type="text/javascript">
    $(document).ready(function() {
      $(\'#choose-instance\').click(function() {
        $(\'#instance-selector\').show();
        $(\'#choose-instance\').hide();
      });
      $(\'#cancel-instance\').click(function() {
        $(\'#instance-selector\').hide();
        $(\'#choose-instance\').show();
      });
      function changeMe() {
      var _mu = $("select#instance-select").val();
      if (_mu != "null") {
        document.location.href = _mu;
      }
    }
  </script>
'; ?>


<div id="status-bar" class="clearfix"> 

  <div class="status-bar-left">
    <?php if ($this->_tpl_vars['instance']): ?>
      <!-- the user has selected a particular one of their instances -->
      <?php echo '
        <script type="text/javascript">
          $(document).ready(function() {
            $(\'#choose-instance\').click(function() {
              $(\'#instance-selector\').show();
              $(\'#choose-instance\').hide();
            });
            $(\'#cancel-instance\').click(function() {
              $(\'#instance-selector\').hide();
              $(\'#choose-instance\').show();
            });
          });
          function changeMe() {
            var _mu = $("select#instance-select").val();
            if (_mu != "null") {
              document.location.href = _mu;
            }
          }
        </script>
      '; ?>

      
      <?php if (count($this->_tpl_vars['instances']) > 1): ?>
      <span id="choose-instance"><span class="underline"><?php echo $this->_tpl_vars['instance']->network_username; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</span></span>
      <span id="instance-selector" style="display:none;">
        <select id="instance-select" onchange="changeMe();">
          <option value="">-- Switch user --</option>
          <?php $_from = $this->_tpl_vars['instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['i']):
?>
            <?php if ($this->_tpl_vars['i']->network_user_id != $this->_tpl_vars['instance']->network_user_id): ?>
              <option value="<?php echo $this->_tpl_vars['site_root_path']; ?>
?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['i']->network_username; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
 (updated <?php echo ((is_array($_tmp=$this->_tpl_vars['i']->crawler_last_run)) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>
 ago<?php if (! $this->_tpl_vars['i']->is_active): ?> (paused)<?php endif; ?>)</option>
            <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
        </select>
        <span id="cancel-instance">Cancel</span>
      </span>
    <?php else: ?>
        <?php echo $this->_tpl_vars['instance']->network_username; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
)
    <?php endif; ?>
    <?php else: ?>
      <!-- the user has not selected an instance -->
      <?php if ($this->_tpl_vars['crawler_last_run']): ?>
      Last update: <?php echo ((is_array($_tmp=$this->_tpl_vars['crawler_last_run'])) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>
 ago
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['instance']): ?> updated <?php if ($this->_tpl_vars['logged_in_user']): ?> <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
crawler/updatenow.php"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->crawler_last_run)) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>
 ago<?php if ($this->_tpl_vars['logged_in_user']): ?></a><?php endif; ?><?php endif; ?>
  </div> <!-- .status-bar-left -->
  
  <div class="status-bar-right text-right">
    <ul> 
      <?php if ($this->_tpl_vars['logged_in_user']): ?>
        <li>Logged in as: <?php echo $this->_tpl_vars['logged_in_user']; ?>
 | <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
account/?m=manage">Settings</a> | <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/logout.php">Log Out</a></li>
      <?php else: ?>
      
        <li><a href="http://thinkupapp.com/">Get ThinkUp</a> | <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/login.php">Log In</a></li>
      <?php endif; ?>
    </ul>
  </div> <!-- .status-bar-right -->

  
</div> <!-- #status-bar -->

<div id="page-bkgd">

<div class="container clearfix">
  
  <div id="app-title"><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo $this->_tpl_vars['logo_link']; ?>
">
    <h1><span class="bold">Think</span><span class="gray">Up</span></h1>
    <h2>New ideas</h2>
  </a></div> <!-- end #app-title -->
  
</div> <!-- end .container -->