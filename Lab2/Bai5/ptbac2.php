
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
        function ptbac2($a,$b,$c)
        {
            $delta=pow($b,2)-4*$a*$c;
            $nghiem=0;
            if($delta<0)
            {
                $nghiem = "Phương trình vô nghiệm";
            }
            else if($delta==0)
            {
                $nghiem = "Phương trình có nghiệm kép x1=x2=".(-$b/(2*$a));
            }
            else
            {
                $nghiem = "Phương trình có 2 nghiệm phân biệt: x1=".round((-$b+sqrt($delta))/(2*$a),2)." và x2=".round((-$b-sqrt($delta))/(2*$a),2);
            }
            return $nghiem;
        }
        if(isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['c']))
        {
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            $nghiem=ptbac2($a,$b,$c);
        }
    ?>



    <form method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" />
                    X^2 + </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" />
                    X+</td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" />
                    =0</td>
            </tr>
            <tr>
                <td colspan="4">
                    Nghiệm :
                    <label for="textfield2"><?php echo $nghiem ?></label>

            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>