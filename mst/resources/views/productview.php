<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>price</th>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                
            
           <tr><?php $product['name']?></tr>
           <tr><?php $product['description']?></tr> 

           <tr><?php $product['price']?></tr> 
           <?php endforeach ; ?>                
        </tbody>
    </table>
    
</body>
</html>