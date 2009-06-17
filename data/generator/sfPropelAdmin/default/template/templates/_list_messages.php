[?php if ($sf_request->getError('delete')): ?]
<div class="form-errors">
  <h2>[?php echo __('Errores al eliminar...', array('%name%' => '<?php echo sfInflector::humanize($this->getSingularName()) ?>')) ?]</h2>
  <ul>
    <li>[?php echo $sf_request->getError('delete') ?]</li>
  </ul>
</div>
[?php endif; ?]
[?php if ($sf_request->getError('valida')): ?]
<div class="form-errors">
  <h2>[?php echo __('Validaciones...', array('%name%' => '<?php echo sfInflector::humanize($this->getSingularName()) ?>')) ?]</h2>
  <ul>
    <li>[?php echo $sf_request->getError('valida') ?]</li>
  </ul>
</div>
[?php endif; ?]