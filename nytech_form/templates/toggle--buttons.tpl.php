<h5><?php print ucfirst($toggle_name); ?></h5>
<?php foreach($objects as $object) { ?>
  <a href="#"
     data-<?php print $toggle_name; ?>="<?php print $object->id; ?>"
     id="<?php print $toggle_name; ?>-<?php print $object->id; ?>"
     onclick="Select<?php print $toggle_name; ?>(this)"
     class="related-<?php print $toggle_name; ?>-option btn btn-sm btn-primary"><?php print $object->title; ?></a>
<?php } ?>

<script>
  function Select<?php print $toggle_name; ?>(n){
    document.getElementsByName('<?php print $toggle_name; ?>')[0].value = n.getAttribute('data-<?php print $toggle_name; ?>');
    const <?php print $toggle_name; ?>Options = document.querySelectorAll('.related-<?php print $toggle_name; ?>-option');
    <?php print $toggle_name; ?>Options.forEach(element => element.classList.remove('btn-success'));
    n.classList.add('btn-success');
  }
</script>
