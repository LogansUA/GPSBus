<div id="leftNavbar" class="col-md-2 bootstrap-admin-col-left adaptiveCol-MD-2">
    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
        <li class=""><a href="profile.php"><i class="glyphicon glyphicon-chevron-right"></i>Профіль</a></li>
        <li class=""><a href="change_password.php"><i class="glyphicon glyphicon-chevron-right"></i>Зміна паролю</a></li>
    </ul>
</div>

<script>
    function changeActive() {
        var liList = document.getElementById("leftNavbar").getElementsByTagName("li");
        var page = window.location.pathname.split("/").pop();

        if (page == "profile.php") {
            liList[0].className = "active";
        } else {
            liList[1].className = "active";
        }
    }
    window.onload = changeActive();
</script>