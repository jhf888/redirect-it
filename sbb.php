<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bs/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <style>
    img {
width: auto; 
height: auto;
max-width: 100%;
vertical-align: middle;
border: 0;
}
</style>
    
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bs/dist/js/bootstrap.min.js"></script>
	  <?php
		  $x=rtrim(file_get_contents("http://www.random.org/sequences/?min=1&max=52&col=1&format=plain&rnd=new"));
		  //$rand=explode( "\n",($x));
		  //$x="28 45 43 47 32 4 41 38 49 10 13 18 1 30 27 52 15 51 25 8 46 36 2 48 17 42 5 39 35 34 37 12 16 44 3 29 22 9 31 23 50 24 14 21 20 40 7 11 26 33 19 6";
		  //$rand=explode(" ",($x));
		  $rand_3d=array(explode("\n",($x)),array(),array());
		  for ($i=0;$i<52;$i++)
		  {
			  $rand_3d[0][$i]=$rand_3d[0][$i]-1;
			  $rand_3d[1][$i]=floor($rand_3d[0][$i]/13);
			  $rand_3d[2][$i]=$rand_3d[0][$i]%13+1;
			  switch ($rand_3d[1][$i]) {
				  case 0:
				  $suit="S";break;
				  case 1:
				  $suit="H";break;
				  case 2:
				  $suit="C";break;
				  case 3:
				  $suit="D";break;
			  }
			  switch ($rand_3d[2][$i]) {
				  case 1:
				  $rank="A";break;
				  case 13:
				  $rank="K";break;
				  case 12:
				  $rank="Q";break;
				  case 11:
				  $rank="J";break;
				  case 10:
				  $rank="T";break;
				  default:
				  $rank=strval($rand_3d[2][$i]);break;
			  }
			  $cardfile="cards/".$rank.$suit.".svg";
			  echo '<div class="col-md-4">';
		
                          /*echo ("---");
			  echo ($rand_3d[0][$i]);
			  echo ("---");
			  echo ($rand_3d[1][$i]);
			  echo ("---");
			  echo ($rand_3d[2][$i]);
			  echo ("---");
			  echo $cardfile;	
                          */
                          echo '<img src="';
                          echo $cardfile;
                          echo '" alt="..." class="img-rounded">';
                echo '</div>';

                          
		  }
?>		  
	
		
			</body>
</html>

