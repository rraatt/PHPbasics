<?php
require "blocks/header.php";
if (isset($_SESSION["user"])){
    header('Location: '."index.php");
}
?>
<div class="container">
    <div class="reg-form">

    <h1>Реєстрація</h1>
    <form action="sign_up.php" method="POST">
            <div>
                <input type="text" name="name" id="" placeholder="Ім'я">
            </div>
            <div>
                <input type="text" name="surname" id="" placeholder="Прізвище">
            </div>
            <div>
                <input type="text" name="age" id="" placeholder="Вік">
            </div>
            <div>
                <input type="text" name="email" id="" placeholder="Електронна пошти">
            </div>
        <div>
            <button style="background: #293F14;font-size: 20px;font-weight: bold;
											border-radius: 25px;padding: 10px;color: white; margin-top:5px"
            >Зереєструватися</button>
        </div>
    </form>

</div>
</div>
<?php
require "blocks/footer.php"
?>