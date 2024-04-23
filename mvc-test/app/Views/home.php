<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page Not Found</h1>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user) {?>
        <tr>
            <td>
               <?= $user->firstname ?> 
            </td>
            <td>
            <?= $user->Lastname ?> 
            </td>
            <td>
            <?= $user->email ?> 
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>