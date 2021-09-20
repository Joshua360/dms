  <!-- Portfolio Section -->
  <h2>Currently Available Donors</h2>

<div class="row">
           <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

    <div class="col-lg-4 col-sm-6 portfolio-item">

        <div class="card h-100">
            <a href="#"><img class="card-img-top img-fluid" src="images/donat.png" alt="" ></a>
            <div class="card-block">
                <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>


                <p class="card-text"><b>Mobile No. / Email Id :</b> <?php echo htmlentities($result->MobileNumber);?> /
                        <?php if($result->EmailId=="")
                        {
                        echo htmlentities(NA);
                        } else {
echo htmlentities($result->EmailId);
}
?>
                             </p>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b> Age:</b> <?php echo htmlentities($result->Age);?></p>

<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
<p class="card-text"><b>Address :</b>                  
<?php if($result->Address=="")
{
echo htmlentities('NA');
} else {
echo htmlentities($result->Address);
}
?></p>

<p class="card-text"><b>Message :</b> <?php echo htmlentities($result->Message);?></p>
            </div>
        </div>
    </div>

    <?php }} ?>
  




</div>