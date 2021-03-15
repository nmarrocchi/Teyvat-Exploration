
function ChangeValuePSB(id){ 
    console.log(document.getElementById(id).value);
	switch (document.getElementById(id).value)
    {
        case ">": 
            document.getElementById(id).value = "<";
            document.getElementById(id).setAttribute("style", "left: 0%; transition: all 2s ease;");
            document.getElementById('PlayerStats').setAttribute("style", "left: -10%; transition: all 2s ease;");
            break;
        
        case "<": 
            document.getElementById(id).value = ">";
            document.getElementById(id).setAttribute("style", "left: 10%; transition: all 2s ease;");
            document.getElementById('PlayerStats').setAttribute("style", "left: 0%; transition: all 2s ease;");;
            break;

        default: document.getElementById(id).value = "<";
    }
}