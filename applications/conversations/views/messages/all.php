<?php if (!defined('APPLICATION')) exit();
?>
<h1 class="H"><?php echo $this->Data('Title'); ?></h1>
<?php

// Pager setup
$PagerOptions = array('CurrentRecords' => count($this->Data('Conversations')));
if ($this->Data('_PagerUrl'))
   $PagerOptions['Url'] = $this->Data('_PagerUrl');

// Pre Pager
PagerModule::Write($PagerOptions);
?>
<ul class="Condensed DataList Conversations">
<?php
if (count($this->Data('Conversations') > 0)):
   $ViewLocation = $this->FetchViewLocation('conversations');
   include $ViewLocation;
else:
   ?>
   <li class="Item Empty Center"><?php echo sprintf(T('You do not have any %s yet.'), T('messages')); ?></li>
   <?php
endif;
?>
</ul>
<?php
// Post Pager
PagerModule::Write($PagerOptions);
