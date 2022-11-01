
<!-- Handle Get Api here -->
<?php
    //Get member
    $query= 'select * from members';
    $members = getAll($query);

    $query = "select * from missions";
    $missions = getAll($query);
?>