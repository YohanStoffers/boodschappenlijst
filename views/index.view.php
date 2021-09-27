<!DOCTYPE html>
<html lang="en">

<?php require('partials/header.php');?>

<body>
    <?php require('partials/nav.php');?>

    <h1>Boodschappen lijst</h1>

    <table>
        <tr class="title-row">
            <td>Producten</td>
            <td>Prijs</td>
            <td>Aantal</td>
            <td>Subtotaal</td>
        </tr>
        <?php foreach ($generate as $product) :?>
        <tr>
            <td><?=$product->name;?></td>
            <td><?= $product->price;?></td>
            <td><?= $product->number;?></td>
            <td><?= $product->price * $product->number;?></td>
        </tr> 
            <?php endforeach; ?> 
        
        <tr class="total">
            <td>Totaal</td>
            <td></td>
            <td></td>
            <td><?=$tableTotal;?></td>
        </tr>
    </table>
</body>

<?php require('partials/footer.php');?>
            
</html>