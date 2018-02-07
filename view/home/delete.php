<?php
    if(isset($_POST['yes'])) {
    	deleteRow($userID);
        header('location: ' . URL . '/home/index');
    }else if(isset($_POST['no'])){
        header('location: ' . URL . '/home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Are you sure you want to Delete "<?php echo $user['name']; ?>"</b></h1>
        <button class="createButton" type="submit" name="yes">Yes</button>
        <button class="createButton" type="submit" name="no">No</button>
    </div>
</form>