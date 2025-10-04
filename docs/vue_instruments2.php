<?php
	//mise en place de la bannière d’entête; la page  vue_entete.php fait appel à une feuille de style
	include "vue/vue_entete.php";
?>

<HTML>

 <body>

<section>
	<H1>Les instruments de musique proposés  </H1><BR/>       
  
 	< TABLE >	
		<?php
		
		foreach ($lesInstruments as $unInstrument)
		{	
	$wid =  $unInstrument['id'];
	$wintitule  =  $unInstrument['intitule'];

echo "<TR>
<TD>$wintitule</TD>
<TD><A href ='index.php?section= coursAssociesInstruments&idInst=$wid'> 
voir les cours </A></TD>
</TR>";
		}
			
		?>
	
	</TABLE>

</section>

</HTML> 
