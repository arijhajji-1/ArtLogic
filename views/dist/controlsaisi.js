 function test() 
{ 

  var cin = document.getElementById('cin').value;
  var nom = document.getElementById('nom').value;
  var prenom = document.getElementById('prenom').value;
  var mail = document.getElementById('mail').value;
 

  alert(typeof nom);
  if (nom =="" || prenom =="")
  {
    alert("Le champ de saisi ne doit pas être vide !");
    return false;
  } 
  else if (nom.length > 15 || prenom.length > 15)
    {
      alert("Le champ de saisi doit contenir au maximum 15 caractères !");
       return false;
    }
  else if (cin.length != 8 || isNaN(cin))
  {
    alert("Le CIN du livreur doit contenir 8 chiffres !");
    return false;
  }
  else if (!(isNaN(nom)) || !isNaN(prenom))
   {
      alert("Le champ de saisi ne doit pas être numériques !");
       return false;
   }
   else if (mail.length != 8 || isNaN(mail))
   {
     alert("Le CIN du livreur doit contenir 8 chiffres !");
     return false;
   } 
 return true;
}

function test2()
{
  var id_livraison = document.getElementById('id_livraison').value;
  var num_commande = document.getElementById('num_commande').value;

  if (id_livraison =="" || num_commande =="")
  {
    alert("Le champ de saisi ne doit pas être vide !");
    return false;
  } 

  else if (isNaN(num_commande))
  {
    alert("Le champ de saisi doit être numériques !");
    return false;
  }

  else if (id_livraison.length != 8 || isNaN(id_livraison))
  {
    alert("L'identifiant de la livraison doit contenir 8 chiffres !");
    return false;
  }
  return true;
}