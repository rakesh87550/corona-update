<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encoders Unlimited</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="images/icon.png"/>

    <style>
        *{
            margin:0;
            padding:0;
            font-family:montserat;
            font-size:18px;
        }
        .image_respons{
	        max-width:100%;
	        height:auto;
        }
        .table{
	        max-width:100%;
	        height:auto;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
		<img src="images/header.jpg" class="image_respons" alt="Encoders Unlimited">
	</div><br>

        <div class="container">
            <div class="row">
        <table class="table table-bordered table-hover">
        <thead>
        <tr style="background-color:#ff006a;color:#fff;">
            <th>LAST CORONA UPDATE</th>
			<th>STATES</th>
            <th>CONFIRM CASE</th>
            <th>ACTIVE</th>
            <th>RECOVERED</th>
            <th>DEATHS</th>
        </tr>
        </thead>
        <tbody>
            <!-- fetch data from API -->
            <?php
            // URL
                $url = "https://api.covid19india.org/data.json";
                $result = file_get_contents($url);
                $data = json_decode($result,true);
                //echo "<pre>";
                //print_r($data);
                $state_count = count($data['statewise']);

                $i = 0;
                while($i < $state_count)
                {
            ?>

        <tr>
            <!-- show data from API -->
            <td><?php echo $data['statewise'][$i]['lastupdatedtime'] ?></td>
            <td><?php echo $data['statewise'][$i]['state'] ?></td>
            <td><?php echo $data['statewise'][$i]['confirmed'] ?></td>
            <td><?php echo $data['statewise'][$i]['active'] ?></td>
            <td><?php echo $data['statewise'][$i]['recovered'] ?></td>
            <td><?php echo $data['statewise'][$i]['deaths'] ?></td>
        </tr>

            <?php
                $i++;
            }
            ?>
        
        </tbody>
    </table>
            </div>
        </div>



    <div class="container-fluid">
		<img src="images/footer.jpg" class="image_respons" alt="Encoders Unlimited">
	</div>
    
</body>
</html>