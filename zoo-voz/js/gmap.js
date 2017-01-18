

function googleMap() {
var latlng = new google.maps.LatLng(35.6431323,139.75588419999997);/* 座標 */
var myOptions = {
zoom: 16, /*拡大比率*/
center: latlng,
scrollwheel: false ,
mapTypeControlOptions: { mapTypeIds: ['style', google.maps.MapTypeId.ROADMAP] }
};
var map = new google.maps.Map(document.getElementById('map1'), myOptions);/*アイコン設定*/
var icon = new google.maps.MarkerImage('http://www.groovoost.com/wp-content/themes/groovoost/images/pin.png',/*画像url*/
new google.maps.Size(74,82),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
<<<<<<< HEAD
title: 'Groovoost Inc.',/*タイトル*/
=======
title: 'kuruTon+',/*タイトル*/
>>>>>>> 0d2f802675c860a6a84fe59f2bb6320c792a2a3b
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);
var styleOptions = [
{
"stylers": [
<<<<<<< HEAD
{ "hue": '#a3b1bb' }
]
}
];
var styledMapOptions = { name: 'Groovoost Inc.' }/*地図右上のタイトル*/
=======
{ "hue": '#57ADDE' }
]
}
];
var styledMapOptions = { name: 'kuruTon+' }/*地図右上のタイトル*/
>>>>>>> 0d2f802675c860a6a84fe59f2bb6320c792a2a3b
var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
map.mapTypes.set('style', sampleType);
map.setMapTypeId('style');
};
google.maps.event.addDomListener(window, 'load', function() {
googleMap();
});
