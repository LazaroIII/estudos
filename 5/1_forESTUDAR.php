<?php
/*
for($i=0;$i <= 1004949; $i++) {
    echo $i. "<br  />";
}
*/
?>

<ul>
    <?php
    for($i=0;$i<5;$i++)
        echo '<li><a href="#'.$i.'">Home</a>';
    ?>
</ul>

<ul>
    <?php for($i=0;$i<5;$i++): ?>
    <li><a href="#<?=$i;?>">Home</a>
        <?php endfor; ?>
</ul>
