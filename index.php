<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED IOT</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <img src="Lampu.jpg" alt="" class="rounded mb-4">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4 mb-4" onclick="window.location.href='pengendali.php?id=1&nilai=0'">OFF</button>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4" onclick="window.location.href='pengendali.php?id=1&nilai=1'">ON</button><br>
            <?php
                $data=mysqli_query($mysqli,"SELECT nilai FROM led WHERE id='1'");
                if($val=mysqli_fetch_array($data)){
                    $hasil=$val['nilai'];
                    if($hasil==1){
                        $status="ON!";
                    }
                    else{
                        $status="OFF!";
                    }
                    echo "LED 1 ";
                    echo $status;
                }
            ?>
        </div>
    </div>
</body>
</html>