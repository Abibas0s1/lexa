
<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">Лопай-попай😋</a>

      <nav class="navbar">
         <a href="home.php">Главная</a>
         <a href="about.php">Описание</a>
         <a href="menu.php">Меню</a>
         <a href="orders.php">Другое</a>
         <a href="contact.php">Контакты</a>
      </nav>

      <div class="icons">
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="profile.php" class="btn">Аккаунт</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">Вести Логин</a>
         </div>
         <p class="account">
            <a href="login.php">Логин</a>
            <a href="register.php">Регистрация</a>
         </p> 
         <?php
            
         ?>
            <p class="name">Логин!</p>
            <a href="login.php" class="btn">Логин</a>
         <?php
       
         ?>
      </div>

   </section>

</header>

