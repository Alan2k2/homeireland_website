
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One-Sided Price Range Slider</title>
    <style>
        /* Styling for the range input */
        input[type="range"] {
            -webkit-appearance: none;
            width: 100%;
            height: 1px;
            background: white;
            border-radius: 5px;
            outline: none;
            margin: 5px 0;
        }

        /* Styling for the slider thumb */
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 10px;
            height:10px;
            margin: 0 17px;
            background: #007bff;
            border-radius: 50%;
            cursor: pointer;
        }

        /* Styling for the slider track */
        input[type="range"]::-webkit-slider-runnable-track {
            width: 100%;
            height: 2px;
            cursor: pointer;
            background: #9595C3;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <label for="priceRange">Price Range:</label>
        <input type="range" class="priceRange1" id="priceRange" min="0" max="100" value="50">
        <input type="range" class="priceRange2" id="priceRange" min="0" max="100" value="50">

    <p>Selected 1 Price: <span class="selectedPrice1" id="selectedPrice">$50</span></p>
    <p>Selected 2 Price: <span class="selectedPrice2" id="selectedPrice">$50</span></p>

    <script>
        // JavaScript to update the selected price value
        const priceRange1 = document.getElementsByClassName("priceRange1");
        const selectedPrice1 = document.getElementsByClassName("selectedPrice1");
        const priceRange2 = document.getElementsByClassName("priceRange2");
        const selectedPrice2 = document.getElementsByClassName("selectedPrice2");
        priceRange1.addEventListener("input", () => {
            console.log('dfg');
            selectedPrice1.textContent = "$" + priceRange1.value;
        });
                priceRange2.addEventListener("input", () => {
            selectedPrice2.textContent = "$" + priceRange2.value;
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function () {
            $(".priceRange1").on("input", function () {
                
                var selectedPrice1 = "$" + $(this).val();
                $(".selectedPrice1").text(selectedPrice1);
            });
             $(".priceRange2").on("input", function () {
                
                var selectedPrice2 = "$" + $(this).val();
                $(".selectedPrice2").text(selectedPrice2);
            });           
        });
</script>
</body>
</html>