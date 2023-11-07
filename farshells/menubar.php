<!-- Nav tabs -->
<ul class="nav nav-tabs justify-content-center menu-li" id="navId" role="tablist">
    <li class="nav-item ">
        <a href="#tab1Id" class="nav-link " data-bs-toggle="tab" aria-current="page">News</a>
    </li>
    <li class="nav-item ">
        <select name="" id="">
            <?php 
   $config = require "config.php";
   $db = new database($config);
   $result =$db->query("SELECT * FROM teams")->get();
   foreach ($result as $row) {
       ?>
   <option ><?= $row['team_name'] ?></option>
   
   <?php } ?>
</select>
<a href="#tab1Id" id="drop" class="nav-link " data-bs-toggle="tab" aria-current="page">Teams</a>
    </li>
 
   
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Tables</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link" data-bs-toggle="tab">League/cup</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link" data-bs-toggle="tab">Fixtures</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link" data-bs-toggle="tab">Results</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link" data-bs-toggle="tab">Transfer</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link" data-bs-toggle="tab">Watch</a>
    </li>
</ul>

