<html>
	<body>
		<form action = "ptbac.php" method = "get">
		Phuong trinh bac 2 cos dang: ax^2 + bx + c = 0<br>
		a = <input type = "text" name = "_a"><br>
		b = <input type = "text" name  = "_b"><br>
		c = <input type = "text" name = "_c"><br>
		<input type = "submit">
		</form>
			
		Ket qua la: <?php
						if(!isset($_GET['action']) || $_GET['action']=""){
								$a=(int)$_GET['_a'];
								$b=(int)$_GET['_b'];
								$c=(int)$_GET['_c'];
						}
							else{
								$a=(int)$_GET['_a'];
								$b=(int)$_GET['_b'];
								$c=(int)$_GET['_c'];
							}
						$delta = $b*$b-4*$a*$c;
						if($a==0) {
							if($b==0){
								if($c==0){
									echo "pt vo so nghiem ";
								}
								else {
									echo "Vo ly ^^";
								}
								
							}
							else{
								echo "pt co nghiem la:  ";
								echo (float)(-$c/$b);
							}
						}
						else{
							if($delta > 0){
								echo "pt co 2 nghiem phan biet ";
								echo (-$b + sqrt($delta))/(2*$a);
								echo " va ";
								echo (-$b - sqrt($delta))/(2*$a);
							}
							if($delta == 0){
								echo "pt co nghiem kep  :  ";
								echo -$b/(2*$a);
							}
							if($delta < 0){
								echo" pt vo nghiem ^^";
							}
						}	
			?>
		
	</body>
</html>