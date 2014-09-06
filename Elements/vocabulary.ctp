<div id="vocabulary-<?php echo $vocabulary['Vocabulary']['id']; ?>" class="block-list-group vocabulary">
<?php
$options = array_merge($options, array('tagAttributes' => array('class' => 'list-group')));
echo $this->Taxonomies->nestedTerms($vocabulary['threaded'], $options);
?>
</div>