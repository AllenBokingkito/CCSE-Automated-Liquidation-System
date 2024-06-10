<?php 
if(isset($_FILES['file'])){
    $image = $_FILES['file']['tmp_name'];

    $curl = curl_init();

    $key = "2cc7212bab464b37ab886fe6a8a928b8";
    $endpoint = "https://caliquidation.cognitiveservices.azure.com/";
    $requestAPI = $endpoint . "/computervision/imageanalysis:analyze?features=caption,read&model-version=latest&language=en&api-version=2024-02-01";

    $imagePath = $image;

    $imageData = file_get_contents($imagePath);

    curl_setopt($curl, CURLOPT_URL, $requestAPI);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Ocp-Apim-Subscription-Key: ' . $key,
        'Content-Type: application/octet-stream'
    ]);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $imageData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if ($response === false) {
        echo 'Curl Error: ' . curl_error($curl);
    } else {
        $extractData = [];
        $responseData = json_decode($response, true);
        foreach($responseData['readResult']['blocks'][0]['lines'] as $line){
            foreach($line['words'] as $word){
                //echo $word['text'];
                $extractData[] = $word['text'];
            }
        }
    }
    file_put_contents('../JSON_FILE/text.txt',$extractData);
    curl_close($curl);
}

//$text = file_get_contents('text.txt');
//$data = file_get_contents('../JSON_file/data.json');
// 'get the total amount, date, and receipt number from this text'.$text.'and insert these values into this JSON template: '.$data.'and if the data or value is not present just leave it as blank'
?>
<?php
$text = file_get_contents('../JSON_FILE/text.txt');
$data = file_get_contents('../JSON_FILE/data.json');

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://chatgpt4-ai-chatbot.p.rapidapi.com/ask",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'query' => 'get the total amount, date, and receipt number from this text'.$text.'and insert these values into this JSON template: '.$data.'and if the data or value is not present just leave it as blank'
	]),
	CURLOPT_HTTPHEADER => [
		"Content-Type: application/json",
		"x-rapidapi-host: chatgpt4-ai-chatbot.p.rapidapi.com",
		"x-rapidapi-key: c0d2e3fcb7msh7aeac413237a4bfp191623jsn9d8995063512"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $responseData = json_decode($response, true);
    if (isset($responseData['response'])) {
        $jsonResponse = json_decode($responseData['response'], true);
        $data = json_encode($jsonResponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        
        file_put_contents('../JSON_file/data.json', $data);
    } else {
        echo "Unexpected response format.";
    }
}
?>

