<?php require_once("./array.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="number">
        <?php $score0 = new Score; ?>
        <div class="row" name="a">
            <div class="dot" name="a1"><?= $score0[0][0]?></div>
            <div class="dot" name="a2"><?= $score0[0][1]?></div>
            <div class="dot" name="a3"><?= $score0[0][2]?></div>
            <div class="dot" name="a4"><?= $score0[0][3]?></div>
            <div class="dot" name="a5"><?= $score0[0][4]?></div>
            <div class="dot" name="a6"><?= $score0[0][5]?></div>
            <div class="dot" name="a7"><?= $score0[0][6]?></div>
            <div class="dot" name="a8"><?= $score0[0][7]?></div>
        </div>
        <!-- <div class="row" name="b">
            <div class="dot" name="b1"></div>
            <div class="dot" name="b2"></div>
            <div class="dot" name="b3"></div>
            <div class="dot" name="b4"></div>
            <div class="dot" name="b5"></div>
            <div class="dot" name="b6"></div>
            <div class="dot" name="b7"></div>
            <div class="dot" name="b8"></div>
        </div>
        <div class="row" name="c">
            <div class="dot" name="c1"></div>
            <div class="dot" name="c2"></div>
            <div class="dot" name="c3"></div>
            <div class="dot" name="c4"></div>
            <div class="dot" name="c5"></div>
            <div class="dot" name="c6"></div>
            <div class="dot" name="c7"></div>
            <div class="dot" name="c8"></div>
        </div>
        <div class="row" name="d">
            <div class="dot" name="d1"></div>
            <div class="dot" name="d2"></div>
            <div class="dot" name="d3"></div>
            <div class="dot" name="d4"></div>
            <div class="dot" name="d5"></div>
            <div class="dot" name="d6"></div>
            <div class="dot" name="d7"></div>
            <div class="dot" name="d8"></div>
        </div>
        <div class="row" name="e">
            <div class="dot" name="e1"></div>
            <div class="dot" name="e2"></div>
            <div class="dot" name="e3"></div>
            <div class="dot" name="e4"></div>
            <div class="dot" name="e5"></div>
            <div class="dot" name="e6"></div>
            <div class="dot" name="e7"></div>
            <div class="dot" name="e8"></div>
        </div>
        <div class="row" name="f">
            <div class="dot" name="f1"></div>
            <div class="dot" name="f2"></div>
            <div class="dot" name="f3"></div>
            <div class="dot" name="f4"></div>
            <div class="dot" name="f5"></div>
            <div class="dot" name="f6"></div>
            <div class="dot" name="f7"></div>
            <div class="dot" name="f8"></div>
        </div>
        <div class="row" name="g">
            <div class="dot" name="g1"></div>
            <div class="dot" name="g2"></div>
            <div class="dot" name="g3"></div>
            <div class="dot" name="g4"></div>
            <div class="dot" name="g5"></div>
            <div class="dot" name="g6"></div>
            <div class="dot" name="g7"></div>
            <div class="dot" name="g8"></div>
        </div>
        <div class="row" name="h">
            <div class="dot" name="h1"></div>
            <div class="dot" name="h2"></div>
            <div class="dot" name="h3"></div>
            <div class="dot" name="h4"></div>
            <div class="dot" name="h5"></div>
            <div class="dot" name="h6"></div>
            <div class="dot" name="h7"></div>
            <div class="dot" name="h8"></div>
        </div>
        <div class="row" name="i">
            <div class="dot" name="i1"></div>
            <div class="dot" name="i2"></div>
            <div class="dot" name="i3"></div>
            <div class="dot" name="i4"></div>
            <div class="dot" name="i5"></div>
            <div class="dot" name="i6"></div>
            <div class="dot" name="i7"></div>
            <div class="dot" name="i8"></div>
        </div>
        <div class="row" name="j">
            <div class="dot" name="j1"></div>
            <div class="dot" name="j2"></div>
            <div class="dot" name="j3"></div>
            <div class="dot" name="j4"></div>
            <div class="dot" name="j5"></div>
            <div class="dot" name="j6"></div>
            <div class="dot" name="j7"></div>
            <div class="dot" name="j8"></div>
        </div>
        <div class="row" name="k">
            <div class="dot" name="k1"></div>
            <div class="dot" name="k2"></div>
            <div class="dot" name="k3"></div>
            <div class="dot" name="k4"></div>
            <div class="dot" name="k5"></div>
            <div class="dot" name="k6"></div>
            <div class="dot" name="k7"></div>
            <div class="dot" name="k8"></div>
        </div>
        <div class="row" name="l">
            <div class="dot" name="l1"></div>
            <div class="dot" name="l2"></div>
            <div class="dot" name="l3"></div>
            <div class="dot" name="l4"></div>
            <div class="dot" name="l5"></div>
            <div class="dot" name="l6"></div>
            <div class="dot" name="l7"></div>
            <div class="dot" name="l8"></div>
        </div>
        <div class="row" name="m">
            <div class="dot" name="m1"></div>
            <div class="dot" name="m2"></div>
            <div class="dot" name="m3"></div>
            <div class="dot" name="m4"></div>
            <div class="dot" name="m5"></div>
            <div class="dot" name="m6"></div>
            <div class="dot" name="m7"></div>
            <div class="dot" name="m8"></div>
        </div>
        <div class="row" name="n">
            <div class="dot" name="n1"></div>
            <div class="dot" name="n2"></div>
            <div class="dot" name="n3"></div>
            <div class="dot" name="n4"></div>
            <div class="dot" name="n5"></div>
            <div class="dot" name="n6"></div>
            <div class="dot" name="n7"></div>
            <div class="dot" name="n8"></div>
        </div>
        <div class="row" name="o">
            <div class="dot" name="o1"></div>
            <div class="dot" name="o2"></div>
            <div class="dot" name="o3"></div>
            <div class="dot" name="o4"></div>
            <div class="dot" name="o5"></div>
            <div class="dot" name="o6"></div>
            <div class="dot" name="o7"></div>
            <div class="dot" name="o8"></div>
        </div>
        <div class="row" name="p">
            <div class="dot" name="p1"></div>
            <div class="dot" name="p2"></div>
            <div class="dot" name="p3"></div>
            <div class="dot" name="p4"></div>
            <div class="dot" name="p5"></div>
            <div class="dot" name="p6"></div>
            <div class="dot" name="p7"></div>
            <div class="dot" name="p8"></div>
        </div> -->
    </div>
</body>
</html>

</div>	