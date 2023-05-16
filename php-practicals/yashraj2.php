<?php
$numberofsubjects=0;
$err = "";
if(isset($_POST['submit-btn']))
$numberofsubjects = $_POST["total-subjects"];
$flag = true;
$marks=array();
if (isset($_POST['masks-submit'])) {
$numberofsubject = $_POST['total-subject'];
for ($i = 1; $i <= $numberofsubject; $i++) {
$temp = $_POST["$i"];
if(($temp<=100 && $temp>0) && !empty($temp)){
$marks[] = (int)$temp;
}
else{
$flag = false;
$err = "Enter valid marks";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<style>
.error{
color: red;
}
form{
margin: 5px;
}
input{
margin:10px;
}
div{
margin: 15px;
}
</style>
<title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="total-subjects">Enter the number of
subjects:</label><br>
<input type="text" name="total-subjects"><br>
<input type="submit" name="submit-btn">
</form>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
if (isset($_POST['submit-btn'])) {
for ($i = 1; $i <= $numberofsubjects; $i++) {
?>
<label for="subjects">Subject <?php echo $i; ?></label><br>
<input type="number" required name="<?php echo $i; ?>" ><br>
<?php
}
?>
<input type="text" name="total-subject" hidden value="<?php echo
$numberofsubjects; ?>">
<input type="submit" name="masks-submit">
<?php
}
?>
</form>
<span class="error"><?php echo $err; ?></span>
</body>
</html>
<h2>
Result:
</h2>
<h3>
<?php
echo "<div>";
if (isset($_POST['masks-submit']) && $flag){
$sum = 0;
for($i=0;$i<$numberofsubject;$i++)
{
$sum+=$marks[$i];
}
$percentage = $sum/$numberofsubject;
if($percentage<=100 && $percentage>90)
{
echo "A+";
}
else if($percentage<=90 && $percentage>80)
{
echo "A";
}
else if($percentage<=80 && $percentage>70)
{
echo "B+";
}
else if($percentage<=70 && $percentage>60)
{
echo "B";
}
elseif($percentage<=60 && $percentage>50)
{
echo "C+";
}
elseif($percentage<=50 && $percentage>40)
{
echo "C";
}
else{
echo "Fail";
}
echo "</div>";
}
?>
</h3>
</body>
</html>