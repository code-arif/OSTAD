<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather report</title>

    <link rel="stylesheet" href="{{ asset("style.css") }}">

</head>

<body>
    <div id="weather-container">
        <h2>Weather Report</h2>
        <label for="towns">Select a Town:</label>
        <select id="towns">
            <option value="london">London</option>
            <option value="new-york">New York</option>
            <option value="tokyo">Tokyo</option>
            <!-- Add more towns as needed -->
        </select>
        <h4>Location: {{ $location }}</h4>
        <h5>Temparature: {{ $currentTemp }}</h5>
        <h5>Weather Condition: {{ $currentCondition }}</h5>
        <button onclick="getWeather()">Get Weather</button>
        <div id="result"></div>
    </div>
</body>

</html>
