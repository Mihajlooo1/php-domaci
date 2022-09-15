<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuća</title>
    <!-- h1 font -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">

    <!-- bootstrap js -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="../css/odeca.css">
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> -->
    <!-- javascript -->
    <script src="../javascript/obuca1.js"></script>

</head>
<body>
    <?php 
    include '../php/connection.php';
    //include '../classes/klasa_obuca.php'; 
    ?>

    <div id="gore-levo">
        <img src="../images/gore levo.png" alt="">
    </div>
    <div id="gore-desno">
        <img src="../images/gore levo.png" alt="">
    </div>
    <h1><span>O</span>buća</h1>
    <p id="citat">“Ferguson je od mene tražio da obujem kopačke sa velikim kramponima, ali ja sam se bolje osećao u niskim. Složio sam se da ću promeniti kopačke, ali ih nisam promenio. U utakmici protiv Čelsija okliznuo sam se pred golom i upropastio priliku. Nakon toga sam odjurio u svlačionicu da promenim kopačke, ali Ferguson me je uhvatio. Zgrabio je kopačke i bacio ih. To je bila moja poslednja utakmica za Junajted.” Diego Forlan</p>
    <div class="slike">
        <div class="row">
            <div class="col-3">
                <img src="../images/odeca/kopacke1.jpg" alt="">
            </div>
            <div class="col-1">
                <p>Kopačke Nike 
                </p>
            </div>
            <div class="col-3">
                <img src="../images/odeca/kopacke2.jpg" alt="">
            </div>
            <div class="col-1"><p>Kopačke Adidas</p></div>
            <div class="col-3">
                <img src="../images/odeca/kopacke3.jpg" alt="">
            </div> 
            <div class="col-1"><p>Kopačke Umbro</p></div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="../images/odeca/patike1.png" alt="">
            </div>
            <div class="col-1"><p>Patike Nike</p></div>
            <div class="col-3">
                <img src="../images/odeca/patike2.png" alt="">
            </div>
            <div class="col-1"><p>Patike Adidas</p></div>
            <div class="col-3">
                <img src="../images/odeca/patike3.png" alt="">
            </div>
            <div class="col-1"><p>Patike Umbro</p></div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="../images/odeca/papuce1.jpg" alt="">
            </div>
            <div class="col-1"><p>Papuče Nike</p></div>
            <div class="col-3">
                <img src="../images/odeca/papuce2.jpg" alt="">
            </div>
            <div class="col-1"><p>Papuče Adidas</p></div>
            <div class="col-3">
                <img src="../images/odeca/papuce3.jpg" alt="">
            </div>
            <div class="col-1"><p>Papuče Puma</p></div>
        </div>
    </div>

    <div class="recenzije">
        <h3>Recenzije:</h3>
        <form class="forma" id="rec_forma" action="" method="post">
            <div class="ime">
            <input type="text" name="ime_obuca" id="ime_obuca" placeholder="Korisničko ime">
            </div>
            <br>
            <div class="komentar">
            <input type="text" name="komentar_obuca" id="komentar_obuca" placeholder="Komentar">
            </div>
            <br>
            <p>Ocena - Opšti utisak od 1 do 5:</p>
            <br>
            <select name="ocena_obuca" id="ocena_obuca">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
              <button onClick="history.go(0);" type="submit" class="btn btn-dark" name="posalji_obuca" id="posalji_obuca">Postavi recenziju</button>
        </form>
    <hr>
    <button type="button" class="btn btn-dark" name="prikazi_sve" id="prikazi_sve">Prikaži sve recenzije</button>
    <button type="button" class="btn btn-dark" name="prikazi_moje" id="prikazi_moje">Prikaži moje recenzije</button>
</div>

<div class="tabela" id="sakrivena_tabela">
    <table class="table table-striped table-dark" id="tabela">
        <tbody>

        </tbody>
    </table>
</div>

<div class="cont"> 
    <div class="formpost">
        <div class="searchpanel" id="searchpanel" style="display: none;">
            <input type="text" class="searchbox" name="name" id="name">
            <br>
            <input type="submit" class="btn btn-dark" name="searchdata" id="searchdata" value="Pronadji">
        </div>
            <table class="table table-striped table-dark" class="tabel" id="verformid">
            </table>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <label for="">Korisnicko ime:</label>
        <input type="text" id="korisnicko_ime_update" class="form-control">
        <label for="">Komentar:</label>
        <input type="text" id="komentar_update" class="form-control">
        <label for="">Ocena:</label>
        <select name="ocena_update" id="ocena_update" class="form-control" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
      </div>
      <div class="modal-footer">
          <a href="#" id="save" name="save" class="btn btn-primary pull-right">Update</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</body>
</html>