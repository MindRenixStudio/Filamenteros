function AnimateAdding() {

	const addBTFilament = document.getElementById("addFilament");
	const addBTPrinter = document.getElementById("addPrinter");
	const addBTInventory = document.getElementById("addInventory");
	const addBTModel = document.getElementById("addModel");

	if (addBTFilament.classList.contains("AddFilamentIdle") == true) {

		addBTFilament.classList.remove("AddFilamentIdle");
		addBTFilament.classList.add("AddFilamentBTPopUp");

		addBTPrinter.classList.remove("AddPrinterIdle");
		addBTPrinter.classList.add("AddPrinterBTPopUp");

		addBTInventory.classList.remove("AddInventoryIdle");
		addBTInventory.classList.add("AddInventoryBTPopUp");

		addBTModel.classList.remove("AddModelIdle");
		addBTModel.classList.add("AddModelBTPopUp");

	}
	else {
		
		addBTFilament.classList.remove("AddFilamentBTPopUp");
		addBTFilament.classList.add("AddFilamentBTPopBack");

		addBTPrinter.classList.remove("AddPrinterBTPopUp");
		addBTPrinter.classList.add("AddPrinterBTPopBack");

		addBTInventory.classList.remove("AddInventoryBTPopUp");
		addBTInventory.classList.add("AddInventoryBTPopBack");

		addBTModel.classList.remove("AddModelBTPopUp");
		addBTModel.classList.add("AddModelBTPopBack");

		var millisecondsToWait = 600;

		setTimeout(function() {
		    // To do after wait
		    addBTFilament.classList.remove("AddFilamentBTPopBack");
		    addBTFilament.classList.add("AddFilamentIdle");

		    addBTPrinter.classList.remove("AddPrinterBTPopBack");
		    addBTPrinter.classList.add("AddPrinterIdle");

		    addBTInventory.classList.remove("AddInventoryBTPopBack");
		    addBTInventory.classList.add("AddInventoryIdle");

		    addBTModel.classList.remove("AddModelBTPopBack");
		    addBTModel.classList.add("AddModelIdle");

		}, millisecondsToWait);
	}

}