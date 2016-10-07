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
	<h2> Middle School Student Results </h2>
		<script type="text/javascript">
      			google.charts.setOnLoadCallback(drawChart);
      			function drawChart() {

        			var data = google.visualization.arrayToDataTable([
          			['Party', 'Votes'],
	  			['Democrat',      81],
          			['Republican',     130],
					['Non-participated', 43]
         
        		]);

        		var options = {
          			title: 'Middle School Party Affiliation',
					colors: ['#3366cc', '#dc3912', '#222']
        		};

        		var chart = new google.visualization.PieChart(document.getElementById('total_party'));

        		chart.draw(data, options);
      		}
   		 </script>
    		<div id="total_party" style="width: 100%; height: 500px;"></div>

<!--- DEMO -->
<table  style="border:1px solid #ddd; padding:10px; background-color:white; width:75%; margin:10px auto;">
	<tr > 
		<th colspan="2" style="border-bottom:1px solid #ddd; margin-bottom:5px;" > May 03: Canterbury MS Democratic Primary</th>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px; border-bottom:1px solid #ddd;">
			<img class="img_results demo" src="/img/bernie_sanders.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px; border-bottom:1px solid #ddd;" >
			Bernie Sanders <br />
			<span style="font-size:20pt">59%</span> <br />
			<span style="color:#aaa">48</a> 
		</td>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px;"> 
			<img class="img_results demo" src="/img/hillary_clinton.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;">
			Hillary Clinton
			<br />
			<span style="font-size:20pt">41%</span>
			<br />
			<span style="color:#aaa">33</a> 
		</td>
	
	</tr>
</table>

<!--- REPUB -->
<table  style="border:1px solid #ddd; padding:10px; background-color:white; width:75%; margin: 10px auto;">
	<tr > 
		<th colspan="4" style="border-bottom:1px solid #ddd; margin-bottom:5px;" > May 03: Canterbury MS Republican Primary</th>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px; border-bottom:1px solid #ddd;">
			<img class="img_results repub" src="/img/donald_trump.jpg" />
		</td>
		<td colspan="3" valign="top" style="padding-left:20px; padding-top:5px; border-bottom:1px solid #ddd;" >
			Donald Trump <br />
			<span style="font-size:20pt">38%</span> <br />
			<span style="color:#aaa">50</a> 
		</td>
	</tr>
	<tr>
		<td style="width:10px;padding-top:10px;border-bottom:1px solid #ddd;"> 
			<img class="img_results repub" src="/img/ted_cruz.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;border-bottom:1px solid #ddd;">
			Ted Cruz
			<br />
			<span style="font-size:20pt">30%</span>
			<br />
			<span style="color:#aaa">39</a> 
		</td>
		<td style="width:10px;padding-top:10px;border-bottom:1px solid #ddd;"> 
			<img class="img_results repub" src="/img/john_kasich.jpg" />
		</td>
		<td valign="top" style="padding-left:20px; padding-top:5px;border-bottom:1px solid #ddd;">
			John Kasich
			<br />
			<span style="font-size:20pt">12%</span>
			<br />
			<span style="color:#aaa">16</a> 
		</td>
	</tr>
	<tr>
		<td colspan=4">
			Other
			<br />
			<span style="font-size:20pt">19%</span>
			<br />
			<span style="color:#aaa">25</a>
		</td>
	</tr>
</table>

		<script>
			google.charts.setOnLoadCallback(drawBasic);

			function drawBasic() {

     		 var data = google.visualization.arrayToDataTable([
        ['Candidate', 'Male', 'Female'],
        ['Bernie Sanders', 31, 18],
        ['Hillary Clinton', 11, 22],
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
        ['Donald Trump', 37, 13],
        ['Ted Cruz', 13, 26],
        ['John Kasich', 8, 8],
	    ['Other', 10, 15],
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
	  			['5th',      16, 35],
         			['6th',      18, 35],
				['7th',      25, 31],
				['8th',      22, 29],

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
        ['Candidate', '5th Male', '5th Female', '6th Male', '6th Female', '7th Male', '7th Female', '8th Male', '8th Female'],
        ['Bernie Sanders', 12, 8, 9, 6, 5, 2, 5, 2],
        ['Hillary Clinton', 1, 2, 3, 7, 3, 8, 4, 5],
       	['DNV', 0, 0, 0, 0, 0, 0, 0, 0],
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
        ['Candidate', '5th Male', '5th Female', '6th Male', '6th Female', '7th Male', '7th Female', '8th Male', '8th Female'],
        ['Donald Trump', 9, 4, 9, 5, 9, 3, 10, 1],
        ['Ted Cruz', 2, 3, 2, 3, 7, 10, 2, 10],
	    ['John Kasich', 3, 1, 2, 6, 1, 0, 2, 1], 
       	['Other', 3, 4, 2, 2, 3, 2, 2, 7],
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
          ['7:45',  0,  1    ],
          ['8:00',  0,  0    ],
          ['8:15',  0,  0    ],
          ['8:30',  4, 10 ],
		  ['8:45', 5, 5],
		  ['9:00', 12, 16],
          ['9:15', 0,  0],
          ['9:30', 0,  0],
		  ['9:45', 15,  18],
          ['10:00', 7, 5],
          ['10:15', 1,  3],
          ['10:30', 4,  9],
		  ['10:45', 1,  3],
          ['11:00', 0,  0],
          ['11:15', 0,  1],
          ['11:30', 4,  6],
	      ['11:45', 3,  10],
          ['12:00', 9, 14],
          ['12:15', 5, 3],
          ['12:30', 0, 1 ],
		  ['12:45', 0, 0 ],
          ['1:00', 4, 7 ],
          ['1:15', 3, 7 ],
          ['1:30', 2, 1 ],
          ['1:45', 0, 0 ],
          ['2:00', 1, 9 ],
          ['2:15', 0, 1],
          ['2:30', 1, 0 ],
		  ['2:45', 0, 0 ],
          ['3:00', 0, 0],
          ['3:15', 0, 0 ],
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