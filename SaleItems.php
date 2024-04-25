<?php
    require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
     body{
                background-color: darkolivegreen;
            }
            h2, h3, h4, h5, h6 {
                text-align: left;
                font-family: Verdana;
            }

            h1, p{
                text-align: center;
                font-family: Verdana;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #c9bd93;
            }
            li{
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover{
                background-color: #008081;
            }
            a:link, a:visited {
                background-color: #c9bd93;
                color: black;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }
            a.hover, a.active {
                background-color: #008081;
            }
            .container{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .logo{
                max-width: 25%;
                max-height: 15%;
                float: left;
            }
            .title{
                font-size: 25px;
                padding-left: 20px;
                padding-top: 20%;
                float: left;
            }
            * {
                box-sizing: border-box;
                }

            form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
            }
            form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
            }

            form.example button:hover {
            background: #0b7dda;
            }

            form.example::after {
            content: "";
            clear: both;
            display: table;
            }

.card {
            margin: 20px;
            background: #fff;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);
            padding: 10px;
            border-radius: 5px;
        }
        
        .image {
            text-align: center;
            margin-bottom: 10px;
        }
        
        .image img {
            max-width: 100%;
            height: auto;
        }
        
        .caption {
            text-align: center;
        }
        
        .caption .product_type {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .caption .product_name {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .caption .product_colors {
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .caption .price {
            font-size: 16px;
            color: #333;
        }
        
        .caption .add {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition-duration: 0.4s;
        }
        
        .caption .add:hover {
            background-color: #45a049;
            color: white;
        }
</style>

<title> Items for Sale </title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/SecondhandTreasuresLogo.png" alt="Logo for SecondHand Treasures">
        </div>
        <div class="title">
            <h1> Items for Sale </h1>
        </div>
        </div>

    <ul>
        <li><a href="index.html">Welcome</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="SaleItems.php"> Items for Sale</a></li>
        <li><a href="SellingHub.html"> Selling Hub </a></li>
        <li><a href="FAQ.html">Frequently Asked Questions</a></li>
    </ul>

    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>


    <main>
        <?php
            if(mysqli_num_rows($all_product) > 0) {
            while($row = mysqli_fetch_assoc($all_product)) {
        ?>
        <div class="card">
            <div class="image">
                <?php
                $imageData = base64_encode($row["ItemImage"]);
                $imageType = "image/jpeg";
                $src = "data:".$imageType.";base64,".$imageData;
                ?>
                <img src="<?php echo $src; ?>" alt="image of sale item">  
            </div>
            <div class="caption">
                <p class="product_type"> <?php echo $row["ItemType"]; ?> </p>
                <p class="product_name"> <?php echo $row["ItemTitle"]; ?> </p>
                <p clas="product_colors"> <?php echo $row["Colors"]; ?> </p>
                <p class="price"> <?php echo $row["Price"]; ?> </p>
                <button class="add"> Add to Cart </button>
            </div>    
        </div>
        <?php
            }
       } 
       else {
        echo "No products available."; }
       
    ?>
    </main>

<br>
<hr>
<div class="footer">
<h2>Contact Us!</h2>
<h4>Headquarters:</h4>
<h4>576 Oak Avenue</h4>
<h4>Suite 201</h4>
<h4>Willow Creek, Riverdale 54213</h4>
<h4>SecondhandTreasures@gmail.com</h4>
<h4>P:982-201-4375</h4>
<h4>S:982-431-9523</h4>
<ul>
    <li><a href="index.html">Welcome</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="SaleItems.php"> Items for Sale</a></li>
    <li><a href="SellingHub.html"> Selling Hub </a></li>
    <li><a href="FAQ.html">Frequently Asked Questions</a></li>
</ul>
<br>
<h6>Copyright 2024 Secondhand Wholesale Treasures and Company</h6>
</div>
</body>
</html>