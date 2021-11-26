<?php
if (isset($_POST['upload']) ) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $image = $_FILES['image']['tmp_name'];
        $small = $_FILES['small']['tmp_name'];
        $meduim = $_FILES['meduim']['tmp_name'];
        $large = $_FILES['large']['tmp_name'];
        $xlarge = $_FILES['xlarge']['tmp_name'];

        $pickname = time().'.png';
        $pickname2 = (time()+1).'.png';
        $pickname3 = (time()+2).'.png';
        $pickname4 = (time()+3).'.png';
        $pickname5 = (time()+4).'.png';

        move_uploaded_file($image,'img/' . $pickname);
        
        $sql = "insert into product(product_name,price,quantity,category,image) values('$name',$price,$quantity,'$category','$pickname')";
        
        if(mysqli_query($connect,$sql)){  
            $MSG ='added successfully' ;         
            $json = json_encode($MSG);
            $prod_submitted = true;
            $sql = "SELECT * FROM product WHERE image='$pickname'";
            $query = mysqli_query($connect,$sql);
            if ($row = mysqli_fetch_assoc($query)) {
                $pid = $row['id'];
                echo "$pid";
                move_uploaded_file($small,'img/' . $pickname2);
                move_uploaded_file($meduim,'img/' . $pickname3);
                move_uploaded_file($large,'img/' . $pickname4);
                move_uploaded_file($xlarge,'img/' . $pickname5);
                $sql = "insert into product_details(product_id,size1,size2,size3,size4,description) values($pid,'$pickname2', '$pickname3','$pickname4','$pickname5' ,'$description')";        
                if(mysqli_query($connect,$sql)){
                    echo "all done";
                }
                else{
                    echo $sql;
                }
            }
        }
        else {
            $prod_submitted = true;
        }
    }
            
?>