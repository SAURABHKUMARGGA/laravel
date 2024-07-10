<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <style>
        #counter {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        #counter button {
            width: 30px;
            height: 30px;
            font-size: 20px;
            margin: 0 10px;
        }
        #counter span {
            font-size: 20px;
            width: 30px;
            text-align: center;
        }
    </style>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="counter">
    <button id="decrement">-</button>
    <span id="count">0</span>
    <button id="increment">+</button>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countElement = document.getElementById('count');
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');

        let count = 0;

        incrementButton.addEventListener('click', function() {
            count++;
            countElement.textContent = count;
        });

        decrementButton.addEventListener('click', function() {
            count--;
            countElement.textContent = count;
        });
    });
</script>
</body>
</html>