<?php
/**
 * @Author: Kounty
 */
if(!isset($active_menu))
{
    $active_menu = '';
}
?>
<?php 
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square']).'Dashboard', '/Users/Dashboard',['escape' => false]).'</li>'; 

echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square']).'Add Stock Group', '/StockGroups/Add',['escape' => false]).'</li>'; 

?>





