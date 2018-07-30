  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
<link rel="shortcut icon" href="/img/logo_title.png" type="image/png">
<link rel="shortcut icon" type="image/png" href="www.getdemocode.com/img/logo_title.png" />
  
 
    <title>Get Demo Code</title>
  </head>
  
  <body data-spy="scroll" data-target="#navbar">
 
   <?php include 'header.php';?>
 <div class="jumbotron">
  <h1 class="display-4">Web App Developer!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
</div>
    
<section class="content container-fluid">
              <div class="row">
                    <div class="col-md-3" id="first">
                    
                     
                      <div class="col-md-10 link">
                   <a href="Reaction_Game.html">Reaction Game</a>
                  
      <a href="Quiz_Game.html">Code of Quiz Game</a>
      <a href="Clock.html">Clock</a>
        <a  href="Quiz.html">Quiz</a>
       <!-- <a  href="From%20Scrach/From_Scrach.html">Website From Scrach</a>-->
       <!--<a  href="Grid/Grid.html">Website with Grid</a> -->
    
      <a  href="Resume.html">Resume</a>
                       </div> 
                        
                        </div>
                  
                    <div class="col-md-7" id="second">
                  
                    <figure>
                      <figcaption><h4 style="text-align:center;">Datatables Jquery Plugin with Bootstrap Php and MySql</h4></figcaption><br>
                      <h5>Step: 1</h5>
                       <p>Create Database with name <strong>getdemocode</strong> then create table with name <strong>datatable_demo</strong> having columns <strong>Name,Address,Gender,Designation,Age</strong></p>
                       <h5>Step: 2</h5>
						<p>Insert Some values:<br></p>
                        <pre class="prettyprint linenums:1"><code class="prettyprint">INSERT INTO `datatable_demo`(`id`, `name`, `address`, `gender`, `designation`, `age`)
                  VALUES (1,'san','Mumbai','M','Web Dev',21),
                         (2,'ban','Pune','M','Web Design',23),
                         (3,'dan','Banglore','M','Web Dev',25),
                         (4,'saan','Trichy','M','Graphic Design',27),
                         (5,'sasdn','Pune','F','Web Dev',31),
                         (6,'sand','Mumbai','M','Web Design',21),
                         (7,'sane','Pune','M','Web Dev',51),
                         (8,'sans','Banglore','M','Graphic Design',43),
                         (9,'asan','Mumbai','M','Web Dev',31),
                         (10,'adsan','Pune','F','Web Design',42),
                         (11,'gdsan','Mumbai','M','Graphic Design',36),
                         (12,'rsan','Banglore','M','Web Dev',24),
                         (13,'dsan','Mumbai','M','Web Design',22),
                         (14,'nsan','Pune','M','Web Dev',26),
                         (15,'fssan','Mumbai','F','Graphic Design',21),
                         (16,'wsan','Banglore','M','Web Design',28),
                         (17,'qsan','Mumbai','M','Web Dev',30)</code></pre>
                          
                      
                      <br>
                       <h5>Step: 3</h5>
                      <pre class="prettyprint linenums:1"><code class="prettyprint">&lt;?php  
 $connect = mysqli_connect("localhost", "root", "", "getdemocode");  
 $query ="SELECT * FROM datatable_demo ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?&gt;  
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;

 &lt;meta http-equiv="content-type" content="text/html;charset=UTF-8" /&gt;
 &lt;head&gt;  
  &lt;title&gt;Datatables Jquery Plugin with Bootstrap Php and MySql  &lt;/title&gt;  
  &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"&gt;
  &lt;/script&gt;  
  &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/
  3.3.6/css/bootstrap.min.css" /&gt;  
  &lt;script src="https://cdn.datatables.net/1.10.12/js/
  jquery.dataTables.min.js"&gt;&lt;/script&gt;  
  &lt;script src="https://cdn.datatables.net/1.10.12/js/
  dataTables.bootstrap.min.js"&gt;&lt;/script&gt;            
  &lt;link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/
  dataTables.bootstrap.min.css" /&gt;  
  &lt;/head&gt;  
  &lt;body&gt;  
    &lt;div class="container"&gt;  
     &lt;h3 align="center"&gt;Datatables Jquery Plugin with Php MySql and Bootstrap&lt;/h3&gt;  
           &lt;br /&gt;  
                &lt;div class="table-responsive"&gt;  
                 &lt;table id="employee_data" class="table table-striped table-bordered"&gt;  
                          &lt;thead&gt;  
                               &lt;tr&gt;  
                                    &lt;td&gt;Name&lt;/td&gt;  
                                    &lt;td&gt;Address&lt;/td&gt;  
                                    &lt;td&gt;Gender&lt;/td&gt;  
                                    &lt;td&gt;Designation&lt;/td&gt;  
                                    &lt;td&gt;Age&lt;/td&gt;  
                               &lt;/tr&gt;  
                          &lt;/thead&gt;  
                          &lt;?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               &lt;tr&gt;  
                                    &lt;td&gt;'.$row["name"].'&lt;/td&gt;  
                                    &lt;td&gt;'.$row["address"].'&lt;/td&gt;  
                                    &lt;td&gt;'.$row["gender"].'&lt;/td&gt;  
                                    &lt;td&gt;'.$row["designation"].'&lt;/td&gt;  
                                    &lt;td&gt;'.$row["age"].'&lt;/td&gt;  
                               &lt;/tr&gt;  
                               ';  
                          }  
                          ?&gt;  
                     &lt;/table&gt;  
                &lt;/div&gt;  
           &lt;/div&gt;
           
               
      &lt;/body&gt;  
 &lt;/html&gt;  
 &lt;script&gt;  
 $(document).ready(function(){ 
   
      $('#employee_data').DataTable({ "pagingType": "full_numbers"
                                    
                                    });  
 });  
 &lt;/script&gt;        </code></pre>
                    </figure>
                    </div>
                    <div class="col-sm-2" id="third">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic enim veniam vel, doloribus dicta, et natus. Eveniet eum velit nobis, ex reprehenderit aliquid sunt aperiam, ratione libero rerum, iure? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora aspernatur recusandae quos dolores sint, alias minima deleniti ipsum ad ullam porro necessitatibus repellat consectetur corrupti sed reiciendis facere totam officia quae libero sunt. Quibusdam distinctio sed, aliquid voluptatibus aspernatur doloribus.
                    </div>
              </div>
              
              
</section>          
  
 
  <div class="container-fluid">     
 <form>
   
  <div class="form-group">
    <div style="position:relative;" class="move" id="labels">
    <label style="position:relative;" for="locationTextField"><span class="label label-default">Location</span><br>
</label>
        <input id="locationTextField"class="form-control" type="text" size="50">
   </div>    
        <script>
            function init() {
                var input = document.getElementById('locationTextField');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
 
            google.maps.event.addDomListener(window, 'load', init);
        </script>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree terms and conditions</label>
  </div>
  <button type="login" class="btn btn-primary">Login</button>
  <button type="login" class="btn btn-primary">Sign UP</button>
   </div>
   
</form>
    </div>
    <div class="container-fluid">    
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/Dack1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Future</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/Dack2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Infinite Loop</h5>
      <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
                <img class="card-img-top" src="img/Dack3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Mediation</h5>
                  <p class="card-text"> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
   </div>   
   
    </div>
  <?php include 'footer.php';?>    
 
    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'script.php';?>
         <script type="text/javascript">
          /* $(document).ready(function(){
    $(window).scroll(function(){
       
        var top=$(document).scrollTop();
        
        if(top>0)
            {
                $(".move").fadeIn(300);
            }*/
           document.getElementById("labels").onclick=function()
         {  
             document.getElementById("labels").style.backgroundColor="red";
           }
    $(document).ready(function(){
    $(window).scroll(function(){
       
        var top=$(document).scrollTop();
        
        if(top>0)
            {
            $(".move").fadeIn(500);
                
            }
    }
                     
    }
      </script>
      
  </body>
</html>
