<?php
    require_once('database.php');

    // Get category ID


    //***the commented lines below removed cause not needed in this example but maybe useful for next assignment one. 
    // Get name for current category
    //$query = "SELECT * FROM categories
    //          WHERE categoryID = $category_id";
    //$category = $db->query($query);
    //$category = $category->fetch();
    //$category_name = $category['categoryName'];

    // Get all categories
    //$query = 'SELECT * FROM categories
    //          ORDER BY categoryID';
    //$categories = $db->query($query);

    // Get customer for selected category
    $query = "SELECT firstName, lastName FROM customers order by lastName";
    $customers = $db->query($query);
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customer Relations</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>



        <div id="content">
            <!-- display a list of customers -->
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                
                </tr>
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td><?php echo $customer['firstName']; ?></td>
                        <td><?php echo $customer['lastName']; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Daniel Namokoyi, Columbus State University.</p>
    </div>

    </div><!-- end page -->
</body>
</html>