<head>
<style>
.container1 {
  position: relative;
  text-align: center;
  color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 450px;
  background: #fff;
  border-radius:15px;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
#fakebox-search {
    cursor: pointer;
    margin-inline-end: 16px;
    padding: 22px 12px 0;
    position: absolute;
    right: 0;
	bottom: 33px;
    width: 21px;
}
</style>
</head>
<?php include("header-1.php"); ?>
    <div class="container container1 mt-2">
      <div class="row">
        <div class="col-12">
             <h1 class="text-center">Lorem ipsum dolor sit amet, consectetur.</h1>
            <img src="images/banner-img.jpg" alt="" class="img-fluid">
			
			 <div class="centered">
			 <form class="example" action="/action_page.php">
			  <input type="text" placeholder="Search.." name="search"><i id="fakebox-search"  class="fa fa-search text-primary"></i>
			</form>
			  </div>
        </div>
      </div>
    </div>
    <hr>
  <?php include("footer.php"); ?>  