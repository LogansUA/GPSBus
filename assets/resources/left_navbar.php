<div id="left-navbar" class="list-group">
    <a href="profile.php" class="list-group-item">Профіль</a>
    <a href="change_password.php" class="list-group-item">Зміна паролю</a>
    <a href="change_email.php" class="list-group-item">Зміна імейлу</a>
</div>

<script>
    function changeActive() {
        var liList = document.getElementById('left-navbar').getElementsByTagName('a');
        var page = window.location.pathname.split('/').pop();

        if (page == "profile.php") {
            liList[0].className += " active";
        } else if (page == "change_password.php") {
            liList[1].className += " active";
        } else if (page == "change_email.php") {
            liList[2].className += " active";
        }
    }
    window.onload = changeActive();
</script>
