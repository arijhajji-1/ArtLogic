function okEvent()
{    var lieu=document.getElementById('LieuEvenement').value;
     var description=document.getElementById('DescriptionEvenement').value;
     valid = true;
     // La premiere lettre doit etre en majuscule 
    if(document.getElementById('TitreEvenement').value.substr(0,1).toUpperCase()!=document.getElementById('TitreEvenement').value.substr(0,1)) 
      {alert('La Premiere Lettre Du Titre Doit Etre En Majuscule');
      valid = false;
    }
    // Le lieu ne doit pas dépasser les 20 caractéres 
     if( lieu.length >20)
    {
      alert('Le Lieu ne doit pas depasser 20 caractéres')
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

 