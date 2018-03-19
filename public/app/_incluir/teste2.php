<?php

        //parte 1
        $alfabeto   = "23456789ABCDEFJGHJKMNPQRS";
        $tamanho    = 12;
        $letra      = "";
        $resultado  = "";

        for ($i = 1; $i < $tamanho ; $i++ ) {
            $letra      = substr( $alfabeto, rand(0,23), 1); 
            $resultado  .= $letra;
        }
        
        //parte 2
        
        date_default_timezone_set('America/Sao_Paulo');
        //date_default_timezone_set('America/Recife');
        $agora = getdate();

        //parte 3
        $codigo_data = $agora['year'] . "_" . $agora['yday'];
        $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds'];

        echo "foto_" . $codigo_data . "_" . $resultado;
?>