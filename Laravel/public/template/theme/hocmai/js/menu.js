function toggle(id){
	var a = document.getElementById(id);	
	if (a.style.display != 'none'){
		a.style.display='none';			
	}else if (a.style.display != 'block'){
		a.style.display='block';
	}
}

function max_min(strID,strImg) {
    if (document.getElementById(strID).style.display == "none")
    {
        document.getElementById(strID).style.display = "block";
        if (document.getElementById(strImg)) {
            document.getElementById(strImg).src="../../theme/hocmai/images_new/switch_minus.gif";
        }
    }
    else
    {
        document.getElementById(strID).style.display = "none";
        if (document.getElementById(strImg)) {
            document.getElementById(strImg).src="../../theme/hocmai/images_new/switch_plus.gif";
        }
    }
}
