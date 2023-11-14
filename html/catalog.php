<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web-site for practice</title>
    <link rel="stylesheet" href="../css/catalog.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
    />
  </head>
  <body>
    <header>
      <img class="logo" src="../img/logo.png" alt="Logo" />
      <nav>
        <div class="nav">
          <a href="../html/catalog.php">каталог</a>
          <a href="../index.html">главная</a>
          <a href="../html/contacts.html">контакты</a>
        </div>
      </nav>
      <div class="container">
        <picture class="cont-picture">
          <img src="../img/image 1.png" alt="image" />
        </picture>
        <div class="text-block">
          <h1>
            <span
              >Свежие продукты<br />
              в вашем холодильнике</span
            >
          </h1>
          <h3>
            Заказывай натуральные продукты в<br />
            один клик и наполни жизнь пользой<br />
            и качеством
          </h3>
        </div>
      </div>
    </header>
    <main>
      <section>
        <article class="one">
          <h1 id="article1" style="transition: 0.2s">Каталог</h1>
          <h2 id="article1" style="transition: 0.2s">
            Свежее пополнение магазина
          </h2>
          <div class="grid-reasons">
          <?php
                $mysqli=new mysqli("localhost", "root",  "", "products") or die ('Я не могу подключиться к базе данных, так как: ' . mysql_error());
                $query = "SELECT `name`, `img`, `description` FROM `products_bd` WHERE `product_id` = 1";
                $result=$mysqli->query($query);
                while($row=$result->fetch_assoc()){ 
                echo '<div class="grid-1">
                      <img src="../img/'.$row['img'].'" alt="Photo" />
                      <p class="onesp">
                        <span>'.$row['name'].'</span><br />'.$row['description'].'<br />
                        <button>Заказать</button>
                      </p>
                    </div>';
                }
                ?>
          </div>
        </article>
      </section>
      <section>
        <article class="one">
          <h2 id="article1" style="transition: 0.2s">
            Каталог свежих продуктов
          </h2>
          <h1 id="article1" style="transition: 0.2s; color: #000000">
            Выбирайте свежие фрукты и овощи по доступным ценам
          </h1>
          <h3 id="article1" style="transition: 0.2s">Хлеб</h3>
          <div class="grid-reasons-2">
          <?php
                $mysqli=new mysqli("localhost", "root",  "", "products") or die ('Я не могу подключиться к базе данных, так как: ' . mysql_error());
                $query = "SELECT `name`, `img`, `description` FROM `products_bd` WHERE `product_id` = 2";
                $result=$mysqli->query($query);
                while($row=$result->fetch_assoc()){ 
                echo '<div class="grid-2">
                      <img src="../img/'.$row['img'].'" alt="Photo" />
                      <h3>'.$row['name'].'</h3>
                      <button>Заказать</button>
                      </div>';
                }
                ?>
          </div>
        </article>
      </section>
      <section>
        <article class="one">
          <h3 id="article1" style="transition: 0.2s">Фрукты и овощи</h3>
          <div class="grid-reasons-2">
          <?php
                $mysqli=new mysqli("localhost", "root",  "", "products") or die ('Я не могу подключиться к базе данных, так как: ' . mysql_error());
                $query = "SELECT `name`, `img`, `description` FROM `products_bd` WHERE `product_id` = 3";
                $result=$mysqli->query($query);
                while($row=$result->fetch_assoc()){ 
                echo '<div class="grid-2">
                      <img src="../img/'.$row['img'].'" alt="Photo" />
                      <h3>'.$row['name'].'</h3>
                      <span class="onesp">'.$row['description'].'</span>
                      <button>Заказать</button>
                      </div>';
                }
                ?>
          </div>
        </article>
      </section>
      <section>
        <article class="one">
          <h3 id="article1" style="transition: 0.2s">Молочная продукция</h3>
          <div class="grid-reasons-2">
          <?php
                $mysqli=new mysqli("localhost", "root",  "", "products") or die ('Я не могу подключиться к базе данных, так как: ' . mysql_error());
                $query = "SELECT `name`, `img`, `description` FROM `products_bd` WHERE `product_id` = 4";
                $result=$mysqli->query($query);
                while($row=$result->fetch_assoc()){ 
                echo '<div class="grid-2">
                      <img src="../img/'.$row['img'].'" alt="Photo" />
                      <h3>'.$row['name'].'</h3>
                      <span class="onesp">'.$row['description'].'</span>
                      <button>Заказать</button>
                      </div>';
                }
                ?>
          </div>
        </article>
      </section>
    </main>
    <footer>
      <div class="footer-flex">
        <div>
          <div class="pic-flex">
            <img src="../img/logo.png" alt="logo" />
          </div>
          <div class="p-p-p">
            <span class="p-p">
              Свежие овощи и фрукты с доставкой<br />
              Работаем по всей России
            </span>
          </div>
        </div>
        <div class="refs">
          <ol>
            <li>
              <a href="../html/catalog.php">Каталог</a>
            </li>
            <li>
              <a href="../index.html">Главная</a>
            </li>
            <li>
              <a href="../html/contacts.html">Контакты</a>
            </li>
          </ol>
          <div>
            <p class="number">+7 800-555-35-35</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
