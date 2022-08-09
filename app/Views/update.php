<html>
    <body>
        <form method="post" name="updateuser" action="<?= site_url('/update1') ?>" >
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
            name: <input type="text" name="n" value="<?php echo $user_obj['name'];?>"><br>
            age: <input type="text" name="a" value="<?php echo $user_obj['age'];?>" ><br>
            <input type="submit" name="s" value="Update"><br>
            </form>
    </body>