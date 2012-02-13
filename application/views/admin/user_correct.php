<form action="/admin/user_correct" method="post">
ID : <input type="text" readonly name="user" value="<?php echo $user_id ?>" />
Имейл : <input type="text" readonly name="priority" value="<?php echo $email ?>" />
Приоритет: <input type="text" name="priority" value="<?php echo $priority ?>" />
<input type="submit" value="Запази" />
</form>
