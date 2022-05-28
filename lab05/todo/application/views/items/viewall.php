<form action="../items/add" method="post">
<input type="text" value="I have to..." onclick="this.value=''" name="todo"> <input
type="submit" value="add">
</form>
<br/><br/>
<?php $number = 0;
include_once (__DIR__ . '../../../models/item.php');
$item = new Item();
$todoitem = $item->selectAll1();
//$todoitem = $controller->viewAll(); 
?>

<?php foreach ($todo as $todoitem):?>
 <a class="big" href="../items/view/<?php echo $todoitem['Item']['id']?>/<?php echo strtolower(str_replace(" ","-",$todoitem['Item']['item_name']))?>">
 <span class="item">
 <?php echo ++$number?>
 <?php echo $todoitem['Item']['item_name']?>
 </span>
 </a><br/>
<?php endforeach?>