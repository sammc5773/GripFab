

function createRepoButtons(){
			//Collect the list of file names and put them into buttons, display on screen
			var numFiles = document.getElementById("numFiles").textContent;
			for(count = 0; count < numFiles; count++)
			{
				var btn = document.createElement("BUTTON");
			    var t = document.createTextNode($(".invisibleFileName:eq("+count+")").text());
			    btn.appendChild(t);
			    btn.className = "btn btn-default btn-lg dropdown-toggle";
			    document.body.appendChild(btn);
			}
		}
