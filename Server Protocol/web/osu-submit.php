

<?php
	/*
		The osu! 2007 Client Sends Normal GET Requests to osu.ppy.sh/web
		To Submit Scores it submits a GET Request to osu.ppy.sh/web/osu-submit.php
		It Also sends a Binary Replay through a POST Request
		The Parameters sent are listed Here:
		
		$_GET["score"] //Look Definition Below
		$_GET["pass"] //Users Password
		
		$_POST["score"] //Replay
		
		score definition (Seperated by ':'):
		
		1. MD5 Hash Of .osu File	//Thats how you can distingluish maps
		2. Username					//Player Username
		3. Submit Hash 				//To Combat duplicate scores? Not sure for what it can be used
		4. Hit300 Count
		5. Hit100 Count
		6. Hit50  Count
		7. HitGeki Count
		8. HitKatu Count
		9. HitMiss Count
		10. Score					//Is an Int32
		11. Max Combo
		12. Perfect					//Boolean, can be True or False
		13. Grade					//F, S, A, B, C , D  (F is Failed)
		14. Mods					NF returns 1, EZ returns 2 and EZNF returns 3
		15. Pass					//Did the user pass or fail, (Is a Boolean aswell, can be true of false)
		
	*/
	

	//Insert Your Code Here!!
?>
