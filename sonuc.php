<?php

$grid = strtolower($_GET['grid']);
$firstpos = strtolower($_GET['first']);
$move = strtolower($_GET['move']);
$warn = "0";


$firstpos = str_replace(' ','',$firstpos); 
if(empty($firstpos)){
    echo"Lütfen İlk Konum Değerini Giriniz. <br>" ;
}
if(empty($move)){
    echo"Lütfen Hareket Değerini Giriniz. <br>";
}
if(strlen($firstpos)==3){
    $arr2 =  str_split($firstpos);
    $arrx = (int)$arr2[0];
    $arry = (int)$arr2[1];
    $arrd = $arr2[2];
    // printf("x konumu =" . $arrx."<br>");
    // printf("y konumu =" . $arry."<br>");
    // printf("yönü =" . $arrd."<br>");    
    // }elseif(strlen($firstpos)==6){
    //     $arr2 = str_split($firstpos);
    //     printf("x konumu =" . $arr2[0]."<br>");
    //     printf("y konumu =" . $arr2[2]."<br>");
    //     printf("yönü =" . $arr2[4]."<br>");
}else { printf("Lütfen Konumu x konumu y konumu ve yönü olarak giriniz. Örnek: 23N ."); exit();
}  

$lenmove = 0;

while($lenmove < strlen($move)) {
        switch($arrd){
            case "n":
                switch ($move[$lenmove]) {
                    case "m":
                        $arry == $arry++;
                        break;
                    case "l":
                        $arrd = "w";                    
                        break;
                    case "r":
                        $arrd = "e";
                        break;

                }
            break;
            case "w":
                switch ($move[$lenmove]) {
                    case "m":
                        $arrx == $arrx--;
                        break;
                    case "l":
                        $arrd = "s";
                        break;
                    case "r":
                        $arrd = "n";
                        break;

                }
            break;
            case "s":
                switch ($move[$lenmove]) {
                    case "m":
                        $arry == $arry-- ;
                        break;
                    case "l":
                        $arrd = "e";
                        break;
                    case "r":
                        $arrd = "w";
                        break;

                }
            break;
            case "e":
                switch ($move[$lenmove]) {
                    case "m":
                        $arrx == $arrx++ ;
                        break;
                    case "l":
                        $arrd = "n";
                        break;
                    case "r":
                        $arrd = "s";
                        break;

                }
            break;

        }
        $lenmove++;

    
}



?>
<html>
    <head>
        <title>Sonuç</title>
    </head>
        <style>
        table, th, td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
        }
        </style>
    <body style="background-color: bisque;">
    <table >
  <tr>
    <td>Birinci Rover</td>
    <td>X Noktası</td>
    <td>Y Noktası</td>
    <td>Yönü</td>
  </tr>      
  <tr>
    <td>Başlangıç konumunun</td>
    <td> <?php echo $arr2[0] ?> </td>
    <td> <?php echo $arr2[1] ?> </td>
    <td> <?php echo $arr2[2] ?> </td>
  </tr>
  <tr>
    <td>Son durumdaki</td>
    <td> <?php echo $arrx ?> </td>
    <td> <?php echo $arry ?> </td>
    <td> <?php echo $arrd ?> </td>
  </tr>
</table>
<br>
<!-- <table >
  <tr>
    <td>İkinci Rover</td>
    <td>X Noktası</td>
    <td>Y Noktası</td>
    <td>Yönü</td>
  </tr>      
  <tr>
    <td>Başlangıç konumunun</td>
    <td>  </td>
    <td>  </td>
    <td> </td>
  </tr>
  <tr>
    <td>Son durumdaki</td>
    <td> </td>
    <td> </td>
    <td></td>
  </tr>
</table> -->
    </body>    

</html>
<!-- if($arrd == "n"){
            switch ($move[$lenmove]) {
                case "m":
                    $arry == $arry++;
                    break;
                case "l":
                    $arrd = "w";                    
                    break;
                case "r":
                    $arrd = "e";
                    break;
                default:
                    $warn = 1; 
                    break;
            }
    }
    elseif($arrd == "w"){
        switch ($move[$lenmove]) {
            case "m":
                $arrx == $arrx--;
                break;
            case "l":
                $arrd = "s";
                break;
            case "r":
                $arrd = "n";
                break;
            default:
            $warn = 1; 
            break;
        }
    }
    elseif($arrd == "s"){
        switch ($move[$lenmove]) {
            case "m":
                $arry == $arry-- ;
                break;
            case "l":
                $arrd = "e";
                break;
            case "r":
                $arrd = "w";
                break;
            default:
            $warn = 1; 
            break;
        }
    }
    elseif($arrd == "e"){
        switch ($move[$lenmove]) {
            case "m":
                $arrx == $arrx++ ;
                break;
            case "l":
                $arrd = "n";
                break;
            case "r":
                $arrd = "s";
                break;
            default:
            $warn = 1; 
            break;
        }
    }
    else{ $warn = 2;
    }
    $lenmove++;
}
if($warn = 1 ) {
    echo "Hata Lütfen Yön Girdinizi Kontrol Ediniz. Sadece n,e,w,s Kullanabilirsiniz.";
}elseif
    ($warn = 2 ){
    echo "Lütfen Hareket Girdilerini Kontrol Ediniz. Sadece l,r kullanabilirsiniz.";
}else{
    printf($arrx.$arry.$arrd);
} -->



    <!-- var_dump($arry); exit(); -->
    <!-- echo $move[$lenmove]; -->