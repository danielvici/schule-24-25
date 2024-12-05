<div class="border-dick">
    <div class="m">
        <h1 class="">Lotto Generator</h1>
        <p class="ts-2">Ihre Glückszahlen lauten:</p>
    </div>
    <style>
        .border {
            border: 1px solid black;
        }
        .border-dick {
            border: 3px solid black;
        }
        .m{
            margin: 10px;
        }
        .p {
            padding: 25px;
        }
        .tc {
            text-align: center;
        }
        .tb {
            font-weight: bold;
        }
        .ts{
            font-size: 30;
        }
        .ts-2{
            font-size: 27;
        }
        .gz {
            background-image: linear-gradient(to right, darkgrey, white);
            width: 100px;
            height: 100px;
            line-height: 100px;
        }
        .ib {
            display: inline-flex;
        }
        .r-kreis{
            border-radius: 100%;
        }
        .hw {
            
        }
    </style>
    <div class="m tc ib">
        <?php
        for ($i = 0; $i < 6; $i++) {
            $zahl = rand(1,49);
            echo "<a class='tb ts m gz r-kreis '>$zahl</a>";
        }
        ?>
    </div>
</div>