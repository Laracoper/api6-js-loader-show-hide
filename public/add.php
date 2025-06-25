<?
require '../core/connect.php';
require '../core/func.php';

// try {
//     $r = json_decode(file_get_contents('php://input'), true);

//     // dump($r);

//     $msg = [
//         'status' => true,
//         'message' => 'success'
//     ];
//     $citys = [
//         [
//             'city' => 'london'
//         ],
//          [
//             'city' => 'berlin'
//         ],
//          [
//             'city' => 'new york'
//         ],

//     ];

//     header('Content-type:application/json', true, 234);
//     print json_encode(['msg'=>$msg,'citys'=>$citys]);
// } catch (\Throwable $th) {
//     throw $th;
// }


// $r = json_decode(file_get_contents('php://input'), true);
// // dump($r);


// $query = $r['query'];
// $number = $r['number'];
// if ($number == 8787) {
//     header('Content-Type:application/json', true, 211);
//     print json_encode(['msg' => 'success', 'q' => $query, 'n' => $number]);
// }else{
//      header('Content-Type:application/json', true, 421);
//     print json_encode(['msg' => 'error']);
// }



// $data = json_decode(file_get_contents('../data.json'),true);
// dump($data);


// $r = json_decode(file_get_contents('php://input'), true);
// // dump($r);
// $query = $r['query'];
// $number = $r['number'];


// try {
//     if ($number == 8787) {

//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($ch, CURLOPT_URL, 'https://api6-js/public/data.php');
//         $response = curl_exec($ch);
//         $data = json_decode($response, true);
//         curl_close($ch);
//         // dump($data);

//         header('Content-Type:application/json', true, 211);
//         print json_encode(['msg' => 'success', 'q' => $query, 'n' => $number,'data'=>$data]);
//     } else {
//         header('Content-Type:application/json', true, 451);
//         print json_encode(['msg' => 'error']);
//     }
// } catch (Exception $e) {
//     header('Content-Type:application/json', true, 421);
//     print json_encode(['msg' => 'error']);
//     // echo $e->getMessage();
// }



$r = json_decode(file_get_contents('php://input'), true);
// dump($r);
$query = $r['query'];
$number = $r['number'];


    if ($number == 8787) {

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_URL, 'data.json');
        // $response = curl_exec($ch);
        // $data = json_decode($response, true);
        // curl_close($ch);

        $data = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'),true);
        // dump($data);

        header('Content-Type:application/json', true, 211);
        print json_encode(['msg' => 'success', 'q' => $query, 'n' => $number,'data'=>$data]);
    } else {
        header('Content-Type:application/json', true, 451);
        print json_encode(['msg' => 'error']);
    }

