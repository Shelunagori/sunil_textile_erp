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
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square']).'Create New Invoice', '/Invoices/Add',['escape' => false]).'</li>'; 
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-alt']).'List Invoices', '/Invoices',['escape' => false]).'</li>'; 
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-power-off']).'Log Out', '/Users/logout',['escape' => false]).'</li>'; 
?>





