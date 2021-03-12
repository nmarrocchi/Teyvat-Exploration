function ChangeValuePSB(id){ 
    console.log(document.getElementById(id).value);
	switch (document.getElementById(id).value)
    {
        case ">": 
            document.getElementById(id).value = "<";
            document.getElementById('PlayerStats').setAttribute("style", "width: 0%; transition: all 2s ease;")
            document.getElementById(id).setAttribute("style", "left: 0%; transition: all 2s ease;")
            break;
        
        case "<": 
            document.getElementById(id).value = ">";
            document.getElementById('PlayerStats').setAttribute("style", "width: 10%; transition: all 2s ease;")
            document.getElementById(id).setAttribute("style", "left: 10%; transition: all 2s ease;")
            break;

        default: document.getElementById(id).value = "<";
    }
}