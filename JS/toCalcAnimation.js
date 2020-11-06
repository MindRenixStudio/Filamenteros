function toCalcAnimation() {

	const printerMenu = document.getElementById("Printer");	
	const filamentMenu = document.getElementById("Filament");
	const modelMenu = document.getElementById("Models");
	const inventoryMenu = document.getElementById("Inventory");

	if (printerMenu.classList.contains("MainScreenPrinter") == true) {

		printerMenu.classList.remove("MainScreenPrinter");
		printerMenu.classList.add("MainScreenPrinterHidden");

		filamentMenu.classList.remove("MainScreenFilament");
		filamentMenu.classList.add("MainScreenFilamentHidden");

		inventoryMenu.classList.remove("MainScreenInventory");
		inventoryMenu.classList.add("MainScreenInventoryHidden");

		modelMenu.classList.remove("MainScreenModels");
		modelMenu.classList.add("MainScreenModelsHidden");

	}

}