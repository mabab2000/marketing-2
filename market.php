<link href="style.css" rel="stylesheet">
<?php
include('menu.php');
?>
<html>
<head>
<style>
div.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: center;
  width: 430px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
div.desc {
    width:100%;
  padding: auto;
  background-color:green;
  color:white;
  font-size:23px;
  text-align: center;
}

div.head {
    font-weight: bold;
  padding: auto;
  font-size:30px;
  color:blue;
  text-align: center;
}
</style>
</head>
<body>


<section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
        Product Collection
      </h2>

      <p class="max-w-md mx-auto mt-4 text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
        praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
        natus?
      </p>
    </header>

    <?php
include('connection.php');
// Retrieve images from database
$sql = "SELECT * FROM images";
$result = $conn->query($sql);
?>

<ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
  <?php while($row = $result->fetch_assoc()) { ?>
  <li>
    <a href="#" class="block overflow-hidden group">
      <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
      <div class="relative pt-3 bg-white">
        <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
          <?php echo $row['head']; ?>
        </h3>
        <p class="mt-2">
          <span class="sr-only"> Regular Price </span>
          <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
        </p>
        <p>
          <?php echo $row['description']; ?>
        </p>
      </div>
    </a>
  </li>
  <?php } ?>
</ul>

  </div>
</section>
</body>
</html>
