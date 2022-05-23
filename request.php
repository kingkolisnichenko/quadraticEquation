<?php
    include('bd.php'); 
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
           
        $postData = file_get_contents('php://input');
        $data = json_decode($postData, true);

        $inp_a = $data['inp_a'];
        $inp_b = $data['inp_b'];
        $inp_c = $data['inp_c'];
        $answer = $data['answer'];
        $ans_x1 = $data['ans_x1'];
        $ans_x2 = $data['ans_x2'];

        $query = "INSERT INTO `discriminant`.`answers` (`input_a`, `input_b`, `Input_c`, `answer`, `ans_x1`, `ans_x2`) VALUES ('$inp_a', '$inp_b', '$inp_c', '$answer', '$ans_x1', '$ans_x2');";

        if(mysqli_query($con,$query)){
            echo "Запись добавлена";
        }
         else{
            echo "Запись не добавлена";
        }
    }      

    if(sizeof($_GET) > 0){
        
        $inp_a = $_GET['inp_a'];
        $inp_b = $_GET['inp_b'];
        $inp_c = $_GET['inp_c'];

        $query = "SELECT answer, ans_x1, ans_x2 FROM discriminant.answers where input_a = '$inp_a' and input_b = '$inp_b' and input_c = '$inp_c'";
        $result = mysqli_query($con,$query);
        
        if($result){
            foreach ($result as $row) {
                echo json_encode(array( 'answer' => $row['answer'],  'ans_x1' => $row['ans_x1'], 'ans_x2' => $row['ans_x2']));
                exit;
            }
        }
    }
?>