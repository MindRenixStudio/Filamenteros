function AnimateAdding() {

	const addBTFilament = document.getElementById("addFilament");
	const addBTPrinter = document.getElementById("addPrinter");

	if (addBTFilament.classList.contains("AddFilamentIdle") == true) {

		addBTFilament.classList.remove("AddFilamentIdle");
		addBTFilament.classList.add("AddFilamentBTPopUp");

		addBTPrinter.classList.remove("AddPrinterIdle");
		addBTPrinter.classList.add("AddPrinterBTPopUp");

	}
	else {
		
		addBTFilament.classList.remove("AddFilamentBTPopUp");
		addBTFilament.classList.add("AddFilamentBTPopBack");

		addBTPrinter.classList.remove("AddPrinterBTPopUp");
		addBTPrinter.classList.add("AddPrinterBTPopBack");

		var millisecondsToWait = 600;

		setTimeout(function() {
		    // To do after wait
		    addBTFilament.classList.remove("AddFilamentBTPopBack");
		    addBTFilament.classList.add("AddFilamentIdle");

		    addBTPrinter.classList.remove("AddPrinterBTPopBack");
		    addBTPrinter.classList.add("AddPrinterIdle");

		}, millisecondsToWait);
	}

}