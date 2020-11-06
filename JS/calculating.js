
document.getElementById("FilamentSpoolPrice").addEventListener("change", filamentCount);
document.getElementById("FilamentSpoolWeight").addEventListener("change", filamentCount);
document.getElementById("FilamentSurcharge").addEventListener("change", filamentCount);
document.getElementById("FilamentUsedCounter").addEventListener("change", filamentCount);

document.getElementById("Hours").addEventListener("change", energyConsumption);
document.getElementById("Minutes").addEventListener("change", energyConsumption);
document.getElementById("Watts").addEventListener("change", energyConsumption);
document.getElementById("kWhPrice").addEventListener("change", energyConsumption);

document.getElementById("SetupMinutes").addEventListener("change", workCalculation);
document.getElementById("SetupHour").addEventListener("change", workCalculation);
document.getElementById("PostMinutes").addEventListener("change", workCalculation);
document.getElementById("PostHour").addEventListener("change", workCalculation);

document.getElementById("FilamentSpoolPrice").addEventListener("change", calculateFinal);
document.getElementById("FilamentSpoolWeight").addEventListener("change", calculateFinal);
document.getElementById("FilamentSurcharge").addEventListener("change", calculateFinal);
document.getElementById("FilamentUsedCounter").addEventListener("change", calculateFinal);
document.getElementById("Hours").addEventListener("change", calculateFinal);
document.getElementById("Minutes").addEventListener("change", calculateFinal);
document.getElementById("Watts").addEventListener("change", calculateFinal);
document.getElementById("kWhPrice").addEventListener("change", calculateFinal);
document.getElementById("SetupMinutes").addEventListener("change", calculateFinal);
document.getElementById("SetupHour").addEventListener("change", calculateFinal);
document.getElementById("PostMinutes").addEventListener("change", calculateFinal);
document.getElementById("PostHour").addEventListener("change", calculateFinal);

function filamentCount() {

	var filamentSpoolPrice = document.getElementById("FilamentSpoolPrice").value;
	var filamentSpoolWeight = document.getElementById("FilamentSpoolWeight").value;
	var filamentSurcharge = document.getElementById("FilamentSurcharge").value;

	var filamentUsed = document.getElementById("FilamentUsedCounter").value;

	var filamentGram = filamentSpoolPrice / filamentSpoolWeight; //Price for gram

	var priceUsedFilament = filamentGram * filamentUsed; //Price for used filament
	var countSurcharge = (priceUsedFilament / 100) * filamentSurcharge; //Price of surcharge

	document.getElementById("FilamentPrice").innerHTML = "$" + (countSurcharge + priceUsedFilament).toFixed(2);

}

function energyConsumption() {

	var hours = parseInt(document.getElementById("Hours").value);
	var minutes = document.getElementById("Minutes").value;
	var Watts = document.getElementById("Watts").value;
	var kWhPrice = document.getElementById("kWhPrice").value;

	var minutesToHours = (minutes / 60) + hours;

	document.getElementById("ConsumptionPrice").innerHTML = "$" + (((Watts * minutesToHours) / 1000) * kWhPrice).toFixed(2);

}

function workCalculation() {

	var printMinutes = document.getElementById("SetupMinutes").value;
	var printHour = document.getElementById("SetupHour").value;
	var postMinutes = document.getElementById("PostMinutes").value;
	var postHour = document.getElementById("PostHour").value;

	var calculateSetup = (printMinutes / 60) * printHour;
	var calculatePost = (postMinutes / 60) * postHour;

	document.getElementById("WorkPrice").innerHTML = "$" + (calculateSetup + calculatePost).toFixed(2);

}

function calculateFinal() {

	var filPrice = document.getElementById("FilamentPrice").innerHTML;
	var conPrice = document.getElementById("ConsumptionPrice").innerHTML;
	var workPrice = document.getElementById("WorkPrice").innerHTML;

	var sub1 = filPrice.substr(1);
	var sub2 = conPrice.substr(1);
	var sub3 = workPrice.substr(1);

	console.log(sub1);
	console.log(sub2);
	console.log(sub3);

	document.getElementById("priceAll").innerHTML = "$" + (parseFloat(sub1) + parseFloat(sub2) + parseFloat(sub3)).toFixed(2);

}