<?php 
   $servername = "localhost";
   $username = "abstract-programmer";
   $password = "Qwerty@123";

   try {
    $conn = new PDO("mysql:host=$servername;dbname=hbwebsite", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    function filteration($data){
        foreach($data as $key => $value){
        // trim() -> use to remove extra space.
        // stripcslashes() -> use to remove backward slash
        // htmlspecialchars() -> convert special character to html entity
        // strip_tags() -> use to remove strip tags
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
        }
        return $data;
       }
    
       function selectt($sql,$values){
    
        $conn = $GLOBALS['conn'];
        $stmt = $conn->prepare($sql);

        $n = sizeof($values);
       
        for($i=0;$i<$n;$i++){
            $stmt->bindParam($i+1, $values[$i]);
        }
        
        if($stmt->execute()){
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
        else{
            echo "qruery fail to execute selectt";
        }
       }

       function updatess($sql,$values){
    
        $conn = $GLOBALS['conn'];
        $stmt = $conn->prepare($sql);

        $n = sizeof($values);
       
        for($i=0;$i<$n;$i++){
            $stmt->bindParam($i+1, $values[$i]);
        }
        
        if($stmt->execute()){
            return true;
        }
        else{
            echo "qruery fail to execute selectt";
        }
       }
       

    } 
    catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
//    print_r($conn);
//    echo " ****** Connected successfully ****** ";

   
?>