<?php session_start();
if(!(isset($_SESSION['user']))){
  header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JsNet México | For engineers, by engineers</title>
</head>
<body>
   <header class="menuContainer"></header>
   <div class="imgOne">
    <div class="textOne">
      Lorem ipsum.
    </div>
    <div class="textTwo">
      Lorem dolor
    </div>
    <div class="textThree">
      Lorem ipsum dolor
    </div>
  </div>
  <section class="blue">
    <h1>Lorem ipsum dolor sit amet.</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Voluptatem nostrum, maxime ullam reprehenderit exercitationem, suscipit quam quo, adipisci dolores quod nesciunt. 
      Qui quod eaque obcaecati quas modi. Repudiandae modi amet, provident ea ducimus, quae eius omnis, 
      ullam sit suscipit temporibus? Itaque quia perspiciatis culpa rem corrupti voluptatem sint corporis debitis quasi, 
      laudantium, natus ad optio recusandae harum vero saepe. Incidunt blanditiis sunt dolore sed quam praesentium deserunt 
      imilique suscipit nam dignissimos maiores libero impedit enim deleniti veniam iure provident, odio consectetur iste, 
      eos iusto. Porro assumenda, molestias sequi excepturi consectetur dicta iusto reiciendis error cupiditate deserunt 
      dolorem, eveniet minus! Nemo!
    </p>
  </section>
  <div class="imgTwo">
    <div class="textFour">
      Lorem ipsum dolor sit.
    </div>
  </div>
  <section class="blue">
    <h2>Lorem ipsum dolor sit amet.</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae sit, eveniet illo iste perspiciatis, nisi corporis dolor nulla quibusdam perferendis ipsam. Asperiores vero aliquid perferendis voluptatem eveniet hic omnis quod?
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Hic adipisci quod quo similique voluptate pariatur quae sequi, totam doloremque facere. Nisi repellat, beatae explicabo minus quisquam quae. Suscipit, mollitia cupiditate?
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, at officiis. Nulla aliquid recusandae voluptatem quisquam fugit iste animi 
      mollitia natus commodi in quo dolorem eum rem pariatur, veniam adipisci?
    </p>
  </section>
  <div class="imgThree"></div>
  <section class="blue">
    <h3>Lorem ipsum dolor sit amet.</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto libero tempora eum ab voluptatum excepturi unde, repellat rerum at ducimus modi officiis itaque est nesciunt ullam dolores vitae sapiente obcaecati atque neque soluta placeat, nulla eos doloremque! Debitis exercitationem dolor, rem et modi autem tempora. Culpa minus iure impedit enim sit? Sunt delectus molestias recusandae reprehenderit a harum eius tempore fugiat dolore at optio blanditiis similique id minima ipsum cumque, praesentium veritatis. In libero id perspiciatis aperiam consequatur numquam, quis debitis voluptatum pariatur quod ipsum voluptates sequi, 
      eligendi totam aliquid harum nemo. Voluptatum odio neque voluptas accusamus quod dolore magni!</p>
  </section>
  <div class="imgFour"></div>
  <footer class="footer"></footer>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbarIndex.html');
      $('.footer').load('../resource/footer.html');
    });
  </script>
</body>
</html>