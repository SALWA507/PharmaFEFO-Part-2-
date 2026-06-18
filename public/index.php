<?php
$uri=$_SERVER['REQUEST_URI'];
if(str_starts_with($uri,'/api/')){
    echo "API";

}else{
    echo"WEB";
}
?>