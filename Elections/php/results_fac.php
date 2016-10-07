<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
	<title>Voting Results</title>
	<link rel="stylesheet" type="text/css" href="../css/webdesign.css" />
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      			google.charts.load('current', {'packages':['corechart']});

</script>
	<style>
		.img_results {
			width:80px;
			height:80px;
			border-radius:40px;
			
		}
		.repub{
			border:3px solid #dc3912;
		}
		.demo{
			border:3px solid #3366cc;
		}
	</style>
	</head>
  <body>
<div class="header">
		<img id="seal" src="../img/canterbury.png" alt="Canterbury Seal" title="Canterbury Seal" />
		<h1>CANTERBURY MOCK PRIMARY ELECTION</h1>
	</div>
	
	<div class="result_info">
	<h2> Faculty and Staff Results </h2>
		<script type="text/javascript">
      			google.charts.setOnLoadCallback(drawChart);
      			function drawChart() {

        			var data = google.visualization.arrayToDataTable([
          			['Party', 'Votes'],
	  			['Democrat',      27],
          			['Republican',     10],
				['Non-participated', 101]
        		]);

        		var options = {
          			title: 'Faculty and Staff Party Affiliation',
					colors: ['#3366cc', '#dc3912', '#222']
        		};

        		var chart = new google.visualization.PieChart(document.getElementById('total_party'));

        		chart.draw(data, options);
      		}
   		 </script>
    		<div id="total_party" style="width: 100%; height: 500px;"></div>


<!--- DEMO -->
<table  style="border:1px solid #ddd; padding:10px; background-color:white; width:75%; margin: 10px auto;">
	<tr > 
		<th colspan="2" style="border-bottom:1px solid #ddd; margin-bottom:5px;" > May 03: Canterbury Faculty Democratic Primary</th>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px; border-bottom:1px solid #ddd;">
			<img class="img_results demo" src="/img/bernie_sanders.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px; border-bottom:1px solid #ddd;" >
			Bernie Sanders <br />
			<span style="font-size:20pt">63%</span> <br />
			<span style="color:#aaa">17</a> 
		</td>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px;"> 
			<img class="img_results demo" src="/img/hillary_clinton.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;">
			Hillary Clinton
			<br />
			<span style="font-size:20pt">37%</span>
			<br />
			<span style="color:#aaa">10</a> 
		</td>
	
	</tr>
</table>
<!--- REPUB -->
<table  style="border:1px solid #ddd; padding:10px; background-color:white; width:75%; margin: 10px auto;">
	<tr > 
		<th colspan="4" style="border-bottom:1px solid #ddd; margin-bottom:5px;" > May 03: Canterbury Faculty Republican Primary</th>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px; border-bottom:1px solid #ddd;">
			<img class="img_results repub" src="/img/ted_cruz.jpg" />
		</td>
		<td colspan="3" valign="top" style="padding-left:20px; padding-top:5px; border-bottom:1px solid #ddd;" >
			Ted Cruz <br />
			<span style="font-size:20pt">50%</span> <br />
			<span style="color:#aaa">5</a> 
		</td>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px;border-bottom:1px solid #ddd;"> 
			<img class="img_results repub" src="/img/john_kasich.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;border-bottom:1px solid #ddd;">
			John Kasich
			<br />
			<span style="font-size:20pt">30%</span>
			<br />
			<span style="color:#aaa">3</a> 
		</td>
		<td style="width:10px;padding-top:10px;border-bottom:1px solid #ddd;"> 
			<img class="img_results repub" src="/img/donald_trump.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;border-bottom:1px solid #ddd;">
			Donald Trump
			<br />
			<span style="font-size:20pt">10%</span>
			<br />
			<span style="color:#aaa">1</a> 
		</td>
	</tr>
	<tr>
		<td colspan=4">
			Other
			<br />
			<span style="font-size:20pt">10%</span>
			<br />
			<span style="color:#aaa">1</a>
		</td>
	</tr>
</table>


		<script>
			google.charts.setOnLoadCallback(drawBasic);

			function drawBasic() {

     		 var data = google.visualization.arrayToDataTable([
        ['Candidate', 'Male', 'Female'],
        ['Bernie Sanders', 10, 7],
        ['Hillary Clinton', 4, 6],
        ['Did not Vote', 0, 0],
      ]);

      var options = {
	colors: ['#3366cc', '#5780d5'],
        title: 'Democratic Vote By Gender',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Vote',
          minValue: 0
        },
        vAxis: {
          title: 'Candidate'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('demo_total'));

      chart.draw(data, options);
    }
		</script>
		<div id="demo_total" style="width: 100%; height: 500px;"></div>


<script>
			google.charts.setOnLoadCallback(drawBasic);

			function drawBasic() {

     		 var data = google.visualization.arrayToDataTable([
        ['Candidate', 'Male', 'Female'],
        ['Donald Trump', 1, 0],
        ['Ted Cruz', 2, 3],
        ['John Kasich', 0, 3],
	['Other', 0, 1],
      ]);

      var options = {
	colors: ['#dc3912', '#ef5c56'],
        title: 'Republican Vote By Gender',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Vote',
          minValue: 0
        },
        vAxis: {
          title: 'Candidate'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('repub_total'));

      chart.draw(data, options);
    }
		</script>
		<div id="repub_total" style="width: 100%; height: 500px;"></div>

	<script type="text/javascript">

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Democrat', 'Republican'],
         ['8:00', 0, 0],
['8:15', 0, 0],
['8:30', 0, 1],
['8:45', 5, 0],

['9:00', 3, 0],	
['9:15', 2, 1],
['9:30', 0, 0],
['9:45', 0, 1],

['10:00', 2, 0],
['10:15', 3, 2],
['10:30', 5, 1],
['10:45', 2, 0],

['11:00', 0, 0],
['11:15', 0, 1],
['11:30', 0, 0],
['11:45', 2, 1],

['12:00', 0, 1],
['12:15', 3, 1],
['12:30', 0, 0],
['12:45', 0, 0],

['1:00', 0, 0],
['1:15', 0, 0],
['1:30', 0, 0],
['1:45', 0, 0],

['2:00', 0, 0],
['2:15', 0, 0],
['2:30', 0, 0],
['2:45', 0, 0],

['3:00', 0, 0],        ]);

        var options = {
          title: 'Voting Timeline',
          //curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('voting_time_line'));

        chart.draw(data, options);
      }
    </script>
	<div id="voting_time_line" style="width: 100%; height: 500px;"></div>

	</div>
</div>
  </body>
</html>