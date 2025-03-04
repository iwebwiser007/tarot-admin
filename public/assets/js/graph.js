google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  // revenue
  var data = google.visualization.arrayToDataTable([
    ["Year", "Weekly", "Monthly"],
    ["2004", 1000, 400],
    ["2005", 1170, 460],
    ["2006", 660, 1120],
    ["2007", 1030, 540],
  ]);

  var options = {
    curveType: "function",
    legend: { position: "bottom" },
    colors: ["#018dd8", "#cc3333", "#e7711b", "#e49307", "#e49307", "#b9c246"],
    chartArea: {
      width: "90%",
      height: "85%",
    },
    hAxis: {
      textPosition: "out",
    },
    vAxis: {
      textPosition: "out",
    },
  };

  var chart = new google.visualization.LineChart(
    document.getElementById("curve_chart")
  );

  chart.draw(data, options);

  // pie chart
  var data = google.visualization.arrayToDataTable([
    ["Effort", "Amount given"],
    ["My all", 100],
  ]);

  var options = {
    pieHole: 0.5,
    pieSliceTextStyle: {
      color: "black",
    },
    legend: "none",
    chartArea: {
      width: "100%",
      height: "80%",
    },
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("piechart")
  );
  chart.draw(data, options);

  // expense chart
  var data = google.visualization.arrayToDataTable([
    ["Month", "Profit", "Expenses"],
    ["Dec", 1000, 400],
    ["Jan", 1170, 460],
    ["Feb", 660, 1120],
    ["March", 1030, 540],
    ["April", 1230, 740],
    ["May", 1130, 440],
  ]);

  var options = {
    // title: "Company Performance",
    hAxis: { title: "Year", titleTextStyle: { color: "#333" } },
    vAxis: { minValue: 0 },
    chartArea: {
      left: 40,
      right: 40,
      // top: 20,
      // bottom: 20,
      width: "70%",
      height: "70%",
    },
  };

  var chart = new google.visualization.AreaChart(
    document.getElementById("expense_chart")
  );
  chart.draw(data, options);
}

// <script type="text/javascript">
//       google.charts.load('current', {'packages':['corechart']});
//       google.charts.setOnLoadCallback(drawChart);

//       function drawChart() {
//         var data = google.visualization.arrayToDataTable([
//           ['Year', 'Sales', 'Expenses'],
//           ['2013',  1000,      400],
//           ['2014',  1170,      460],
//           ['2015',  660,       1120],
//           ['2016',  1030,      540]
//         ]);

//         var options = {
//           title: 'Company Performance',
//           hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
//           vAxis: {minValue: 0}
//         };

//         var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
//         chart.draw(data, options);
//       }
//     </script>
