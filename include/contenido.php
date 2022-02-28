<?php
function contenido()
{
  print "<main>";
    print "<form action=procesa.php method=post>";
print "Nombre y Apellidos: <input type=text name=nombre ><br>";    
print "";   
print "<br>";      
print "Equipo favorito: <select name=equipo>
<option value=mercedes>Mercedes</option>
  <option value=redbull>RedBull</option>
  <option value=astonmartin>Aston Martin</option>
  <option value=haas>Haas</option>
  <option value=alpine>Alpine</option>
  <option value=williams>Williams</option>
  <option value=alfaromeo>Alfa Romeo</option>
  <option value=ferrari>Ferrari</option>
  <option value=mclaren>Mclaren</option>
  <option value=alphatauri>Alpha Tauri</option>
";        
print "";        
print "";    
print "";    
print "</select><br><br>";   
print "";   
print "Cuales son tus pilotos favoritos?<br>";    
print "
<input type=checkbox name=checkArr[] value=alonso>Alonso<br>
<input type=checkbox name=checkArr[] value=vettel>Vettel<br>
<input type=checkbox name=checkArr[] value=hamilton>Hamilton<br>
<input type=checkbox name=checkArr[] value=vers>Verstappen<br>
<input type=checkbox name=checkArr[] value=leclerc>Leclerc<br><br>
";      
print "Eliga un tema: <br>
<input type=radio name=tema value=azul>Azul<br>
<input type=radio name=tema value=plata>Plata<br>
<input type=radio name=tema value=rojo>Rojo<br>
<br>
";     
print "";     
print "";     
print "";   
print "";   
print "";   
print "";   
print "";       
print "";       
print "";       
print "";   
print "";   
print "Escribe tu opinión! <textarea name=textarea rows=10 cols=50></textarea><br><br>";      
print "";       
print "";       
print "";   
print "Que te ha parecida la página? <input type=number name=puntuacion value= min=0 max=5 required><br>";   
print "<br>";   
print "";   
print "";   
print "Cuantos grandes premios has visto? <input type=number name=premios value= min=0 max=22><br>";   
print "<br>";   
print "   <input type=submit value=Enviar>";
  
print "</form>";   
print "</main>";
}
?>