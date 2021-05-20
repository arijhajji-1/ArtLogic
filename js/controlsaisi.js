 function test() 
{ 

  var Matricule = document.getElementById('Matricule').value;
  var Nomlivreur = document.getElementById('Nomlivreur').value;
  var Numlivreur = document.getElementById('Numlivreur').value;
  var zone = document.getElementById('zone').value;
 

  
  if (Matricule =="" || Nomlivreur =="")
  {
    alert("Le champ de saisi ne doit pas être vide !");
    return false;
  } 
  else if (Matricule.length > 15 || Nomlivreur.length > 15)
    {
      alert("Le champ de saisi doit contenir au maximum 15 caractères !");
       return false;
    }
 
  else if (!(isNaN(Numlivreur))
   {
      alert("Le champ de saisi ne doit pas être numériques !");
       return false;
   }
   else if (Numlivreur.length != 8 || isNaN(Numlivreur))
   {
     alert("Le NUM du livreur doit contenir 8 chiffres !");
     return false;
   } 
 return true;
}

function test2()
{
 
  var Numclient = document.getElementById('Numclient').value;

  if ( Numclient =="")
  {
    alert("Le champ de saisi ne doit pas être vide !");
    return false;
  } 

  else if (isNaN(Numclient))
  {
    alert("Le champ de saisi doit être numériques !");
    return false;
  }

  return true;
}