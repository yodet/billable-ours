<!DOCTYPE html>
<html lang="en">
  <head>
	<title><?=$title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="robots" content="no index, no follow" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="-1" />
	<script language="JavaScript" type="text/javascript">
		<!-- This JS disallows hijacking into someone else's frame...
		 if (top.location != self.location){top.location=self.location}
		//-->
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel -->
    <link rel="stylesheet" href="css/flatly.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
	<link rel="stylesheet" href="css/bootswatch-overrides.css">
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
    <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">$$$</a>
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="test/" target="_blank">Tests</a></li>  
          </ul>
			<ul class="nav navbar-nav navbar-right"><li><a href="login.php" title="Login to site">Login</a></li>
</ul>        </div>
      </div>
    </div>
    <div class="container">
    <!-- header ends here -->  