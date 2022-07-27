<?php
    function productos_json(&$boletos, &$camisas=0, &$etiquetas=0){
        $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
        $total_boletos = array_combine($dias, $boletos);
        $json = array();

        foreach($total_boletos as $key => $boletos):
            if((int) $boletos > 0):
                $json[$key] = (int) $boletos;
            endif;    
        endforeach;    

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
        $camisas = (int) $camisas;
        if($camisas > 0):
           $json['camisas'] = $camisas; 
        endif;    
        
        $etiquetas = (int) $etiquetas;
        if($etiquetas > 0):
           $json['etiquetas'] = $etiquetas; 
        endif;   

        return json_encode($json);
    }

    function eventos_json(&$eventos) {
        $eventos_json = array();
        foreach($eventos as $evento):
            $eventos_json['eventos'][] = $evento;
        endforeach;    

        return json_encode($eventos_json);
    }

<<<<<<< HEAD
?>    
=======
<<<<<<< HEAD
?>    
=======
<<<<<<< HEAD
?>    
=======
?>    
=======
        return json_encode($json);
    }
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
