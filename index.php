<head>
  <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
  <script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v4.1.2/dist/aframe-extras.min.js"></script>
  <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>
<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='trackingMethod: best; debugUIEnabled:false'>
        <a-assets>
            <a-asset-item id="tree-model" src="https://raw.githubusercontent.com/jwebking/custommarker1/master/Unity2Skfb.gltf" crossOrigin="anonymous"></a-asset-item>
            <a-asset-item id="tree-bin" src="/assets/Unity2Skfb.bin" crossOrigin="anonymous"></a-asset-item>
            <a-asset-item id="text-model" src="https://raw.githubusercontent.com/TimVanMourik/ChristmasAR/master/data/MerryChristmas.dae" crossOrigin="anonymous"></a-asset-item>
       </a-assets>
        <a-marker preset='custom' type='pattern' url='https://raw.githubusercontent.com/TimVanMourik/Armadillo/master/app/armadillo/static/img/patt/pattern-marker.patt'>


<a-gltf-model src="#tree-model" scale="0.1 0.1 0.1" animation-mixer="loop: repeat">
</a-gltf-model>

<!-- <a-entity gltf-model="#tree-model"></a-entity> -->

         </a-marker>
         <a-entity camera></a-entity>
    </a-scene>
</body>