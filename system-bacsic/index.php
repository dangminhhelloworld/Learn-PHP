

<?php 
    require './inc/header.php';

?>
<?php

$page = !empty($_GET['page'])?$_GET['page']:'home';

$path ="pages/{$page}.php";
echo $path;
if(file_exists($path)){
    require $path ;
}else{
    echo "Không tồn tại trang";
}


?>

        <!-- end header -->
       
        <div class="content"></div>
        <!-- end content -->
       
    
    <!-- end footer -->
</body>
<?php 
    require './inc/footer.php';

?>
