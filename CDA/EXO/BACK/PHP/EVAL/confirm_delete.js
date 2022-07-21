function deletes(form){
    if(confirm('Do you want to confirm the deletion?') === true){
        // alert('You have confirm ! '); // retourner un booléen pour que la function() fonctionne (true or false) !!!!!!!!!!!!!  
        return true;
    } else {
        // alert('You have canceled ! ');
        return false;
    };
}