function switchtable1(){
	document.getElementById("featureelement1").style.visibility = "collapse";
	document.getElementById("dashboardelement1").style.visibility = "visible";
	document.getElementById("temperaturedashboard").style.display = "block";



    /*var xToString = x.outerHTML;
	var y = xToString.replace("featureelement", "dashboardelement");
	document.getElementById(y).style.visibility = "visible";*/
}

function switchback1(){
	document.getElementById("featureelement1").style.visibility = "visible";
	document.getElementById("dashboardelement1").style.visibility = "collapse";
	document.getElementById("temperaturedashboard").style.display = "none";
}