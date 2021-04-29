function produit()
{   var IDP=document.getElementById('ID_produit').value;
    var prix=document.getElementById('prix').value; 
    var description=document.getElementById('Description').value;
     valid = true;
     
     if( description.length < 10)
     {
       alert('La description doit passer 10 caractéres')
       valid = false;
     }







   return valid ;
}