<?php
if(isset($_GET["term"])){
    $term=$_GET["term"];
}
else{
    exit("Search Something");
}
if(isset($_GET["type"])){
    $type=$_GET["type"];
}
else{
    $type="sites";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>CADMUS CRAWLER</title>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/drukaatieburti" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <div class="wrapper">

        <div class="header">

            <div class="headerContent">
                <div class="logoContainer">
                    <a href="index.php">
                        <img src="assets/images/logo.png">
                    </a>

                </div>
                <div class="searchContainer">
                    
                        <form action="search.php" method="GET">
                            <div class="searchBarContainer">
                        <input type="text" name="term" class="searchBox">
                        <button>
                            CRAWL
                        </button>
                            </div>
                        </form>
                </div>
            </div>
            <div class="tabsContainer">
            <ul class="tabList">
                 <li class="<?php echo $type == 'sites' ? 'active' : ''?>">
                <a href='<?php echo"search.php?term=$term&type=sites";?>'>
                    Sites
                     </a>
                </li>
                <li class="<?php echo $type == 'images' ? 'active' : ''?>">
                <a href='<?php echo"search.php?term=$term&type=images";?>'>
                    Images
                     </a>
                </li>
                </ul>
            </div>
            


        </div>




    </div>

</body>

</html>
