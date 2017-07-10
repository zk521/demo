<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/6/28
 * Time: 20:48
 */
?>
<form action="<?php echo APP_URL ?>/item/update" method="post">
    <input type="text" name="value" value="<?php echo $item['item_name'] ?>">
    <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
    <input type="submit" value="修改">
</form>

<a class="big" href="<?php echo APP_URL ?>/item/index">返回</a>