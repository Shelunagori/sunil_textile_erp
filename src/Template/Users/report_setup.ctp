<style>
.menuCss{
background-color:#000;
color:#fff;
font-size:15px;
}
</style>
<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Report Setup');
?>

<?php
if(!isset($active_menu))
{
    $active_menu = '';
}
?>
<div class="row">
<div class="col-md-12">
<div class="col-md-3 menuCss">
<div><span class="title">Reports</span>
</div>
	<ul class="sub-menu">
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'menuCss']).'Trail Balance Report', '/Ledgers/trial_balance',['escape' => false, 'class' => 'menuCss']); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'menuCss']).'Account Ledger Report', '/Ledgers/accountLedger',['escape' => false, 'class' => 'menuCss']); ?></li>
	</ul>
</div>
</div></div>