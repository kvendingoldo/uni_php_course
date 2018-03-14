<?php
$result = "";

class Calculator {
    var $a;
    var $b;

    function check_opration($operator) {
        switch($operator) {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '*':
                return $this->a * $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;

            default:
                return "Incorrect operator";
        }
    }
    function get_result($a, $b, $c) {

        if (is_numeric($a) and is_numeric($b)) {
            $this->a = $a;
            $this->b = $b;
            return $this->check_opration($c);
        } else {
            return "Error";
        }
    }
}

$cal = new Calculator();
if(isset($_POST['submit'])) {
    $result = $cal->get_result($_POST['val_1'],$_POST['val_2'],$_POST['op']);
}
?>

<form method="post">
    <table align="center">

        <tr>
            <td>1st Number</td>
            <td><input type="text" name="val_1"></td>
        </tr>

        <tr>
            <td>2nd Number</td>
            <td><input type="text" name="val_2"></td>
        </tr>

        <tr>
            <td>Operator</td>
            <td>
                <select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="=">
            </td>
        </tr>
        <tr>
            <td><strong><?php echo $result; ?><strong></td>
        </tr>
    </table>
</form>
