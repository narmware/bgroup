<div class="left-sidebar">
    <h4>Services</h4>
    <ul id="mymenu">
        <li <?php if($title=="Pine Wood") echo "class='active'";?>><a href="Pine-Wood.php">Pine Wood</a>
        </li>
        <li <?php if($title=="Rubber Wood") echo "class='active'";?>><a href="Rubber-Wood.php">Rubber Wood</a>
        </li>
        <li <?php if($title=="Plyood Suppliers") echo "class='active'";?>><a href="Plywood.php">Plywood Suppliers</a>
        </li>
        <li <?php if($title=="Board Suppliers") echo "class='active'";?>><a href="Board-Suppliers.php">Board Suppliers</a>
        </li>
    </ul>
</div>
<style>
#mymenu .active{
    /*background:#29B6F6;
    color:white !important;*/
}
#mymenu .active a{
    color:black !important;
    /*margin-left:10%;*/
}

#mymenu a:hover{
    color:black !important;
    /*margin-left:10%;*/
    background:linear-gradient(-90deg,#29B6F6,white);
    width:100%;
}

/*
.single-description h1{
background:linear-gradient(90deg,#29B6F6,white);
}
*/
/*
.single-description h1{
    background-image: linear-gradient(to right, #8e9eab 0%, #eef2f3 51%, #8e9eab 100%);
}

.single-description h1:hover {  background-position: right center; }

/*
.single-description h2:before {
	content:'';
	position: absolute;
    color:black !important;
	left: 0px;
	width: 0px;
	height: 25px;
    margin-top:-5px;
	background:linear-gradient(-90deg,#29B6F6,white);/* rgba(41,182,246,0.4);*/
	/*border-radius: 5px;
	transition: all 2s ease;
} 
.single-description h2:hover:before {
	width: 55%;
    color:white !important;

}
</style>

