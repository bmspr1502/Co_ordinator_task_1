
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
            <div class='col-lg-4 col-md-6 card'>
                <img class="card-img-top" src="<?php echo $row['imgsrc'];?>" alt="Card image">   
                <div class='card-body'>
                <td><?php echo $row['name'];?></td>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item"><h2>₹</h2></li>
                    <li class="list-group-item"><?php echo $row['price'];?></li>
                </ul>
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