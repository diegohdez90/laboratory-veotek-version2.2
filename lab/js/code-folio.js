var insertCodeF = function() {
    var c = prompt("Inserta tu codigo", "");
    
    if (c != null) {
    	if (c==="Segartor" || c==="chohujs") {
    		document.getElementById("code-f").value=c;
    		return true;
    	}
    	else{
    		insertCodeF();
    	}
    }
    else{
    	confirm("Inserta tu codigo");
    	insertCodeF();
    }
}

var insertCodeR = function() {
    var c = prompt("Inserta tu codigo", "");
    
    if (c != null) {
        if (c==="Segartor" || c==="chohujs") {
            document.getElementById("code-r").value=c;
            return true;
        }
        else{
            insertCodeF();
        }
    }
    else{
        confirm("Inserta tu codigo");
        insertCodeF();
    }
}