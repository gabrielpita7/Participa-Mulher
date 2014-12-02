<?php 
// Função para Selecionar a imagem do orgão responsável pela politca pública
function imagem_ministerio($imagem){
  switch ($imagem) {
      case 'MINISTÉRIO DA JUSTIÇA':
          echo "<img src='assets/images/ministerios/min-justica.png' alt='Imagem do Ministério da Justiça'>";
      break;

      case 'MINISTÉRIO DA SAÚDE':
          echo "<img src='assets/images/ministerios/min-saude.jpg' alt='Imagem do Ministério da Saúde'>";
      break;

      case 'MINISTÉRIO DO ESPORTE':
          echo "<img src='assets/images/ministerios/min-esporte.png' alt='Imagem do Ministério do Esporte'>";
      break;

      case 'MINISTÉRIO DA EDUCAÇÃO':
          echo "<img src='assets/images/ministerios/min-educacao.png' alt='Imagem do Ministério da Educação'>";
      break;
      
      case 'MINISTÉRIO DA CULTURA':
          echo "<img src='assets/images/ministerios/min-cultura.png' alt='Imagem do Ministério da Cultura'>";
      break;
      
      case 'MINISTÉRIO DA JUSTIÇA':
          echo "<img src='assets/images/ministerios/min-justica.png' alt='Imagem do Ministério da Justiça'>";
      break;
           
      case 'MINISTÉRIO DA JUSTIÇA':
          echo "<img src='assets/images/ministerios/min-justica.png' alt='Imagem do Ministério da Justiça'>";
      break;

      default:
          echo "<img src='assets/images/ministerios/min-saude.jpg' alt='Imagem do Ministério da Saúde'>";
          break;
  }
};

?>