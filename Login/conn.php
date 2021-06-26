<?php

$connection = mysqli_connect('localhost','root','','fitness');
if($connection){
    echo"";
      /*  ?>
<script>
alert('connected');
</script>
<?php
}else{
    ?>
<script>
alert('not connected');
</script>
<?php
    */
}
else{
    echo "not connected";
}
?>