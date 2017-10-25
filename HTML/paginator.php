<div class="row">
    <div class="navbar text-center ">
        <div id="page">
            <ul class="navbar-fixed-bottom paginator">
                <button id="page2left"  class="btn btn-sm btn-danger" ><<</button>
                <button id="page1left"  class="btn btn-sm btn-danger" ><</button>
                <button id="page1reigth"  class="btn btn-sm btn-danger" >></button>
                <button id="page2reigth"  class="btn btn-sm btn-danger" >>></button>
            </ul>
        </div>
    </div>
</div>

<!--два файла один лежит в /data.php-->
<!--второй файл лежит в /HTML/paginator.php-->
<!--между ними не передаются $_GET запросы.-->
<!--Если подключить data.php  realpath(__DIR__).'/data.php' в файл /HTML/paginator.php то запросы проходят.-->
<!--Но отображаются echo json_encode($response); Как быть?-->
