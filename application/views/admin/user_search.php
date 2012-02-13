Търся <form action="/admin/user_search" method="post"> 
    ID: <input type="text" name="searchid" /> 
    Имейл : <input type="text" name="searchemail" /> 
    Домейн : <input type="text" name="searchdomein">
    <input type="submit" value="Търси"/>
</form>

<?php
if ( !(empty($values)) )
{
    foreach ($values as $key => $value)
    {
        $userid='';
        foreach ( $values[$key] as $info=>$infovalue)
        {
            if ($info=='id')
            {
               $userid=$infovalue;
            }
              echo $info.': '.$infovalue.'<br/>';
            
        }      
        echo '<a href="/admin/user_correct/'.$userid.'">Редактирай данните</a>';
        echo '<br/><br/>';
    }
}
?>