function okActualite()
{    
    var description=document.getElementById('DescriptionActualite').value;
    valid = true;
    // La premiere lettre doit etre en majuscule 
   if(document.getElementById('TitreActualite').value.substr(0,1).toUpperCase()!=document.getElementById('TitreActualite').value.substr(0,1)) 
     {alert('La Premiere Lettre Du Titre Doit Etre En Majuscule');
     valid = false;
   }
   // la descreption doit passer les 10 caractéres
   if( description.length < 10)
   {
     alert('La description doit passer 10 caractéres')
     valid = false;
   }
   
   return valid ;
}