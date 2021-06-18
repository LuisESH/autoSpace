function  iniciarMap ( ) {
    var  coord  =  { lat : - 34.5956145  , lng : - 58.4431949 } ;
    var  map  =  nuevo  google . mapas . Map ( document . GetElementById ( 'mapa' ) , {
      zoom : 10 ,
      centro : coord
    } ) ;
    var  marker  =  new  google . mapas . Marcador ( {
      posición : coord ,
      mapa : mapa
    } ) ;
