<!DOCTYPE html>
<html lang="de">
    <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="This app count characters and words of a text." />
        <meta name="author" content="Danilo Ulf Mattick" />
        <meta name="keywords" content="characters, signs, text, words, void, value, fun, bootstrap" />
        
        <title>Character Counter App</title>
        
        <!-- Icons -->
        <link rel="shortcut icon" type="image/x-icon" size="16x16" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00424a">
        <meta name="msapplication-TileColor" content="#00424a">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#00424a">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" />

         <!-- User  CSS -->
        <link href="css/fonts.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        
    </head>
    
    <body>
        
        <div id="wrapper">
            
            <header>
				<div class="container">
					<h1>
						Character Counter App
					</h1>
					<h2>
						an app which count text
					<h2>
				</div>
			</header>
            
            <!-- Content -->
            
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form id="cca">
							<textarea class="form-control"  id="texttocount" name="w3review" rows="4" cols="50">Paste in or write your text here.</textarea>
						</form>
						
						<p id="outputtext"><span id="counteroutput"></span></p>
					</div><!-- End of col 1 -->
				</div><!-- End of col row -->
			</div><!-- End of container -->
            			
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<p>&copy; Danilo Ulf Mattick &mdash; All rights reserved! &mdash; <a href="https://github.com/daniloulf/cca">fork it</a>
						</div>
					</div>
				</div>
			</footer>
            
        </div><!-- End Wrapper -->
		
		<!-- Javascript jQuery -->
	    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	    
	    <!-- User JS -->
	    <script src="js/myscript.js"></script>
		
    </body>
</html>