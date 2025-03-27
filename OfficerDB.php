<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Agri Help Line Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        h2 {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
        form {
            background: #ffffff4e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            color: #28a745;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 20px;
            font-weight: bold;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background: #ad137f;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="./AdminDB.php">Administrator</a>
        <a href="./OfficerDB.php">Agriculture Officer</a>
        <a href="./FarmerDB.php">Farmer</a>
        <a href="./StudentDB.php">Student</a>
        <a href="./GeneralDB.php">General User</a>
    </div>

    <div class="content">
        <h2>Agri Help Line Dashboard</h2>
        <div class="container">
            <h1>Agriculture Officer Task Form</h1>
            <form action="">
                <fieldset>
                    <legend>Basic Soil Analysis</legend>
                    <div class="form-group">
                        <label for="region">Region</label>
                        <input type="text" id="region" name="region" required>
                    </div>
                    <div class="form-group">
                        <label for="soil-type">Soil Type</label>
                        <input type="text" id="soil-type" name="soil_type" required>
                    </div>
                    <div class="form-group">
                        <label for="ph-level">pH Level</label>
                        <input type="number" id="ph-level" name="ph_level" step="0.1" required>
                    </div>
                    <div class="form-group">
                        <label for="nutrients">Nutrients</label>
                        <textarea id="nutrients" name="nutrients" rows="4" required></textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Fertilizer Recommendations</legend>
                    <div class="form-group">
                        <label for="fertilizer-type">Fertilizer Type</label>
                        <input type="text" id="fertilizer-type" name="fertilizer_type" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity (kg/acre)</label>
                        <input type="number" id="quantity" name="quantity" required>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Crop Suggestions</legend>
                    <div class="form-group">
                        <label for="crop">Crop/Herb/Vegetable</label>
                        <input type="text" id="crop" name="crop" required>
                    </div>
                    <div class="form-group">
                        <label for="season">Season</label>
                        <input type="text" id="season" name="season" required>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Online Queries</legend>
                    <div class="form-group">
                        <label for="query">User Query</label>
                        <textarea id="query" name="query" rows="4" required></textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Training Schedule</legend>
                    <div class="form-group">
                        <label for="training-title">Training Title</label>
                        <input type="text" id="training-title" name="training_title" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" required>
                    </div>
                </fieldset>
                <center><button type="submit">Submit</button></center>
            </form>
        </div>
    </div>

</body>
</html>
