<?php

require_once __DIR__ . '/vendor/autoload.php';

// Grab variables 
$datenow= date("Y-m-j_H-i");
$spacecenter ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$firstname = $_POST['firstname'] ;
$lastname = $_POST['lastname'] ;
$birthday = $_POST['birthday'] ;
$placeofbirth = $_POST['placeofbirth'] ;
$address = $_POST['address'] ;
$city = $_POST['city'] ;
$zipcode = $_POST['zipcode'] ;
$datesortie = $_POST['datesortie'] ;
$heuresortie = $_POST['heuresortie'] ;




// Create new PDF instance 
$mpdf = new \Mpdf\Mpdf();



// Create our PDF  
$data = "";
$data .= '<h2 style="text-align: center;font-family:Georgia, serif;">ATTESTATION DE DÉPLACEMENT DÉROGATOIRE <br>DURANT LES HORAIRES DU COUVRE-FEU</h2>
<p style="text-align: left; font-size:12px">En application de l’article 4 du décret n° 2020-1310 du 29 octobre 2020 prescrivant les mesures générales<br>
nécessaires pour faire face à l’épidémie de COVID-19 dans le cadre de l’état d’urgence sanitaire</p>'; 
// Add data 
'<body style="margin=500px;">';
$data .= 'Mme/M. :' . $firstname ." ". $lastname . '<br />';
$data .= 'Né(e) le :' . $birthday .$spacecenter.'à: ' . $placeofbirth .'<br />';
$data .= 'Demeurant :' . $address . " ". $zipcode . '<br />';
$data .= '<p>certifie que mon déplacement est lié au motif suivant (cocher la case) autorisé en application des<br>
mesures générales nécessaires pour faire face à l’épidémie de COVID-19 dans le cadre de l’état<br>
d’urgence sanitaire<sup>1</sup>&nbsp; :</p><br>';
$data .='<p style="">Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle ou le lieu <br>d’enseignement et de formation, déplacements professionnels ne pouvant être différés</p>';
$data .='<p style="">Déplacements pour des consultations, examens, actes de prévention (dont vaccination)<br> et soins ne pouvant être assurés à distance et ne pouvant être différés ou pour l’achat de<br> produits de santé</p>';
$data .='<p style="">Déplacements pour motif familial impérieux, pour l’assistance aux personnes vulnérables<br> ou précaires ou pour la garde d’enfants</p>';
$data .='<p style="">Déplacements des personnes en situation de handicap et de leur accompagnant</p>';
$data .='<p style="">Déplacements pour répondre à une convocation judiciaire ou administrative</p>';
$data .='<p style="">Déplacements pour participer à des missions d’intérêt général sur demande de l’autorité<br> administrative</p>';
$data .='<p style="">Déplacements liés à des transits ferroviaires, aériens ou en bus pour des déplacements de<br> longues distances</p>';
$data .='<p style="">Déplacements brefs, dans un rayon maximal d’un kilomètre autour du domicile pour les<br> besoins des animaux de compagnie</p>';
$data .= 'Fait à :' . $city . '<br />';
$data .= 'Le :' . $datesortie .$spacecenter.'à :' . $heuresortie . '<br />';
$data .='<p style="text-align:left">(Date et heure de début de sortie à mentionner obligatoirement)</p><br>';
$data .='<p style="text-align:left;font-size:11px;margin-left:80px;"><sup>1</sup>&nbsp; Les personnes souhaitant bénéficier de l’une de ces exceptions doivent se munir s’il y a lieu, lors de leurs
déplacements hors de leur domicile, d’un document leur permettant de justifier que le déplacement considéré
entre dans le champ de l’une de ces exceptions.</p>';

$stylesheet = file_get_contents('css/styles.css');
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);

//ecrire dans le pdf
$mpdf->WriteHTML($data);

//Sortie des données et les Ouvrir sur le navigateurs.
$mpdf->Output('attestation-'.$datenow.'.pdf','D');
