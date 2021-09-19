

function ShowEnrolledStudents(oID, rawData, legendElem){
	var oCourses = SortArray(GetDistinctValues(GetIndexedElements(rawData,"Acronym")));
	var oYearLevels = GetProcessedArray(rawData);
	var ctx = document.getElementById(oID).getContext('2d');
	var colors = [
		['rgba(248, 3  , 10 , 0.5)','rgba(248, 3  , 10 , 1)'],
		['rgba(246, 194, 62 , 0.5)','rgba(246, 194, 62 , 1)'],
		['rgba(0  , 196, 1  , 0.5)','rgba(0  , 196, 1  , 1)'],
		['rgba(0  , 33 , 248, 0.5)','rgba(0  , 33 , 248, 1)'],
		['rgba(118, 0  , 248, 0.5)','rgba(118, 0  , 248, 1)']
	];
	var dsObj = new Array();
	
	var str = '';
	for(var i = 0; i < oYearLevels.length; i++){
		dsObj.push({
			label: oYearLevels[i][0],
			data: oYearLevels[i][1],
			backgroundColor: colors[i][0],
			borderColor: colors[i][1],
			borderWidth: 1
		});
		str += '<span class="mr-2"><i class="fas fa-square" style="color: ' + colors[i][0] + ';"></i> ' + oYearLevels[i][0] + '</span>';
	}
	
	$('#' + legendElem).html(str);
	
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: oCourses,
			datasets: dsObj
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
	/*
		<span class="mr-2"><i class="fas fa-square" style="color: rgba(78, 115, 223, 0.6);"></i> Male</span>
		<span class="mr-2">
		<i class="fas fa-circle" style="color: rgba(231, 74, 59, 0.6);"></i> Female
		</span>*/
}

function GetIndexedElements(arrData, idx){
	var elems = new Array();
	for(var i = 0; i < arrData.length; i++){
		elems.push(arrData[i][idx]);
		//console.log("Retrieved " + arrData[i][idx]);
	}
	return elems;
}

function GetProcessedArray(rawData){
	var distinctCourses = SortArray(GetDistinctValues(GetIndexedElements(rawData,"Acronym")));
	var distinctYearLevels = SortArray(GetDistinctValues(GetIndexedElements(rawData,"YearLevel")));
	
	var enrolledCourses = new Array();
	for(var i = 0; i < distinctCourses.length; i++){
		var enrolledYearLevels = new Array();
		for(var j = 0; j < distinctYearLevels.length; j++){
			for(var k = 0; k < rawData.length; k++){
				if(	rawData[k]["Acronym"] 	== distinctCourses[i] &&
					rawData[k]["YearLevel"] == distinctYearLevels[j]   ){
						enrolledYearLevels.push(rawData[k]);
					}
			}
		}
		enrolledCourses.push(enrolledYearLevels);
	}
	//console.log(enrolledCourses);
	
	var processedData = new Array();
	for(var j = 0; j < distinctYearLevels.length; j++){
		var thisYearLevel = new Array();
		for(var k = 0; k < enrolledCourses.length; k++){
			if(isPresent(enrolledCourses[k],"YearLevel",distinctYearLevels[j])){
				thisYearLevel.push(findValue(enrolledCourses[k],"YearLevel",distinctYearLevels[j], "Total"));
			} else {
				thisYearLevel.push(0);
			}
			//console.log(thisYearLevel);
		}
		processedData.push(thisYearLevel);
	}
	
	var finalData = new Array();
	
	for(var i = 0; i < distinctYearLevels.length; i++){
		finalData.push([distinctYearLevels[i], processedData[i]]);
	}
	
	return finalData;
}

function isPresent(arrData, idx, searchVal){
	var present = false;
	for(var i = 0; i < arrData.length; i++){
		present += (arrData[i][idx]==searchVal);
	}
	return present;
}

function findValue(arrData, idxSearch, valSearch, idxResult){
	var value = "";
	for(var i = 0; i < arrData.length; i++){
		if(arrData[i][idxSearch] == valSearch){
			value = arrData[i][idxResult];
			break;
		}
	}
	return value;
}

function GetDistinctValues(arrData){
	var distinctData = new Array();
	for(var i = 0; i < arrData.length; i++){
		var isDistinct = true;
		for(var j = 0; j < distinctData.length; j++){
			isDistinct *= !(distinctData[j] == arrData[i])
		}
		if(isDistinct)
			distinctData.push(arrData[i]);
	}
	return distinctData;
}

function SortArray(arrData){
	for(var i = 0; i < arrData.length; i++){
		for(var j = 0; j < arrData.length; j++){
			if(arrData[i] < arrData[j]){
				var tmp = arrData[i];
				arrData[i] = arrData[j];
				arrData[j] = tmp;
			}
		}
	}	
	return arrData;
}
