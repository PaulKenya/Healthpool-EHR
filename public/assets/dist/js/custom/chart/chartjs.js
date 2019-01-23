$(function () {
    "use strict";
	// Bar chart
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
		  labels: ["1999","2000","2001","2002","2003","2004","2005"],
		  datasets: [
			{
			  label: "Revenue",
			  backgroundColor: ["#36a2eb", "#ff6384","#4bc0c0","#ffcd56","#07b107","#03a9f4", "#e861ff"],
			  data: [1088,2008,2222,2605,2586,2953,3136]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'Hospital Annual Revenue'
		  }
		}
	});

	// New chart
	new Chart(document.getElementById("pie-chart"), {
		type: 'pie',
		data: {
		  labels: ["Prostate", "Stomach", "Colon", "Bladder","Trachea, Bronchus and Lung","Non-Hodgkin Lymphoma","Oesophagus","Rectum","Other"],
		  datasets: [{
			label: "Cases",
			backgroundColor: ["#36a2eb", "#ff6384","#4bc0c0","#ffcd56","#07b107","#03a9f4", "#e861ff","#08ccce","#e2b35b","#e40503"],
			data: [12,3,4,15,3,2,3,22,1]
		  }]
		},
		options: {
		  title: {
			display: true,
			text: 'Top 10 Most Common Cancer Cases'
		  }
		}
	});

    // Horizontal Profit and Loss
    new Chart(document.getElementById("bar-chart-horizontal-profit-and-loss"), {
        type: 'horizontalBar',
        data: {
            labels: ["Income","Expenses"],
            datasets: [
                {
                    label: "KES",
                    backgroundColor: ["#03a9f4", "#e861ff"],
                    data: [8478000,7167000]
                }
            ]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Profit and Loss'
            }
        }
    });

	// Horizental Bar Chart
	new Chart(document.getElementById("bar-chart-horizontal-income"), {
		type: 'horizontalBar',
		data: {
		  labels: ["InPatient Admission", "Outpatient Admission", "Consultation", "Insurance", "Cafeteria"],
		  datasets: [
			{
			  label: "Hospital Income Revenue",
			  backgroundColor: ["#03a9f4", "#e861ff","#08ccce","#e2b35b","#e40503"],
			  data: [8478000,6267000,5534000,4784000,3433000]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'Hospital Income'
		  }
		}
	});

}); 