function ChangeValuePSB(id){ 
    console.log(document.getElementById(id).value);
	if (document.getElementById(id).value == ">")
    {
        document.getElementById(id).setAttribute("style", "left: 0%; transition: all 2s ease;");
        document.getElementById('PlayerStats').setAttribute("style", "left: -12%; transition: all 2s ease;");
        document.getElementById(id).value = "<";
    }
    else if(document.getElementById(id).value == "<")
    {
            document.getElementById(id).setAttribute("style", "left: 12%; transition: all 2s ease;");
            document.getElementById('PlayerStats').setAttribute("style", "left: 0%; transition: all 2s ease;");
            document.getElementById(id).value = ">";
    }

    else{document.getElementById(id).value = "<"}
}