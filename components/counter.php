<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Number Counting Animation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <header class="counter-heading">
            <h1>Number Counting Animation</h1>
        </header>
        <div class="counters">
HTML;

$counterItems = [
    [
        "icon" => "👨‍👩‍👧‍👧",
        "count" => "5000",
        "text" => "Events"
    ],
    [
        "icon" => "💼",
        "count" => "200",
        "text" => "Artists"
    ],
    [
        "icon" => "👨‍👧‍👧",
        "count" => "50",
        "text" => "Countries"
    ]
];

foreach ($counterItems as $item) {
    echo <<<HTML
            <div class="counter-wrapper">
                <!-- <span class="counter-icon">$item[icon]</span> -->
                <div class="counter-info">
                    <h1 class="counter" data-count="$item[count]">0</h1>
                    <p>$item[text]</p>
                </div>
            </div>
HTML;
}

echo <<<HTML
        </div>
    </div>

    <script>

        const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {
            let initial_count = 0;
            const final_count = counter.dataset.count;

            let counting = setInterval(updateCounting, 1);

            function updateCounting() {
                if (initial_count < 1000) {
                    initial_count += 1;
                    counter.innerText = initial_count;
                }

                if (initial_count >= 1000) {
                    initial_count += 100;
                    counter.innerText = (initial_count / 1000).toFixed(1) + '+';
                }

                if (initial_count >= 10000) {
                    initial_count += 5000;
                }

                if (initial_count >= 1000000) {
                    initial_count += 500000;
                    counter.innerText = (initial_count / 1000000).toFixed(1) + '+';
                }

                if (initial_count >= final_count) {
                    clearInterval(counting);
                }
            }
        })

    </script>
</body>

</html>
HTML;
