<!DOCTYPE html>
<html lang="en">
	<head>
            <style>
                div.normal {
                    padding: 20px;
                }
                p.indent1 {
                text-indent: 3em;
                }
                p.indent2 {
                text-indent: 6em;
                }
            </style>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="../../favicon.ico">

            <title>Create Model</title>
            <!--Bootstrap Design-->
            <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
            <link href="jumbotron.css" rel="stylesheet">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
            <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	</head>

	<body>
		<!--Navigation Bar-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Automation</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="createCells.php">Create Model</a></li>
						<li><a href="help.php">Help</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</nav>
                <!--Main jumbotron for name of the page-->
		<div class="jumbotron">
			<div class="container">
				<h1>Steps to create your model</h1>
			</div>
		</div>
                <div class='container'>
                    <div class='normal'>
                        <b>Things that you need to know before you create your first model</b><br>
                        <p>1. This simplified modeling process is in alpha right now</p>
                        <p>2. This modeling process will walk you step by step though how to create your own modeling so if you have little to no experience don't worry.</p>
                        <p>3. Here are a few things that you must know before we start:</p>
                        <p class="indent1">a. Cell creation parameters</p>
                        <p class="indent2">- How many cells do you want in your network?</p>
                        <p class="indent2">- How many types of cells you are using?</p>
                        <p class="indent1">c. Stimulation parameters</p>
                        <p class="indent1">d. Connection parameters</p>
                        <p class="indent1">e. Simulation parameters</p>
                        <p class="indent1">f. Analysis parameters</p>
                        <p>If you know these things then you should be safe to start modeling. Click the button below to continue.</p>
                        <p><a class="btn btn-primary btn-lg" href="step1.php" role="button">Continue &raquo;</a></p>
                    </div>
                </div>
        </body>
</html>

