<?php
$file1 = $_GET["file1"];
$file2 = $_GET["file2"];
if(empty($file1)==false || empty($file2)==false) {
    unlink("uploads/" . $file1);
    unlink("uploads/" . $file2);
    print("Removed D: <br>  removed: " . $file1 . "<br> removed: " . $file2);
}else{
    print("are you bored?? what are you trying to do?? everything is on github..... https://github.com/grzesjam/weloop-watchface-serverlike");}
?>