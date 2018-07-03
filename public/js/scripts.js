
function populate()
    {
	
     xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        var items = document.getElementById("showitems");	
        items.innerHTML = "";	
	//console.log(xmlhttp.response);
	var div_control = document.getElementById("select_all_div");
	if(!myObj.Lists)
	{
	      div_control.style.display = "none";
	   document.getElementById("showitems").innerHTML = "Your To Do List Is Empty";
	}
	else
	{
	  div_control.style.display = "block";
	    
	}
	for (i in myObj.Lists)
	{   
	    if (myObj.Lists.hasOwnProperty(i))
	    {
		var checkbox = document.createElement("input");
		checkbox.type = "checkbox";
		checkbox.name = "list_item";
		checkbox.id = myObj.Lists[i].id;
		checkbox.value = myObj.Lists[i].id;
		checkbox.onclick = (function(checkbox_id,checkbox_name)
	    {
		return function ()
	    {
		//console.log(checkbox_id);
		let holdcheckboxes = [];
		var diolog = confirm('Are you sure you are done with \n' + checkbox_name + ' ?');
		    if (diolog == true)
		    {
			holdcheckboxes.push(parseInt(checkbox_id));		
			Send_data("","POST","https://api.getitcheapa.com/Update_list",holdcheckboxes);
		    }
		    else
		    {
			document.getElementById(checkbox_id).checked = false;
		    }
	    };
	}
	(myObj.Lists[i].id,myObj.Lists[i].item_name))
	    
            items.appendChild(checkbox);
            var label = document.createElement('label')
            label.htmlFor = myObj.Lists[i].id;
            label.appendChild(document.createTextNode(myObj.Lists[i].item_name[0].toUpperCase() + myObj.Lists[i].item_name.slice(1)));
            items.appendChild(label);
            items.appendChild(document.createElement("br"));
	    items.appendChild(document.createElement("hr"));
	    }   
	}
    }
};
xmlhttp.open("GET", "https://api.getitcheapa.com/Get_list", true);
xmlhttp.send();
document.getElementById("select_all").checked = false;
}
	function add_item(new_item) {            
	    if (!new_item)
	    {
		alert("Item name is required");
		document.getElementById("list_item").focus();
	    }
	    else
	    {
		Send_data(new_item,"POST","https://api.getitcheapa.com/Add_list","")
	    }   
        }
	
	function update_all(source)
	{
	    let holdcheckboxes = [];
	    var diolog = confirm('Are you sure you are done with everything ?');
		if (diolog == true)
		    {
			checkboxes = document.getElementsByName('list_item');
			//console.log(checkboxes.length);
			for(var i=0, n=checkboxes.length -1;i<n;i++)
			    {
			        checkboxes[i].checked = source.checked;
			       // console.log(checkboxes[i].value);
			        holdcheckboxes.push(parseInt(checkboxes[i].value));
			    }
			Send_data("","POST","https://api.getitcheapa.com/Update_list",holdcheckboxes)
			document.getElementById("select_all").checked = false;
		    }
		else
		    {
		    document.getElementById("select_all").checked = false;
		    }
	}
	
	
	function Send_data(item,method,url,array)
	{    
	    var xhttp = new XMLHttpRequest();
	    xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200)
	    {
		//console.log(xhttp.response);
		document.getElementById('list_item').value = "";
		populate(); 
	    }
	};
	    xhttp.open(method, url, true);
	    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    if (array)
	    {
		xhttp.send('items_id='+ JSON.stringify(array) + '');
	    }
	    else
	    {
		xhttp.send('item='+ item + '');
	    }
	    return true;	    
	}
	
        window.onload = populate;
