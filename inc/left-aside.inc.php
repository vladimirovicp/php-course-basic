<div class="col-md-3 col-sm-3 ">
    <h4>Категория</h4>

    <?php
        if (empty($categories)){
            echo 'элементов нет';
        } else{
            echo "<div class=\"row\">";
            foreach($categories as $value){
                echo "<a class=\"dropdown-item\" href=\"#\">$value</a>";
            }
            echo "</div>";
        }
    ?>

    <hr>

    <h4>Цена</h4>

    <div class="row">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">от</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> &nbsp;
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">&nbsp;

            <button type="button" class="btn btn-success">Найти</button>
        </div>
    </div>
    <hr>


    <h4>Издательство</h4>

    <div class="row">
        <?php
            if (empty($publisher)){
            echo 'элементов нет';
            } else{
                echo "<ul class=\"list-group col-md-12 col-sm-12\">";
                foreach ($publisher as $key => $value){
                    $id = ++$key;
                    echo "<li class=\"list-group-item\">";
                        echo "<input type=\"checkbox\" id=\"exampleCheck{$id}\"> ";
                        echo "<label class=\"form-check-label\" for=\"exampleCheck{$id}\">$value</label>";
                    echo "</li>";
                }
                echo "<li class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success\">Найти</button></li>";
                echo "</ul>";
            }
        ?>
    </div>
    <hr>

</div>