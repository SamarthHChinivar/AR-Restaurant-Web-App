<?php
// Replace the values in the next line with your database credentials
$conn = mysqli_connect('localhost', 'root', '', 'project');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from food_data table
$sql = "SELECT * FROM food_data3";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $price1 = $row["amount1"];
        $price2 = $row["amount2"];
        $price3 = $row["amount3"];
        $price4 = $row["amount4"];
        $price5 = $row["amount5"];
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Restaurant 3</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Style/ar_styles3.css">

    <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>

  </head> 
<body>
<div id="card">
    <model-viewer src="../../AR_extra/assets/burger.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>BURGER</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price1 ?></span>
      </span>
      <button onclick="document.getElementById('id01').style.display='block'" class="btn"><img src="../../AR_extra/assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>

  <div id="card">
    <model-viewer src="../../AR_extra/assets/cup_of_cappuccino.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>CAPPUCCINO</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price2 ?></span>
      </span>
      <button onclick="document.getElementById('id02').style.display='block'" class="btn"><img src="../../AR_extra/assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>

  <div id="card">
    <model-viewer src="../../AR_extra/assets/doughnut.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>DOUGHNUT</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price3 ?></span>
      </span>
      <button onclick="document.getElementById('id03').style.display='block'" class="btn"><img src="../../AR_extra/assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>
  
  <div id="card">
    <model-viewer src="../../AR_extra/assets/fast-food.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>WRAP</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price4 ?></span>
      </span>
      <button onclick="document.getElementById('id04').style.display='block'" class="btn"><img src="../../AR_extra/assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>

  <div id="card">
    <model-viewer src="../../AR_extra/assets/cake.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>VANILLA CAKE</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price5 ?></span>
      </span>
      <button onclick="document.getElementById('id05').style.display='block'" class="btn"><img src="../../AR_extra/assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>

  <footer>
    <!-- <span>This is The blah Hotel COME. EAT. GO.</span> -->
    <span>Eat Well Be Well</span>
  </footer>

  <div id="id04" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id04').style.display='none'" class="closebtn">&times;</span>
	      <p>A wrap can vary widely depending on personal preference, 
          but common components include a tortilla or lettuce leaf, 
          a protein such as chicken or tofu, vegetables such as lettuce, 
          tomatoes, and onions, and a sauce or condiment such as mayo, hummus, or salsa.</p>

	      <p>The main specialties of a wrap is its versatility - 
          it can be filled with a wide range of ingredients and flavors, 
          making it a great option for a quick and customizable meal. 
          Additionally, wraps can be a healthier alternative to traditional sandwich bread, 
          especially if made with whole grain tortillas or lettuce leaves.</p>
	    </div>
	  </div>
	</div>
	
	<div id="id02" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id02').style.display='none'" class="closebtn">&times;</span>
	      <p>Cappuccino is traditionally served in a small, ceramic cup and is a popular coffee drink enjoyed around the world. 
          The milk used in cappuccinos can be whole milk, skim milk, or any milk of your choice, 
          and the foam can be made with a cappuccino machine or by using a frother. 
          Cappuccinos can also be decorated with latte art, which is created by pouring steamed milk into the espresso in a specific pattern.</p>
          
	      <p>One of the main specialties of cappuccino is its balance of flavors and textures. 
          The bitterness of the espresso is offset by the sweetness of the milk, while the foam provides a creamy, velvety texture. 
          Cappuccinos are also a versatile drink that can be enjoyed on their own or paired with a variety of pastries and desserts. 
          Additionally, the frothy foam layer on top can be a canvas for creative latte art designs.</p>
	    </div>
	  </div>
	</div>
  
  <div id="id01" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id01').style.display='none'" class="closebtn">&times;</span>
	      <p>Burgers are one of the most beloved and popular fast food items worldwide. They consist of a grilled or fried patty made from ground beef, chicken, or even plant-based alternatives, served on a bread roll called a bun. Burgers are typically garnished with various toppings such as cheese, lettuce, onions, tomatoes, pickles, and sauces like ketchup, mustard, or mayo. The patty can be cooked to various degrees of doneness, from rare to well-done, depending on the customer's preference.</p>

	      <p>One of the great things about burgers is their versatility - they can be made in countless ways, with different types of meat, toppings, and buns, making them suitable for any taste preference. They are also convenient and easy to eat, making them a favorite choice for people on the go or those who are in a rush. Moreover, burgers can be customized according to dietary preferences, such as vegetarian or gluten-free, making them a versatile and inclusive fast food option. Overall, burgers are a satisfying and classic meal that can be enjoyed in various settings, from fast food chains to gourmet restaurants. </p>
	    </div>
	  </div>
	</div>
	
	<div id="id03" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id03').style.display='none'" class="closebtn">&times;</span>
	      <p>Doughnuts, also known as donuts, are a popular pastry that originated in North America but are now enjoyed worldwide. These fried or baked pastries are typically ring-shaped and made from a sweet dough, which can be flavored with various ingredients such as vanilla, cinnamon, or chocolate. They are often topped with a glaze or icing and can be filled with cream, jelly, or other sweet fillings. Doughnuts are often enjoyed as a breakfast pastry or a dessert and can be paired with coffee or milk.</p>

	      <p>One of the main appeals of doughnuts is their versatility. They can come in a wide variety of flavors and toppings, allowing for a range of sweet experiences. From traditional glazed doughnuts to more exotic flavors such as maple bacon or raspberry jam, there is a doughnut for every taste. Additionally, doughnuts can be enjoyed at any time of day and for any occasion. Whether it's a quick breakfast on the go or a special treat for a celebration, doughnuts are a classic pastry that bring joy to many. The unique shape and texture of the doughnut also make it a fun pastry to eat and share with others, adding to its appeal as a beloved sweet treat.</p>
	    </div>
	  </div>
	</div>

  <div id="id05" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id05').style.display='none'" class="closebtn">&times;</span>
	      <p>Vanilla cake is a classic dessert enjoyed by many people around the world. Made with a combination of flour, sugar and vanilla extract, it is a simple yet delicious treat that can be served on its own or with a variety of toppings and frostings. The texture of vanilla cake can vary from light and fluffy to dense and moist, depending on the recipe and baking techniques used. Vanilla cake can be baked in various shapes and sizes, such as round, square, or rectangular pans, and can be decorated with colorful icing, fresh fruits, or sprinkles to add a festive touch. Its versatility makes it a popular choice for birthdays, weddings, and other special occasions.</p>

	      <p>To make the perfect vanilla cake, it is important to use high-quality ingredients and follow the recipe carefully. The type of flour used can affect the texture of the cake, with cake flour or all-purpose flour being the most common options. The eggs used in the batter should be at room temperature to ensure even mixing and baking. Vanilla extract is a key ingredient in vanilla cake, and it is important to use a good-quality extract to ensure a rich and authentic flavor. The cake can be baked using various methods such as the creaming method, the sponge method, or the chiffon method, each resulting in a different texture and flavor. Once the cake is baked and cooled, it can be decorated with frosting, whipped cream, or fruit to create a personalized and delicious dessert.</p>
	    </div>
	  </div>
	</div>

  <script type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
  </script>
</body>
</html>