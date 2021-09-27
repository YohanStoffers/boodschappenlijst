<!DOCTYPE html>
<html lang="en">

<?php require('partials/header.php');?>

<body>

    <?php require('partials/nav.php');?>
    
    <h1>Nieuw product toevoegen</h1>

   
    <table>
        <tr class="title-row">
            <td>Product</td>
            <td>Prijs</td>
            <td>Aantal</td>
            <td>verzenden</td>
        </tr>
        <tr>
            <form method="POST" action="/productsAdded">
            <td><input type="text" name="productInput"></td>
            <td><input type="number" name="priceInput" step="0.01"></td>
            <td><input type="number" name="numberInput" step="1"></td>
            <td><button type="submit" >toevoegen</button></td>
            </from>
        </tr>
        
    </table>
    
</body>

<?php require('partials/footer.php');?>

</html>