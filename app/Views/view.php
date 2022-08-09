<html>
    <body>
        <table border="1">
            <tr>
                <th> Serial number</th>
 <th> Name</th>
 <th> Age </th>
 <th> Update </th>
 <th> Delete </th>
</tr>
<?php foreach($u as $user): ?>
    <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['age'];?></td>
             <td> <a href="<?php echo base_url('update/'.$user['id']);?>">Update</a></td>
             <td> <a href="<?php echo base_url('delete/'.$user['id']);?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>