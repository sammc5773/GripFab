var gripBaseNames = new Array(); 
var selectedGripBase; 

function createRepoButtons(){
			//Collect the list of file names and put them into buttons, display on screen
			var numFiles = document.getElementById("numFiles").textContent;
			var count; 
			for(count = 0; count < numFiles; count++)
			{
				var btn = document.createElement("BUTTON");
			    var t = document.createTextNode($(".invisibleFileName:eq("+count+")").text());
			    gripBaseNames.push(t);
			    btn.appendChild(t);
			    btn.className = "btn btn-default btn-lg dropdown-toggle";
			    btn.id = count.toString();
			    //when clicked, call function setSelectedGrip
			    btn.onclick = function(){setSelectedGripCookie("baseGrip", this.id);}; 
			    document.getElementById("buttonArea").appendChild(btn);
			}
			

		}

//currently not used
function createHyperlinks(){
	var index;
	//test for printing
	for(index = 0; index < gripBaseNames.length; index++){
		//document.write(gripBaseNames[index].textContent);
	}
}

//Function saves selected grip name to a global variable called selectedGripBase
function setSelectedGripCookie(item, buttonID)
{

	selectedGripBase = gripBaseNames[Number(buttonID)];
	//THIS VARIABLE (and all other selectable variables) ABOVE NEEDS TO BE TURNED INTO A TEMPORARY COOKIE IN A TEXT FILE
	// that way it won't interfere with other grip variables
	document.cookie = (String(item)+ "=" + String((gripBaseNames[Number(buttonID)]).textContent)+";");
	alert(document.cookie);
}

function setSelectedBarrelCookie(item, barrelID)
{
	
}



