<?php

 $result = "";

 if(isset($_POST['submit'])){

    $first_input =  $_POST['second_input'];
    $second_input = $_POST['first_input'];
    $operator = $_POST['submit'];

    switch($operator){
        case "+":
            $result = $first_input + $second_input;
            break;

          case "-":
              $result = $first_input - $second_input;
              break;

          case "*":
              $result = $first_input * $second_input;
              break;

          case "/":
              $result = $first_input / $second_input;
              break;

          case "%":
              $result = $second_input % $first_input;
              break;

        default:
            echo "The Value is Not Digit";
            break;

    }

 }



?>



<form method="post">
    <table bgcolor="#add8e6">
        <tr>
            <td>
                <p>Result Box</p>
                <textarea style="height:50px; width:280px; resize:none;">
                    <?php echo $result; ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
                <label>First Number :</label>
                <input type="number" name="first_input" placeholder=" First Number" required>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <td>
            <label>Second Number :</label>
            <input type="number" name="second_input" placeholder=" Last Number" required>
        </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="+">
                <input type="submit" name="submit" value="-">
                <input type="submit" name="submit" value="/">
                <input type="submit" name="submit" value="*">
                <input type="submit" name="submit" value="%">
                <input type="reset" name="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>