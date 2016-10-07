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

</script>	<style>
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
	<h2> High School Student Results </h2>
		<script type="text/javascript">
      			google.charts.setOnLoadCallback(drawChart);
      			function drawChart() {

        			var data = google.visualization.arrayToDataTable([
          			['Party', 'Votes'],
	  			['Democrat',      83],
          			['Republican',     120],
					['Non-participated', 202]
        		]);

        		var options = {
          			title: 'High School Party Affiliation',
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
		<th colspan="2" style="border-bottom:1px solid #ddd; margin-bottom:5px;" > May 03: Canterbury HS Democratic Primary</th>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px; border-bottom:1px solid #ddd;">
			<img class="img_results demo" src="/img/bernie_sanders.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px; border-bottom:1px solid #ddd;" >
			Bernie Sanders <br />
			<span style="font-size:20pt">78%</span> <br />
			<span style="color:#aaa">65</a> 
		</td>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px;"> 
			<img class="img_results demo" src="/img/hillary_clinton.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;">
			Hillary Clinton
			<br />
			<span style="font-size:20pt">21%</span>
			<br />
			<span style="color:#aaa">17</a> 
		</td>
	
	</tr>
</table>

<!--- REPUB -->
<table  style="border:1px solid #ddd; padding:10px; background-color:white; width:75%; margin:10px auto;">
	<tr > 
		<th colspan="4" style="border-bottom:1px solid #ddd; margin-bottom:5px;" > May 03: Canterbury HS Republican Primary</th>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px; border-bottom:1px solid #ddd;">
			<img class="img_results repub" src="/img/donald_trump.jpg" />
		</td>
		<td colspan="3" valign="top" style="padding-left:20px; padding-top:5px; border-bottom:1px solid #ddd;" >
			Donald Trump <br />
			<span style="font-size:20pt">53%</span> <br />
			<span style="color:#aaa">64</a> 
		</td>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px;border-bottom:1px solid #ddd;"> 
			<img class="img_results repub" src="/img/ted_cruz.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;border-bottom:1px solid #ddd;">
			Ted Cruz
			<br />
			<span style="font-size:20pt">23%</span>
			<br />
			<span style="color:#aaa">27</a> 
		</td>
		<td style="width:10px;padding-top:10px;border-bottom:1px solid #ddd;"> 
			<img class="img_results repub" src="/img/john_kasich.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;border-bottom:1px solid #ddd;">
			John Kasich
			<br />
			<span style="font-size:20pt">13%</span>
			<br />
			<span style="color:#aaa">15</a> 
		</td>
	</tr>
	<tr>
		<td colspan=4">
			Other
			<br />
			<span style="font-size:20pt">12%</span>
			<br />
			<span style="color:#aaa">14</a>
		</td>
	</tr>
</table>



		<script>
			google.charts.setOnLoadCallback(drawBasic);

			function drawBasic() {

     		 var data = google.visualization.arrayToDataTable([
        ['Candidate', 'Male', 'Female'],
        ['Bernie Sanders', 26, 39],
        ['Hillary Clinton', 3, 14],
        ['Did not Vote', 1, 0],
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
        ['Donald Trump', 44, 20],
        ['Ted Cruz', 14, 13],
        ['John Kasich', 11, 4],
	['Other', 14, 0],
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
          			['Grade', 'Democrat', 'Republican'],
	  			['9th',      29, 30],
         			['10th',      17, 40],
				['11th',      20, 28],
				['12th',      17, 22],

        		]);
			var options = {
          			title: 'Grade Party Affiliation',
				colors: ['#3366cc', '#dc3912'],
        		};

        		var chart = new google.visualization.BarChart(document.getElementById('grade_party'));

        		chart.draw(data, options);
      		}
   		 </script>
    		<div id="grade_party" style="width: 100%; height: 500px;"></div>









<script>
			google.charts.setOnLoadCallback(drawBasic);

			function drawBasic() {

     		 var data = google.visualization.arrayToDataTable([
        ['Candidate', '9th Male', '9th Female', '10th Male', '10th Female','11th Male', '11th Female','12th Male', '12th Female'],
        ['Bernie Sanders', 8, 14, 5, 10, 7,10,6,5],
        ['Hillary Clinton', 1, 6, 1, 1,0,3,1,4],
       	['DNV', 0, 0, 0, 0,0,0,1,0],
      ]);

      var options = {
colors: ['#dc3912', '#ef5c56', '#3366cc', '#5780d5', '#ff9900', '#ffb951','#109618', '#66aa00'],

        title: 'Democratic Vote By Grade and Gender',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Vote',
          minValue: 0
        },
        vAxis: {
          title: 'Candidate'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('demo_by_grade_bygender'));

      chart.draw(data, options);
    }
		</script>
	<div id="demo_by_grade_bygender" style="width: 100%; height: 500px;"></div>
<script>
			google.charts.setOnLoadCallback(drawBasic);

			function drawBasic() {

     		 var data = google.visualization.arrayToDataTable([
        ['Candidate', '9th Male', '9th Female', '10th Male', '10th Female','11th Male', '11th Female','12th Male', '12th Female'],
        ['Donald Trump', 15,3,12,14,8,1,9,2],
        ['Ted Cruz', 0,2,5,1,7,7,2,3],
	['John Kasich',1,2,2,1,4,1,4,0], 
       	['Other', 7,0,3,2,0,0,1,1],
      ]);

      var options = {
	colors: ['#dc3912', '#ef5c56', '#3366cc', '#5780d5', '#ff9900', '#ffb951','#109618', '#66aa00'],
        title: 'Republican Vote By Grade and Gender',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Vote',
          minValue: 0
        },
        vAxis: {
          title: 'Candidate'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('repub_by_grade_bygender'));

      chart.draw(data, options);
    }
		</script>
	<div id="repub_by_grade_bygender" style="width: 100%; height: 500px;"></div>


	<script type="text/javascript">

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Democrat', 'Republican'],
          ['08:00', 1, 2 ],
['08:15', 1, 3],
['08:30', 4, 5],
['08:45', 17, 14],
['09:00', 0, 4],
['09:15', 0, 1],
['09:30', 5, 3],
['09:45', 0, 1],
['10:00', 13, 20],
['10:15', 9, 15],
['10:30', 3, 6],
['10:45', 5, 10],
['11:00', 0, 2],
['11:15', 0, 6],
['11:30', 3, 4],
['11:45', 4, 1],
['12:00', 0, 1],
['12:15', 4, 4],
['12:30', 3, 1],
['12:45', 2, 0],
['1:00', 0,	2],
['1:15', 4,	4],
['1:30', 2, 2],
['1:45', 0, 3],
['2:00', 0, 0],
['2:15', 0, 0],
['2:30', 1, 4],
['2:45', 1, 2],
['3:00', 0, 0],
['3:15', 1, 0],
        ]);

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