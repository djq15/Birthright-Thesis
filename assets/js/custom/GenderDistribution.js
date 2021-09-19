// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example

function ShowGenderDistribution(oID, oData){
	var ctx = document.getElementById(oID);
	var GenderChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ["Male", "Female"],
			datasets: [{
			  data: oData,
			  backgroundColor: ['rgba(78, 115, 223, 0.5)', 'rgba(231, 74, 59, 0.5)'],
			  hoverBackgroundColor: ['rgba(78, 115, 223, 1)', 'rgba(231, 74, 59, 1)'],
			  hoverBorderColor: ['rgba(78, 115, 223, 1)', 'rgba(231, 74, 59, 1)']
			  
			}],
		},
	  options: {
		maintainAspectRatio: false,
		tooltips: {
		  backgroundColor: "rgb(255,255,255)",
		  bodyFontColor: "#858796",
		  borderColor: '#dddfeb',
		  borderWidth: 1,
		  xPadding: 15,
		  yPadding: 15,
		  displayColors: true,
		  caretPadding: 10,
		},
		legend: {
		  display: false
		},
		cutoutPercentage: 0,
	  }
	});
}