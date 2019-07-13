<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart - PHP & Bootstrap Popover</title>
        <script src="javascript/jquery.min.js"></script>
        <link href="stylesheet" href="css/bootstrap.min.css">
        <script src="javascript/bootstrap.min.js"></script>
        <style>
            .popover
            {
                width: 100%;
                max-width: 800px;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <br />
        <h3 align="center"><a href="#">Shopping Cart by using Bootstrap Popover & PHP</a></h3>
        <br />
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                    <a class="navbar-brand" href="/">Shopping Cart</a>
                </div>

                <div id="navbar-cart" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span class="badge"></span>
                                <span class="total_price">$ 0.00</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="popover_content_wrapper" style="display: none">
            <span id="cart_details"></span>
            <div align="right">
                <a href="#" class="btn btn-primary" id="check_out_cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Check out
                </a>
                <a href="#" class="btn btn-default" id="clear_cart">
                    <span class="glyphicon glyphicon-trash"></span> Clear
                </a>
            </div>
        </div>

        <div id="display_item">

        </div>

    </div>




    </body>
</html>

<script>

$(document).ready(function () {

    function load_product() {
        $.ajax({
            url:"fetch_item.php",
            method:"POST",
            success:function (data) {
                $('#display_item').html(data);
            }
            })
    }
})

</script>

