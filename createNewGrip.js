var gripBaseNames = new Array(); 
var currentGripBase; 

function createRepoButtons(){
			//Collect the list of file names and put them into buttons, display on screen
			var numFiles = document.getElementById("numFiles").textContent;
			for(count = 0; count < numFiles; count++)
			{
				var btn = document.createElement("BUTTON");
			    var t = document.createTextNode($(".invisibleFileName:eq("+count+")").text());
			    gripBaseNames.push(t);
			    btn.appendChild(t);
			    btn.className = "btn btn-default btn-lg dropdown-toggle";
			    document.body.appendChild(btn);
			}
		}

function createHyperlinks(){
	var index;
	//test for printing
	for(index = 0; index < gripBaseNames.length; index++){
		//document.write(gripBaseNames[index].textContent);
	}
		//When one of the buttons is clicked, move onto another page but save currently chosen basegrip into a global variable

		//find out what the button test is and save it. 
	}
}