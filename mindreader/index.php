<html>
<html>
	<head>
		<title>Mind Reader-Alien Likers</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <link rel="shortcut icon" href="/images/alienlikers.ico">
<meta property="og:image" content="http://www.alienlikers.com/mindreader/promo.png" />
		<link rel="stylesheet" href="main.css" />
		
		<div style="display:none">
			<audio controls autoplay loop>
			<source src="bgmusic.mp3" type="audio/mp3">
			</audio>
			</div>

<script type='text/javascript' src='http://pl142213.puhtml.com/f0/4d/b1/f04db135db209868cd5bbbc0c27c25fa.js'></script>
	</head>

	<body>
		<!-- Header -->

				<header>
				
					
<div id="loading" style="width: 100%;height: 100%;top: 0px;left: 0px;position: fixed;display: block; background-color: #fff">
<img id="loading-image"src="images/loading.gif" alt="Loading..." width="50%" height="10%" style="position:absolute; top:0; left:0; right:0; bottom:0; margin:auto;"/>
</div> 
<?php
session_start();
$symbols = array('images/1.png', 'images/2.png', 'images/3.png', 'images/4.png', 'images/5.png', 'images/6.png', 'images/7.png', 'images/8.png', 'images/9.png', 'images/10.png', 'images/11.png', 'images/12.png', 'images/13.png', 'images/14.png', );
if(!isset($_POST['result']))
{
	$currentsym = rand(0,13);
	$plusorminus = rand(1,2);
	$addorsubstract = rand(0,4);
	$_SESSION['result']=$currentsym;
	if($plusorminus==1)
	{
		$correctnum = array(9+$addorsubstract,18+$addorsubstract,27+$addorsubstract,36+$addorsubstract,45+$addorsubstract,54+$addorsubstract,63+$addorsubstract,72+$addorsubstract,81+$addorsubstract);
		if($addorsubstract==0)
		{
			echo'
			<section id="header" class="dark">
			<div id="intro">
			<h1>Welcome To Mind Reader</h1>
			<p>Follow These Instructions Carefully :</p>
			<p>
			<b>
			<li>Think Any Two Digit Number (10 -> 99)</li>
			<li>Add Together Both Numbers In That Two Digit</li>
			<li>Subtract The Sum From Your Original Number</li>
			</b>
			</p>
			<p>
			<b>
			Example : 
			<li> If you pick 17 </li>
			<li>Add Together Both Numbers In That Two Digit => 1 + 7 = 8</li>
			<li>Subtract The Sum From Your Original Number => 17 - 8 = 9</li>
			</b>
			</p>
			<p>When You Have The Final Number. Look It On Magic Table To Read Your Mind. Click Below To Get Magic Table</p>
			<a href="#show"><input type="submit" value="Show Magic Table"></a>
			</br>
			</div>
			</section>
			<section id="header" class="dark">
			<div id="show">';
		}
		else
		{
			$answer = 9 + $addorsubstract;
			echo'
			<section id="header" class="dark">
			<div id="intro">
			<h1>Welcome To Mind Reader</h1>
			<p>Follow These Instructions Carefully :</p>
			<p>
			<b>
			<li>Think Any Two Digit Number (10 -> 99)</li>
			<li>Add Together Both Numbers In That Two Digit</li>
			<li>Subtract The Sum From Your Original Number</li>
			<li>Add '.$addorsubstract.' With Your Answer</li>
			</b>
			</p>
			<p>
			<b>
			Example : 
			<li> If you pick 17 </li>
			<li>Add Together Both Numbers In That Two Digit => 1 + 7 = 8</li>
			<li>Subtract The Sum From Your Original Number => 17 - 8 = 9</li>
			<li>Add '.$addorsubstract.' With Your Answer => '.$answer.'</li>
			</b>
			</p>
			<p>When You Have The Final Number. Look It On Magic Table To Read Your Mind. Click Below To Get Magic Table</p>
			<a href="#show"><input type="submit" value="Show Magic Table"></a>
			</br>
			</div>
			</section>
			<section id="header" class="dark">
			<div id="show">';
		}
}
	if($plusorminus==2)
	{
			$correctnum = array(9-$addorsubstract,18-$addorsubstract,27-$addorsubstract,36-$addorsubstract,45-$addorsubstract,54-$addorsubstract,63-$addorsubstract,72-$addorsubstract,81-$addorsubstract);
			if($addorsubstract==0)
			{
			echo'
			<section id="header" class="dark">
			<div id="intro">
			<h1>Welcome To Mind Reader</h1>
			<p>Follow These Instructions Carefully :</p>
			<p>
			<b>
			<li>Think Any Two Digit Number (10 -> 99)</li>
			<li>Add Together Both Numbers In That Two Digit</li>
			<li>Subtract The Sum From Your Original Number</li>
			</b>
			</p>
			<p>
			<b>
			Example : 
			<li> If you pick 17 </li>
			<li>Add Together Both Numbers In That Two Digit => 1 + 7 = 8</li>
			<li>Subtract The Sum From Your Original Number => 17 - 8 = 9</li>
			</b>
			</p>
			<p>When You Have The Final Number. Look It On Magic Table To Read Your Mind. Click Below To Get Magic Table</p>
			<a href="#show"><input type="submit" value="Show Magic Table"></a>
			</br>
			</div>
			</section>
			<section id="header" class="dark">
			<div id="show">';
		}
		else
		{
			$answer = 9 - $addorsubstract;
			echo'
			<section id="header" class="dark">
			<div id="intro">
			<h1>Welcome To Mind Reader</h1>
			<p>Follow These Instructions Carefully :</p>
			<p>
			<b>
			<li>Think Any Two Digit Number (10 -> 99)</li>
			<li>Add Together Both Numbers In That Two Digit</li>
			<li>Subtract The Sum From Your Original Number</li>
			<li>Add '.$addorsubstract.' With Your Answer</li>
			</b>
			</p>
			<p>
			<b>
			Example : 
			<li> If you pick 17 </li>
			<li>Add Together Both Numbers In That Two Digit => 1 + 7 = 8</li>
			<li>Subtract The Sum From Your Original Number => 17 - 8 = 9</li>
			<li>Add '.$addorsubstract.' With Your Answer => '.$answer.'</li>
			</b>
			</p>
			<p>When You Have The Final Number. Look It On Magic Table To Read Your Mind. Click Below To Get Magic Table</p>
			<a href="#show"><input type="submit" value="Show Magic Table"></a>
			</br>
			</div>
			</section>
			<section id="header" class="dark">
			<div id="show">';
		}
	}
echo'
	<p>See image carefully which belongs the number which is in your mind.</p>						
	<div class="table-wrapper">
	<table class="default">
	<tbody>
	<tr>';

for ($i=1 ; $i <= 100; $i ++)
{
	if(in_array($i,$correctnum))
	{
		echo '<td>'.$i;
		echo '&nbsp; &nbsp;<img src="'.$symbols[$currentsym].'" alt="PicNum'.$currentsym.'" width=30px height=30px></img>';
		echo '</td>';
	}
	else
	{
		$randomsym = rand(0,13);
		
		echo '<td>'.$i;
		echo '&nbsp; &nbsp;<img src="'.$symbols[$randomsym].'" alt="PicNum'.$randomsym.'" width=30px height=30px></img>';
		echo '</td>';
	}
	if($i%10 == 0)
	{
		echo "</tr><tr>";
	}
}
}
if(isset($_POST['result']))
{
	if(isset($_SESSION['result']))
	{      
                sleep(3);
		$result = $_SESSION['result'];
		echo "<section id='header' class='dark'><h2>Success!</h2><h2>Oh ! It's Very Hard To Read Your Mind. But Unfortunately We Successfully Read Your Mind. Here Is The Picture Which Was On Your Hardest Mind</h2>";
		echo "<img src='".$symbols[$result]."' alt='PicNum".$result."'></img>";
		echo "<h2>Want To Try Again ? You can try many times. But we don't fail to read your mind even if it's harder. Click below to try again.</h2>";
		echo "<a href='index.php'><input type='submit' value='Try Again'></a>";
		echo " </section>";
		session_destroy();
	}
	else
	{
		header('location:index.php');
	}
}
?>
										</tr>
										
									</tbody>
								</table>
								
							</div>
							<?php if(!isset($_POST['result'])) {echo"</a><form action='index.php' method='POST'><input type='hidden' name='result' value='1'><input type='submit' value='Read My Mind' onclick=$.LoadingOverlay('show')><a href='#intro'>Read Instructions</a></form> "; }?>
</div>
</section>
							</header>

			<div style="color:#000">
						<li align="center"><a href="blog/support" class="icon fa-envelope-o">&copy;ALIEN Likers.</a></li>
						</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/loadingoverlay.js"></script>
<script language="javascript" type="text/javascript">
window.onload = function(){ document.getElementById("loading").style.display = "none";} 
</script>
	</body>
</html>















