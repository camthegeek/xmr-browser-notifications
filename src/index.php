<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CamTheGeek's XMR Browser Notifications</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <link href="css/style.css" rel="stylesheet"> -->
    <script src="js/push.js"></script>
    <script src="js/camthegeek.js"></script>
	<style>
		body {
			background: #3d3d3d;
			color: #ccc;
		}
		.omg { 
			color: #ff0000;
			font-weight: bold;
		}
		.woot { 
			color: #006600;
			font-weight: bold;
			font-size: 20px;
 		}
 		.maybe { 
 			color: #FFA500;
			font-weight: bold;
 			margin-top: -10px;
 		}
 		a, a:visited, a:active { 
 			color: #FFA500; text-decoration: none;
 		}
		.nah {
			margin-top: 10px;
		}
 	</style>
  	</head>
	<body class="body">
		<div class="headnav">
  			<nav class="navbar navbar-inverse navbar-static-top">
    			<div class="container">
      				<div class="navbar-header">
        				<a class="navbar-brand" href=""><img src="https://camthegeek.net/images/ctg.png" alt="CamTheGeek's XMR Browser Notifications"><span class="monero-orange logo-text">CamTheGeek's XMR Browser Notifications</span></a>
     				 </div>
    			</div>
  			</nav>
		</div>
		<div class="container">
			<div class="row light-row navbar-inverse">
				<div class="col-md-12 col-dark">
					<h3><span id="yunoagree" class="omg"></span></h3>
					<h3><span id="uagreed" class="woot"></span></h3>
					<h3><span id="defaulted" class="maybe"></span></h3>
					<p>Select your desired pool:  
						<select id="pools">
							<option name="stop">Please Select</option>
							<option name="USXMRPool.com" value="https://www.usxmrpool.com:8119/stats">US XMR Pool</option>
							<option name="SupportXMR.com" value="https://supportxmr.com/api/pool/stats">SupportXMR</option>
							<option name="MoneroPool.com" value="https://api.moneropool.com/stats">MoneroPool.com</option>
							<option name="MoneroHash.com" value="https://monerohash.com/api/stats">MoneroHash.com</option>
							<option name="Crypto-pool.FR" value="https://monero.crypto-pool.fr:8091/stats">Monero Crypto-Pool.fr</option>
							<option name="XMR.PoolTo.Be" value="https://xmr.poolto.be:8120/stats">XMR.PoolTo.be</option>
							<option name="XMRPool.EU" value="http://94.23.251.22:8117/stats">XMRPool.eu</option>
							<option name="MineXMR.com" value="http://stats.minexmr.com/stats">MineXMR.com</option>
						</select>
					</p>
					<p><span id="selectedPool"></span></p>
					<p><span id="selectedCrypto"></spam></p>
					<h3>How it works:</h3>
					<p>
						<ul>
							<li>Accept browser notifications</li>
							<li>Select your desired pool</li>
							<li>Pin the tab</li>
							<li>Expect alerts when blocks are found</li>
						</ul>
					</p>
					
					<p>Confirmed tested and working in Chrome, Edge and Firefox. Will not work in IE11.</p>
					<p>Checks are currently made every 3 minutes as the network finds a block every 2 minutes.</p>
					<p>Pools with API running over SSL/TLS accepted.</p>
					<p>To do: Add more pools.</p>
				</div>
			</div>
			<hr>
			<div class="row dark-row">
				<div class="col-md-12 col-light dark-row">
        			<p class="donations">Donations: Not required but appreciated as it took time to make this from scratch!</p>
            		<p class="donations">Send Monero to: 4Ah6e5exEWfNC9fGZV2zga6PGX79M7yX3jYytigs4XHubWfqnoLurHrNwtUp9tVWpdfQ2iZqnEyNA2ckq5iXJthLFvgBcxc</p>
				</div>
			</div>
		</div>
	</body>
</html>
	
