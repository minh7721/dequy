<?php

// Đệ quy tuyến tính
function tinhTong($n){
    if($n==1){
        return $n;
    }
    else{
        return $n + tinhTong($n - 1);
    }
}

//echo tinhTong(3);

// Đệ quy nhị phân

// Hàm tính giá trị của phần tử thứ $n của dãy Fibonacci
function Fibo($n)
{
    if ($n <= 2){
        return 1;
    }
    else {
        return (Fibo($n - 2) + Fibo($n - 1));
    }
}
//echo Fibo(10);


// Đệ quy phi tuyến

function pheptinh($n){
    if($n<6){
        return $n;
    }
    else{
        $sum = 0;
        for($i = $n; $i >= 1 ; $i--){
            $sum = $sum + phepTinh($n-$i);
        }
        return $sum;
    }
}

//echo pheptinh(6);


// Đệ quy hổ tương

// Hàm đệ quy U
function U($n)
{
    if($n<5){
        return $n;
    }
    else{
        return U($n-1) + G($n - 2);
    }
}

// Hàm đệ quy G
function G($n)
{
    if($n <= 8){
        return $n-3;
    }
    else{
        return U($n-1) + G($n-2);
    }
}

// Gọi Hàm

//echo G(12);


function Fibo2($n){
    $a = 0;
    $b = 1;
    $c = 1;
    if($n < 0){
        return -1;
    }
    elseif($n == 1 || $n == 0 ){
        return $n;
    }
    elseif($n>1){
        for($i = 2; $i <= $n; $i++){
                $a = $b;
                $b = $c;
                $c = $a+$b;
        }
    }
    return $c;
}

for($i = 1 ; $i<=10 ; $i++){
    echo Fibo2($i)." ";
}