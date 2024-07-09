<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <div class="container">
        <div>
        <h1 class="display-2">Product List</h1>
        <i class="fa-solid fa-plus text-end"></i>
        </div>
    </div>

    <table class="table ">
        <thead class="table-dark">
            <th>ID</th>
            <th>Product Name</th>
            <th>price</th>
            <th>Quantity</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>

        <tbody>
            <?php
                while ($products = $all_products->fetch_assoc()){
            ?>
            <tr>
                <td><?= $product['id']?></td>
                <td><?= $product['product_name']?></td>
                <td><?= $product['price']?></td>
                <td><?= $product['quantity']?></td>
                <td><?= $product['id']?></td>
                <td>
                <a href="edit-product.php" class="btn btn-warning btn-sm" title="Edit">
                    <i class="fa-solid fa-edit"></i>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
                <td>
                    <a href="../" class="btn btn-success btn-sm">
                        <i class="fa-solid fa-cash-register"></i>
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>


        </tbody>


    </table>

</body>
</html>