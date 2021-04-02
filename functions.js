function ShowAndHideMenu($id,$value){
    console.log($id + ' / ' + $value);

    if($value == '>'){
        document.getElementById($id).value = '<';
        document.getElementById('menu').style.left = '-12%';
        document.getElementById($id).style.left = '0%';
        document.getElementById('menu').style.transition = 'transition-duration: 0.5s'
    }
    else if($value == '<'){
        document.getElementById($id).value = '>';
        document.getElementById('menu').style.left = '0%';
        document.getElementById($id).style.left = '12%';
        document.getElementById('menu').style.transition = 'transition-duration: 0.5s'

    }

}

function ChangeText(valeur) 
{
    document.getElementById("ChooseButton").value = valeur;
    document.getElementById("ChooseButton").value = 'Fight with ' + document.getElementById("ChooseButton").value;

}