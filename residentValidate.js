function myFunction(){
    var lastNameValue         = document.getElementById('LastName').value;
    var firstNameValue        = document.getElementById('FirstName').value;
    var midInitValue          = document.getElementById('MiddleInitial').value;
    
    var civilStatValue        = document.getElementById('CivilStatus').value;
    var spouseNameValue       = document.getElementById('SpouseName').value;
    var spouseOccupationValue = document.getElementById('SpouseOccupation').value;

    var nameFormat = /^[A-Za-z\s]*$/;
    var initials = /^[A-Za-z]*$/;
    
    //name input validation
    if (!lastNameValue.match(nameFormat)){
        alert('Error: Last Name. Input alphabets only.');
        return false;
    }
    if (!firstNameValue.match(nameFormat)){
        alert('Error: First Name. Input alphabets only.');
        return false;
    }
    if (!midInitValue.match(initials)) {
    	alert('Error: Middle Initial. Input alphabets only.');
    	return false;
    }
    if (midInitValue.length>2){
        alert('Error: Middle Initial. Maximum of two characters only.');
        return false;
    }



    
        //if all is validated
    return true;

}
