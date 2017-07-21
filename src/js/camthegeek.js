	var url;
	var data;
	var pname;
	var blockChecker;
	canIPush();
	function canIPush(){ 
		Push.Permission.request(gotPermission, gotDenied);
		$(document).ready( function() {
			if (Push.Permission.has() == false) { 
				console.log('Push has no permissions.');
				$("#yunoagree").text("You must agree to notifications in order to be notified when a block is found!");
			} 
			if (Push.Permission.has() == true) { 
				console.log('You will receive notifications from this page. ');
				$("#uagreed").text("You are setup to receive browser notifications. Please choose a pool below.");
				$('#yunoagree').hide();
			}
		});
	}
	function sendRequest() { 
		Push.Permission.request(gotPermission, gotDenied);
	}
	function gotPermission() {
		console.log('Permission granted to annoy user with notifications when a block is found!'); 
		$("#uagreed").text("Everything is setup on your end! Pin this tab and don't close your browser! I'll let you know when something is found!");
		$('#yunoagree').hide();
	}
	function gotDenied() { 
		console.log('Permission denied! They must not want to be notified. If they want to change, I am not telling them how to accept me!');
		$("#yunoagree").text("You should have accepted notifications. Now, you won't get notified when a block is found!");
	}
	$(document).ready(function () {	
		$("#pools").on("change", function(){
			url = $('#pools').val();
			pname = $('#pools option:selected').attr('name');
			if (pname != "stop") { 
				stopBlocks();
				console.log(pname);
				console.log('Pool checking has been initiated..');
				blockCheck();
				blockChecker = setInterval(blockCheck, 180000);
				}
			if (pname == "stop") { 
				console.log('Stopping');
				stopBlocks();
				$('#selectedCrypto').text('You must select a pool');
			}
		});
	});
	function stopBlocks() { 
		console.log('Block check cleared. Safe to check another pool.');
		clearInterval(blockChecker);
	}
	function blockCheck()  {
		console.log('Checking last block found time. . .');
		$.ajax({
			dataType: "json",
			url: url,
			data: data,
			success: function (data) {
				if (data.pool) { 
					if (pname != "stop") {
						$('#selectedCrypto').text('You have selected ' + pname + ' as your pool');
					}
					console.log(data.pool.lastBlockFound);
					var bf = data.pool.lastBlockFound;
					myDate = new Date(bf*1);
					var foundDate = myDate;
					var foundDateLocal = myDate.toLocaleString();
					console.log(foundDateLocal);
					var now = new Date($.now());
					var diff = Math.abs(foundDate-now);
					var minutes = Math.floor((diff/1000)/60);
					if (minutes <= "4") { 
						Push.create('Block Found on ' + pname + '!', {
 							body: 'A block was found at ' + foundDateLocal + ' woot!',
 							icon: 'monero.png',
 							requireInteraction: 'true'
 						});
					}
					if (minutes >= "5") { 
						console.log('Its been over 5 minutes since block was found.');	
					}
				}
				if (data.pool_statistics) {
					$('#selectedCrypto').text('You have selected ' + pname + ' as your pool');
					var bf = data.pool_statistics.lastBlockFoundTime;
					myDate = new Date(bf*1000);
					var foundDate = myDate;
					var foundDateLocal = myDate.toLocaleString();
					console.log(foundDateLocal);
					var now = new Date($.now());
					var diff = Math.abs(foundDate-now);
					var minutes = Math.floor((diff/1000)/60);
					if (minutes <= "4") { 
						Push.create('Block Found on ' + pname + '!', {
 							body: 'A block was found at ' + foundDateLocal + '.',
 							icon: 'monero.png',
 							requireInteraction: 'true'
 						});
					}
					if (minutes >= "5") { 
						console.log('Its been over 5 minutes since a block was last found.');
					}
				}
			}
		});
	}