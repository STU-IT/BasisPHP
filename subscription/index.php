<?php

    $cykelmaerker = array('Raleigh', 'Kildemoes', 'Batavus', 'Whinter', 'Nishiki', 'Centurion');
    $allerMags = ['BilledBladet', 'FamilieJournalen', 'Se&Hør', 'Mad og Bolig', 'In', 
        'Vi Unge', 'CyclingPlanet'];
    
    $egmontMags = ['Euroman', 'Eurowoman', 'Alt for Damerne', 'Hjemmet'];
    
    $magasiner = array_merge($egmontMags, $allerMags);
    print_r($magasiner);
    
    //print_r($_POST);

    $formArgs = array(
    'navn'      =>  array(  'filter'    => FILTER_SANITIZE_STRING,
                            'flags'     => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_AMP
                ),
    'gade'    =>  array(  'filter'    => FILTER_SANITIZE_STRING,
                            'flags'     => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_AMP
                ),
    'postnr'   =>  array(  'filter'    =>  FILTER_SANITIZE_NUMBER_INT,
                            'options'   =>  array('min_range' => 1000, 'max_range' => 9999)
                ),
    'by'        =>  array(  'filter'    => FILTER_SANITIZE_STRING,
                            'flags'     => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_AMP
                ),
    'send'      =>  array(  'filter'    => FILTER_SANITIZE_STRING,
                            'flags'     => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_AMP
                ),
    'anvendelse'    =>  array(  'filter'    => FILTER_SANITIZE_STRING,
                                'flags'     => FILTER_REQUIRE_ARRAY | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_AMP 
                ),
    'yndlingsmaerke' => array(  'filter'    => FILTER_SANITIZE_STRING,
                                'flags'     => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_AMP
                )
);
$post = filter_input_array(INPUT_POST, $formArgs);

//print_r($post);

    if (isset($post['send']))
    {
        print "Kære $post[navn]. Tak for din tilmelding!";
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>News form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="subscription/simple.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="" method="post">
            <h1>Bestil magasiner</h1>
            <p>Hej og velkommen bla bla bla....<br> Bare bestil, penge snakker vi om senere :-)</p>
            navn: <input type="text" name="navn" value="<?php print $post['navn'] ?>"><br>
            gade: <input type="text" name="gade" value="<?php print $post['gade'] ?>"><br>
            postnr: <input type="number" name="postnr" size="4" value="<?php print $postnr ?>" readonly> 
            by: <input type="text" name="by" value="<?php print $post['by'] ?>"><br>
        
            // her vil jeg gerne have et loop der gennemkører listen af magasiner, 
            // og viser en række checkbokse, så man kan abonnere!
            
                
            ?>
            
            <input name="send" type="submit" value="Send">
        </form>
    </body>
</html>
