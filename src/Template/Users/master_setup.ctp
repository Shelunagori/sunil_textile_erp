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
$this->set('title', 'Master Setup');
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
<div><span class="title">Stock Groups</span>
</div>
	<ul>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/StockGroups/Add',['escape' => false, 'class'=>'menuCss']); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/StockGroups',['escape' => false, 'class'=>'menuCss']); ?></li>
	</ul>
</div>

<div class="col-md-3 menuCss">
<div><span class="title">Customers</span>
	<ul class="sub-menu">
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/Customers/Add',['escape' => false, 'class'=>'menuCss']); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/Customers',['escape' => false, 'class'=>'menuCss']); ?></li>
	</ul>
</div></div>

<div class="col-md-3 menuCss">
<div><span class="title">Suppliers</span>
	<ul class="sub-menu">
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/Suppliers/Add',['escape' => false, 'class'=>'menuCss']); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/Suppliers',['escape' => false, 'class'=>'menuCss']); ?></li>
	</ul>
</div></div>

<div class="col-md-3 menuCss">
<div><span class="title">Items </span>
	<ul class="sub-menu">
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/Items/Add',['escape' => false, 'class'=>'menuCss']); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/Items',['escape' => false, 'class'=>'menuCss']); ?></li>
	</ul>
</div></div></div></div>