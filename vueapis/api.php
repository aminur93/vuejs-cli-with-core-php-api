<?php
    /**
     * Created by PhpStorm.
     * User: pavel
     * Date: 8/30/2020
     * Time: 12:16 PM
     */
    
    include './config.php';
    
    //header function allows apis consumed by application
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    
    $method = $_SERVER['REQUEST_METHOD'];
    
    if ($method == "POST")
    {
        //this is for insert data
        $bodyParams = json_decode(file_get_contents("php://input"), true);
    
        $action = $bodyParams['action'];
        
        if ($action == "insert")
        {
            //insertation
            
            
            $name = isset($bodyParams['name']) ? $bodyParams['name'] : "";
            $email = isset($bodyParams['email']) ? $bodyParams['email'] : "";
            $phone = isset($bodyParams['phone']) ? $bodyParams['phone'] : "";
            
            $insertQuery = "Insert into students(name,email,phone) VALUES ('".$name."', '".$email."', '".$phone."')";
            
            if ($connection->query($insertQuery) === TRUE)
            {
                echo json_encode(array(
                    "status" => 1,
                    "message" => "Value Has been Store Successfully"
                ));
            }else{
                echo json_encode(array(
                    "status" => 0,
                    "message" => "Failed store in Database"
                ));
            }
            
        }elseif ($action == "update")
        {
            //updateing
            //$bodyParams = json_decode(file_get_contents("php://input"), true);
    
            $student_id = isset($bodyParams['student_id']) ? intval($bodyParams['student_id']) : "";
            $name = isset($bodyParams['name']) ? $bodyParams['name'] : "";
            $email = isset($bodyParams['email']) ? $bodyParams['email'] : "";
            $phone = isset($bodyParams['phone']) ? $bodyParams['phone'] : "";
            
            $updateQuery = "Update students SET name = '".$name."', email='".$email."', phone='".$phone."' WHERE id = ".$student_id;
    
            if ($connection->query($updateQuery) === TRUE)
            {
                echo json_encode(array(
                    "status" => 1,
                    "message" => "Value Has been Updated Successfully"
                ));
            }else{
                echo json_encode(array(
                    "status" => 0,
                    "message" => "Failed Updated in Database"
                ));
            }
        }
        
    }elseif ($method == "GET")
    {
        $action = isset($_GET['action']) ? $_GET['action'] : "";
        
        if ($action == "list")
        {
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            
            //listing our all data
            if (!empty($id))
            {
                // Id have some value
                $showQuery = "select * from students where id = ".$id;
            }else{
                // Id have not value
                $showQuery = "select * from students";
            }
            
            $result = $connection->query($showQuery);
            
            
            if ($result->num_rows > 0)
            {
                // We have data
                $row_data = array();
                while ($row = $result->fetch_assoc())
                {
                    $row_data[] = $row;
                    // array_push($row_data.$row)
                }
                
                echo json_encode(array(
                    "status" => 1,
                    "message" => "Record Found",
                    "record" => $row_data
                ));
            }else{
                // We have No data
                echo json_encode(array(
                    "status" => 0,
                    "message" => "No Data Found"
                ));
            }
            
        }elseif ($action == "delete")
        {
            //Delete operation
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            
            if (!empty($id))
            {
                $deleteQuery = "delete from students where id = ".$id;
                if ($connection->query($deleteQuery) === TRUE)
                {
                    echo json_encode(array(
                        "status" => 1,
                        "message" => "Record Deleted  Successfully"
                    ));
                }else{
                    echo json_encode(array(
                        "status" => 0,
                        "message" => "Failed To Delete"
                    ));
                }
            }else{
                echo json_encode(array(
                    "status" => 0,
                    "message" => "Id is not found"
                ));
            }
            
            
        }
    }