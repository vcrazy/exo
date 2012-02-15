<form action="/admin/user_correct/<?php echo $user_id ?>" method="post">
<div style="font-size:25px;color:red;"><?php if($success == TRUE) echo 'Успешно променени данни' ?></div><br/>
ID : <input type="text" readonly name="user" value="<?php echo $user_id ?>" />
Имейл : <input type="text" readonly name="priority" value="<?php echo $email ?>" />
Приоритет: <input type="text" name="priority" value="<?php echo $priority ?>" />
<input type="submit" value="Запази" /><br/>
<a href="/admin/user_search">Обратно</a>
</form>
