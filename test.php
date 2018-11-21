<?php
	$json = '
	{"studentDetails": [
		{
			"studentId":"AIC0001",
			"FullName":"John Stark",
			"currentCourse":"Certificate IV in Commercial Cookery",
			"currentAtt":75,
			"OverallAtt":89,
			"currentClass":"ATT - T4/18 - G1 Cookery"
		},
		{
			"studentId":"AIC0002",
			"FullName":"Hyo Hyeon Woo",
			"currentCourse":"Certificate IV in Computer",
			"currentAtt":99,
			"OverallAtt":99,
			"currentClass":"ATT - T4/18 - G1 Computer"
		}
		],
		 "results": [
		 {
		 	"unitCode":"SITHFAB016",
		 	"unitName":"Provide advice on food",
		 	"result":"Competent"
		 },
		 {
		 	"unitCode":"SITHFAB010",
		 	"unitName":"Prepare and serve cocktails",
		 	"result":"Competent"
		 },
		 {
		 "unitCode":"SITHFAB004",
		 "unitName":"Prepare and serve non-alcoholic beverages",
		 "result":"Not yet competent"
		}
		]
	}';

	echo $json;
?>

