<div class="col-md-3 col-sm-3 ">
    <h4>Категория</h4>

    <?php
    if (empty($categories)){
        echo 'элементов нет';
    } else{?>
        <div class="row">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    <?php
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
            } else{?>
            <ul class="list-group col-md-12 col-sm-12">
                <li class="list-group-item">
                    <input type="checkbox"   id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Первое</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck2">Второе</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="exampleCheck3">
                    <label class="form-check-label" for="exampleCheck3">Третье</label>
                </li>
                <li class="list-group-item">
                    <button type="button" class="btn btn-success">Найти</button>
                </li>
            </ul>
        <?php
            }
        ?>


    </div>
    <hr>


</div>