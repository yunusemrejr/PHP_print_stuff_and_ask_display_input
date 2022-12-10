<style>
    body{
        background-color:black;
    }
    .stick{
        font-size: 20px;
        color:lightgreen;
    }
    
    .text1{
        font-size: 50px;
        color:#90EE90;
        font-family:arial;
    }

    </style>
    
<?php

ob_implicit_flush(true);

ob_end_flush();

$stick1 = "<p class='stick'>|</p>";
$stick2_start="<p class='stick'>";
$stick2 = "---   ";
$stick2_end="</p>";


function stick2_Repeater($stick2_start, $stick2, $stick2_end, $x){
        
    echo $stick2_start;

      for($j=0; $j < $x; $j++){

          echo $stick2;
         }

        echo $stick2_end;

 }
 

for($i=0; $i<2; $i++){


    for($x=0; $x<5; $x++){

        echo $stick1;
        usleep(55000);
    
    }

    echo $stick2_start;

    for($y=0; $y<5; $y++){

        echo $stick2;
        usleep(55000);
    
    }

    echo $stick2_end;



}

for($x=0; $x<5; $x++){

    echo $stick1;
    usleep(55000);
    
}

for($y=0; $y<5; $y++){

    stick2_Repeater($stick2_start, $stick2, $stick2_end, 5);
    usleep(55000);
    
}

echo "<script>document.getElementsByTagName('body')[0].innerHTML='';</script>";

usleep(55000);

echo "<br/><br/><br/><center><p class='text1'>hi. Enter your name: </p></center>";

echo "
<center>
<form action='formaction.php' method='post'>
<input name='field1' type='text' /><br><br>
<input type='submit' value='Send'>


</form>
</center>

";
?>
 