<?php
	require_once(dirname(__FILE__)."/../../../scripts/init.inc.php");
	$oMysql = MySQL::getInstance();
	$aNews = $oMysql->getNews(NB_NEWS);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>jRating demonstration : jquery plugin | Ajaxed star rating system with jQuery : MyjQueryPlugins.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Language" content="en" />
	<base href="<?php echo URL_SITE; ?>" />
	<link rel="shortcut icon" href="<?php echo URL_SITE; ?>favicon.ico" />
	
	<meta name="description" content="jRating demonstration. jRating is a very flexible jQuery plugin for quickly creating an Ajaxed star rating system. It is possible to configure every detail from the number of the stars to if the stars can represent decimals or not. There is also an option to display small or big stars and images can be changed with any other file easily. Although the plugin can be used with any scripting language, a PHP file that handles the requests is already included in the download package." />
	<meta name="robots" content="index, follow, all" />
	
	<link rel="stylesheet" href="<?php echo URL_SITE.URL_DEMO_JRATING; ?>jquery/jRating.jquery.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE.URL_DEMO_JRATING; ?>jquery/jNotify.jquery.css" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/content.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/648.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/336.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css' />
</head>

<body id="demopage">

	<div class="datasSent">
		Datas sent to the server :
		<p></p>
	</div>
	<div class="serverResponse">
		Server response :
		<p></p>
	</div>
	
	<?php require_once(dirname(__FILE__)."/../../../includes/header.inc.php");?>

<div id="main">

	<div class="breadcrumb">
		<a href="index" class="backTo">Home</a>
		<a href="jRating" class="backTo">jRating Homepage</a>
		<div class="clr"></div>
	</div>
	
	<div id="left_col">

		<h1>jRating demonstration</h1>

		<!-- EXEMPLE 1 : BASIC -->
		<div class="exemple">
			<em>Exemple 1 (<strong>Basic exemple without options</strong>) :</em>
			<div class="basic" id="12_1"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".basic").jRating();
  });
</script>');
?>
</pre>
		</div>

		<!-- EXEMPLE 2 -->
		<div class="exemple">
			<em>Exemple 2 (type : <strong>small</strong> - average <strong>10</strong> - id <strong>2</strong> - <strong>40</strong> stars) :</em>
			<div class="exemple2" id="10_2"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".exemple2").jRating({
	  type:\'small\', // type of the rate.. can be set to \'small\' or \'big\'
	  length : 40, // nb of stars
	  decimalLength : 1 // number of decimal in the rate
	});
  });
</script>
');
?>
</pre>
		</div>
			
		<!-- EXEMPLE 3 -->
		<div class="exemple">
			<em>Exemple 3 (step : <strong>true</strong> - average <strong>18</strong> - id <strong>2</strong> - <strong>15</strong> stars) :</em>
			<div class="exemple3" id="18_3"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".exemple3").jRating({
	  step:true,
	  length : 20, // nb of stars
	  decimalLength:0 // number of decimal in the rate
	});
  });
</script>
');
?>
</pre>
		</div>

		<!-- EXEMPLE 4 -->
		<div class="exemple">
			<em>Exemple 4 (<strong>Rate is disabled</strong>) :</em>
			<div class="exemple4" id="10_4"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".exemple4").jRating({
	  isDisabled : true
	});
  });
</script>
');
?>
</pre>
		</div>

		<!-- EXEMPLE 5 -->
		<div class="exemple">
			<em>Exemple 5 (<strong>With onSuccess &amp; onError methods</strong>) :</em>
			<div class="exemple5" id="10_5"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".exemple5").jRating({
	  length:10,
	  decimalLength:1,
	  onSuccess : function(){
		alert(\'Success : your rate has been saved :)\');
	  },
	  onError : function(){
		alert(\'Error : please retry\');
	  }
	});
  });
</script>
');
?>
</pre>
		</div>

		<!-- EXEMPLE 6 -->
		<div class="exemple">
			<em>Exemple 6 (<strong>jRating &amp; <a href="http://www.myjqueryplugins.com/jNotify">jNotify</a> plugins !!</strong>) :</em>
			<div class="exemple6" id="10_6"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".exemple6").jRating({
	  onSuccess : function(){
		jSuccess(\'Success : your rate has been saved :)\',{
		  HorizontalPosition:\'center\',
		  VerticalPosition:\'top\'
		});
	  },
	  onError : function(){
		jError(\'Error : please retry\');
	  }
	});
  });
</script>
');
?>
</pre>
		</div>

		<!-- EXEMPLE 7 : BASIC -->
		<div class="exemple">
			<em>Exemple 7 (<strong>Rate infos disabled</strong>) :</em>
			<div class="exemple7" id="12_1"></div>
		</div>
		<div class="notice">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
	$(".exemple7").jRating({
	  showRateInfo:false
	});
  });
</script>');
?>
</pre>
		</div>

		<!-- Advertise Bottom -->
		<?php require_once(dirname(__FILE__)."/../../../includes/pub.inc.php");?>
	</div>
	
	<!-- RIGHT COLUMN -->
	<?php require_once(dirname(__FILE__)."/../../../includes/col_right.inc.php");?>
		
	<div class="clr"></div>

</div>
	
	
<!-- FOOTER -->
<?php require_once(dirname(__FILE__)."/../../../includes/footer.inc.php");?>


<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JRATING; ?>jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JRATING; ?>jquery/jRating.jquery.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JRATING; ?>jquery/jNotify.jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.basic').jRating();
		
		$('.exemple2').jRating({
			type:'small',
			length : 40,
			decimalLength : 1
		});
		
		$('.exemple3').jRating({
			step:true,
			length : 20
		});
		
		$('.exemple4').jRating({
			isDisabled : true
		});
		
		$('.exemple5').jRating({
			length:10,
			decimalLength:1,
			onSuccess : function(){
				alert('Success : your rate has been saved :)');
			},
			onError : function(){
				alert('Error : please retry');
			}
		});
		
		$('.exemple6').jRating({
			onSuccess : function(){
				jSuccess('Success : your rate has been saved :)',{
					HorizontalPosition:'center',
					VerticalPosition:'top'
				});
			},
			onError : function(){
				jError('Error : please retry');
			}
		});
		
		$(".exemple7").jRating({
		  showRateInfo:false
		});
		
	});
</script>
<?php require_once dirname(__FILE__)."/../../../includes/analytics.inc.php"; ?>
</body>
</html>
