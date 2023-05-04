<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding:5px 10px
        }
    </style>
</head>
<body>
    

<table border="1px">
    <tbody>
        <?php
        for($i = 1 ; $i <= 10 ; $i++){
            ?>
            <tr>
                <td><?php echo "2" ?></td>
                <td><?php echo "x" ?></td>
                <td><?php echo $i ?></td>
                <td><?php echo "=" ?></td>
                <td><?php echo $i*2 ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<table>
    <tbody>
        <?php
        $i = 1;
        while($i <= 10){
            ?>
            <tr>
                <td><?php echo "2" ?></td>
                <td><?php echo "x" ?></td>
                <td><?php echo $i ?></td>
                <td><?php echo "=" ?></td>
                <td><?php echo $i*2 ?></td>
            </tr>;
            <?php
              $i++;
        }
        ?>
    </tbody>
</table>
<table>
    <tbody>
        <?php
        $i = 1;
        do{

        
        ?>
        <tr>
            <td><?php echo "2" ?></td>
            <td><?php echo "x" ?></td>
            <td><?php echo $i ?></td>
            <td><?php echo "=" ?></td>
            <td><?php echo $i*2 ?></td>
        </tr>
        <?php
        $i++;
        }
        while($i<=10)
        ?>
    </tbody>
</table>
</body>
</html>