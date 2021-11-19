<?php
    $product = $_GET['p'];
    $title = $product;
    include './include/header.php';
?>

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <title>Fammahy fit</title>
</head> --> 



    <div class="container">        
        <div class="row display-container">
            <div class="col-md-4"></div>
            <div class="col-md-4 card border-0">
                <div class="fit-view">
                    <img id="view-img" src="img/small-maroon.png" class="fit-view-img">
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        <div class="row shadow">                
            <label class="avail-label">Available sizes</label>
            <button type="button" class="col btn-outline btn top-padding" onclick="change('small')">Small</button>
            &nbsp;
            <button type="button" class="col btn-outline btn top-padding" onclick="change('medium')">Medium</button>
            &nbsp;
            <button type="button" class="col btn-outline btn top-padding" onclick="change('large')">Large</button>
            &nbsp;
            <button type="button" class="col btn-outline btn top-padding" onclick="change('x-large')">X Large</button>

            <label class="avail-label">Description</label>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily</p>
        </div>
    </div>
    <!-- <div class="shadow"></div> -->

<script>
    function change(size) {
        let img = document.getElementById('view-img');
        switch (size) {
            case 'small':
                img.setAttribute('src',"img/small-maroon.png")
                break;
            case 'medium':
                img.setAttribute('src',"img/medium-maroon.png")
                break;
            case 'large':
                img.setAttribute('src',"img/large-maroon.png")
                break;
            case 'x-large':
                img.setAttribute('src',"img/x-large-maroon.png")
                break;
        
            default:
                break;
        }
    }
</script>