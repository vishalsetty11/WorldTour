<?php

// Multiple recipients
$to = 'johny@example.com, sally@example.com'; // note the comma

// Subject
$subject = 'Birthday Reminders for August';

// Message
$message = '
<html>
        <head>
        <title>Birthday Reminders for August</title>
        </head>
    <body>
        <p>A new Query!</p>
        <table>
            <tr>
            <th>Name</th><th>Email</th><th>Phone Number</th><th>Comments</th><th>Time Stamp</th>
             <?php
            if(is_array($fetchData)){      
            $sn=1;
            foreach($fetchData as $data){
            ?>
            <tr>
                <td><?php echo $sn; ?></td>
                <td><?php echo $data['user']??''; ?></td>
                <td><?php echo $data['email']??''; ?></td>
                <td><?php echo $data['phno']??''; ?></td>
                <td><?php echo $data['comment']??''; ?></td>
                <td><?php echo $data['time']??''; ?></td>
            </tr>
            <?php
            $sn++;}}else{ ?>
            <tr>
                <td colspan="8">
            <?php echo $fetchData; ?>
            </td>
                <tr>
                <?php
                }?>
        </table>
    </body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';
$headers[] = 'Cc: birthdayarchive@example.com';
$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>