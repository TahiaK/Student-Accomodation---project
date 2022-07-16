function validate () {
    var r = document.aform.room.value;
    var l = document.aform.location.value;
    var d = document.aform.date.value;

    if (r == "") {
        alert('Please select a room'); 
        return false;
    }

    if (l == "") {
        alert('Please select a location'); 
        return false;
    }

    if (d == "") {
        alert('Please select a date'); 
        return false;
    }
}