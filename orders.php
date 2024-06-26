
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="heading">
   <h3>Заказы</h3>
   <p><a href="html.php">главная</a> <span> / заказы</span></p>
</div>

<section class="orders">

   <h1 class="title">Ваши заказы</h1>

   <div class="box-container">

   <?php
      if($user_id == ''){
         echo '<p class="empty">пожалуйста, войдите, чтобы увидеть ваши заказы</p>';
      }else{
         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p>размещены на : <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>имя: <span><?= $fetch_orders['name']; ?></span></p>
      <p>email : <span><?= $fetch_orders['email']; ?></span></p>
      <p>номер : <span><?= $fetch_orders['number']; ?></span></p>
      <p>адресс : <span><?= $fetch_orders['address']; ?></span></p>
      <p>способ оплаты : <span><?= $fetch_orders['method']; ?></span></p>
      <p>ваши заказы : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>итоговая цена : <span>$<?= $fetch_orders['total_price']; ?>/-</span></p>
      <p>статус платежа : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">заказов еще не было!</p>';
      }
      }
   ?>

   </div>

</section>


</body>
</html>