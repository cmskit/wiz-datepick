<?php
$config = <<<EOD
{
	"info":  {
		"name": "Datepicker",
		"description": {
			"en": "Datepicker",
			"de": "Datepicker"
		},
		"io":  [
			"date-string",
			"date-string"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "GPL",
		"credits":  [
			"[jQuery-UI](http://jqueryui.com) MIT / GPL licenses"
		]
	},
	"system":  {
		"version": 0.8,
		"inputs":  [
			"VARCHAR"
		],
		"include":  ["wizard:datepick"],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
