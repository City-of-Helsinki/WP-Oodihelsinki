<?php
// lets keep block data in class for encapsulation and stopping conflicts across blocks
$block = new \Evermade\Swiss\Block(['hide','columns', 'image_type', 'section_header']);

if(!$block->get('hide')) {

if(!empty($block->get('columns'))) include(__DIR__.'/templates/view.php');

}
