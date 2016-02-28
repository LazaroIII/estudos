<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <?php
        $page = $_SERVER['REQUEST_URI'] . '.php';

//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<hr>";
//echo __DIR__;
//echo $page;
//echo "</hr>";

        if (is_file(__DIR__ . $page)) {
            require_once $page;
        } else {
            require_once 'example_content.php';
        }
        ?>
    </div>
</div>