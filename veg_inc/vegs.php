<div class="vegetables_section layout_padding">
            <div class="container">
                <div class="image_2"><img src="images/pro1.png"></div>
                <h1 class="about_taital">Our Products</h1>
                <p class="lorem_text">At <span style="color:red" >"Veggies"</span>,
                    we prioritize your well-being. Our commitment is to provide you with the freshest, highest-quality products that contribute to a healthy and balanced lifestyle.
                    Start exploring our product index now and embark on a journey of culinary delight and nutritional excellence.
                    <span style="color:red" >,Happy shopping!</span></p>
                <div class="vegetables_section_2 layout_padding">
                    <div class="row">
                        <?php
                            //$name=$_SESSION['cs_name'];
                            $sel="SELECT product.*,categories.category_name FROM product INNER JOIN categories ON categories.category_id=product.category ORDER BY rand() LIMIT 8";
                            $result=mysqli_query($con,$sel);
                            while($rs=$result->fetch_assoc()){
                        ?>
                    <div class="col-md-3">
                        <div class="box_section">
                        <?php if(isset($_SESSION['cs_name'])){  ?>
                            <div class="image_4"><a href="show_veg.php?pro_id=<?php echo $rs['id'];?>"><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 12vh;"></a></div>
                            <?php }else{ ?>
                            <div class="image_4"><a  href="#" onclick="warn();"><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 12vh;"></a></div>
                            <?php }  ?>
                            <h2 class="dolor_text">₹<span style="color: #ebc30a;"><?php echo $rs['price'];?>.00</span></h2>
                            <h2 class="dolor_text"><?php echo $rs['name'];?></h2>
                            <h2 class="dolor_text_1">1 kg [<span style="color:red" ><?php echo $rs['category_name'];?></span>] </h2>
                            <?php if(isset($_SESSION['cs_name'])){  ?>
                            <form action="add_to_cart.php" method="post">
                                <input hidden type="text" name="pid" value="<?php echo $rs['id'];?>">
                                <input hidden type="text" name="pname" value="<?php echo $rs['name'];?>">
                                <input hidden type="text" name="price" value="<?php echo $rs['price'];?>">
                                <input hidden type="text" name="uname" value="<?php echo $_SESSION['cs_name'];?>">
                                <input hidden type="text" name="uid" value="<?php echo $_SESSION['cs_id'];?>">
                                <input hidden type="text" name="category" value="<?php echo $rs['category_name'];?>">
                                <p><input type="number" name="qnty" style="width: 4vw; margin-left:10vh;" min='1' max='10' ></p>
                                <p class="text-center"><input type="submit" class="btn btn-warning" name="add_cart" value="Add to Cart"></p>
                            </form>
                            <?php }else{ ?>
                            <div class="buy_bt_1 active"><a href="#" onclick="warn();">Buy Now</a></div>
                            <?php }  ?>
                        </div>
                    </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="read_bt_1"><a href="all_vegs.php">Explore More</a></div>
            </div>
        </div>