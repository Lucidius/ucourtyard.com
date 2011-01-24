<?php /* Smarty version 2.6.26, created on 2011-01-06 07:25:47
         compiled from _usermessage.tpl */ ?>
    <?php if ($this->_tpl_vars['successmsg']): ?>
    <p class="success">
        <?php echo $this->_tpl_vars['successmsg']; ?>

    </p>    
    <?php endif; ?>
    <?php if ($this->_tpl_vars['errormsg']): ?>
     <div class="ui-state-error ui-corner-all" style="margin: 20px 0px; padding: 0.5em 0.7em;">
         <p>
           <span class="ui-icon ui-icon-alert" style="float: left; margin:.3em 0.3em 0 0;"></span>
           <?php echo $this->_tpl_vars['errormsg']; ?>

         </p>
    </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['infomsg']): ?>
    <?php if ($this->_tpl_vars['successmsg'] || $this->_tpl_vars['errormsg']): ?><br /><?php endif; ?>
    <div class="ui-state-highlight ui-corner-all" style="margin-top: 10px; padding: 0.5em 0.7em;"> 
        <p>
             <span class="ui-icon ui-icon-info" style="float: left; margin: 0.3em 0.3em 0pt 0pt;"></span>
             <?php echo $this->_tpl_vars['infomsg']; ?>

        </p>
    </div>
    <?php endif; ?>