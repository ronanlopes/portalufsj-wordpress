// Início do código de Aumentar/ Diminuir a letra
 
var tagAlvo = new Array('p'); //pega todas as tags p//
 
// Especificando os possíveis tamanhos de fontes, poderia ser: x-small, small...
var tamanhos = new Array('12px','15px','17px','20px','22px' );
var tamanhoInicial = 0;
 
function mudaTamanho( idAlvo1,idAlvo2,idAlvo3,idAlvo4,acao ){
  if (!document.getElementById) return
  var selecionados = null,tamanho = tamanhoInicial,i,j,tagsAlvo;
  tamanho += acao;
  if ( tamanho < 0 ) tamanho = 0;
  if ( tamanho > 4 ) tamanho = 4;
  tamanhoInicial = tamanho;
  if ( !( selecionados = document.getElementById( idAlvo1 ) ) ) selecionados = document.getElementsByTagName( idAlvo1 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
  if ( !( selecionados = document.getElementById( idAlvo2 ) ) ) selecionados = document.getElementsByTagName( idAlvo2 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
   if ( !( selecionados = document.getElementById( idAlvo3 ) ) ) selecionados = document.getElementsByTagName( idAlvo3 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
  if ( !( selecionados = document.getElementById( idAlvo4 ) ) ) selecionados = document.getElementsByTagName( idAlvo4 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
}
// Fim do código de Aumentar/ Diminuir a letra 



// Início do código de Aumentar/ Diminuir a letra
 
var tagAlvo = new Array('p'); //pega todas as tags p//
 
// Especificando os possíveis tamanhos de fontes, poderia ser: x-small, small...
var tamanhos = new Array('12px','14px','16px','18px');
var tamanhoInicial = 0;
 
function mudaTamanhoint( idAlvo1,idAlvo2,idAlvo3,idAlvo4,idAlvo5,acao ){
  if (!document.getElementById) return
  var selecionados = null,tamanho = tamanhoInicial,i,j,tagsAlvo;
  tamanho += acao;
  if ( tamanho < 0 ) tamanho = 0;
  if ( tamanho > 5 ) tamanho = 5;
  tamanhoInicial = tamanho;
  if ( !( selecionados = document.getElementById( idAlvo1 ) ) ) selecionados = document.getElementsByTagName( idAlvo1 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
  if ( !( selecionados = document.getElementById( idAlvo2 ) ) ) selecionados = document.getElementsByTagName( idAlvo2 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
   if ( !( selecionados = document.getElementById( idAlvo3 ) ) ) selecionados = document.getElementsByTagName( idAlvo3 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
  if ( !( selecionados = document.getElementById( idAlvo4 ) ) ) selecionados = document.getElementsByTagName( idAlvo4 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
  
   if ( !( selecionados = document.getElementById( idAlvo5 ) ) ) selecionados = document.getElementsByTagName( idAlvo5 )[ 0 ];
  
  selecionados.style.fontSize = tamanhos[ tamanho ];
  
  for ( i = 0; i < tagAlvo.length; i++ ){
    tagsAlvo = selecionados.getElementsByTagName( tagAlvo[ i ] );
    for ( j = 0; j < tagsAlvo.length; j++ ) tagsAlvo[ j ].style.fontSize = tamanhos[ tamanho ];
  }
}
// Fim do código de Aumentar/ Diminuir a letra 
