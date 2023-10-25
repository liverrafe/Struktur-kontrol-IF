<!DOCTYPE html>
<html>
<head>
    <title>Pilih Hotel</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            background-color: rgb(100, 149, 237);

        }

        .container {
            width: 400px;
            margin: auto;
            margin-top: 50px;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 5px;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<marquee behavior="scroll" direction="left" scrollamount="20" style= "color:	rgb(176, 224, 230); font-size: 50px;" > Pencarian Hotel Sesuai Budget</marquee>
<hr>
    <div class="container">
        <h1>Pilih Hotel</h1>

        <form method="post">
            <label for="kota">Kota Hotel:</label>
            <select name="kota" id="kota">
                <option value="5">Jakarta</option>
                <option value="4">Bandung</option>
                <option value="3">Surabaya</option>
                <option value="2">Bangka</option>
                <option value="1">Samarinda</option>
            </select>

            <label for="budget">Budget:</label>
            <select name="budget" id="budget">
                <option value="mahal">Mahal</option>
                <option value="sedang">Sedang</option>
                <option value="murah">Murah</option>
            </select>
<br> <input type="submit" value="Pilih" style="text-align: center;
               width: 200px;
               height: 50px;
               border-radius: 10px;
               margin-top: 20px;
               color: white;
               background-color: black;
               font-family: arial;
               font-weight: bold;">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $kota = $_POST["kota"];
                $budget = $_POST["budget"];

                $hotel = "";

                if ($kota == "5" && $budget == "mahal") {
                    $hotel = "The Grand Luxury Hotel";
                } elseif ($kota == "4" && $budget == "mahal") {
                    $hotel = "Elegant Suites";
                } elseif ($kota == "3" && $budget == "mahal") {
                    $hotel = "Comfort Inn";
                } elseif ($kota == "5" && $budget == "sedang") {
                    $hotel = "City View Hotel";
                } elseif ($kota == "4" && $budget == "sedang") {
                    $hotel = "Harbor View Hotel";
                } elseif ($kota == "3" && $budget == "sedang") {
                    $hotel = "Hillside Inn";
                } elseif ($kota == "5" && $budget == "murah") {
                    $hotel = "Budget Stay Inn";
                } elseif ($kota == "4" && $budget == "murah") {
                    $hotel = "Econo Lodge";
                } elseif ($kota == "3" && $budget == "murah") {
                    $hotel = "Economy Suites";
                } elseif ($kota == "2" && $budget == "murah") {
                    $hotel = "Novotel Bangka Hotel & Convention Center";
                } elseif ($kota == "2" && $budget == "sedang") {
                    $hotel = "Swiss-Belhotel Pangkalpinang";
                } elseif ($kota == "2" && $budget == "mahal") {
                    $hotel = "Grand Hatika Hotel";
                } else {
                    $hotel = "Tidak ada hotel yang sesuai.";
                }

                echo "<p>Hotel yang sesuai: $hotel</p>";
            }
        ?>
    </div>
    <div style="margin: auto;
     padding-top: 50px;
     display: block;">
          <div style="     width: 200px;
          height: 200px;
          text-align: center;
          display: inline-block;
          float: left;
          padding-left: 30px;
          transition-duration: 0.8s;">
               <img src="ho1.jpg" alt="" style="     width: 140px;
               height: 140px;">
               <h4 style="     font-family: arial;
               font-weight: bold;">Hotel Mahal</h4>
          </div>
          <div style="  width: 200px;
          height: 200px;
          text-align: center;
          display: inline-block;
          padding-left: 170px;
          transition-duration: 0.8s;">
               <img src="ho3.jpg" alt="" style="     width: 140px;
               height: 140px;">
               <h4 style="     font-family:arial;
               font-weight: bold;">Hotel sedang</h4>  
          </div>
          <div style="     width: 200px;
          height: 200px;
          text-align: center;
          display: inline-block;
          padding-left: 200px;
          transition-duration: 0.8s;">
               <img src="ho2.jpeg" alt="" style="     width: 140px;
               height: 140px;">
               <h4 style="     font-family: arial;
               font-weight: bold;">Hotel Murah</h4>
          </div>
          <div style="     width: 200px;
          height: 220px;
          text-align: center;
          display: inline-block;
          padding-left: 200px;
          transition-duration: 0.8s;">
               <img src="ho4.jpeg" alt="" style="     width: 140px;
               height: 140px;">
               <h4 style="     font-family: arial;
               font-weight: bold;">Hotel Mahal</h4>
          </div>
     </div>
     </div>
</body>
</html>
