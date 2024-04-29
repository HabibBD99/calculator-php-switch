<?php
namespace App\classes;


$this->first_input = $_POST['first_input'];
$this->second_input = $_POST['second_input'];
$this->operator = $_POST['submit'];
$this->result = "";

 class CalculatorDemo{

     public $first_input ;
     public $second_input ;
     public $operator ;
     public $result;


 public function __construct(){

     $this->first_input = $_POST['first_input'];
     $this->second_input = $_POST['second_input'];
     $this->operator = $_POST['submit'];
     $this->result = "";


 }

  function showOutput(){

   if(isset($_POST['submit'])){
       $this->first_input = $_POST['first_input'];
       $this->second_input = $_POST['second_input'];
       $this->operator = $_POST['submit'];


       switch($this->operator){
          case "+":
          $this->result = $this->first_input + $this->second_input;
          break;

          case "-":
          $this->result = $this->first_input - $this->second_input;
          break;

           case "*":
           $this->result = $this->first_input * $this->second_input;
           break;

           case "/":
           $this->result = $this->first_input / $this->second_input;
           break;

           case "%":
           $this->result = $this->first_input % $this->second_input;
           break;


           }

        }

    }

 }


 ?>



<?php




?>



<form method="post">
    <table>
        <tr>
            <td>
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
                <input type="number" name="first_input" required="true">
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
            <td>
                <label>Second Number :</label>
                <input type="number" name="second_input" required>
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
