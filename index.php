<html>
    <head>
   </head>
<body style="background-image: url('My_Heart_in_the_Water.png');background-position: top;background-repeat: no-repeat;padding:0px;">
    <div style="display:flex;flex-direction:row;justify-content:center;">
        <divmeter data-height="200px" data-time="2014-01-11T01:12:59.371Z" data-type="static" id="divmeter-1672461300374" class="divmeter divmeter-complete"><img id="i0" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"><img id="in" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/11.jpg" style="height: 200px;"><img id="i1" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"><img id="i2" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"><img id="i3" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"><img id="i4" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"><img id="i5" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"><img id="i6" src="https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg" style="height: 200px;"></divmeter>
    </div>
    <!-- <div style="display:flex;flex-direction:row;justify-content:flex-end;">
        <img src="Poppin_Western_Journey_Saaya.png"  width="50%">
    </div> -->
</body>
        <script>
            let images = ['https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/0.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/1.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/2.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/3.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/4.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/5.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/6.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/7.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/8.jpg', 
                            'https://raw.github.com/dogancelik/divergence-meter/gh-pages/img/9.jpg'];

            let index = 0;
            const imgElement = document.querySelector('#i0');
            const imgElement1 = document.querySelector('#i1');
            const imgElement2 = document.querySelector('#i2');
            const imgElement3 = document.querySelector('#i3');
            const imgElement4 = document.querySelector('#i4');
            const imgElement5 = document.querySelector('#i5');
            const imgElement6 = document.querySelector('#i6');

            function change() {
            <?php
            date_default_timezone_set('Asia/Jakarta');
            // Get the current date and time
            $currentDateTime = new DateTime();

            // Define the specific date you want to calculate the interval to
            $specificDate = new DateTime('2024-04-10 08:00:00'); // Change this to your specific date and time

            // Calculate the interval
            $interval = $currentDateTime->diff($specificDate);

            // Extract days, hours, minutes, and seconds
            $days = $interval->format('%a');
            $hours = $interval->format('%h');
            $minutes = $interval->format('%i');
            $minutes = (int)($minutes/10);
            $seconds = $interval->format('%s');
                $length = 4;
                // Calculate the number of days in the given interval
                $days = abs($days);
            
                // Convert the number of days to a string
                $daysStr = strval($days);
            
                // Calculate the number of zeros to pad
                $padLength = max(0, $length - strlen($daysStr));
            
                // Create an array of zeros to pad
                $zeroArray = array_fill(0, $padLength, 0);
            
                // Split the string into an array of digits
                $digitArray = str_split($daysStr);
            
                // Convert the string digits back to integers
                $digitArray = array_map('intval', $digitArray);
            
                // Combine the zero padding and digit array
                $r = array_merge($zeroArray, $digitArray);
                // var_dump($r);
            ?>
            var min = 0;
            var max = images.length-1;
            var r = <?= $r[0]; ?>;
            var r1 = <?= $r[1]; ?>;
            var r2 = <?= $r[2]; ?>;
            var r3 = <?= $r[3]; ?>;
            var r4 = <?= $hours[0]; ?>;
            var r5 = <?= $hours[1]; ?>;
            var r6 = <?= $minutes ?>;
                // console.log('imgElement',imgElement,r,r1,r2,r3,r4,r5,r6);
                imgElement.src = images[r];
                imgElement1.src = images[r1];
                imgElement2.src = images[r2];
                imgElement3.src = images[r3];
                imgElement4.src = images[r4];
                imgElement5.src = images[r5];
                imgElement6.src = images[r6];
                localStorage.setItem('i0',r);
                localStorage.setItem('i1',r1);
                localStorage.setItem('i2',r2);
                localStorage.setItem('i3',r3);
                localStorage.setItem('i4',r4);
                localStorage.setItem('i5',r5);
                localStorage.setItem('i6',r6);
            }
            change();

            window.onload = function () {
                setInterval(change, 600000);
            };
        </script>
</html>