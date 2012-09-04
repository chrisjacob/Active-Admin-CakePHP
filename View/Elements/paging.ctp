<div id="index_footer">
<?php if(isset($this->Paginator)): ?>
<nav class="pagination">
  <?php if($this->Paginator->hasPrev()):?>
  <span class="first">
    <?php echo $this->Paginator->first('« '.__('Frist', true), array(), null, array('class'=>'disabled'));?>
  </span>
  <span class="prev">
    <?php echo $this->Paginator->prev('‹ '.__('Prev', true), array(), null, array('class'=>'disabled'));?>
  </span>
  <?php endif; ?>
  <?php echo $this->Paginator->numbers(array('separator' => '&nbsp;'));?>
  <?php if($this->Paginator->hasNext()):?>
    <span class="next">
      <?php echo $this->Paginator->next(__('Next', true).' ›', array(), null, array('class'=>'disabled'));?>
  </span>
  <span class="last">
    <?php echo $this->Paginator->last(__('Last', true).' »', array(), null, array('class'=>'disabled'));?>
  </span>
  <?php endif; ?>
</nav>
<?php endif; ?>
</div>

