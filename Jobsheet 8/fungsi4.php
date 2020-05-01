<html>
<body>
<?php
function writeMyName($fname,$punctuation)
{
echo $fname. "Refsnes .$punctuation .<br/>";
}
echo "My Name is ";
writeMyName("Kai Jim",".");
echo "My Name is ";
writeMyName("Hege",".");
echo "My Name is ";
writeMyName("Stale","...");
?>
</body>
</html>