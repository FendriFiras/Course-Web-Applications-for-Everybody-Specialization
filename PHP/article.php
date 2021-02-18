<?php
    require 'form.php';
    $form = new form("<form action='traitement.php' method='post'><fieldset>");
    $form->setext("Designation","des");
    $form->setoption("Forniseur","for");
    $form->setselect("Points de ventes","pv");
    $form->setext("Prix unitaire","pu");
    $form->setext("quantite en stock","qs");
    $form->setsubmit("enter you name");
    
    $form->getform();


?>