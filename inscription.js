function alpha (ch)
{
	ch = ch.toUpperCase();
	for(i=0;i<ch.length;i++)
	{
		c = ch.charAt(i);
		if (c<'A' || c>'Z')
			return false;
	}
	return true;
}
function verif()
{
    var nom=inscription.nom.value;
alert(nom);
var prenom=inscription.prenom.value;
var cin=inscription.cin.value;
var tel=inscription.tel.value;
var mdp=inscription.mdp.value;



if (nom=='' )
{alert('champ nom invalide');
return false;
}


if (prenom=='' || !alpha(prenom))
{alert('champ prennom invalide');
return false;
}

if ( cin.length!=8  && ( cin.charAt(0)!='0' || cin.charAt(0)!='1') ) 
{
alert('champ cin invalide');
return false;
}
if ( tel.length!=8 )
{alert('champ telephone invalide');
return false;
}
if (f.cyber.checked==false && f.intelligence.checked==false && f.deep.checked==false && f.Business.checked==false && f.commerce.checked==false )
{alert('verifier lacceptation ');
return false;}
}

