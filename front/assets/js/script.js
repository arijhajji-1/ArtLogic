function verif() {
	if (document.formulaire.titre.value.charAt(0) < 'A' || document.formulaire.titre.value.charAt(0) > 'Z') {
        alert("Le titre doit commencer par une lettre Majuscule");
        window.location.reload();
    }
	if (document.formulaire.categorie.value === 'Selectioner Une Categorie') {
        alert("Veuillez indiquer une categorie");
        window.location.reload();
    }
}
