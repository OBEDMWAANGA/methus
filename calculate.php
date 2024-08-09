<?php
function getCharge($amountInKwacha) {
    $charges = [
        [0, 500, 30],
        [501, 1500, 55],
        [1501, 3000, 100],
        [3001, 4500, 130],
        [4501, 6000, 180],
        [6001, 7500, 230],
        [7501, 9000, 280],
        [9001, 11000, 350],
        [11001, 13000, 400],
        [13001, 15000, 500],
        [15001, 20000, 550],
        [20001, 25000, 600],
        [25001, 35000, 750],
        [35001, 45000, 1000],
        [50001, 70000, 1200],
        [70001, 100000, 1500],
    ];

    foreach ($charges as $charge) {
        if ($amountInKwacha >= $charge[0] && $amountInKwacha <= $charge[1]) {
            return $charge[2];
        }
    }
    return 0; // Default if no tier is met
}

$data = json_decode(file_get_contents('php://input'), true);
$amountRMB = $data['amount'];

$rate = file_get_contents('rate.txt');
$amountKwacha = $amountRMB * $rate;
$transferCharge = getCharge($amountKwacha);
$totalAmount = $amountKwacha + $transferCharge;

echo json_encode([
    'amountKwacha' => number_format($amountKwacha, 2),
    'transferCharge' => number_format($transferCharge, 2),
    'totalAmount' => number_format($totalAmount, 2)
]);
?>
