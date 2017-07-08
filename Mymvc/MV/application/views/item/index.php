<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/6/28
 * Time: 20:44
 */
?>
    <form action="<?php echo APP_URL ?>/item/add" method="post">
        <input type="text" value="点击添加" onclick="this.value=''" name="value">
        <input type="submit" value="添加">
    </form>
    <br/><br/>

<?php $number = 0?>

<?php foreach ($items as $item): ?>

        <span class="item">
            <?php echo ++$number ?>
            <?php echo $item['item_name'] ?>
        </span>
    <a class="big" href="<?php echo APP_URL ?>/item/view/<?php echo $item['id'] ?>" title="点击修改">修改
    </a>
    ----
    <a class="big" href="<?php echo APP_URL ?>/item/delete/<?php echo $item['id']?>">删除</a>
    <br/>
<?php endforeach ?>