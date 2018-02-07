<?php
    if(isset($_POST['Update'])){
        editConfirm($userID);
        header('location: ' . URL . 'home/index');
    }
    $day = $user['day'];
    $month = $user['month'];
    $name = $user['name'];
    $year = $user['birth'];
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>Day of birth<span style="color:red;">*</span></b></label>
        <input type="number" min="1" max="31" name="day" placeholder="0" value="<?php echo $day; ?>" required>

        <label class="createLabel"><b>Month of birth<span style="color:red;">*</span></b></label>
        <select type="text" placeholder="Month" name="month" required>
            <?php
                echo "<option value=" . $month ." selected>" . $month ."</option>";
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>

        <label class="createLabel"><b>Name<span style="color:red;">*</span></b></label>
        <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name; ?>" required>

        <label class="createLabel"><b>Year of birth<span style="color:red;">*</span></b></label>
        <input type="number" min="1900" max="2100" placeholder="0000" name="birth" value="<?php echo $year; ?>" required>

        <button class="createButton" type="submit" name="Update">Update</button>
    </div>
</form>