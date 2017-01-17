function switchtable(){
	document.getElementById("featureelement1").style.visibility = "collapse";
	document.getElementById("dashboardelement1").style.visibility = "visible";



    /*var xToString = x.outerHTML;
	var y = xToString.replace("featureelement", "dashboardelement");
	document.getElementById(y).style.visibility = "visible";*/
}

function switchback(){
	document.getElementById("featureelement1").style.visibility = "visible";
	document.getElementById("dashboardelement1").style.visibility = "collapse";
}