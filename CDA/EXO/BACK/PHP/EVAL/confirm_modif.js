function modif(form){
    if (confirm('Do you want to confirm the change?') === true){
        // alert('You have confirm !');
        return true;
    } else {
        // alert('You have canceled ! ');
        return false;
    }
}