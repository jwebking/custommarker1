<head>
  <script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>

  <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>
<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='trackingMethod: best; debugUIEnabled:false'>
        <a-assets>
            <a-asset-item id="tree-model" src="https://raw.githubusercontent.com/TimVanMourik/ChristmasAR/master/data/Tree.dae" crossOrigin="anonymous"></a-asset-item>
            <a-asset-item id="text-model" src="https://raw.githubusercontent.com/TimVanMourik/ChristmasAR/master/data/MerryChristmas.dae" crossOrigin="anonymous"></a-asset-item>
       </a-assets>
        <a-marker preset='custom' type='pattern' url='https://raw.githubusercontent.com/TimVanMourik/Armadillo/master/app/armadillo/static/img/patt/pattern-marker.patt'>
<---display first model     --->
<a-entity collada-model="#tree-model"></a-entity>

         </a-marker>
         <a-entity camera></a-entity>
    </a-scene>
</body>