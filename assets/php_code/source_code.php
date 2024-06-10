<?php
    function read_json($the_json, $the_data){
        $the_json = file_get_contents($the_json);
        $the_data = file_get_contents($the_data);
        $file = json_decode($the_json, true);
        $data = json_decode($the_data, true);

        $finalTotal = null;
        foreach($file['TOTAL'] as $totals){
            foreach($data as $key => $value){
                if(strpos(strtolower($key), strtolower($totals)) !== false){
                    $finalTotal = $value;
                    break 2;
                }
            }
        }

        $finalDate = null;
        foreach($file['DATE'] as $date){
            foreach($data as $key => $value){
                if(strcasecmp($key, $date) === 0){
                    $finalDate = $value;
                    break 2;
                }
            }
        }

        $finalOR = null;
        foreach($file['OR'] as $OR){
            foreach($data as $key => $value){
                if(strcasecmp($key, $OR) === 0){
                    $finalOR = $value;
                    break 2;
                }
            }
        }
        $finalTotal= ($finalTotal !== null)?"Total value found: ".$finalTotal.'<br>':"Total value not found!";
        $finalDate = ($finalDate !== null)? 'Date found: '.$finalDate.'<br>': "Date not found!";
        $finalOR = ($finalOR !== null) ? 'OR found: '.$finalOR.'<br>' :'Acknowledgement Receipt';
        $result = $finalTotal.''.$finalDate.''.$finalOR.'';
        echo($result);
    }
    $the_json = 'assets/JSON_file/ourJSON.json';
    $the_data = 'assets/JSON_file/data.json';
    read_json($the_json, $the_data);
?>