/*================================
	SCROLL TOP
=================================*/
$(function () {
    $(".scroll-top").hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    $('.scroll-top a').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});


/*================================
	LEFT BAR TAB
=================================*/

$(function () {

    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
	$('#myTab1 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
	$('#myTab2 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
	$('#chat-tab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('.left-primary-nav li a').tooltip({
        placement: 'right'
    });
	$('.row-action .btn').tooltip({
        placement: 'top'
    });
});


/*================================
	TOP TOOLBAR TOOL TIP
=================================*/

$(function () {

    $('.top-right-toolbar a').tooltip({
        placement: "top"
    });


});


/*================================
	SYNTAX HIGHLIGHTER
=================================*/
$(function () {
// make code pretty
window.prettyPrint && prettyPrint()
});


/*================================
RESPONSIVE NAV $ THEME SELECTOR
=================================*/
$(function() {
		  
			  $('.responsive-leftbar').click(function()
			{
				$('.leftbar').toggleClass('leftbar-close expand',500, 'easeOutExpo');
				});

			}); 
	$(function() {
		  
			  $('.theme-setting').click(function()
			{
				$('.theme-slector').toggleClass('theme-slector-close theme-slector-open',500, 'easeOutExpo');
				});

			}); 



		$(function()
		{
			$('.theme-color').click(function()
			{
				var stylesheet = $(this).attr('title').toLowerCase();
				$('#themes').attr('href','css'+'/'+stylesheet+'.css');
				});
			});
			
			$(function(){
				$('.theme-default').click(function(){
				$('#themes').removeAttr("href");
			});
				});
				
				
/* @ Hung Phan */

// JavaScript Document
var clientId = '821751250764.apps.googleusercontent.com';
var apiKey = 'AIzaSyAPusS7gzp0bTla1ogGW_hJOwamaBwVT5Q';

var scopes = 'https://www.googleapis.com/auth/analytics.readonly';

// This function is called after the Client Library has finished loading
function handleClientLoad() {
  // 1. Set the API Key
  gapi.client.setApiKey(apiKey);

  // 2. Call the function that checks if the user is Authenticated. This is defined in the next section
  window.setTimeout(checkAuth,1);
}

function checkAuth() {
	
  // Call the Google Accounts Service to determine the current user's auth status.
  // Pass the response to the handleAuthResult callback function
  gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true}, handleAuthResult);
}

function handleAuthResult(authResult) {
  //alert(authResult);
  console.log(authResult);	
  if (authResult) {
	console.log("User has Authenticated and Authorized");
    // The user has authorized access
    // Load the Analytics Client. This function is defined in the next section.
    loadAnalyticsClient();
  } else {
	console.log("User has not Authenticated and Authorized");
    // User has not Authenticated and Authorized
    handleUnAuthorized();
  }
}


// Unauthorized user
function handleUnAuthorized() {
  var authorizeButton = document.getElementById('authorize-button');
  var makeApiCallButton = document.getElementById('make-api-call-button');

  // Show the 'Authorize Button' and hide the 'Get Visits' button
  makeApiCallButton.style.visibility = 'hidden';
  authorizeButton.style.visibility = '';

  // When the 'Authorize' button is clicked, call the handleAuthClick function
  authorizeButton.onclick = handleAuthClick;
}

function handleAuthClick(event) {
  gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false}, handleAuthResult);
  return false;
}

function loadAnalyticsClient() {
  // Load the Analytics client and set handleAuthorized as the callback function
  //gapi.client.load('analytics', 'v3', handleAuthorized);
  gapi.client.load('analytics', 'v3', queryAccounts);
}
function makeApiCall() {
  queryAccounts();
}

function queryAccounts() {

  console.log('Querying Accounts.');

  // Get a list of all Google Analytics accounts for this user
  gapi.client.analytics.management.accounts.list().execute(handleAccounts);
}

function handleAccounts(results) {
  if (!results.code) {
    if (results && results.items && results.items.length) {

      // Get the first Google Analytics account
      var firstAccountId = results.items[3].id;

      // Query for Web Properties
      queryWebproperties(firstAccountId);

    } else {
      console.log('No accounts found for this user.')
    }
  } else {
    console.log('There was an error querying accounts: ' + results.message);
  }
}

function queryWebproperties(accountId) {

  console.log('Querying Webproperties.');

  // Get a list of all the Web Properties for the account
  gapi.client.analytics.management.webproperties.list({'accountId': accountId}).execute(handleWebproperties);
}

function handleWebproperties(results) {
  if (!results.code) {
	if (results && results.items && results.items.length) {

      // Get the first Google Analytics account
      var firstAccountId = results.items[0].accountId;

      // Get the first Web Property ID
      var firstWebpropertyId = results.items[0].id;

      // Query for Views (Profiles)
      queryProfiles(firstAccountId, firstWebpropertyId);

    } else {
      console.log('No webproperties found for this user.');
    }
  } else {
    console.log('There was an error querying webproperties: ' + results.message);
  }
}

function queryProfiles(accountId, webpropertyId) {
  console.log('Querying Views (Profiles).');

  // Get a list of all Views (Profiles) for the first Web Property of the first Account
  gapi.client.analytics.management.profiles.list({
      'accountId': accountId,
      'webPropertyId': webpropertyId
  }).execute(handleProfiles);
}

function handleProfiles(results) {
  if (!results.code) {
    if (results && results.items && results.items.length) {

      // Get the first View (Profile) ID
      var firstProfileId = results.items[0].id;

      // Step 3. Query the Core Reporting API
      queryCoreReportingApi(firstProfileId);

    } else {
      console.log('No views (profiles) found for this user.');
    }
  } else {
    console.log('There was an error querying views (profiles): ' + results.message);
  }
}

function queryCoreReportingApi(profileId) {
	
  console.log('Querying Core Reporting API By Month , Pie chart.');
  // Use the Analytics Service Object to query the Core Reporting API
  gapi.client.analytics.data.ga.get({
    'ids': 'ga:' + profileId,
    'start-date': '2013-10-16',
    'end-date': '2013-11-15',
    'metrics': 'ga:newVisits,ga:visitors,ga:visits,ga:screenviews,ga:timeOnPage'
  }).execute(piechart);
  
  gapi.client.analytics.data.ga.get({
    'ids': 'ga:' + profileId,
    'start-date': '2013-10-16',
    'end-date': '2013-11-15',
    'metrics': 'ga:newVisits,ga:visitors,ga:visits,ga:screenviews',
	'dimensions': 'ga:week'
  }).execute(linechart);
   
   gapi.client.analytics.data.ga.get({
    'ids': 'ga:' + profileId,
    'start-date': '2013-10-13',
    'end-date': '2013-11-12',
    'metrics': 'ga:newVisits,ga:visitors,ga:visits,ga:screenviews',
	'dimensions': 'ga:country'
  }).execute(geomap);
  
}
function linechart(results) { 

	console.log('Result reporting  ( Line chart ) .');
	
	if (results.rows && results.rows.length) {	
	
		google.load("visualization", "1", { packages: ["corechart"]});
		
		var data = google.visualization.arrayToDataTable([
          ['Week', 'Active Users', 'Sessions'],
          [results.rows[0][0]*1,  results.rows[0][2]*1,      results.rows[0][3]*1],
          [results.rows[1][0]*1,  results.rows[1][2]*1,      results.rows[1][3]*1],
          [results.rows[2][0]*1,  results.rows[2][2]*1,      results.rows[2][3]*1],
          [results.rows[3][0]*1,  results.rows[3][2]*1,      results.rows[3][3]*1],
		  [results.rows[4][0]*1,  results.rows[4][2]*1,      results.rows[4][3]*1]
        ]);
        
		var options = {
          title: 'Week Report',
		  		  series: [{color: '#3498db',pointSize: '5',curveType:'function'},{color: '#009600',pointSize: '5',curveType:'function'}]
        };
        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
	
	} else {
		console.log('No results found');
	}

	
}
function geomap(results) { 
	if (results.rows && results.rows.length) {	
		
		google.load('visualization', '1', {'packages': ['geochart']});
		var data = google.visualization.arrayToDataTable([
		  ['Country', 'Sessions'],
		  [results.rows[0][0], results.rows[0][4]*1 ],
		  [results.rows[1][0], results.rows[1][4]*1 ],
		  [results.rows[2][0], results.rows[2][4]*1 ],
		  [results.rows[3][0], results.rows[3][4]*1 ]
		]);
        var options = {
			 colorAxis: {colors: ['#009600', '#e88a05', '#3498db']}
			};
			
        var chart = new google.visualization.GeoChart(document.getElementById('chart_div_geo'));
        chart.draw(data, options);
	
	} else {
	
		console.log('No results found');
	}
}

function piechart(results) { 

	console.log('Result reporting  ( Pie chart ) .');
	if (results.rows && results.rows.length) {	
		console.log('View (Profile) Name: ', results.profileInfo.profileName);
		google.load("visualization", "1", { packages: ["corechart"]});
		
		var data = google.visualization.arrayToDataTable([
           ['Task', 'Hours per Day'],
		   ['Total newVisits', results.totalsForAllResults['ga:newVisits']*1],
           ['Active Users', results.totalsForAllResults['ga:visitors']*1],
           ['Total visits ', results.totalsForAllResults['ga:visits']*1],
		   ['Screenviews ', results.totalsForAllResults['ga:screenviews']*1]
       ]);
       var options = {
           title: 'Report Visited by month',
		  slices: [{color: '#b51c44'},{color: '#ce4b27'},{color: '#009600'},{color: '#e88a05'},{color: '#3498db'}]
       };
       var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	   chart.draw(data, options);
	
	} else {
		console.log('No results found');
	}

	
}








