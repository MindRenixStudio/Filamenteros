function Animate() {
	//document.getElementById("LeftMenu").addEventListener("click", function () {
	//	document.querySelector("#divMenuLeft").classList.add('.popUpMenu')
	//})

	//Selecting menu
	const leftMenu = document.getElementById("divLeftMenu");

	const leftMenuBT1 = document.getElementById("MBT1");
	const leftMenuBT2 = document.getElementById("MBT2");
	const leftMenuBT3 = document.getElementById("MBT3");
	const leftMenuBT4 = document.getElementById("MBT4");

	if (leftMenu.classList.contains("divMenuLeftIdle") == true) {
		leftMenu.classList.remove("divMenuLeftIdle");
		leftMenu.classList.add("divMenuLeftPopUp");

		//leftMenuBT[0].classList.remove("PrintersBTIdle");
		//leftMenuBT[0].classList.add("PrintersBTPopUp");

		leftMenuBT1.classList.add("PrintersBTPopUp");
		leftMenuBT1.classList.remove("PrintersBTIdle");

		leftMenuBT2.classList.add("PrintersBTPopUp");
		leftMenuBT2.classList.remove("PrintersBTIdle");

		leftMenuBT3.classList.add("PrintersBTPopUp");
		leftMenuBT3.classList.remove("PrintersBTIdle");

		leftMenuBT4.classList.add("PrintersBTPopUp");
		leftMenuBT4.classList.remove("PrintersBTIdle");

	}
	else {
		
		leftMenu.classList.remove("divMenuLeftPopUp");
		leftMenu.classList.add("divMenuLeftPopBack");

		//leftMenuBT[0].classList.remove("PrintersBTPopUp");
		//leftMenuBT[0].classList.add("PrintersBTPopBack");

		leftMenuBT1.classList.add("PrintersBTPopBack");
		leftMenuBT1.classList.remove("PrintersBTPopUp");

		leftMenuBT2.classList.add("PrintersBTPopBack");
		leftMenuBT2.classList.remove("PrintersBTPopUp");

		leftMenuBT3.classList.add("PrintersBTPopBack");
		leftMenuBT3.classList.remove("PrintersBTPopUp");

		leftMenuBT4.classList.add("PrintersBTPopBack");
		leftMenuBT4.classList.remove("PrintersBTPopUp");

		var millisecondsToWait = 600;

		setTimeout(function() {
		    // To do after wait
		    leftMenu.classList.remove("divMenuLeftPopBack");
		    leftMenu.classList.add("divMenuLeftIdle");

		    leftMenuBT1.classList.add("PrintersBTIdle");
			leftMenuBT1.classList.remove("PrintersBTPopBack");

			leftMenuBT2.classList.add("PrintersBTIdle");
			leftMenuBT2.classList.remove("PrintersBTPopBack");

			leftMenuBT3.classList.add("PrintersBTIdle");
			leftMenuBT3.classList.remove("PrintersBTPopBack");

			leftMenuBT4.classList.add("PrintersBTIdle");
			leftMenuBT4.classList.remove("PrintersBTPopBack");

		}, millisecondsToWait);
	}

	
}