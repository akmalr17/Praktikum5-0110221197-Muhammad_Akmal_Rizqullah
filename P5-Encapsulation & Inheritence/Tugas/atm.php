<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    />
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="m-3 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WEB02</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Review PHP
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PHP5 OOP
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <hr>

    <?php
        require_once('class_ac.php');
        $ac1 = new accountbank('C001', 6000000, 'Ahmad');
        $ac2 = new accountbank('C002', 5350000, 'Budi');
        $ac3 = new accountbank('C003', 2500000, 'Kurniawan');
    ?>

    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            Saldo Awal
        </h3>
        <table class="table table-bordered border-light table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No. Account</th>
                <th scope="col">Nama Costumer</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <?php
                        echo $ac1->norek;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac1->costumer;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac1->saldo;
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <?php
                        echo $ac2->norek;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac2->costumer;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac2->saldo;
                    ?>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <?php
                        echo $ac3->norek;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac3->costumer;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac3->saldo;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    </div>

    <div class="m-5 border border-secondary p-3 rounded">
        <h5>
            kegiatan di bank:
        </h5>
        <br>
        <p>
            - Ahmad menabing sebanyak 1 juta.
        </p>
        <p>
            - Ahmad transfer uang ke Kurniawan sebanyak 1,5 juta.
        </p>
        <p>
            - Ahmad transfer uang ke Budi sebanyak 500 ribu.
        </p>
        <p>
            - Budi tarik tunai sebanyak 2,5 juta.
        </p>
    </div>

    <?php
        //simulasi kode program
        $ac1->deposit(1000000);
        $ac1->transfer($ac3, 1500000);
        $ac1->transfer($ac2, 500000);
        $ac2->withdraw(2500000);
    ?>

    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            Saldo Akhir
        </h3>
        <table class="table table-bordered border-light table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No. Account</th>
                <th scope="col">Nama Costumer</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <?php
                        echo $ac1->norek;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac1->costumer;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac1->saldo;
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <?php
                        echo $ac2->norek;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac2->costumer;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac2->saldo;
                    ?>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <?php
                        echo $ac3->norek;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac3->costumer;
                    ?>
                </td>
                <td>
                    <?php
                        echo $ac3->saldo;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>