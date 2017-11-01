<?php
//Lisstet alle Fragen sammt möglichen Antworten auf.
foreach ($fragen as $frage) {
    echo "<b>" . $frage->frage . "</b><br /><br />";
    foreach($antworten as $antwort){
      if($antwort->heizungs_fragen_id != $frage->id) continue;
      echo $antwort->antwort . "<br />";
    }
    echo "<br />";
}
?>
