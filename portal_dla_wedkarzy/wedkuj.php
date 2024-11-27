<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <div class="lewy" id="lewy1">
            <h3>Ryby zamieszkujący rzeki</h3>
            <ol>
                <?php
                $con=mysqli_connect("localhost","root","","wedkowanie");
                $sql="SELECT nazwa,lowisko.akwen,lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE ryby.`wystepowanie` LIKE '%rzeki%';";
                $result= mysqli_query($con,$sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row["nazwa"]." pływa w rzece ".$row["akwen"].", ".$row["wojewodztwo"]."<br>";
                    }
                }
                
                ?>
            </ol>
        </div>
        <div class="prawy">
            <img src="pliki1\ryba1.jpg" alt="sum">
            <a href="kwerendy.txt" download="kwerendy.txt"><br>Pobierz kwerendy</a>
        </div>
        <div class="lewy" id="lewy2">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
                <?php
                $sql="SELECT id,nazwa,wystepowanie FROM Ryby WHERE styl_zycia=1";
                $result= mysqli_query($con,$sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><th>".$row["id"]."</th><th>".$row["nazwa"]."</th><th>".$row["wystepowanie"]."</th></tr>";
                    }
                }
                
                ?>
            </table>
        </div>
        
    </main>
    <footer>
        <p>Stronę wykonał: Jakub Jedynak</p>
    </footer>
    
</body>
</html>