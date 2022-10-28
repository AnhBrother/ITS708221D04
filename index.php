<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course for free | Online Courses &amp; Certificates From Top Institutions</title>
    <link rel="icon" href="./components/icons/image.png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/indexNavbar.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/slidestyle.css">

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" style="margin-left: 5%">
        <a href="./"><img class="coursera" src="./components/icons/download.svg" alt="" height="30px" weight="50px"></a>
        <ul class="nav navbar-nav navbar-right" style="margin-left: 60%">
    
<?php
    if (!isset($_SESSION["name"])) {
?>
        <li><a href="./signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
<?php
    }
    else {
        $name = $_SESSION["name"];
?>
        <li><a href="./logout_index.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
        <li>
            <div id="user_div_data">
                <img src="./components/icons/profilepage.png" alt="">
                <h4> &nbsp;&nbsp;<?php echo $name;?></h4>             
            </div>
        </li>
<?php 
    } 
?>
        </ul>
    </div>
</nav>

<div id="main">
    <div id="first">
        <div id="left">
            <h1>LEARN OVER THE WORLD</h1>
            <p style=" font-size:30px;width:600px; margin:20px 0px">
                Start, switch, or advance your career with more than 5,000 courses, Professional Certificates, and degrees from world-class universities and companies.
            </p>
<?php
    if(!$_SESSION) {
?>              
                <div>
                    <a href="./signup.php"><button id="join" id="join_for_free">Join for free</button></a>
                </div>
<?php 
    }
?>           
        </div>
        <div id="right">
            <img src="./components/icons/indexx.jpg" alt="" weight="300px" height="300px">
        </div>
    </div>

    <div id="second">              
        <h1>We collaborate with 200+ leading universities and companies</h1>
        <div>
            <a href="https://www.arizona.edu/" target = "_blank"><img src="./components/university/Arizona.png" alt="Arizoan" height="50px" weight="50px"></a>
            <a href="https://www.emory.edu/home/index.html" target = "_blank"><img src="./components/university/Emory.png" alt="Emory" height="50px" weight="50px"></a>
            <a href="https://en.huji.ac.il/en" target = "_blank"><img src="./components/university/Hebrew.png" alt="Hebrew" height="50px" weight="50px"></a>
            <a href="https://www.london.ac.uk" target = "_blank"><img src="./components/university/London.png" alt="London" height="50px" weight="50px"></a>
            <a href="https://www.mcmaster.ca" target = "_blank"><img src="./components/university/McMaster.png" alt="McMaster" height="50px" weight="50px"></a>
            <a href="https://www.nus.edu.sg" target = "_blank"><img src="./components/university/Singapore.jpg" alt="Singapore" height="50px" weight="80px"></a>
            <a href="https://www.sydney.edu.au" target = "_blank"><img src="./components/university/sydney.png" alt="Sydney" height="50px" weight="50px"></a>
            <a href="https://research.ibm.com/university/" target = "_blank"><img src="./components/icons/ibm.png" alt="IBM"></a>
        </div>
    </div>

    <div id="innermainfromthird">
        <div style="margin-top: 50px;padding-left: 180px;"class="third" id="four">
        <h1 style="font-size: 40pt; font-weight: bold;">FIND YOUR COURSE</h1>
        <h4 style="font-size: 30pt">100% free course from top universities in the world</h4>
    </div>
</br>

<?php 
if(isset($_POST)) 
{
    $sql = "select * from course";
    require_once "config_course.php";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
?>
        <section class="product"> 
            <button class="pre-btn"><img src="./components/icons/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="./components/icons/arrow.png" alt=""></button>
        <div class="product-container" id="secondslide">
<?php 
        while ($row = mysqli_fetch_assoc($result)) {
?>
            <div class="product-card">
                <a href="./coursePage.php?image=<?php echo $row["Image"];?>"><img src='./components/course/<?php echo $row["Image"];?>' height="250px" width = "300px"></a>
                <h3 style="text-align:center; font-size: 20px; max-width:300px;"><?php echo $row["Name"];?></h3>
            </div>
<?php
        }
    }
}
?>
        </div>
        </section>

        <div class = "dots" style = "margin-top: -20px;">
            <div style="background-color: gray;" id="1dots"></div>
            <div id="2dots"></div>
            <div id="3dots"></div>
        </div>

    <div id="nine">
        <div class="third" id="nine" style=" padding-left: 200px;">     
            <h1 style="font-size: 50px;font-weight: bold;"><center>FOUNDERS</center></h1>
        </div>

        <section class="product"> 
            <button class="pre-btn"><img src="./components/icons/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="./components/icons/arrow.png" alt=""></button>

            <div class="product-container">
                <div class="product-card">
                    <img src="./components/icons/SyAnh.png" alt="syanh" height="250px" weight="250px">
                    <h3 style="font-size: 30px;margin: 5px auto; font-weight: 600;color: #311dc5; line-height: 50px;">Nguyễn Sỹ Anh</h3>
                    <h5 style="font-size: 26px;margin: 10px auto;"><b>Page Admin</b></h5>
                    <hr style="width:100px; color:#2a73cc; margin-left: 130px;">
                    <p style="font-size: 30px;width:350px;">"Phân chia công việc<br>Phụ trách page Admin<br>Tổng hợp bài nhóm"</p>
                </div>

                <div class="product-card">
                    <img src="./components/icons/du.jpg" alt="phuongdu" height="250px" weight="250px">
                    <h4 style="font-size: 30px;margin: 5px auto; font-weight: 600;color: #311dc5; line-height: 50px;">Châu H. Phương Du</h4>
                    <h5 style="font-size: 26px;margin: 10px auto;"><b>Back-end</b></h5>
                    <hr style="width:100px; color:#2a73cc; margin-left: 130px;">
                    <p style="font-size: 30px;width:350px;">"Phụ trách lập trình Backend phần Events"</p>   
                </div>

                <div class="product-card">
                    <img src="./components/icons/My.jpg" alt="tramy" height="250px" weight="250px">
                    <h3 style="font-size: 30px;margin: 5px auto; font-weight: 600;color: #311dc5; line-height: 50px;">Nguyễn T. Trà My</h3>
                    <h5 style="font-size: 26px;margin: 10px auto;"><b>Back-end</b></h5>
                    <hr style="width:100px; color:#2a73cc; margin-left: 130px;">
                    <p style="font-size: 30px;width:350px;">"Phụ trách Backend phần truy vấn dữ liệu"</p>
                </div>

                <div style=" background-color: none;"class="product-card">
                    <img src="./components/icons/ngoc.jpg" alt="hoangngoc" height="250px" weight="250px">
                    <h3 style="font-size: 30px;margin: 5px auto; font-weight: 600;color: #311dc5; line-height: 50px;">Tô Hoàng Ngọc</h3>
                    <h5 style="font-size: 26px;margin: 10px auto;"><b>Front-end</b></h5>
                    <hr style="width:100px; color:#2a73cc; margin-left: 130px;">
                    <p style="font-size: 30px;width:350px;">"Phụ trách thiết kế <br>giao diện"</p>
                </div>

                <div style=" background-color: none;"class="product-card">
                    <img src="./components/icons/nhung.jpg" alt="ngocnhung" height="250px" weight="250px">
                    <h3 style="font-size: 30px;margin: 5px auto; font-weight: 600;color: #311dc5; line-height: 50px;">Phạm T. Ngọc Nhung</h3>
                    <h5 style="font-size: 26px;margin: 10px auto;"><b>Database</b></h5>
                    <hr style="width:100px; color:#2a73cc; margin-left: 130px;">
                    <p style="font-size: 30px;width:350px;">"Phụ trách thiết kế cơ sở dữ liệu"</p>
                </div>
            
            </div>
        </section>
    </div>

</body>
</html>

<script>
document.getElementById("1dots").style.opacity=1
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;
    let count=1;
    nxtBtn[i].addEventListener('click', () => {
       
        console.log(count)
        if(count==1){
            document.getElementById("1dots").style.opacity=.3
            document.getElementById("2dots").style.opacity=1
        }
        
        if(count==2){
            document.getElementById("2dots").style.opacity=.3
            document.getElementById("3dots").style.opacity=1
        }
         
        count++
        item.scrollLeft += containerWidth;
       
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
        count--
        if(count==1){
            document.getElementById("2dots").style.opacity=.3
            document.getElementById("1dots").style.opacity=1
        }
        
        if(count==2){
            document.getElementById("3dots").style.opacity=.3
            document.getElementById("2dots").style.opacity=1
        }
     
        console.log(count)
    })
})
</script>
