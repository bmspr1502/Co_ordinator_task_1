
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DB.php';
$query = "SELECT * FROM food";
$result = $con->query($query);

if($result->num_rows > 0){
    ?>
    <div class='container'>
        <div class='row'>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
            <div class='col-lg-4 col-md-6 card mt-2 ' style='background: #C5FCEE'>
                <img class="card-img-top" src="<?php echo $row['imgsrc'];?>" alt="Card image">   
                <div class='card-body'>
                <td><h2><?php echo $row['name'];?> MilkShakes</h2></td>
                <div class="input-group ">
                    <div class="input-group-prepend">
                    <span class="input-group-text">₹</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" disabled value='<?php echo $row['price'];?>'>
                    <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                    </div>
                </div>
                <button class="btn btn-success" id="<?php echo $row['id'];?>btn" onclick="addtocart(<?php echo $row['id'];?>,'<?php echo $row['name'];?>',<?php echo $row['price'];?>)">Add To Cart</button>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
    <?php
}
else{
    echo "NO DATA";
}
$con->close();
}else{
    echo "NOT VIEWABLE";
}