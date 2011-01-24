<?php /* Smarty version 2.6.26, created on 2011-01-06 07:25:47
         compiled from _header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php if ($this->_tpl_vars['controller_title']): ?><?php echo $this->_tpl_vars['controller_title']; ?>
 | <?php endif; ?><?php echo $this->_tpl_vars['app_title']; ?>
</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/favicon.png">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/base.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/positioning.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/style.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/jquery-ui-1.7.1.custom.css">

  <!-- jquery -->
  <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script type="text/javascript">var site_root_path = '<?php echo $this->_tpl_vars['site_root_path']; ?>
';</script>
  <?php $_from = $this->_tpl_vars['header_scripts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['script']):
?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo $this->_tpl_vars['script']; ?>
"></script>
  <?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['enable_tabs']): ?>
<script type="text/javascript">
    <?php echo '
      // tabs functionality
      var current_query_key = \'updates\';
      $(function() {
        $("#tabs").tabs( { select: function(event, ui) { current_query_key =  ui.panel.id  } } );
      });
      
      // buttons functionality
      $(function() {
        //all hover and click logic for buttons
        $(".tt-button:not(.ui-state-disabled)")
        .hover(
          function() {
            $(this).addClass("ui-state-hover"); 
          },
          function() {
            $(this).removeClass("ui-state-hover"); 
          }
        )
        .mousedown(function() {
            $(this).parents(\'.tt-buttonset-single:first\').find(".tt-button.ui-state-active").removeClass("ui-state-active");
            if ($(this).is(\'.ui-state-active.tt-button-toggleable, .tt-buttonset-multi .ui-state-active\')) {
              $(this).removeClass("ui-state-active");
            }
            else {
              $(this).addClass("ui-state-active");
            }
        })
        .mouseup(function() {
          if (! $(this).is(\'.tt-button-toggleable, .tt-buttonset-single .tt-button,  .tt-buttonset-multi .tt-button\') ) {
            $(this).removeClass("ui-state-active");
          }
        });
      });
    '; ?>

</script>
<?php endif; ?>

  <!-- custom css -->
  <?php echo '
  <style>
  .line { background:url(\''; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'assets/img/border-line-470.gif\') no-repeat center bottom;
  margin: 8px auto;
  height: 1px;
  }
  .grid_4 a, .grid_10 a {color:#6184b5;}
  .thinkup-canvas a {color:#6184b5;}
  </style>
  '; ?>

  
<?php echo '
  <script type="text/javascript">
  $(document).ready(function() {
      $(".post").hover(
        function() { $(this).children(".small").children(".metaroll").show(); },
        function() { $(this).children(".small").children(".metaroll").hide(); }
      );
      $(".metaroll").hide();
    });
  </script>
'; ?>


</head>
<body>